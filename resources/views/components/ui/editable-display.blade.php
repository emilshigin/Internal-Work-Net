@props(['id'=> '','displayText'=> '','inputType'=>'','inputName'=>''])

<div>
     {{-- Display mode --}}
    <div id="{{id}}Display">
        <x-ui.display-info id="{{$displayId}}" text="{{$displayText}}"/>

        @if($email->is_primary)
            <x-ui.tooltip-icon symbol="P" tooltip_text="Primary" />
        @endif
        
        @unless($email->is_contactable)
            <x-ui.tooltip-icon symbol="N" tooltip_text="(Do Not Use)" />
        @endunless
    </div>

    {{-- Edit mode --}}
    <div id="{{id}}Edit" class="hidden">
        <x-ui.input-info 
            type="{{$inputType}}" 
            id="" 
            name="{{$inputName}}" 
            value="{{ $buyer->name }}" 
            inputClass=''/>

    </div>
</div>