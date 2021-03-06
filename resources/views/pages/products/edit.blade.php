@extends('dashboard')

@section('body')
    <div class="max-w-7xl mx-auto py-4 lg:py-10 h-full w-full ">
        <div class="max-w-lg mx-auto shadow-xl p-4 bg-white rounded-xl">
            <h1 class="font-bold my-3 uppercase text-xl lg:text-2xl text-center bg-white">Edición de producto</h1>
            <form action="{{ route('products.update', $product) }}" method="POST" class="space-y-4" id="p{{$product->id}}"
                enctype="multipart/form-data">
                @method('put')
                @csrf
                <div>
                    <x-label>Nombre del producto</x-label>
                    <x-input type="text" name="name" placeholder="Nombre claro y preciso"
                        value="{{ old('name', $product->name) }}" required></x-input>
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
                        <x-input name="stock" type="numbers" value="{{ old('stock', $product->stock) }}" placeholder="Stock" required></x-input>
                    </div>
                </div>
                <div class="flex items-center space-x-2 ">
                    <div class="w-full">
                        <x-label>Costo</x-label>
                        <x-input type="number" name="cost" value="{{ old('cost', $product->cost) }}" placeholder="Costo"
                            required></x-input>
                    </div>
                    <div class="w-full">
                        <x-label>Precio</x-label>
                        <x-input type="number" name="price" placeholder="Precio" value="{{ old('price', $product->price) }}"
                            required></x-input>
                    </div>
                </div>
                <div class="flex items-center space-x-2 ">
                    <div class="w-full">
                        <x-select name="type" id="type">
                            <option {{$product->type=='COMIDA'?'selected':''}} value="COMIDA">Con ingredientes</option>
                            <option {{$product->type=='OTRO'?'selected':''}} value="OTRO">Sin Ingredientes</option>
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
                        <x-button data-label="¿Actualizar producto?" form="p{{$product->id}}"
                            class="bg-gray-900 text-white hover:text-black hover:bg-green-200 confirm">
                            Actualizar
                        </x-button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
