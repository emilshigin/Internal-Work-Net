<x-app-layout tabTitle='Customer Support' bodyClass=''>
    <div class="flex gap-4">
        <div class="w-1/4 max-w-md">
            @livewire('support-search')
        </div>
        <div class="flex-1">
            @livewire('support-search-selected')
        </div>
    </div>

</x-app-layout>