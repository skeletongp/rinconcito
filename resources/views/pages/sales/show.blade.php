@extends('dashboard')

@section('body')
    <div class=" bg-transparent rounded-xl py-2">
        @php
            $balance = $invoices->sum('payed') - $outcomes->sum('amount');
            $percent = 0;
            if ($invoices->sum('payed')>0) {
                $percent = $balance / $invoices->sum('payed');
                $percent = $percent * 100;
            }
            $bsPercent = 0;
            if ($invoices->sum('payed') > 0) {
                $beforeSales = ($invoices->sum('payed') - $beforeInvoices->sum('payed')) / $invoices->sum('payed');
                $bsPercent = $beforeSales * 100;
            }
            $bbPercent = 0;
            if ($outcomes->sum('amount')) {
                $beforeBuys = ($outcomes->sum('amount') - $beforeOutcomes->sum('amount')) / $outcomes->sum('amount');
                $bbPercent = $beforeBuys * 100;
            }
        @endphp
        <!-- component -->
        <div class="w-full py-16 bg-transparent -my-2 flex justify-center items-center">
            <div class="container p-6 mx-8 bg-white">
                <h1 class="text-black font-bold tracking-wider text-center my-3  text-lg ">
                    Desde: <span class="text-green-800">{{ $start }}</span>
                    Hasta: <span class="text-green-800">{{ $end }}</span>
                </h1>
                <div
                    class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-col space-y-8 max-w-md mx-auto justify-between divide-x divide-solid divide-gray-400">
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-gray-800 text-lg font-semibold tracking-wider">Ventas del período</label>
                        <label
                            class="text-green-800 text-xl md:text-3xl font-bold">${{ number_format($invoices->sum('payed'), 2) }}</label>
                        <div title="Período anterior"
                            class="absolute bg-white shadow-xl rounded-md font-semibold text-sm {{ $bsPercent > 0 ? 'text-green-700' : 'text-red-700' }} p-2 right-4 bottom-0">
                            <span class="fas {{ $bsPercent > 0 ? 'fa-angle-up' : 'fa-angle-down' }}"></span>
                            {{ number_format($bsPercent, 2) }}%
                        </div>
                    </div>
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-gray-800 text-lg font-semibold tracking-wider">Gastos del período</label>
                        <label
                            class="text-red-800 text-xl md:text-3xl font-bold">${{ number_format($outcomes->sum('amount'), 2) }}</label>
                        <div title="Período anterior"
                            class="absolute bg-white shadow-xl rounded-md font-semibold text-sm {{ $bbPercent < 0 ? 'text-green-700' : 'text-red-700' }} p-2 right-4 bottom-0">
                            <span class="fas {{ $bbPercent > 0 ? 'fa-angle-up' : 'fa-angle-down' }}"></span>
                            {{ number_format($bbPercent, 2) }}%
                        </div>
                    </div>
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-gray-800 text-base font-semibold tracking-wider">Balance general</label>
                        <label
                            class="text-green-800 text-xl md:text-3xl font-bold">${{ number_format($balance, 2) }}</label>
                        <div
                            class="absolute bg-white shadow-xl rounded-md font-semibold text-sm {{ $percent > 0 ? 'text-green-700' : 'text-red-700' }} p-2 right-4 bottom-0">
                            <span class="fas {{ $percent > 0 ? 'fa-angle-up' : 'fa-angle-down' }}"></span>
                            {{ number_format($percent, 2) }}%
                        </div>
                    </div>
                </div>
                <form action="" class="max-w-md mx-auto my-2">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-2">
                        <div class="w-full">
                            <x-label>Desde</x-label>
                            <x-input type="date" name="start" value="{{ request('start', date('Y-m-d')) }}"></x-input>
                        </div>
                        <div class="w-full">
                            <x-label>Hasta</x-label>
                            <x-input type="date" name="end" value="{{ request('end', date('Y-m-d')) }}"></x-input>

                        </div>
                    </div>
                    <div class="flex space-y-2 justify-end">
                        <x-button class="my-3 bg-black text-white">Buscar</x-button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>


@endsection
