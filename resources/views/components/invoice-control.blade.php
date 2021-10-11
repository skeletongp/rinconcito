<div>
    @if ($carts->count())
        <div class="flex items-center justify-center space-x-3 px-3">
            <x-dropdown align="top" width="w-max" contentClasses="h-max bg-white p-4">
                <x-slot name="trigger"><span class="text-green-700">Facturar</span></x-slot>
                <x-slot name="content">
                    <form action="{{ route('invoices.store') }}" method="POST" id="formInvoice" class="z-50">
                        @csrf
                        <div class="space-y-4">
                            <div class="flex space-x-4 items-center">
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
                            <div class="flex space-x-4 items-center">
                                <div class="w-full">
                                    <x-label>Subtotal</x-label>
                                    <x-input id="subtotal" class="text-right" type="text" name="subtotal" readonly
                                        required value="{{ $carts->sum('total') }}">
                                    </x-input>
                                </div>
                                <div class="w-full">
                                    <x-label>Descuento</x-label>
                                    <x-input id="discount" class="text-right" type="number" name="discount" required
                                        value="0.00" min="0" max="{{ $carts->sum('total') }}">
                                    </x-input>
                                </div>
                            </div>
                            <div class="flex space-x-4 items-center ">
                                <div class="w-full">
                                    <x-label>Total</x-label>
                                    <x-input id="total" class="text-right" type="text" name="total"
                                        value="{{ $carts->sum('total') }}" readonly required>
                                    </x-input>
                                </div>
                                <div class="w-full">
                                    <x-label>Pagado</x-label>
                                    <x-input class="text-right" type="number" name="payed" id="payed" required
                                        value="{{ $carts->sum('total') }}" min="0" max="{{ $carts->sum('total') }}">
                                    </x-input>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end my-2">
                            <x-button class="bg-green-800 text-white">Facturar</x-button>
                        </div>
                    </form>
                </x-slot>

                {{-- <x-slot name="saveButton">
                <x-button id="makeInvoive" class="bg-gray-700 text-gray-200 hover:bg-gray-900  hover:text-white">
                    <span class="hidden lg:block">Facturar</span>
                    <span class="lg:hidden fas fa-hand-holding-usd text-base"></span>
                </x-button>
            </x-slot> --}}
            </x-dropdown>
            <form action="{{ route('charts.empty') }}" method="POST">
                @method('delete')
                @csrf
                <button onclick="return confirm('Vaciar el carrito?')"
                    class='text-white px-2 py-1 rounded text-lg font-bold'><span class="text-red-700">Vaciar</span>
                </button>
            </form>

        </div>
        <div class=" flex justify-between items-center px-2">
            <span>Total:</span>
            <span>${{ number_format($carts->sum('total'), 2) }}</span>
        </div>

        @foreach ($carts as $cart)
            <div class="flex items-center space-x-2 my-2">
                <div
                    class="flex w-full items-center justify-between bg-white leading-none  rounded-full p-2 shadow text-teal text-sm">
                    <form action="{{ route('charts.destroy', $cart) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button onclick="return confirm('¿Eliminar del carrito?')"><span
                                class="text-red-400 fas fa-times"></span></button>
                    </form>
                    <span class="inline-flex px-2 text-pink-600 text-left w-full pl-3">
                        {{ $cart->product->code }}
                    </span>
                    <span class="inline-flex px-2 text-blue-800">
                        {{ $cart->cant }}
                    </span>
                </div>

            </div>

        @endforeach
    @endif
</div>
