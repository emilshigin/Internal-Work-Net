<dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
    <div>
        @if($buyer)
            <h2 class="text-lg font-bold">{{ $buyer->name }}</h2>
            <p>Email: {{ $buyer->email }}</p>
            <p>Phone: {{ $buyer->phone }}</p>

            @if($buyer->offices->isNotEmpty())
                @foreach($buyer->offices as $office)
                    <li>{{ $office->office_name }}</li>
                @endforeach
            @else
                <p class="mt-2 text-gray-500">No matching offices found.</p>
            @endif

        @else
            <p>Select a name to see details.</p>
        @endif

       


    </div>
</dl>