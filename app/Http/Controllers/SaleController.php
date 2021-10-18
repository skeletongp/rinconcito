<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class SaleController extends Controller
{
    public function index()
    {

        $sales = Invoice::search(request('s'))->tanda(request('t'))->orderBy('created_at','desc')->get()->groupBy('day');
        $dates=Invoice::distinct()->get('day');
        return view('pages.sales.index')
            ->with([
                'sales' => $sales,
                'dates' => $dates,

            ]);
    }
}
