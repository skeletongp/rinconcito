@props(['name', 'stock', 'code', 'price', 'url' => '', 'photo', 'id', 'type'])
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
        <div class="card_image w-full h-full bg-cover bg-center bg-no-repeat" style="background-image: url({{$photo}})">

        </div>
        <img src="" class="card__image" alt="" />
        <div class="card__overlay">
            <div class="card__header">

                <div class="card__thumb flex items-center justify-center {{ $stock ? 'bg-green-500' : 'bg-red-500' }}"
                    alt="">
                        <span class="fas {{$stock?'fa-check':'fa-times'}} text-white"></span>
                </div>
                <div class="card__header-text">
                    <h3 class="card__title flex space-x-2"><span
                            class="font-medium capitalize">{{ $code }}</span>-<span
                            class="text-green-800 font-bold">{{ $price }}</span></h3>
                   <div class="flex justify-between items-center w-72 ">
                    <span class="card__status text-black">{{ $stock }} en Stock</span>
                    @if (!$stock)
                        <span  class="text-sm text-red-500 font-semibold mr-10">Faltan ingredientes</span>
                    @endif
                   </div>
                </div>
            </div>
            <div class="flex justify-between  items-center">
                <p class="card__description leading-5 text-black lg:text-lg">{{ $name }}</p>
                @if ($type == 'COMIDA')
                    <a class="mr-4 px-2 py-1 rounded-lg bg-black text-white" href="{{route('ingredients.ingredients', $id)}}">Ingredientes</a>
                @endif
            </div>
        </div>
    </form>
</li>
