<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Detail;
use App\Models\Invoice;
use App\Models\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
class InvoiceController extends Controller
{

    public function index()
    {
        $invoices = Invoice::paginate(6);
        return view('pages.invoices.index')
            ->with(['invoices' => $invoices]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $carts = Chart::active()->get();
        $data = $request->all();
        $data['day']=now();
        $invoice = Invoice::create($data);
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
                    $ing->stock = $ing->stock - ($ing->pivot->cant * $cart->cant);
                    $ing->save();
                }
            }

            $cart->status = 'VENDIDO';
            $cart->save();
        }
        return redirect()->route('invoices.show', $invoice);
    }

    public function show(Invoice $invoice)
    {
        $user = $invoice->user;
       /*  $pdf = PDF::loadView('pages.invoices.show', ['invoice' => $invoice,
        'user'=>$user,])->setOptions(['defaultFont' => 'sans-serif']);
    
        return $pdf->stream('invoice.pdf'); */
        return view('pages.invoices.show')
            ->with([
                'invoice' => $invoice,
                'user'=>$user,
            ]);
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
    public function pendings()
    {
        $invoices=Invoice::where('status','=','PENDIENTE')->paginate(1);
        return view('pages.invoices.pendings')
        ->with([
            'invoices'=>$invoices,
        ]);
    }
    public function complete(Request $request)
    {
        $invoice=Invoice::find($request->invoice);
        $invoice->status="ENTREGADO";
        $invoice->save();
        return redirect()->route('invoices.pendings');
    }
}
