<x-app-layout tabTitle='dashboard' bodyClass=''>
    <div>
        Hello {{ Auth::user()->name }}
        <x-empty-section />
    </div>
</x-app-layout>
