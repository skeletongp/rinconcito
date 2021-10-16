@props(['name', 'stock', 'code', 'price', 'url' => '', 'photo', 'id', 'type', 'show' => false])
<li class="relative shadow-xl max-w-sm ">
    <form id="frm{{ $id }}" action="{{ route('charts.store') }}" method="POST" class="card frmChart "
        disabled>
        @csrf
        <div
            class="absolute top-0   items-center  flex flex-col justify-between -ml-1 -mt-1 rounded-b-full z-120 bg-white">
            <button class="text-lg lg:text-xl hover:bg-transparent p-3 hover:text-green-600"><span
                    class="fas fa-cart-plus"></span></button>
            <div class="bg-white py-0 h-max rounded-xl">
                <x-quantity :key="$id" :id="$id" :stock="$stock"></x-quantity>
            </div>
            <input type="hidden" name="product_id" value="{{ $id }}">
        </div>
        <div class="card_image w-full h-full bg-cover bg-center bg-no-repeat "
            style="background-image: url({{ $photo }})">
            @if ($show)
                <a href="{{ route('products.show', $id) }}"
                    class=" absolute right-4 top-4 w-8 h-8 bg-white rounded-full flex items-center justify-center">
                    <span class="fas fa-eye text-xl"></span>
                </a>
            @else
                @role('admin')
                <div class=" flex flex-col space-y-3 absolute right-4 top-4">
                    <a href="{{ route('products.edit', $id) }}"
                        class="  w-8 h-8 bg-white rounded-full flex items-center justify-center">
                        <span class="fas fa-pen text-xl text-green-500"></span>
                    </a>
                    <x-button form="formDelete" onclick="return confirm('¿Eliminar este producto?')"
                        class=" w-8 h-8 bg-white rounded-full flex items-center justify-center">
                        <span class="fas fa-trash-alt text-xl text-red-500"></span>
                    </x-button>
                    

                </div>
                @endrole
            @endif
        </div>
        <img src="" class="card__image" alt="" />
        <div class="card__overlay">
            <div class="card__header">

                <div class="card__thumb flex items-center justify-center {{ $stock ? 'bg-green-500' : 'bg-red-500' }}"
                    alt="">
                    <span class="fas {{ $stock ? 'fa-check' : 'fa-times' }} text-white"></span>
                </div>
                <div class="card__header-text">
                    <div class="card__title flex justify-between {{ $stock ? '' : 'line-through' }} mx-2 md:mx-0">
                        <div>
                            <span class="font-medium capitalize">{{ $code }}</span>-
                            <span class="text-green-800 font-bold">{{ $price }}</span>
                        </div>
                        <div class="w-24 h-12">
                           <x-input name="price" value="{{old('price',$price)}}" class=""></x-input>
                        </div>
                        
                    </div>
                    <div class="flex justify-between items-center w-72 ">
                        <span
                            class="card__status text-black">{{ $type == 'OTRO' ? $stock . ' en' : ($stock ? 'En' : 'Sin ') }}
                            Stock</span>
                        @if (!$stock)
                            <span class="text-sm text-red-500 font-semibold mr-12 lg:mr-8">
                                {{ $type == 'COMIDA' ? 'Faltan ingredientes' : 'Agotado' }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="flex justify-between  items-center">
                <p class="card__description leading-5 text-black lg:text-lg">{{ $name }}</p>
                @if ($type == 'COMIDA')
                    <a class="mr-4 px-2 py-1 rounded-lg bg-black text-white"
                        href="{{ route('ingredients.ingredients', $id) }}">Ingredientes</a>
                @endif
            </div>
        </div>
    </form>
    <form id="formDelete" action="{{ route('products.destroy', $id) }}" method="POST">
        @method('delete')
        @csrf
    </form>
</li>
