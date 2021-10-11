@extends('dashboard')

@section('body')
    <div class="max-w-3xl mx-auto bg-white p-4 rounded-xl">
        <div class="flex flex-col max-w-3xl p-6 space-y-4 sm:p-10 dark:bg-coolGray-900 dark:text-coolGray-100">
            <h2 class="text-xl font-semibold">Artículos para facturar</h2>
            <ul class="flex flex-col divide-y divide-coolGray-700">
                <li class="flex flex-col py-6 sm:flex-row sm:justify-between">
                    <div class="flex w-full space-x-2 sm:space-x-4">
                        <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-coolGray-500"
                            src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?ixlib=rb-1.2.1&amp;ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=1350&amp;q=80"
                            alt="Polaroid camera">
                        <div class="flex flex-col justify-between w-full pb-4">
                            <div class="flex justify-between w-full pb-2 space-x-2">
                                <div class="space-y-1">
                                    <h3 class="text-lg font-semibold leading-snug sm:pr-8">Polaroid camera</h3>
                                    <p class="text-sm dark:text-coolGray-400">Classic</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-semibold">59.99€</p>
                                    <p class="text-sm line-through dark:text-coolGray-600">75.50€</p>
                                </div>
                            </div>
                            <div class="flex text-sm divide-x">
                                <button type="button" class="flex items-center px-2 py-1 pl-0 space-x-1">
                                    <span class="fas fa-trash-alt"></span>
                                    <span>Remover</span>
                                </button>

                            </div>
                        </div>
                    </div>
                    <!---->
            </ul>
            <div class="space-y-1 text-right ">
                <p>Subtotal:
                    <input type="text" disabled class="font-semibold money w-16 text-right" id="spSubtotal" value="${{ number_format($carts->sum('total'), 2) }}"/>
                </p>
                <p>Desc:
                    <input type="text" disabled class="font-semibold  w-16 text-right money" id="spDesc" value="${{ number_format(0, 2) }}"/>
                </p>
                <p>Total:
                    <input type="text" disabled class="font-semibold money w-16 text-right" id="spTotal" value="${{ number_format($carts->sum('total'), 2) }}"/>
                </p>
            </div>
            <div>
                <form action="{{ route('invoices.store') }}" method="POST" id="formInvoice">
                    @csrf
                    <x-input id="subtotal" class="text-right hidden" type="hidden" money="true" name="subtotal" readonly required
                        value="{{ $carts->sum('total') }}">
                    </x-input>
                    <x-input id="total" class="text-right opacity-0" type="hidden" money="true" name="total"
                        value="{{ $carts->sum('total') }}" readonly required>
                    </x-input>
                    <x-input class="text-right hidden" type="hidden" money="true" name="payed" id="payed" required
                        value="{{ $carts->sum('total') }}" min="0" max="{{ $carts->sum('total') }}">
                    </x-input>
                    <div class="lg:flex items-center lg:space-x-2 my-3">
                        <div class="flex space-x-4 items-center w-full">
                            <div class="w-full">
                                <x-label>Cliente</x-label>
                                <x-select name="client_id" required>
                                    @foreach ($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
                                    @endforeach
                                </x-select>
                            </div>
                            <div class="w-full">
                                <x-label>Vendedor</x-label>
                                <x-input readonly required value="{{ Auth::user()->fullname }}">
                                </x-input>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            </div>
                        </div>
                        <div class="">
                            <div class="w-full">
                                <x-label>Descuento</x-label>
                                <x-input id="discount" class="text-right " money="true" type="text" name="discount" required
                                    value="0" min="0" max="{{ $carts->sum('total') }}">
                                </x-input>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="flex justify-end space-x-4">
                    <button type="button" class="px-6 py-2 border rounded-md dark:border-indigo-400">Back
                        <span class="sr-only sm:not-sr-only">to shop</span>
                    </button>
                    
                    <button type="submit" form="formInvoice"
                        class="px-6 py-2 border rounded-md dark:bg-indigo-400 dark:text-coolGray-900 dark:border-indigo-400">
                        <span class="sr-only sm:not-sr-only">Continue to</span>Checkout
                    </button>
                </div>
            </div>
        </div>
       
    </div>
@endsection
