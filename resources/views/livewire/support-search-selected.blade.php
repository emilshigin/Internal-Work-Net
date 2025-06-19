
@php

@endphp

<div class="bg-white h-12/12 py-2 px-3 block rounded-outline ">
    @if($selectedId)
       
        <x-search-selected.buyer-section :buyer="$buyer" />
        
        <x-search-selected.office-section :officesWithSerials="$officesWithSerials" />
        
        
     @else
        <x-empty-section />
    @endif
</div>