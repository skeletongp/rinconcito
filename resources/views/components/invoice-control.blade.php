<div>
    @if ($carts->count())
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
<div class="flex items-center {{$carts->count()?:'hidden'}} justify-between space-x-3 ">

    <x-dropdown-link href="{{ route('charts.index') }}">
        Facturar
    </x-dropdown-link>

    <form action="{{ route('charts.empty') }}" method="POST">
        @method('delete')
        @csrf
        <button onclick="return confirm('Vaciar el carrito?')"
            class='text-white px-2 py-1 rounded xl:text-lg font-bold'><span class="text-red-700">Vaciar</span>
        </button>
    </form>

</div>
