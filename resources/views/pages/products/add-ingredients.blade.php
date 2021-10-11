@extends('dashboard')

@section('body')

    <div class="max-w-xl mx-auto bg-white p-4 rounded-xl">
        <h1 class="text-center font-bold uppercase text-xl mt-4 lg:mt-16 mb-4">Añadir ingredientes</h1>
        <form action="{{ route('products.add_ingredients', $product) }}" method="POST">
            @csrf
            <div class="flex items-center space-x-2">
                <div class="w-5/6">
                    <x-label>Ingrediente</x-label>
                    <x-select name="ingredient_id">
                        @foreach ($ingredients as $ing)
                            <option value="{{ $ing->id }}">{{ $ing->name }}</option>
                        @endforeach
                    </x-select>
                </div>
                <div>
                    <x-label>Cantidad</x-label>
                    <x-input type="number" name="cant" value="1" step="0.25">

                    </x-input>
                </div>
            </div>
            <div class="flex justify-end my-2">
                <x-button class="bg-black text-white hover:text-black">Añadir</x-button>
            </div>
        </form>

        @if ($product->ingredients->count())
            <h1 class="text-center text-xl font-bold uppercase ">Ingredientes de <br> {{ $product->name }}</h1>
            <div class="max-w-sm mx-auto">
                @foreach ($product->ingredients as $ing)
                    <div class=" flex items-center  my-2">
                        <div class="w-1/6 text-center text-xl bg-blue-300 px-4 py-2 rounded-l-xl">
                            <div class=" h-7 font-semibold rounded-full ">
                                <span>{{ $ing->pivot->cant }}</span>
                            </div>
                        </div>
                        <div class="w-4/6 text-xl bg-green-300 px-4 py-2 ">
                            <span>{{ $ing->name }}</span>
                        </div>
                        <div class="w-1/6 text-xl bg-blue-300 px-4 py-2 rounded-r-xl">
                            <div class="w-7 h-7 text-center font-semibold rounded-full bg-white">
                                <form action="{{ route('ingredients.remove',[$product, $ing]) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('Remover ingrediente?')"
                                        class="fas fa-times cursor-pointer text-red-500"></button>
                                </form>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        @endif

    </div>
@endsection
