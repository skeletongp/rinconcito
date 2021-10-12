@extends('dashboard')

@section('body')
    <div class="max-w-3xl mx-auto bg-white p-2 px-4 rounded-xl">
        <div class="flex flex-col max-w-3xl p-6 space-y-4 md:px-6 md:py-4  ">
            <h2 class="text-xl font-semibold">Artículos para facturar</h2>
            <ul class="flex flex-col divide-y divide-coolGray-700">
                {{-- Producto --}}
                @if ($carts->count())
                    @foreach ($carts as $cart)
                        <li class="flex flex-col pb-3 pt-2 sm:flex-row sm:justify-between">
                            <div class="flex w-full space-x-2 sm:space-x-4">
                                <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-coolGray-500"
                                    src="{{ $cart->product->Pict }}" alt="Polaroid camera">
                                <div class="flex flex-col justify-between w-full pb-4">
                                    <div class="flex justify-between w-full pb-2 space-x-2">
                                        <div class="space-y-1 w-full">
                                            <h3 class="text-lg md:text-xl font-semibold leading-snug sm:pr-8">
                                                {{ $cart->product->code }}</h3>
                                            <p class="text-sm md:text-base dark:text-coolGray-400">{{ $cart->product->name }}</p>
                                        </div>
                                        <div class="text-right w-full">
                                            <p class="text-md font-semibold"> {{ $cart->cant }} x
                                                ${{ number_format($cart->product->price, 2) }}</p>
                                            <p class=" text-sm md:text-lg font-semibold">Total.
                                                ${{ number_format($cart->cant * $cart->product->price, 2) }}</p>

                                        </div>
                                    </div>
                                    <div class="flex text-sm divide-x">
                                        <div class="flex justify-between items-center w-full py-1 pl-0 space-x-1">
                                            <form class="w-full hover:text-red-400"
                                                action="{{ route('charts.destroy', $cart) }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button onclick="return confirm('¿Eliminar del carrito?')">
                                                    <span class="fas fa-trash-alt"></span>
                                                    <span>Remover</span>
                                                </button>
                                            </form>
                                            <form action="{{ route('charts.update', $cart) }}" method="POST">
                                                @method('put')
                                                @csrf
                                                <div class="">
                                                    <div>
                                                        <x-label>Cant.</x-label>
                                                        <div class="
                                                    flex space-x-2 items-center">
                                                    <x-input name="cant" type="number" value="{{ $cart->cant }}"
                                                        class="w-12 h-8"></x-input>
                                                    <button
                                                        class="w-6 h-6 flex items-center justify-center rounded-full bg-green-400 text-white"><span
                                                            class="fas fa-check"></span></button>
                                                </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                            </div>
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        {{-- Totales --}}
        <div class="space-y-1 text-right ">
            <p>Subtotal:
                <input type=" text" disabled class="font-semibold  w-16 text-right" id="spSubtotal"
                    value="${{ number_format($carts->sum('total'), 2) }}" />
            </p>
            <p>Desc:
                <input type="text" disabled class="font-semibold  w-16 text-right " id="spDesc"
                    value="${{ number_format(0, 2) }}" />
            </p>
            <p>Total:
                <input type="text" disabled class="font-semibold  w-16 text-right" id="spTotal"
                    value="${{ number_format($carts->sum('total'), 2) }}" />
            </p>
        </div>
        {{--  --}}
        {{-- Formulario --}}
        <div>
            <form action="{{ route('invoices.store') }}" method="POST" id="formInvoice">
                @csrf
                <x-input id="subtotal" class="text-right hidden" type="hidden" money="true" name="subtotal" readonly
                    required value="{{ $carts->sum('total') }}">
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
                                    <option value="{{ $client->id }}">{{ $client->name }}
                                    </option>
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
                                <div class=" w-full">
                        <x-label>Descuento</x-label>
                        <x-input id="discount" class="text-right "  type="text" name="discount" required
                            value="0" min="0" max="{{ $carts->sum('total') }}">
                        </x-input>
                    </div>
                </div>
            </form>
        </div>
        {{--  --}}
        {{-- Botones --}}
        <div class="flex justify-end space-x-4">
            <a href="{{ route('products.index') }}" class="px-6 py-2 border rounded-md dark:border-indigo-400">Volver
            </a>

            <button type="submit" form="formInvoice"
                class="px-6 py-2 border rounded-md dark:bg-indigo-400 dark:text-coolGray-900 dark:border-indigo-400">
                Cobrar
            </button>
        </div>
        {{--  --}}
    </div>
    <!---->

@endsection
