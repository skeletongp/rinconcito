@extends('dashboard')

@section('body')
    <div>
        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
            <div class="px-6 py-2 border-b border-light-grey">
                <div class="font-bold text-xl">Listado de productos</div>
            </div>
            <div class="mx-8 mb-4">
                {{ $products->links() }}
            </div>
            @if (isset($message))
                <h1 class="text-center">$message</h1>
            @endif
            <div>
                <form action="{{ route('products.index') }}" class="px-3 lg:px-8">
                    <div class="lg:w-1/3">
                    <x-label for="search">Buscar</x-label>
                    <x-input name="q" value="{{old('q',request('q'))}}"></x-input>
                    </div>
                </form>
            </div>
            <ul class="cards m-8">
                @if ($products->count())
                    @foreach ($products as $product)
                        <x-card-product :name="$product->name" :stock="$product->stock" :price="$product->precio"
                            :code="$product->code" :photo="$product->pict" :id="$product->id" />
                    @endforeach
                @else
                    <h1 class="text-center my-8 uppercase text-lg">No has añadido ningún producto</h1>
                @endif
            </ul>

        </div>
    @endsection
