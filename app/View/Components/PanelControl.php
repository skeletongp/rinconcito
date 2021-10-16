<?php

namespace App\View\Components;

use App\Models\Detail;
use App\Models\Invoice;
use Carbon\Carbon;
use Illuminate\View\Component;

class PanelControl extends Component
{

    public function __construct()
    {
        //
    }


    public function render()
    {
        $pendings=Invoice::where('status','=','PENDIENTE')->orderBy('created_at', 'desc')->get();
        $delivered=Invoice::where('status','=','ENTREGADO')->orderBy('created_at', 'desc')->get();
        $searchDate = new Carbon();
        $lastMonday = Carbon::createFromTimeStamp(strtotime("last monday", $searchDate->timestamp));
        $nextSunday = Carbon::createFromTimeStamp(strtotime("next sunday", $searchDate->timestamp));
        $fromWeek = Invoice::whereBetween('created_at', [$lastMonday, $nextSunday])->sum('payed');

        $dt = Carbon::now();
        $today = $dt->toDateString();
        $fromDay = Invoice::whereDate('created_at', '=', $today)->sum('payed');
        $fromProduct = Detail::whereDate('created_at', '=', $today)->sum('cant');
        $fromClient = Invoice::whereDate('created_at', '=', $today)->count('client_id');
        $lastSales=Invoice::orderBy('created_at','desc')->paginate(10);
        $lastProducts=Detail::orderBy('created_at','desc')->orderBY('cant','desc')->groupby('product_id')->distinct()->paginate(10);
        return view('components.panel-control')
            ->with([
                'fromWeek' => $fromWeek,
                'fromDay' => $fromDay,
                'fromProduct'=>$fromProduct,
                'fromClient'=>$fromClient,
                'lastSales'=>$lastSales,
                'lastProducts'=>$lastProducts,
                'pendings'=>$pendings,
                'delivered'=>$delivered,
            ]);
    }
}
