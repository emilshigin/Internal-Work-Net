  @props(['symbol' => 'i', 'tooltip_text' => 'info was not provided'])

  <div class="group relative inline-block cursor-pointer flex-wrap  py-.5 px-.5 text-center text-sm/6 font-medium">
      <!-- Circle with letter -->
      <div class="w-4 h-4 p-0.5 rounded-full border-2 border-gray-700 text-black flex items-center justify-center font-bold ">
        {{$symbol}}
      </div>

    <div class="absolute bottom-full z-10 mb-2 hidden rounded bg-gray-800 px-2 py-1 text-sm whitespace-nowrap text-white shadow-lg group-hover:block">
        {{$tooltip_text}}</div>
  </div>