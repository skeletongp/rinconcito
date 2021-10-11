<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChartRequest;
use App\Models\Chart;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChartController extends Controller
{
  
    public function index()
    {
        $carts = Chart::active()->get();
        $clients = Client::get();

        return view('pages.carts.index')
        ->with([
            'carts'=>$carts,
            'clients'=>$clients,
        ]);
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $product=Product::find($request->product_id);
        request()->request->add(['price'=>$product->price]);
        request()->request->add(['total'=>$product->price*$request->cant]);
        $chart=Chart::updateOrCreate(['product_id'=>$request->product_id], $request->all());
       if($chart){
        return redirect()->back()->with(['success'=>'Añadido al carrito']);
       }
    }

   
    public function show($id)
    {
        

    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        $chart=Chart::find($id);
        $chart->update($request->all());
        $chart->total=$chart->price*$chart->cant;
        $chart->save();
        return redirect(request()->header('Referer'));
    }

    
    public function destroy($id)
    {
        $cart=Chart::find($id);
        $cart->delete();
        Session::flash('success', 'Retirado del carrito');
        return redirect(request()->header('Referer'));
    }

    public function empty()
    {
        $carts=Chart::active()->get();
        foreach ($carts as $cart) {
            $cart->delete();
        }
        Session::flash('success', 'Carrito vaciado');
        return redirect()->route('products.index');
    }
}
