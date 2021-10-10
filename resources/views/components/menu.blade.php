<aside id="sidebar"
    class="fixed h-screen z-20 bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block ">
    <ul class="p-4 font-bold flex flex-col space-y-4">
        <x-dropdown-link :active="request()->routeIs('dashboard')" href="{{ route('home') }}"
            class="flex justify-start space-x-2 items-center hover:bg-gray-900 hover:text-white p-3 border-b-2">
            <div class="w-1/6 h-full">
                <span class="fas fa-th-large text-lg"></span>
            </div>
            <span>Dashboard</span>
        </x-dropdown-link>
        <x-dropdown-link :active="request()->routeIs('products.index')" href="{{ route('products.index') }}"
            class="flex justify-start space-x-2 items-center hover:bg-gray-900 hover:text-white p-3 border-b-2">
            <div class="w-1/6 h-full">
                <span class="fas fa-layer-group text-lg"></span>
            </div>
            <span>Productos</span>
        </x-dropdown-link>
        <x-dropdown-link :active="request()->routeIs('products.index')" href="{{ route('products.index') }}"
            class="flex justify-start space-x-2 items-center hover:bg-gray-900 hover:text-white p-3 border-b-2">
            <div class="w-1/6 h-full">
                <span class="fas fa-dollar-sign text-lg"></span>
            </div>
            <span>Ventas</span>
        </x-dropdown-link>
        <x-dropdown-link id="linkcart"
            class=" flex w-full justify-start cursor-pointer space-x-2 items-center hover:bg-gray-900 hover:text-white p-3 border-b-2">
            <div class="w-1/6 h-full">
                <span class="fas fa-shopping-cart text-lg"></span>
            </div>
            <div class="flex justify-between w-full items-center space-x-6 ">
                <span>Carrito</span>
                <span class="fas fa-angle-down"></span>
            </div>

        </x-dropdown-link>
        
        <x-dropdown-link id="divcart" class=" space-y-3 justify-start space-x-2 items-center  p-3 border-b-2">
          <x-invoice-control></x-invoice-control>
        </x-dropdown-link>
    </ul>


</aside>
