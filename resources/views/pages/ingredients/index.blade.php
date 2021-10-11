@extends('dashboard')

@section('body')
    <div class="max-w-4xl mx-auto md:mx-16 lg:mx-auto bg-white p-4 rounded-xl">
        @if ($ingredients->count())
        <h1 class="text-center font-bold uppercase text-xl mb-4 lg:mb-10 mt-4">Lista de ingredientes disponibles</h1>
        <div class="lg:grid lg:grid-cols-2 lg:gap-6">
            @foreach ($ingredients as $ing)
            <div class=" flex items-center  my-2 rounded-xl shadow-xl bg-gray-100">
                <div class="w-1/6 text-center text-xl  px-4 py-2 rounded-l-xl">
                    <div class=" h-7 font-semibold rounded-full ">
                        <span>{{ $ing->stock?:'X' }}</span>
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
                    <div class="w-7 h-7 text-center flex  justify-center items-center  font-semibold rounded-full bg-white">
                        <span class="fas fa-pen text-sm cursor-pointer text-blue-700"></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
            <h1 class="text-center font-bold uppercase text-xl">No hay ingredientes registrados</h1>
        @endif
    </div>
@endsection