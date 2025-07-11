@props(['serialsByOffice'])


<div class=" text-3xl mt-3">Offices</div>
<hr />
    <div class="flex flex-wrap gap-3">
    @if($serialsByOffice)
            <x-search-selected.office-cards :serialsByOffice="$serialsByOffice" />
        @else
            <p class="text-gray-500">No offices found.</p>
        @endif
    </div>
<hr />