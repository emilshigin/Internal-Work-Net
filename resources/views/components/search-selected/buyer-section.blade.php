@props(['buyer'])

<form method="POST" action="{{route('buyers.update',$buyer->id)}}" id="buyer-edit-form">
    @csrf
    @method('PUT')

    <div class=" flex flex-row gap-4  text-3xl font-bold mt-3">
        Buyer

        <x-button type="button" id="edit-buyer-btn" onclick="enableBuyerEdit()" text="Edit" />
        <x-button type="submit" id="save-buyer-btn" onclick="enableBuyerEdit()" text="Save" buttonClass="hidden" />

    </div>

    <hr />
    
    <div class="px-3 mt-2">
        <h2 id="buyer-name-display" class="text-lg font-bold">{{ $buyer->name }}</h2>
        <input type="text" name="name" id="buyer-name-input"
               class="hidden border px-2 py-1 rounded text-lg font-bold"
               value="{{ $buyer->name }}" />
    </div>

    <div class="flex flex-col md:flex-row">
        <div class="items-center gap-1 py-1 " >
            <div class="px-3">
                <span class="font-medium">Email:</span>
                @forelse ($buyer->contactEmails as $key=>$email)
                    <div class="flex items-center gap-1 py-1.5">
                        
                        <x-ui.display-info id="buyer-email-{{$key}}" text="{{$email->email}}"/>

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
                        <x-ui.display-info id="buyer-phone-{{$key}}" text="{{$phone->phone_number}}"/>
                        
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
                @forelse ( $buyer->contactAddresses as $key=>$address )
                    <div class="flex items-center gap-1 ">
                        @php
                            $full_address = "$address->address_line_1 $address->address_line_2 $address->city $address->state $address->postal_code $address->country" 
                        @endphp
                        <x-ui.display-info text="{{$full_address}}" id='buyer-address-{{$key}}'/>
                        
                        @if($address->is_primary)
                            <x-ui.tooltip-icon symbol="P" tooltip_text="Primary" />
                        @endif

                        @unless($address->is_contactable)
                            <x-ui.tooltip-icon symbol="N" tooltip_text="(Do Not Use)" />
                        @endunless
                    </div>
                @empty
                    <p class="text-sm text-gray-500 italic">No Addresses available</p>
                @endforelse
            </div>
    </div>
</form>
<hr />
