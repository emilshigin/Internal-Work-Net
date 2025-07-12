@props(['serialsByOffice'])


@foreach($serialsByOffice as $item)
  @php
      $office = $item['office'];
      $serials = $item['serials'];
      $primaryEmail = $office->contactEmails->firstWhere('is_primary', true);
      $primaryPhone = $office->contactPhones->firstWhere('is_primary', true);
  @endphp
  
  <div class="block w-72  bg-white p-6 rounded-outline">
    <h3 class="mb-2 text-center text-2xl font-bold tracking-tight text-black hover:text-sky-700 hover:underline">
      {{  $office->office_name }}
    </h3>

    <!-- Email -->
    <div class="mb-2 flex items-center justify-between h-10">
      @if ($primaryEmail)
        <x-ui.display-info id="card-office-{{$loop->iteration}}-email" text="{{$primaryEmail}}"/>
      @else
        <x-ui.display-info text="No Primary Email Found"/>
      @endif
    </div>

    <!-- Phone -->
    <div class="mb-2 flex items-center justify-between">
       @if ($primaryPhone)
        <x-ui.display-info id="card-office-{{$loop->iteration}}-phone" text="{{$primaryPhone->phone_number}}"/>
      @else
        <x-ui.display-info text="No Primary Phone Found"/>
      @endif
    </div>

    {{-- Serial Numbers --}}
    @if($serials)
        <div class="mt-3 flex flex-wrap gap-1">
            @foreach($serials as $sn)
                <p>{{ $sn }}</p>
            @endforeach
        </div>
    @else
        <p class="ml-4 text-gray-500">Office Has No Devices Attached</p>
    @endif
  </div> 
@endforeach