<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
   
    public function index()
    {
        $clients=Client::paginate(9);
        return view('pages.clients.index')
        ->with(['clients'=>$clients]);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(Client $client)
    {
        //
    }

    
    public function edit(Client $client)
    {
        //
    }

    
    public function update(Request $request, Client $client)
    {
        //
    }

    
    public function destroy(Client $client)
    {
        //
    }
}
