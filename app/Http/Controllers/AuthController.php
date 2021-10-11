<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct() {
        $this->middleware(['auth','role:admin'])->only('register');
    }
   public function login()
   {
       if (Auth::user()) {
           return redirect()->route('home');
       }
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
        return redirect()->route('home');
   }

   public function logout()
   {
       Auth::logout();
       return redirect()->route('auth.login');
   }
   public function access(Request $request)
   {
    $credentials = $request->validate([
        'username' => ['required', 'string'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended(route('home'));
    }
    return back()->withErrors([
        'error' => 'Los datos suministrados no son válidos.',
    ]);
   }
}
