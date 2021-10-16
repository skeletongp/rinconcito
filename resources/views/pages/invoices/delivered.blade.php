@extends('dashboard')

@section('body')
    <div class="max-w-3xl mx-auto bg-white p-2 px-4 rounded-xl">
        <div class="flex flex-col max-w-3xl p-6 space-y-4 md:px-6 md:py-4  ">
            @if ($invoices->count())
                <h2 class="text-xl font-semibold">{{ $invoices->total() }} Pedidos entregados</h2>
                @foreach ($invoices as $invoice)
                  
                    <ul class="flex flex-col divide-y divide-coolGray-700 shadow-xl p-3">
                        {{-- Producto --}}
                        @if ($invoice->details->count())
                            @foreach ($invoice->details as $detail)
                                <li class="flex flex-col pb-3 pt-2 sm:flex-row sm:justify-between ">
                                    <div class="flex w-full space-x-2 sm:space-x-4">
                                        <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-coolGray-500"
                                            src="{{ $detail->product->pict }}" alt="Polaroid camera">
                                        <div class="flex flex-col justify-between w-full pb-4">
                                            <div class="flex justify-between w-full pb-2 space-x-2">
                                                <div class="space-y-1 w-full">
                                                    <h3 class="text-lg md:text-xl font-semibold leading-snug sm:pr-8">
                                                        {{ $detail->product->code }}</h3>
                                                    <p class="text-sm md:text-base dark:text-coolGray-400">
                                                        {{ $detail->product->name }}</p>
                                                        <p class="text-sm md:text-base dark:text-coolGray-400">
                                                            {{ $detail->updated_at }}</p>
                                                </div>
                                                <div class="text-right w-full md:text-xl">
                                                    <p class="text-md font-semibold"> {{ $detail->cant }} x
                                                        ${{ number_format($detail->product->price, 2) }}</p>
                                                    <p class=" text-sm md:text-2xl font-semibold">Total.
                                                        ${{ number_format($detail->cant * $detail->product->price, 2) }}
                                                    </p>

                                                </div>
                                            </div>
                                    
                                        </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    {{-- Totales --}}
                    <div class="space-y-1 text-right md:text-xl">
                        @if ($invoice->discount>0)
                            <p class="text-base text-red-500">Descuento:
                                <input type="text" disabled class="font-semibold  w-32 text-right " 
                                    value="${{ number_format($invoice->discount, 2) }}" />
                            </p>
                        @endif
                        <p>Total:
                            <input type="text" disabled class="font-semibold  w-32 text-right " id="spTotal"
                                value="${{ number_format($invoice->total, 2) }}" />
                        </p>
                    </div>
                @endforeach
            @else
                <h1 class="font-bold uppercase text-center  my-8 text-2xl">No hay pedidos entregados hoy</h1>
            @endif
        </div>
        <div class="my-3">
            {{ $invoices->links() }}
        </div>


    </div>
    <!---->
    <script>
        $('document').ready(function() {
            setInterval(() => {
                location.reload();
            }, 10000);
        })
    </script>

@endsection
