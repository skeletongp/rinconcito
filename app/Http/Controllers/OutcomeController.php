<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Outcome;
use Illuminate\Http\Request;

class OutcomeController extends Controller
{

    public function index()
    {
        $days = Outcome::distinct()->orderBy('day', 'desc')->get('day');
        $outcomes = Outcome::search(request('s'))
            ->type(request('t'))
            ->day(request('d'))
            ->orderBy('day', 'desc')
            ->get()->groupBy('day');
        return view('pages.outcomes.index')
            ->with([
                'outcomes' => $outcomes,
                'days' => $days,
            ]);
    }


    public function create()
    {
        return view('pages.outcomes.create');
    }


    public function store(Request $request)
    {
        Outcome::create($request->all());

        return redirect()->route('outcomes.index');
    }


    public function show(Outcome $outcome)
    {
        $start=request('start');
        $end=request('end');
        $invoices=Invoice::whereBetween('day',[$start,$end]);
        $outcomes=Outcome::whereBetween('day',[$start,$end]);
        dd($invoices->sum('payed'), $outcomes->sum('amount'));
    }


    public function edit(Outcome $outcome)
    {
        return view('pages.outcomes.edit')
        ->with([
            'outcome'=>$outcome
        ]);
    }

    public function update(Request $request, Outcome $outcome)
    {
        $outcome->update($request->all());
        return redirect()->route('outcomes.index')
        ->with(['success'=>'Gasto editado']);
    }

    public function destroy(Outcome $outcome)
    {
       $outcome->delete();
       return redirect()->route('outcomes.index')
       ->with(['success'=>'Gasto eliminado']);
    }
}
