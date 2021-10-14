@extends('dashboard')

@section('body')
    <div class="max-w-4xl mx-auto md:mx-16 lg:mx-auto bg-white p-4 rounded-xl">
        {{-- Nuevo ingrediente --}}
        <div class="my-2 ">
            <h1 class="my-3 font-bold text-center uppercase text-lg">Nuevo Ingrediente</h1>
            <form action="{{ route('ingredients.store') }}" method="POST"
                class="max-w-md mx-auto shadow-xl px-4 pt-4 pb-2 rounded-xl">
                @csrf
                <div class="flex items-center space-x-2  ">
                    <div class="w-3/4">
                        <x-label>Nombre</x-label>
                        <x-input name="name" value="{{ old('name', request('name')) }}" type="text" placeholder="Nombre" required>
                        </x-input>
                    </div>
                    <div class="w-1/4">
                        <x-label>Cantidad</x-label>
                        <x-input name="stock" value="{{ old('stock', request('stock')) }}" type="number" step="0.5"
                            placeholder="Cantidad" required></x-input>
                    </div>
                </div>
                <div class="flex justify-end my-4">
                    <x-button class="bg-black text-white">Guardar</x-button>
                </div>
            </form>
        </div>
        {{--  --}}
        {{-- Lista de ingredientes --}}
        @if ($ingredients->count())
            <h1 class="text-center font-bold uppercase text-xl mb-4 lg:mb-10 mt-4">Lista de ingredientes disponibles</h1>
            <div class="lg:grid lg:grid-cols-2 lg:gap-6">
                @foreach ($ingredients as $ing)
                    <div class=" flex items-center  my-2 rounded-xl shadow-xl bg-gray-100">
                        <div class="w-1/6 text-center text-xl  px-4 py-2 rounded-l-xl">
                            <div class=" h-7 font-semibold rounded-full ">
                                <span>{{ $ing->stock ?: 'X' }}</span>
                            </div>
                        </div>
                        <div class="w-8/12 text-xl px-4 py-2  text-black">
                            <span>{{ $ing->name }}</span>
                        </div>
                        <div class="w-3/12 text-xl  px-4 py-2 rounded-r-xl flex items-center space-x-4 justify-between">
                            <div class="w-7 h-7 text-center  font-semibold rounded-full bg-white">
                                <form action="{{-- {{ route('ingredients.remove',[$product, $ing]) }} --}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('Remover ingrediente?')"
                                        class="fas fa-times cursor-pointer text-red-500"></button>
                                </form>
                            </div>
                            <a href="{{ route('ingredients.index', ['name' => $ing->name, 'stock' => $ing->stock]) }}"
                                class="w-7 h-7 text-center flex  justify-center items-center  font-semibold rounded-full bg-white">
                                <span class="fas fa-pen text-sm cursor-pointer text-blue-700"></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="px-4 my-3">
                {{$ingredients->links()}}
            </div>
            {{--  --}}
        @else
            <h1 class="text-center font-bold uppercase text-xl">No hay ingredientes registrados</h1>
        @endif
    </div>
@endsection
