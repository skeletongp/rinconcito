@extends('dashboard')

@section('body')

    <div class="max-w-6xl mx-auto">

        <div class="bg-white p-4 lg:p-8 max-w-lg mx-auto rounded-xl">
            <div class=" max-w-lg mx-auto my-3">
                <ul class="cards m-8">
                    <x-card-product :name="$product->name" :stock="$product->hasStock()" :price="$product->precio"
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
                                    Precio
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
                                        ${{ number_format( $det->product->price, 2) }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{$details->links()}}
                    </div>
                @endif

            </div>
        </div>
    </div>

@endsection
