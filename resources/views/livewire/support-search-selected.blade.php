
@php

@endphp

<div class="bg-white h-12/12 py-2 px-3 block rounded-md outline-1 -outline-offset-1 outline-gray-300 ">
    @if($selectedId)
       
        <x-search-selected.buyer-section :buyer="$buyer" />
        
        <x-search-selected.office-section :officesWithSerials="$officesWithSerials" />
        
        
     @else
        <x-empty-section />
    @endif
</div>