<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Invoice;
use App\Models\Outcome;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SaleController extends Controller
{
    public function index()
    {

        $sales = Invoice::search(request('s'))->tanda(request('t'))->orderBy('created_at','desc')->get()->groupBy('day');
        $dates=Invoice::distinct()->orderBy('day','desc')->get('day');
        return view('pages.sales.index')
            ->with([
                'sales' => $sales,
                'dates' => $dates,

            ]);
    }
    public function show()
    {
        if (!request('start') || !request('end')) {
            $start = Carbon::now()->subDays(7);
            $end = Carbon::now();
            $start=date('Y-m-d',strtotime($start));
            $end=date('Y-m-d',strtotime($end));
        } else{
            $start=request('start');
            $end=request('end');
        }
        $beforeStart=Carbon::parse($start)->subMonth(1);
        $beforeStart=date('Y-m-d',strtotime($beforeStart));

        $beforeEnd=Carbon::parse($end)->subMonth(1);
        $beforeEnd=date('Y-m-d',strtotime($beforeEnd));
       
        $invoices=Invoice::whereBetween('day',[$start,$end]);
        $outcomes=Outcome::whereBetween('day',[$start,$end]);

        $beforeInvoices=Invoice::whereBetween('day',[$beforeStart,$beforeEnd]);
        $beforeOutcomes=Outcome::whereBetween('day',[$beforeStart,$beforeEnd]);

        return view('pages.sales.show')
        ->with([
            'invoices'=>$invoices,
            'outcomes'=>$outcomes,
            'beforeInvoices'=>$beforeInvoices,
            'beforeOutcomes'=>$beforeOutcomes,
            'start'=>date('d/m/Y',strtotime($start)),
            'end'=>date('d/m/Y',strtotime($end)),
        ]);
    }
}
