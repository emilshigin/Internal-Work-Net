<x-base-layout tabTitle='login' bodyClass='min-h-screen flex items-center justify-center'>
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h1 class="text-center">Work-Net</h1>
        </div>
        
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-4" action="{{ route('login.attempt') }}" method="post">
                @csrf
                
                <div>
                    <x-input name="username" type="text" />
                </div>
                <div>
                    <x-input name="password" type="password"/>
                </div>
                
                <x-form-error/>
                
                <x-button type="submit" text='Login' buttonClass='w-full justify-center mt-6'/>
            </form>
    

        </div>
     

        <div class="text-xs mt-5 text-right"><p>Version 1.0.0</p></div>
    </div>
</x-base-layout>
