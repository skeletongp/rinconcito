<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    
    public function index()
    {
        $users=User::paginate(9);

        return view('pages.users.index')
        ->with([
            'users'=>$users
        ]);
    }

    
    public function create()
    {
        $user=null;
        return view('pages.users.createOrUpdate')
        ->with(['user'=>$user]);
    }

    
    public function store(AuthRequest $request)
    {
       $user= User::updateOrCreate (['id'=>$request->id],$request->all());
       $user->assignRole('seller');
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        $user=User::find($id);
        return view('pages.users.createOrUpdate')
        ->with(['user'=>$user]);
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }
}
