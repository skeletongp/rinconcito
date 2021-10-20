<?php

namespace App\Http\Controllers;

use App\Models\Chart;
use App\Models\Detail;
use App\Models\Invoice;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function index()
    {
        $invoices = Invoice::search(request('s'))->orderBy('created_at','desc')->paginate(6);
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
        $data['day']=date('Y-m-d');
        $data['status']='PENDIENTE';
        $invoice = Invoice::create($data);
        $invoice->number = "Fct. " . str_pad(Invoice::get()->count(), 5, "0", STR_PAD_LEFT);
        $invoice->save();
        foreach ($carts as $cart) {
            Detail::create([
                'invoice_id' => $invoice->id,
                'product_id' => $cart->product_id,
                'price' => $cart->price,
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
        return view('pages.invoices.show')
            ->with([
                'invoice' => $invoice,
                'user'=>$user,
            ]);
    }


    public function edit(Invoice $invoice)
    {
        return view('pages.invoices.edit')
        ->with([
            'invoice'=>$invoice
        ]);
    }


    public function update(Request $request, Invoice $invoice)
    {
        $invoice->update([
            'payed'=>$request->payed,
            'note'=>$request->note,
            'discount'=>$invoice->total-$request->payed,
        ]);
        return redirect()->route('invoices.index');
    }

 
    public function destroy(Invoice $invoice)
    {
        //
    }
    public function pendings()
    {
        $invoices=Invoice::where('status','=','PENDIENTE')->orderBy('created_at', 'desc')->paginate(3);
        return view('pages.invoices.pendings')
        ->with([
            'invoices'=>$invoices,
        ]);
    }
    public function delivered()
    { 
        $today = date('Y-m-d');
        $invoices=Invoice::where('status','=','ENTREGADO')
        ->where('day','=',$today)
        ->orderBy('created_at', 'desc')->paginate(6);
        return view('pages.invoices.delivered')
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
    public function repeat(Invoice $invoice)
    {
        $details=$invoice->details;
        unset($invoice->id, $invoice->created_at, $invoice->updated_at, $invoice->name, $invoice->note);
        $newInv=Invoice::create($invoice->getAttributes());
        $newInv->number = "Fct. " . str_pad(Invoice::get()->count(), 5, "0", STR_PAD_LEFT);
        $newInv->status="PENDIENTE";
        $newInv->save();

        foreach ($details as $detail) {
            Detail::create([
                'invoice_id' => $newInv->id,
                'product_id' => $detail->product_id,
                'price' => $detail->price,
                'cant' => $detail->cant,
                'client_id' => $detail->client_id,
                'user_id' => $detail->user_id,
            ]);

           $product = Product::find($detail->product_id);
           if ($product->type == 'OTRO') {
               $product->stock = $product->stock - $detail->cant;
               $product->save();
           } else {
               foreach ($product->ingredients as $ing) {
                   $ing->stock = $ing->stock - ($ing->pivot->cant * $detail->cant);
                   $ing->save();
               }
           }
        }
        return redirect()->route('invoices.show',$newInv);
    }
}
