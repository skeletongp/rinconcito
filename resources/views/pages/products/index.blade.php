@extends('dashboard')

@section('body')
    <div>
        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
            <div class="px-6 py-2 border-b border-light-grey">
                <div class="font-bold text-xl">Listado de productos</div>
            </div>
            <div class="mx-8 mb-4">
                {{$products->links()}}
            </div>
            <ul class="cards m-8">
                @foreach ($products as $product)
                    <x-card-product :name="$product->name" :stock="$product->stock" :price="$product->price"
                        :code="$product->code" :photo="$product->pict" :id="$product->id"/>
                @endforeach
            </ul>

        </div>
    @endsection
