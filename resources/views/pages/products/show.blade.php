@extends('dashboard')

@section('body')

    <div class="max-w-6xl mx-auto">

        <div class="max-w-lg mx-auto my-3">
            <ul class="cards m-8">
                <x-card-product :name="$product->name" :stock="$product->hasStock()" :price="$product->precio"
                    :code="$product->code" :photo="$product->pict" :id="$product->id" :type="$product->type"  />
            </ul>
        </div>
        <div class="ma-w-2xl mx-auto">
            <table class="table-responsive mx-auto">
                <thead>
                    <th>Hora</th>
                    <th>Cant.</th>
                    <th>Client</th>
                </thead>
            </table>

        </div>
    </div>

@endsection
