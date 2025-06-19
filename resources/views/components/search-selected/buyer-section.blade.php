@props(['buyer'])

<div class=" text-3xl mt-3">Buyer</div>
<hr />
<div>
    @if($buyer)
        <h2 class="text-lg font-bold">{{ $buyer->name }}</h2>
        <p>Email: {{ $buyer->email }}</p>
        <p>Phone: {{ $buyer->phone }}</p>    
    @endif
</div>
<hr />
