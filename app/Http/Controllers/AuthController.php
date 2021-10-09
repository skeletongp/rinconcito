<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function login()
   {
       return view('auth.login');
   }
   public function register()
   {
       return view('auth.register');
   }
   public function store(AuthRequest $request )
   {
       $request->merge(['password'=>bcrypt($request->password)]);
        $user=User::create($request->all());
        Auth::login($user);
        return redirect()->route('dashboard');
   }

   public function logout()
   {
       Auth::logout();
       return redirect()->route('auth.login');
   }
   public function access(Request $request)
   {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }
    return back()->withErrors([
        'error' => 'Los datos suministrados no son válidos.',
    ]);
   }
}
