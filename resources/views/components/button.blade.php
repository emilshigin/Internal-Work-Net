@props(['id' => '','onclick'=>'', 'type' => '','text'=>'', 'buttonClass'=>'', 'textClass'=>''])

<button 
    @if ($id) id='{{$id}}' @endif 
    @if ($onclick) onclick='{{$onclick}}' @endif  
    @if ($type) type='{{$type}}' @endif 
    class=" bg-sky-500 hover:bg-sky-700 flex items-center border border-black rounded-lg px-2 py-1.5 
    @if($buttonClass){{$buttonClass}}@endif">

    <div class="text-white text-base font-bold ml-3 mr-3 drop-shadow-[0_1.2px_1.2px_rgba(0,0,0,2)] @if($textClass){{$textClass}}@endif">
        {{$text}}
    </div>

</button>