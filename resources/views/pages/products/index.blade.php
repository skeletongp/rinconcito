@extends('dashboard')

@section('body')
    <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
        <div class="px-6 py-2 border-b border-light-grey flex justify-between">
            <div class="font-bold text-xl">Listado de productos</div>
            @role('admin')
            <a href="{{ route('products.create') }}" class="flex space-x-2 items-center">
                <span class="hidden lg:block font-bold">Nuevo</span>
                <span class="fas fa-plus"></span>
            </a>
            @endrole
        </div>
        <div class="mx-8 mb-4 mt-2">
            {{ $products->links() }}
        </div>
        @if (Session::has('success'))
            <x-alert type="success"></x-alert>
        @endif
        @if (Session::has('error'))
        <x-alert type="error"></x-alert>
    @endif
        <div>
            <form action="{{ route('products.index') }}" class="px-3 lg:px-8">
                <div class="md:w-1/2 lg:w-1/3 md:pl-8 lg:px-0">
                    <x-label for="search">Buscar</x-label>
                    <x-input type="text" name="q" value="{{ old('q', request('q')) }}">
                        <x-slot name="icon">
                            <x-button>
                                <span class="text-xl text-blue-500 fas fa-search"></span>
                            </x-button>
                        </x-slot>
                    </x-input>
                </div>
            </form>
        </div>
        <ul class="cards m-8">
            @if ($products->count())
                @foreach ($products as $product)
                    <x-card-product :name="$product->name" :stock="$product->hasStock()" :price="$product->precio"
                        :code="$product->code" :photo="$product->pict" :id="$product->id" :type="$product->type" :show="true" />
                @endforeach
            @else
                <h1 class="text-center my-8 uppercase text-lg">No has añadido ningún producto</h1>
            @endif
        </ul>

    </div>
@endsection
