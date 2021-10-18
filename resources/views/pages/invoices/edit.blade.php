@extends('dashboard')

@section('body')
    <div class="container mx-auto h-full flex flex-1 justify-center items-start">
        <div class="w-full max-w-lg relative">
            <a href="{{route('invoices.index')}}" class="absolute font-bold top-3 left-3 p-3 flex space-x-1 items-center">
                <span  class="fas fa-angle-left"></span>
                <span>Volver</span>
            </a>
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-8 bg-white dark:bg-gray-900  shadow-xl flex flex-col space-y-4 rounded-xl"
                    action="{{ route('invoices.update', $invoice) }}" method="POST">
                    @method('put')
                    @csrf
                    <h1 class="font-bold uppercase md:text-lg text-center mb-4">Edición de Factura</h1>
                    <div class="space-y-4 lg:space-y-0 lg:flex lg:space-x-4">
                        <div class="md:w-1/4">
                            <x-label for="payed">Monto Nuevo</x-label>
                            <x-input placeholder="Monto" type="number" for="payed" name="payed" id="payed"
                                value="{{ old('payed', $invoice->payed) }}" required>
                                <x-slot name="icon"> <span class="fas fa-dollar-sign"></span></x-slot>
                            </x-input>
                            <x-input-error for="payed"></x-input-error>
                        </div>
                        <div class="md:w-3/4">
                            <x-label for="note">Comentario</x-label>
                            <x-input placeholder="Nota o comentario" type="text" for="note" name="note" id="note"
                                value="{{ old('note', optional($invoice)->note) }}" required maxlength="50">
                                <x-slot name="icon"> <span class="fas fa-file"></span></x-slot>
                            </x-input>
                            <x-input-error for="note"></x-input-error>
                        </div>
                    </div>
                  
                    <div class="flex justify-end items-center">
                        <x-button class="bg-gray-900 text-white">
                            Guardar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
