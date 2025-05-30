<x-base-layout tabTitle='register' bodyClass='min-h-screen flex items-center justify-center bg-blue-50'>
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow">
        
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h1 class="text-center">Register</h1>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

            <form class="space-y-4" method="post" action="{{ route('register.store')}}" class="bg-white">
                @csrf
                
                <div>
                    <x-input name="name" type="text"/>
                </div>
                <div>
                    <x-input name="email" type="email"/>
                </div>
                 <div>
                    <x-input name="username" type="username"/>
                </div>
                <div>
                    <x-input name="password" type="password"/>
                </div>
                
                <x-button type="submit" text='Register' buttonClass='w-full justify-center mt-6'/>               
            </form>
        </div>
    </div>

</x-base-layout>