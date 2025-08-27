@props(['id' => '','text'=>''])
<div id="{{$id}}"
        onclick="copyToClipboard('{{$id}}')" 
        class="font-normal bg-gray-200 text-gray-700 overflow-hidden w-auto px-2 mr-3 rounded-outline cursor-pointer min-w-50 ">
        {{ $text }} 
    
</div>