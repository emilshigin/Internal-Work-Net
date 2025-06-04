@props(['tabTitle' => 'Login','bodyClass' => ''])
<x-base-layout tabTitle='{{$tabTitle}}' bodyClass='{{$bodyClass}}'>
    <div class="flex min-h-screen">
    <x-nav/>

     <main class="flex-1 p-6">
        {{$slot}}
     </main>
    </div>
</x-base-layout>
