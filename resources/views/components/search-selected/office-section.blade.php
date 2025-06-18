@props(['officesWithSerials'])

<div>
    @if($officesWithSerials)
            @foreach($officesWithSerials as $office => $serials)
                <div class="mt-4">
                    <h3 class="font-bold">{{  $office }}</h3>

                    @if($serials)
                        <ul class="ml-4 list-disc">
                            @foreach($serials as $sn)
                                <li>SN: {{ $sn }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p class="ml-4 text-gray-500">Office Has No Devices Attached</p>
                    @endif
                </div>
            @endforeach
        @else
            <p class="text-gray-500">No offices found.</p>
        @endif

</div>