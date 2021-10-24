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

        $sales = Invoice::search(request('s'))->tanda(request('t'))->orderBy('created_at', 'desc')->get()->groupBy('day');
        $dates = Invoice::distinct()->orderBy('day', 'desc')->get('day');
        return view('pages.sales.index')
            ->with([
                'sales' => $sales,
                'dates' => $dates,

            ]);
    }
    public function show()
    {
        $time=request('time');
        
        $invoicesInterval = Invoice::interval();
        $invoices = $invoicesInterval['actual'];
        $start = $invoicesInterval['start'];
        $end = $invoicesInterval['end'];
        $invoicesBefore=Invoice::early($time);
        $beforeInvoices = $invoicesBefore['early'];


        $outcomesInterval = Outcome::interval();
        $outcomes = $outcomesInterval['actual'];
        $outcomesBefore=Outcome::early($time);
        $beforeStart = $outcomesBefore['beforeStart'];
        $beforeEnd = $outcomesBefore['beforeEnd'];
        $beforeOutcomes = $outcomesBefore['early'];

            return view('pages.sales.show')
            ->with([
                'invoices' => $invoices,
                'outcomes' => $outcomes,
                'beforeInvoices' => $beforeInvoices,
                'beforeOutcomes' => $beforeOutcomes,
                'start' => $start,
                'end' => $end,
                'beforeStart' => $beforeStart,
                'beforeEnd' => $beforeEnd,
            ]);
    }
}
