@php
    use Illuminate\Support\Str;
@endphp

<div class=" h-full flex flex-col ">
    <x-input 
            name='Name | SN | Email | Phone' 
            showLabel='false' 
            isLiveSearch='true' 
            />

    <ul class="mt-2 flex-1 overflow-y-auto  outline-gray-300 bg-white rounded-outline">
        @foreach($buyers as $buyer)
            @php
                $email = $buyer->primary_email;
                $phone = $buyer->primary_phone;
                $match = Str::contains(strtolower($email ?? ''), strtolower($query)) 
                    || Str::contains($phone ?? '', $query);
            @endphp

            <li  
                wire:key="buyer-{{ $buyer->id }}" 
                wire:click="select({{$buyer->id}})"
                class="
                  p-1 mt-0.5 hover:bg-gray-200
                 {{ $selectedId === $buyer->id ? ' bg-amber-200 border-accent' : 'bg-white' }}
                ">
                    <b>{{ $buyer->name }}</b>

                    @if($match)
                        @if(Str::contains(strtolower($email ?? ''), strtolower($query)))
                            <p>{{ $email }}</p>
                        @elseif(Str::contains($phone ?? '', $query))
                            <p>{{ $phone }}</p>
                        @endif
                    @else
                        <p>{{ $email ?? $phone }}</p>
                    @endif

            </li>
        @endforeach
        
        @foreach($offices as $office)
        <li
            wire:click="select({{$office->buyer_id}})"
            class="
                p-1 mt-0.5 hover:bg-gray-200
                {{ $selectedId === $office->buyer_id ? ' bg-amber-200 border-accent' : 'bg-white' }}
                ">
                <b>{{ $office->office_name }}</b>
                <p>{{ $office->buyer->name }}</p>
        </li>
        @endforeach

        {{-- serial number --}}
        @foreach($productUnit as $unit)
        <li
            wire:click="select({{$unit->currentOffice?->buyer_id}})"
            class="
                p-1 mt-0.5 hover:bg-gray-200
                {{ $selectedId === $unit->currentOffice?->buyer_id ? ' bg-amber-200 border-accent' : 'bg-white' }}
                ">
                <b>{{ $unit->currentOffice?->buyer->name }}</b>
                <p>SN {{$unit->serial_number}}</p>
            </li>
        @endforeach

        {{-- email --}}
        @foreach($emails as $email)
            @php
                $contact = $email->contact;
                $isBuyer = $contact instanceof \App\Models\Buyer;
                $isOffice = $contact instanceof \App\Models\Office;
            @endphp

            <li
                wire:click="{{ $isBuyer ? "select({$contact->id})" : '' }}"
                class="
                    p-1 mt-0.5 hover:bg-gray-200
                    {{ $isBuyer && $selectedId === $contact->id ? ' bg-amber-200 border-accent' : 'bg-white' }}
                    ">
                <b>
                    {{ $isBuyer ? $contact->name : ($isOffice ? $contact->office_name : 'Unknown') }}
                </b>
                <p>{{ $email->email }}</p>
                @if ($isOffice)
                    <p>{{ $contact->buyer->name ?? 'N/A' }}</p>
                @endif
            </li>
        @endforeach
  
        {{-- phone --}}
        @foreach($phone_numbers as $number)
            @php
                $contact = $number->contact;
                $isBuyer = $contact instanceof \App\Models\Buyer;
                $isOffice = $contact instanceof \App\Models\Office;
            @endphp

            <li
                wire:click="{{ $isBuyer ? "select({$contact->id})" : '' }}"
                class="
                    p-1 mt-0.5 hover:bg-gray-200
                    {{ $isBuyer && $selectedId === $contact->id ? ' bg-amber-200 border-accent' : 'bg-white' }}
                    ">
                <b>
                    {{ $isBuyer ? $contact->name : ($isOffice ? $contact->office_name : 'Unknown') }}
                </b>
                <p>{{ $number->phone_number }}</p>
                @if ($isOffice)
                    <p>{{ $contact->buyer->name ?? 'N/A' }}</p>
                @endif
            </li>
        @endforeach

    </ul>
</div>
