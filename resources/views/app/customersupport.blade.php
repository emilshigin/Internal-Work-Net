@vite('resources/js/customersupport-tools.js')
<x-app-layout tabTitle='Customer Support' bodyClass=''>
    <div class="flex h-screen p-3 gap-3">
        <div class="w-1/4 max-w-md h-full">
            @livewire('support-search')
        </div>
        <div class="flex-1 h-full ">
            @livewire('support-search-selected')
        </div>
    </div>

</x-app-layout>