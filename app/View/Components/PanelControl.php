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
        $today = date('Y-m-d');
      
        $pendings=Invoice::where('status','=','PENDIENTE')->orderBy('created_at', 'desc')->get();
        $delivered=Invoice::where('status','=','ENTREGADO')
        ->where('day','=',$today)->orderBy('created_at', 'desc')->get();
        $searchDate = new Carbon();
        $lastSunday = Carbon::createFromTimeStamp(strtotime("last sunday", $searchDate->timestamp));
        $nextSaturday = Carbon::createFromTimeStamp(strtotime("next saturday", $searchDate->timestamp));
        $fromWeek = Invoice::whereBetween('day', [$lastSunday, $nextSaturday])->sum('payed');

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
