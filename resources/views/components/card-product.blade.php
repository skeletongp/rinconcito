@props(['name', 'stock', 'code', 'price', 'url' => '', 'photo', 'id'])
<li class="relative shadow-xl max-w-sm">
    <form id="frm{{ $id }}" action="{{ route('charts.store') }}" method="POST" class="card frmChart" disabled>
        @csrf
        <div class="absolute top-0   items-center  flex flex-col justify-between -ml-1 -mt-1 rounded-b-full z-20 bg-white">
            <button class="text-lg lg:text-xl hover:bg-transparent p-3 hover:text-green-600"><span
                    class="fas fa-cart-plus"></span></button>
            <div class="bg-white py-0 h-max rounded-xl">
                <x-quantity :key="$id" :id="$id" :stock="$stock"></x-quantity>
            </div>
            <input type="hidden" name="product_id" value="{{ $id }}">
        </div>
        <img src="{{ $photo }}" class="card__image" alt="" />
        <div class="card__overlay">
            <div class="card__header">
                
                <div class="card__thumb flex items-center justify-center {{ $stock ? 'bg-green-500' : 'bg-red-500' }}"
                    alt="">
                    @if ($stock)
                        <span class="fas fa-check text-white"></span>
                    @else
                        <span class="fas fa-times text-white"></span>
                    @endif
                </div>
                <div class="card__header-text">
                    <h3 class="card__title flex space-x-2"><span
                            class="font-medium capitalize">{{ $code }}</span>-<span
                            class="text-green-800 font-bold">{{ $price }}</span></h3>
                    <span class="card__status text-black">{{ $stock }} en Stock</span>
                </div>
            </div>
            <p class="card__description leading-5 text-black lg:text-lg">{{ $name }}</p>
        </div>
    </form>
</li>
