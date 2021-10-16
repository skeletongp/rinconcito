<aside id="sidebar" class="fixed  rounded-xl z-20  bg-left bg-cover w-2/3 md:w-1/2 lg:w-2/6 xl:w-1/6 hidden lg:block "
    style="background-image: url('/fondo.jpg'); ">
    <ul class="p-4 font-bold flex flex-col space-y-4">
        <x-dropdown-link :active="request()->routeIs('home')" href="{{ route('home') }}"
            class="flex justify-start space-x-2 items-center hover:bg-gray-900 hover:text-white p-3 border-b-2">
            <div class="w-1/6 h-full">
                <span class="fas fa-th-large text-lg"></span>
            </div>
            <span>Dashboard</span>
        </x-dropdown-link>
        <x-dropdown contentClasses="bg-menu py-3 px-2">
            <x-slot name="trigger">
                <x-dropdown-link :active="request()->routeIs('products.*')"
                    class="flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2">
                    <div class="w-1/6 h-full">
                        <span class="fas fa-layer-group text-lg"></span>
                    </div>
                    <span>Productos</span>
                </x-dropdown-link>
            </x-slot>
            <x-slot name="content">
                <div class="px-2 space-y-2">
                    <x-dropdown-link :active="request()->routeIs('products.index')"
                        href="{{ route('products.index') }}"
                        class="flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2">
                        <div class="w-1/6 h-full">
                            <span class="fas fa-eye text-lg"></span>
                        </div>
                        <span>Ver</span>
                    </x-dropdown-link>
                    <x-dropdown-link :active="request()->routeIs('products.create')"
                        href="{{ route('products.create') }}"
                        class="flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2">
                        <div class="w-1/6 h-full">
                            <span class="fas fa-plus text-lg"></span>
                        </div>
                        <span>Añadir</span>
                    </x-dropdown-link>
                </div>
            </x-slot>
        </x-dropdown>
        <x-dropdown-link href="{{ route('ingredients.index') }}" :active="request()->routeIs('ingredients.*')"
            class="flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2">
            <div class="w-1/6 h-full">
                <span class="fas fa-receipt text-lg"></span>
            </div>
            <span>Ingredientes</span>
        </x-dropdown-link>
        <x-dropdown contentClasses="bg-menu py-3 px-2 hidden">
            <x-slot name="trigger">
                <x-dropdown-link :active="request()->routeIs('clients.*')"
                    class="flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2">
                    <div class="w-1/6 h-full">
                        <span class="fas fa-user text-lg"></span>
                    </div>
                    <span>Clientes</span>
                </x-dropdown-link>
            </x-slot>
            <x-slot name="content">
                <div class="px-2 space-y-2">
                    <x-dropdown-link :active="request()->routeIs('clients.index')" href="{{ route('clients.index') }}"
                        class="flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2">
                        <div class="w-1/6 h-full">
                            <span class="fas fa-eye text-lg"></span>
                        </div>
                        <span>Ver</span>
                    </x-dropdown-link>
                    <x-dropdown-link :active="request()->routeIs('clients.create')"
                        href="{{ route('clients.create') }}"
                        class="flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2">
                        <div class="w-1/6 h-full">
                            <span class="fas fa-plus text-lg"></span>
                        </div>
                        <span>Añadir</span>
                    </x-dropdown-link>
                </div>
            </x-slot>
        </x-dropdown>
        @role('admin')
        <x-dropdown contentClasses="bg-menu py-3 px-2">
            <x-slot name="trigger">
                <x-dropdown-link :active="request()->routeIs('users.*')"
                    class="flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2">
                    <div class="w-1/6 h-full">
                        <span class="fas fa-user-tie text-lg"></span>
                    </div>
                    <span>Usuarios</span>
                </x-dropdown-link>
            </x-slot>
            <x-slot name="content">
                <div class="px-2 space-y-2">
                    <x-dropdown-link :active="request()->routeIs('users.index')" href="{{ route('users.index') }}"
                        class="flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2">
                        <div class="w-1/6 h-full">
                            <span class="fas fa-eye text-lg"></span>
                        </div>
                        <span>Ver</span>
                    </x-dropdown-link>
                    <x-dropdown-link :active="request()->routeIs('users.create')" href="{{ route('users.create') }}"
                        class="flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2">
                        <div class="w-1/6 h-full">
                            <span class="fas fa-plus text-lg"></span>
                        </div>
                        <span>Añadir</span>
                    </x-dropdown-link>
                </div>
            </x-slot>
        </x-dropdown>
        <x-dropdown-link href="{{ route('invoices.index') }}" :active="request()->routeIs('invoices.*')"
            class="flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2">
            <div class="w-1/6 h-full">
                <span class="fas fa-file-invoice-dollar text-lg"></span>
            </div>
            <span>Facturas</span>
        </x-dropdown-link>
        <x-dropdown-link href="{{ route('sales.index') }}" :active="request()->routeIs('sales.*')"
            class="flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2">
            <div class="w-1/6 h-full">
                <span class="fas fa-dollar-sign text-lg"></span>
            </div>
            <span>Ventas</span>
        </x-dropdown-link>
        @endrole

        <x-dropdown-link id="linkcart"
            class=" flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2">
            <div class="w-1/6 h-full">
                <span class="fas fa-shopping-cart text-lg"></span>
            </div>
            <div class="flex justify-between w-full items-center space-x-6 px-2 ">
                <span>Carrito</span>
                <span class="fas fa-angle-down"></span>
            </div>

        </x-dropdown-link>

        <div id="divcart" class="  w-full items-center bg-white p-3 ">
            <x-invoice-control></x-invoice-control>
        </div>
    </ul>
    <style>
        aside span {
            text-transform: uppercase;
        }

    </style>

</aside>
