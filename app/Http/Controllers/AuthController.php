<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

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
       
   }
}
