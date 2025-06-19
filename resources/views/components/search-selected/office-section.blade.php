@props(['officesWithSerials'])


<div class=" text-3xl mt-3">Offices</div>
<hr/>
    <div class="flex gap-3">
    @if($officesWithSerials)
            <x-search-selected.office-cards :officesWithSerials="$officesWithSerials" />
        @else
            <p class="text-gray-500">No offices found.</p>
        @endif
    </div>
<hr/>