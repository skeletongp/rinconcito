<?php

namespace App\View\Components;

use App\Models\Chart;
use App\Models\Client;
use Illuminate\View\Component;

class InvoiceControl extends Component
{
    
    public function render()
    {
            $carts = Chart::active()->get();
            $clients = Client::get();
        return view('components.invoice-control')
        ->with(['carts'=>$carts,'clients'=>$clients]);
    }
}
