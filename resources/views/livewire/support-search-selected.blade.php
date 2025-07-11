
@php

@endphp

<div class="bg-white h-12/12 py-2 px-3 block rounded-outline overflow-y-auto ">
    @if($isSelected)
       
        <x-search-selected.buyer-section :buyer="$buyer" />
        
        <x-search-selected.office-section :serialsByOffice="$serialsByOffice" />
        
        
     @else
        <x-empty-section />
    @endif
</div>