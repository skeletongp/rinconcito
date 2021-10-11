<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChartRequest;
use App\Models\Chart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ChartController extends Controller
{
  
    public function index()
    {
        //
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
        //
    }

    
    public function destroy($id)
    {
        $cart=Chart::find($id);
        $cart->delete();
        Session::flash('success', 'Retirado del carrito');
        return redirect()->route('products.index');
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
