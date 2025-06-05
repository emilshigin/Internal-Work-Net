<div>
    <x-input name='search | Name | Serial Number | Email | Phone' showLabel='false' isLiveSearch='true' />

    <ul class=" mt-2">
        @foreach($buyers as $buyer)
            <li>Customer: {{ $buyer->name }}</li>
        @endforeach
    </ul>
</div>