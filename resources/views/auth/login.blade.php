<x-base-layout tabTitle='login' bodyClass='min-h-screen flex items-center justify-center bg-blue-50'>
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h1 class="text-center">Work-Net</h1>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-4" action="{{ route('login.attempt') }}" method="post">
                @csrf
                <x-form-error/>

                <div class="">
                    <label for="email" class=" block text-sm/6 font-medium text-gray-900">email</label>
                    <input type="text" name='email' required placeholder='email' class="
                    mt-1 block w-full rounded-md px-3 py-1.5 text-gray-900 outline-1 -outline-offset-1 outline-gray-300 
                    placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-blue-900
                    "/>
                </div>
                <div class="">
                    <label for="password" class=" block text-sm/6 font-medium text-gray-900">Password</label>
                    <input type="password" name='password' required placeholder='password' class="
                    mt-1 block w-full rounded-md px-3 py-1.5 text-gray-900 outline-1 -outline-offset-1 outline-gray-300 
                    placeholder:text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-blue-900
                    "/>
                </div>
                <x-button type="submit" text='Login' buttonClass='w-full justify-center mt-6'/>
            </form>
            <p class='text-red-600 text-sm mt-1'>{{$errors->first('username')}}</p>
    

        </div>
     

        <div class="text-xs mt-5 text-right"><p>Version 1.0.0</p></div>
    </div>
</x-base-layout>
