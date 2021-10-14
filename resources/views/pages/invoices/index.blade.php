@extends('dashboard')

@section('body')
<div class="max-w-4xl mx-auto bg-white p-4 rounded-xl">
    <h1 class="text-center font-bold uppercase text-xl my-4">Historial de facturas</h1>
    <ul class="cards grid grid-cols-1 md:grid-cols-2 m-3 lg:m-8">
        @if ($invoices->count())
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
                                    <br>Total: ${{ number_format($invoice->payed,2) }}
                                    <br>{{ $invoice->date}}
                                </p>

                            </div>
                            <div class="absolute flex flex-col px-2 py-1 justify-center space-y-4 md:space-y-8 h-full right-1 ">
                                <a href="{{ route('invoices.show', $invoice) }}">
                                    <span class="fas fa-eye text-blue-700"></span>
                                </a>
                                <form action="{{ route('invoices.destroy', $invoice) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button onclick="return confirm('¿Eliminar usuario?')" class=" outline-none">
                                        <span class="fas fa-trash-alt text-red-700"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </li>
            @endforeach
        @else
            <h1 class="text-center my-8 uppercase text-lg">No has añadido ningún invoiceo</h1>
        @endif
    </ul>
    <div class="mx-4 md:mx-8"> 
        {{$invoices->links()}}
    </div>
</div>
@endsection