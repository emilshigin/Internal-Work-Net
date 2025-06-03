<aside class="w-44 bg-white shadow-md p-4 hidden md:flex flex-col">
<h2 class="text-xl font-bold mb-6">Dashboard</h2>
<nav class="space-y-2">
    <a href="/" class="block py-2 px-3 rounded hover:bg-gray-200 text-gray-700">Dashboard</a>
    <a href="/customer_support" class="block py-2 px-3 rounded hover:bg-gray-200 text-gray-700">Support</a>
    <a href="/manage_data" class="block py-2 px-3 rounded hover:bg-gray-200 text-gray-700">Manage Data</a>
</nav>

<form action="{{ route('logout') }}" method="post" class="mt-auto">
       @csrf
       <button type="submit" class="w-full  text-start mt-2 block py-2 px-3 rounded hover:bg-gray-200 text-red-500">
               Logout
       </button>            
</form>

</aside>