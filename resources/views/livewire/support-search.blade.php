@php
    use Illuminate\Support\Str;
@endphp

<div class=" bg-red-300 h-12/12">
    <x-input name='Name | Serial Number | Email | Phone' showLabel='false' isLiveSearch='true' />
    
    <ul class="mt-2 overflow-auto outline-1 -outline-offset-1 outline-gray-300">
        @foreach($buyers as $buyer)
            <li  
                wire:key="buyer-{{ $buyer->id }}" 
                wire:click="select({{$buyer->id}})"
                class="
                  p-1 mt-0.5 
                 {{ $selectedId === $buyer->id ? ' bg-amber-200 border-accent' : 'bg-white' }}
                ">
                    <b>{{ $buyer->name }}</b>
                    @if(Str::contains(strtolower($buyer->email), strtolower($query)))
                        <p> {{ $buyer->email }} </p>
                    @elseif(Str::contains($buyer->phone, $query))
                        <p> {{ $buyer->phone }} </p>
                    @else
                        <p> {{ $buyer->email ?? $buyer->phone }}</p>
                    @endif
            </li>
        @endforeach
        
        @foreach($offices as $office)
        <li
            wire:click="select({{$office->buyer_id}})"
            class="
                p-1 mt-0.5 
                {{ $selectedId === $office->buyer_id ? ' bg-amber-200 border-accent' : 'bg-white' }}
                ">
                <b>{{ $office->office_name }}</b>
                <p>{{ $office->buyer->name }}</p>
        </li>
        @endforeach

        @foreach($productUnit as $unit)
        <li
            wire:click="select({{$unit->currentOffice?->buyer_id}})"
            class="
                p-1 mt-0.5 
                {{ $selectedId === $unit->currentOffice?->buyer_id ? ' bg-amber-200 border-accent' : 'bg-white' }}
                ">
                <b>{{ $unit->currentOffice?->buyer->name }}</b>
                <p>SN {{$unit->serial_number}}</p>
            </li>
        @endforeach


    </ul>
</div>
