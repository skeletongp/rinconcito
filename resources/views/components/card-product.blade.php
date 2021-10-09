@props(['name','stock','code','price','url'=>'', 'photo', 'id'])
    <li class="relative shadow-xl max-w-sm">
      <form action="" method="POST" class="card">
          <div class="absolute top-0 w-full h-6 items-center px-8  flex justify-between space-x-3">
            <button class="text-lg lg:text-xl hover:bg-transparent p-3 hover:text-green-600"><span class="fas fa-cart-plus"></span></button>
            <div class="bg-white py-0 h-max rounded-xl">
                <x-quantity :key="$id" :id="$id" :stock="$stock"></x-quantity>
            </div>
          </div>
        <img src="{{$photo}}" class="card__image" alt="" />
        <div class="card__overlay">
          <div class="card__header">
            <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                     
            <div class="card__thumb flex items-center justify-center {{$stock?'bg-green-500':'bg-red-500'}}"  alt="">
                @if ($stock)
                <span class="fas fa-check text-white"></span>
                @else
                <span class="fas fa-times text-white"></span>
                @endif
            </div>
            <div class="card__header-text">
              <h3 class="card__title">{{$code}}-{{$price}}</h3>            
              <span class="card__status text-black">{{$stock}} en Stock</span>
            </div>
          </div>
          <p class="card__description text-black lg:text-lg">{{$name}}</p>
        </div>
    </form>      
    </li>
   
   