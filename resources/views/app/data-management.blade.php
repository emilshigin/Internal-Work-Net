@vite('resources/js/data-management.js')
<x-app-layout tabTitle='Data Management' bodyClass=''>
        <!-- Products -->
{{-- Products Table --}}
 <div class="mb-6 w-min border rounded-lg shadow">
    <button
        onclick="toggleSection('productsTable')"
        class="w-full whitespace-nowrap px-6 py-2 bg-blue-500 text-white font-semibold rounded-t-lg" >
        Products ({{ $products->count() }})
    </button>

    <div id="productsTable" class="p-4 bg-white hidden">
        <table class="w-full text-left border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr class="border-t">
                        <td class="px-4 py-2 border">{{ $product->id }}</td>
                        <td class="px-4 py-2 border">{{ $product->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

  
  
</x-app-layout>
