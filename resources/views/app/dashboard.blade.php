<div>
    hello {{ Auth::user()->name }}

    <form action="{{ route('logout') }}" method="post">
        @csrf
        <x-button type="submit" text='Logout'/>
    </form>
</div>
