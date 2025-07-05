@props(['officesWithSerials'])

@foreach($officesWithSerials as $office => $serials)
  <div class="block w-72  bg-white p-6 rounded-outline">
    <h3 class="mb-2 text-center text-2xl font-bold tracking-tight text-black hover:text-sky-700 hover:underline">{{  $office }}</h3>

    @php
      $Office = Str::slug($office); 
    @endphp
    <!-- Email -->
    <div class="mb-2 flex items-center justify-between h-10">
      <p 
        id="{{$Office}}-email-copy" 
        onclick="copyToClipboard('{{$Office}}-email-copy')"  
        class="font-normal bg-gray-200 text-gray-700 overflow-hidden w-auto px-2 mr-3 rounded-outline cursor-pointer ">
        test@test.testing.test.com
      </p>

      <div class="flex space-x-2">
        <x-ui.edit-icon/><!-- Edit -->
      </div>
    </div>

    <!-- Phone -->
    <div class="mb-2 flex items-center justify-between">
      <p 
        id="{{$Office}}-phone-copy" 
        onclick="copyToClipboard('{{$Office}}-phone-copy')" 
        class="font-normal bg-gray-200 text-gray-700 overflow-hidden w-auto px-2 mr-3 rounded-outline cursor-pointer ">
        ###-###-###
      </p>

      <div class="flex space-x-2">
        <x-ui.edit-icon/><!-- Edit -->
      </div>
    </div>


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