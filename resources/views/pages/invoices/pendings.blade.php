@extends('dashboard')

@section('body')
    <div class="max-w-3xl mx-auto bg-white p-2 px-4 rounded-xl">
        <div class="flex flex-col max-w-3xl p-6 space-y-4 md:px-6 md:py-4  ">
            <h2 class="text-xl font-semibold">Pedidos pendientes</h2>
            @if ($invoices->count())
                @foreach ($invoices as $invoice)
                    <ul class="flex flex-col divide-y divide-coolGray-700">
                        {{-- Producto --}}
                        @if ($invoice->details->count())
                            @foreach ($invoice->details as $detail)
                                <li class="flex flex-col pb-3 pt-2 sm:flex-row sm:justify-between">
                                    <div class="flex w-full space-x-2 sm:space-x-4">
                                        <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-coolGray-500"
                                            src="{{ $detail->product->Pict }}" alt="Polaroid camera">
                                        <div class="flex flex-col justify-between w-full pb-4">
                                            <div class="flex justify-between w-full pb-2 space-x-2">
                                                <div class="space-y-1 w-full">
                                                    <h3 class="text-lg md:text-xl font-semibold leading-snug sm:pr-8">
                                                        {{ $detail->product->code }}</h3>
                                                    <p class="text-sm md:text-base dark:text-coolGray-400">
                                                        {{ $detail->product->name }}</p>
                                                </div>
                                                <div class="text-right w-full">
                                                    <p class="text-md font-semibold"> {{ $detail->cant }} x
                                                        ${{ number_format($detail->product->price, 2) }}</p>
                                                    <p class=" text-sm md:text-lg font-semibold">Total.
                                                        ${{ number_format($detail->cant * $detail->product->price, 2) }}
                                                    </p>

                                                </div>
                                            </div>
                                            {{-- <div class="flex text-sm divide-x">
                                                <div class="flex justify-between items-center w-full py-1 pl-0 space-x-1">
                                                    <form class="w-full hover:text-red-400"
                                                        action="{{ route('charts.destroy', $detail) }}" method="POST">
                                                        @method('delete')
                                                        @csrf
                                                        <button onclick="return confirm('¿Eliminar del carrito?')">
                                                            <span class="fas fa-trash-alt"></span>
                                                            <span>Remover</span>
                                                        </button>
                                                    </form>
                                                    <form action="{{ route('charts.update', $detail) }}" method="POST">
                                                        @method('put')
                                                        @csrf
                                                        <div>
                                                            <x-label>Cant.</x-label>
                                                            <div
                                                                class="
                                                            flex space-x-2 items-center">
                                                                <x-input name="cant" type="number"
                                                                    value="{{ $detail->cant }}" class="w-12 h-8">
                                                                </x-input>
                                                                <button
                                                                    class="w-6 h-6 flex items-center justify-center rounded-full bg-green-400 text-white">
                                                                    <span class="fas fa-check"></span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div> --}}
                                        </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                    {{-- Totales --}}
                    <div class="space-y-1 text-right ">

                        <p>Total:
                            <input type="text" disabled class="font-semibold  w-28 text-right" id="spTotal"
                                value="${{ number_format($invoice->total, 2) }}" />
                        </p>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="my-3">
           {{ $invoices->links() }}
       </div>

        {{-- Botones --}}
        <div class="flex justify-end space-x-4">
            <form action="{{ route('invoices.complete') }}" method="POST" id="formInvoice">
                @method('put')
                @csrf
                <input type="hidden" name="invoice" value="{{ $invoice->id }}">
            </form>

            <button type=" submit"
                form="formInvoice"
                class=" bg-black text-white px-6 py-2 border rounded-md dark:bg-indigo-400 dark:text-coolGray-900 dark:border-indigo-400">
                Entregado
                </button>
            </div>
            {{--  --}}
        </div>
        <!---->

    @endsection
