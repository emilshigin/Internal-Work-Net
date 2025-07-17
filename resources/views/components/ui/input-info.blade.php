@props([
    'id'=>'',
    'type'=>'',
    'name'=>'', 
    'value'=>'',
    'inputClass'=>'font-normal bg-gray-200 text-gray-700 overflow-hidden w-auto px-2 mr-3 rounded-outline cursor-pointer min-w-50'
    ])

<input
                    id="{{$id}}"
                    type="{{$type}}"
                    name="{{$name}}"
                    value="{{ old($name, $value) }}"
                    class=" {{$inputClass}}"
                />