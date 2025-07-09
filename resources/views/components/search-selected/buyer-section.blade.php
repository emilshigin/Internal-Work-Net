@props(['buyer'])

<div class=" text-3xl mt-3">Buyer</div>
<hr />
<div>
    @if($buyer)
    <h2 class="text-lg font-bold">{{ $buyer->name }}</h2>
        @foreach ($buyer->contactEmails as $key=>$email)
        <div class="flex items-center gap-1 py-1" >
            Email: 
            <p  
                id="{{$email->email}}-{{$key}}"
                onclick="copyToClipboard('{{$email->email}}-{{$key}}')" 
                class="font-normal bg-gray-200 text-gray-700 overflow-hidden w-auto px-2 mr-3 rounded-outline cursor-pointer ">
                    {{ $email->email }} 
                </p>
                @if($email->is_primary)
                    <x-ui.tooltip-icon symbol="P" tooltip_text="Primary" />
                @endif

                @unless($email->is_contactable)
                    <x-ui.tooltip-icon symbol="N" tooltip_text="(Do Not Use)" />
                @endunless
        </div>

        @endforeach

        @foreach ( $buyer->contactPhones as $phone )
        <div class="flex items-center gap-1">

            <p>Phone: {{ $phone->phone_number }} </p>
            @if($phone->is_primary)
                <x-ui.tooltip-icon symbol="P" tooltip_text="Primary" />
            @endif

            @unless($phone->is_contactable)
                <x-ui.tooltip-icon symbol="N" tooltip_text="(Do Not Use)" />
            @endunless
        </div>
                    
   
        @endforeach

    @endif
</div>
<hr />
