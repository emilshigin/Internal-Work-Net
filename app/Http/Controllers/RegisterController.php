<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials['password'] = bcrypt($credentials['password']);
        $user = User::create($credentials);
        
        Auth::login($user);

        return redirect()->route('dashboard');
    }
}