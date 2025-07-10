@props(['buyer'])

<div class=" inline-block text-3xl font-bold mt-3">Buyer</div>
<hr />
<h2 class="text-lg font-bold">{{ $buyer->name }}</h2>
<div class="flex flex-col md:flex-row">
    @if($buyer)
    <div class="items-center gap-1 py-1 " >
        
        <div class="px-3">
            <span class="font-medium">Email:</span>
            @forelse ($buyer->contactEmails as $key=>$email)
                <div class="flex items-center gap-1 py-1.5">
                    
                    <x-ui.display-info id="{{$email->email}}-{{$key}}" text="{{$email->email}}"/>

                    @if($email->is_primary)
                    <x-ui.tooltip-icon symbol="P" tooltip_text="Primary" />
                    @endif
                    
                    @unless($email->is_contactable)
                    <x-ui.tooltip-icon symbol="N" tooltip_text="(Do Not Use)" />
                    @endunless
                </div>
            @empty
                <p class="text-sm text-gray-500 italic">No Email  available</p>
            @endforelse
            </div>
        </div>


        <div class="px-3">
            <span class="font-medium">Phone:</span>
            @forelse ( $buyer->contactPhones as $key=>$phone )
                <div class="flex items-center gap-1 ">
                    <x-ui.display-info id="{{$phone->phone_number}}-{{$key}}" text="{{$phone->phone_number}}"/>
                    
                    @if($phone->is_primary)
                        <x-ui.tooltip-icon symbol="P" tooltip_text="Primary" />
                    @endif

                    @unless($phone->is_contactable)
                        <x-ui.tooltip-icon symbol="N" tooltip_text="(Do Not Use)" />
                    @endunless
                </div>
            @empty
                <p class="text-sm text-gray-500 italic">No Phone numbers available</p>
            @endforelse
        </div>
                    
        <div class="px-3">
            <span class="font-medium">Address:</span>
            {{-- @forelse (  ) --}}
                <div class="flex items-center gap-1 ">

                    <x-ui.display-info text="23945 Calabasas Rd #110, Calabasas, CA 91302"/> 
                    
                    @if($phone->is_primary)
                        <x-ui.tooltip-icon symbol="P" tooltip_text="Primary" />
                    @endif

                    @unless($phone->is_contactable)
                        <x-ui.tooltip-icon symbol="N" tooltip_text="(Do Not Use)" />
                    @endunless
                </div>
            {{-- @empty
                <p class="text-sm text-gray-500 italic">No Phone numbers available</p>
            @endforelse --}}
        </div>

    @endif
</div>
<hr />
