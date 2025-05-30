<x-base-layout tabTitle='register' bodyClass='min-h-screen flex items-center justify-center bg-blue-50'>
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow">
        
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h1 class="text-center">Register</h1>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            <form class="space-y-4" method="post" action="{{ route('register.store')}}" class="bg-white">
                @csrf
                <x-form-error/>
                <div>
                    <label for="name" class=" block text-sm/6 font-medium text-gray-900">Name</label>
                    <input type="text" name='name' placeholder="name"class="
                                mt-1 block w-full rounded-md px-3 py-1.5 text-gray-900 outline-1 -outline-offset-1 outline-gray-300 
                                placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-blue-900
                                "/>
                </div>   

                <div>
                    <label for="email" class=" block text-sm/6 font-medium text-gray-900">Email</label>
                    <input type="email" name='email' placeholder="email"class="
                                mt-1 block w-full rounded-md px-3 py-1.5 text-gray-900 outline-1 -outline-offset-1 outline-gray-300 
                                placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-blue-900
                                "/>
                </div>
                <div>
                    <label for="password" class=" block text-sm/6 font-medium text-gray-900">Password</label>
                    <input type="password" name='password' placeholder="password"class="
                            mt-1 block w-full rounded-md px-3 py-1.5 text-gray-900 outline-1 -outline-offset-1 outline-gray-300 
                            placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-blue-900
                            "/>
                <x-button type="submit" text='register' buttonClass='w-full justify-center mt-6'/>
                </div>

            </form>
        </div>
    </div>

</x-base-layout>