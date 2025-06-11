@props(['name' => 'need name', 'type'=>'text','isLiveSearch' => 'false', 'isRequired'=>'true', 'showLabel'=>'true', 'showError'=>'true'])

@php
    $showLabel = filter_var($showLabel, FILTER_VALIDATE_BOOLEAN);
    $showError = filter_var($showError, FILTER_VALIDATE_BOOLEAN);
    $isRequired = filter_var($isRequired, FILTER_VALIDATE_BOOLEAN);
    $isLiveSearch = filter_var($isLiveSearch, FILTER_VALIDATE_BOOLEAN);

@endphp

@if ($showLabel)
    <label for="{{$name}}" class=" block text-sm/6 font-medium text-gray-900">{{ucfirst($name)}}</label>
@endif
<input 
    type="{{$type}}" 
    name='{{$name}}' 
    @if($isLiveSearch) wire:model.live.debounce.350ms="query" @endif
    @if ($isRequired) required @endif 
    placeholder='{{ucfirst($name)}}' 
    class="
        mt-1 block w-full 
        rounded-md px-3 py-1.5
        bg-white 
        text-gray-900 outline-1 -outline-offset-1 outline-gray-300 
        placeholder:text-gray-400 focus:outline-2 
        focus:outline-offset-2 focus:outline-blue-900
    "/>
    <div wire:loading>
        🔄 Searching...
    </div>

@if ($showError)
    @error($name)
        <div class="text-red-500 text-sm">{{ $message }}</div>
    @enderror
@endif
