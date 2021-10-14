@extends('dashboard')

@section('body')
    <div class="max-w-7xl mx-auto py-4 lg:py-10 h-full w-full ">
        <div class="max-w-lg mx-auto shadow-xl p-4 bg-white rounded-xl">
            <h1 class="font-bold my-3 uppercase text-xl lg:text-2xl text-center bg-white">Registro de producto</h1>
            <form action="{{ route('products.store') }}" method="POST" class="space-y-4"
                enctype="multipart/form-data">
                @csrf
                <div>
                    <x-label>Nombre del producto</x-label>
                    <x-input type="text" name="name" placeholder="Nombre claro y preciso" required></x-input>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-2/3 md:w-3/4">
                        <x-label for="photo">Foto del producto</x-label>
                        <div id="textPhoto"
                            class="p-2 bg-white border border-gray-200 rounded-lg cursor-pointer select-none flex items-center justify-between">
                            <span id="namePhoto">Buscar...</span>
                            <span class="fas fa-images text-xl"></span>
                        </div>
                        <input type="file" name="photo" id="photo" class="hidden"
                            accept="image/png, image/gif, image/jpeg">
                    </div>
                    <div class="w-1/3 md:w-1/4">
                        <x-label>Cantidad</x-label>
                        <x-input name="stock" type="numbers" placeholder="Stock"></x-input>
                    </div>
                </div>
                <div class="flex items-center space-x-2 ">
                    <div class="w-full">
                        <x-label>Costo</x-label>
                        <x-input type="number" name="cost" placeholder="Costo" required></x-input>
                    </div>
                    <div class="w-full">
                        <x-label>Precio</x-label>
                        <x-input type="number" name="price" placeholder="Precio" required></x-input>
                    </div>
                </div>
                <div class="flex items-center space-x-2 ">
                    <div class="w-full">
                        <x-select name="type" id="type">
                            <option value="COMIDA">Con ingredientes</option>
                            <option value="OTRO">Sin ingredientes</option>
                            <x-slot name="icon">
                                <label for="type">
                                    <span class="fas fa-angle-down cursor-pointer
                                    ">
                                    </span>
                                </label>
                            </x-slot>
                        </x-select>
                    </div>
                    <div class="flex justify-end">
                        <x-button class="bg-gray-900 text-white hover:text-black hover:bg-green-200">Añadir</x-button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
