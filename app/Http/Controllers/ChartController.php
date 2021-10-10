<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChartRequest;
use App\Models\Chart;
use App\Models\Product;
use Illuminate\Http\Request;

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
        return redirect()->back()->with(['message'=>'Añadido al carrito']);
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
        return redirect()->back()->with(['message'=>'Retirado del carrito']);
    }
}
