<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {

        $sales = Invoice::paginate();
        $dates=Invoice::distinct('created_at')->get('created_at');

        return view('pages.sales.index')
            ->with([
                'sales' => $sales,
                'dates' => $dates,
            ]);
    }
}
