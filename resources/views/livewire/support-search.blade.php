@php
    use Illuminate\Support\Str;
@endphp

<div>
    <x-input name='search | Name | Serial Number | Email | Phone' showLabel='false' isLiveSearch='true' />
    
    <ul class="mt-2">
        @forelse($buyers as $buyer)
            <li wire:key="buyer-{{ $buyer->id }}">
                {{ $buyer->name }} -
                @if(Str::contains(strtolower($buyer->email), strtolower($query)))
                    {{ $buyer->email }}
                @elseif(Str::contains($buyer->phone, $query))
                    {{ $buyer->phone }}
                @else
                    {{ $buyer->email ?? $buyer->phone }}
                @endif
            </li>
        @empty
            <li class="text-gray-500 italic ml-20">No matching buyers found.</li>
        @endforelse
    </ul>
</div>
