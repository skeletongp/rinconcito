@extends('dashboard')

@section('body')

    <div class="max-w-6xl mx-auto ">

        <div class="bg-white p-4 lg:p-8 max-w-lg mx-auto rounded-xl relative">
            <a href="{{ route('products.index') }}" class="absolute font-bold top-3 left-3 p-3 flex space-x-1 items-center">
                <span class="fas fa-angle-left"></span>
                <span>Atrás</span>
            </a>
            <div class="absolute right-3 top-3">
                @hasrole('admin')
                    <x-dropdown contentClasses=" border-none outline-none p-1 w-max bg-white z-20" align='right'>
                        <x-slot name="trigger">
                            <span class="fas fa-plus cursor-pointer "></span>
                        </x-slot>
                        <x-slot name="content">
                            <form action="{{ route('products.upstock', $product) }}" method="POST" id="formadd">
                                @csrf
                                <div class="space-x-2 flex items-center">
                                    <x-input name="stock" form="formadd" class="h-8" placeholder="Sumar stock"
                                        required min="1"></x-input>
                                    <button form="formadd" class="w-7 h-7 rounded-full bg-green-500"><span
                                            class="fas fa-check text-white"></span></button>
                                </div>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endhasrole
            </div>
            <div class=" max-w-lg mx-auto my-3">
                <ul class="cards m-8">
                    <x-card-product :name="$product->name" :stock="$product->hasStock()" :price="$product->price"
                        :code="$product->code" :photo="$product->pict" :id="$product->id" :type="$product->type" />

                </ul>
            </div>
            <div class="max-w-xl mx-auto">
                @if ($details->count())
                    <h1 class="mt-2 mb-4 text-center font-bold text-xl lg:text-2xl">Ventas de hoy</h1>
                    <table class="table p-4 bg-white shadow rounded-lg">
                        <thead>
                            <tr>
                                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-bold text-gray-900">
                                    Cant.
                                </th>
                                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-bold text-gray-900">
                                    Hora
                                </th>
                                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-bold text-gray-900">
                                    Cliente
                                </th>
                                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-bold text-gray-900">
                                    Monto
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($details as $det)
                                <tr class="text-gray-700">
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        {{ $det->cant }}
                                    </td>
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        {{ $det->created_at->toTimeString() }}
                                    </td>
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        {{ $det->client->name }}
                                    </td>
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        ${{ number_format($det->price * $det->cant, 2) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $details->links() }}
                    </div>
                @endif

            </div>
        </div>
        @if (Session::has('success'))
            <x-alert type="success"></x-alert>
        @endif
    </div>

@endsection
