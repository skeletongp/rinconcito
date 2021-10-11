<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Detail;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;

class InvoiceController extends Controller
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
        $carts = Chart::active()->get();


        $invoice = Invoice::create($request->all());
        $invoice->number = "Fct. " . str_pad($invoice->id, 5, "0", STR_PAD_LEFT);
        $invoice->save();
        foreach ($carts as $cart) {
            Detail::create([
                'invoice_id' => $invoice->id,
                'product_id' => $cart->product_id,
                'cant' => $cart->cant,
                'client_id' => $request->client_id,
                'user_id' => $request->user_id,
            ]);
            $product = Product::find($cart->product_id);
            if ($product->type == 'OTRO') {
                $product->stock = $product->stock - $cart->cant;
                $product->save();
            } else {
                foreach ($product->ingredients as $ing) {
                   $ing->stock=$ing->stock-($ing->pivot->cant*$cart->cant);
                   $ing->save();
                }
            }

            $cart->delete();
        }
        return redirect()->back();
    }

    public function show(Invoice $invoice)
    {
        //
    }


    public function edit(Invoice $invoice)
    {
        //
    }


    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
