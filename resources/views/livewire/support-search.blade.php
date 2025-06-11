<div>
    <x-input name='search | Name | Serial Number | Email | Phone' showLabel='false' isLiveSearch='true' />
    
    <ul class="mt-2">
        @forelse($buyers as $buyer)
            <li wire:key="buyer-{{ $buyer->id }}">Customer: {{ $buyer->name }}</li>
        @empty
            <li class="text-gray-500 italic ml-20">No matching buyers found.</li>
        @endforelse
    </ul>
</div>
