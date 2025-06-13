@php
    use Illuminate\Support\Str;
@endphp

<div>
    <x-input name='Name | Serial Number | Email | Phone' showLabel='false' isLiveSearch='true' />
    
    <ul class="mt-2 overflow-auto max-h-144">
        @forelse($buyers as $buyer)
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
        @empty
            <li class="text-gray-500 italic ml-20">No matching buyers found.</li>
        @endforelse
    </ul>
</div>
