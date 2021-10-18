@extends('dashboard')

@section('body')
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-xl">
        <h1 class="text-center font-bold uppercase text-xl my-4">Historial de facturas</h1>
        <form action="" class="max-w-sm mx-auto my-2">
            <x-input name="s" type="text" placeholder="Buscar por número o vendedor">
                <x-slot name="icon">
                    <button>
                        <span class="fas fa-search text-blue-500"></span>
                    </button>
                </x-slot>
            </x-input>
        </form>
        @if ($invoices->count())
            <ul class="cards grid grid-cols-1 md:grid-cols-2 m-3 lg:m-8">
                @foreach ($invoices as $invoice)
                    <li class=" shadow-xl max-w-sm bg-white p-2 rounded-xl ">
                        <div class="w-full h-24 bg-cover bg-center flex flex-col justify-center rounded-xl "
                            style="background-image: url(/fondo.jpg)">
                            <div class="  h-full flex items-center space-x-3 bg-gray-50 p-2 md:p-4 bg-opacity-60 relative">
                                <div class="h-12 w-12 md:w-16 md:h-16 rounded-full bg-cover bg-center "
                                    style="background-image: url('{{ $invoice->client->photo }}')">
                                </div>
                                <div class="flex flex-col justify-end">
                                    <span class="text-base md:text-xl font-bold">{{ $invoice->client->name }}</span>
                                    <p class="text-sm w-max font-bold leading-4 mt-2">
                                        {{ $invoice->client->phone }}
                                        <br>Total: ${{ number_format($invoice->payed, 2) }}
                                        <br>{{ $invoice->day }}
                                    </p>

                                </div>
                                <div
                                    class="absolute flex flex-col px-2 py-1 justify-center space-y-4 md:space-y-8 h-full right-1 ">
                                    <a href="{{ route('invoices.show', $invoice) }}">
                                        <span class="fas fa-eye text-blue-700"></span>
                                    </a>
                                    <a href="{{ route('invoices.edit', $invoice) }}">
                                        <span class="fas fa-pen text-green-700"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </li>
                @endforeach
            </ul>
        @else
            <h1 class="text-center my-8 uppercase text-lg font-bold">No se ha encontrado ninguna factura</h1>
        @endif
        <div class="mx-4 md:mx-8">
            {{ $invoices->links() }}
        </div>
    </div>
@endsection
