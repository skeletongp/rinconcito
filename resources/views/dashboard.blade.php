@extends('layouts.app')

@section('content')

    <!--Container -->
    <div class="mx-auto bg-grey-400">

        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <header class=" top-0 fixed w-full z-20 bg-bottom bg-cover" style="background-image: url('/fondo.jpg')">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        @hasanyrole('admin|seller')
                            <i class="fas fa-bars pr-2 text-black lg:text-2xl cursor-pointer " onclick="sidebarToggle()"></i>
                            <a href="{{ route('home') }}"
                                class="text-black p-2 font-bold uppercase text-xl md:text-2xl font-sans">{{ env('COMPANY_NAME', 'CoffeTech') }}</a>
                        @endhasanyrole
                        @hasrole('cooker')
                            <a
                                class="text-black select-none p-2 font-bold uppercase text-xl md:text-2xl font-sans">{{ env('COMPANY_NAME', 'CoffeTech') }}</a>
                        @endhasrole

                    </div>
                    <x-dropdown>
                        <x-slot name="trigger">
                            <div class="flex items-center space-x-1 cursor-pointer mt-3">
                                <img class="inline-block h-8 w-8 rounded-full" src="{{ Auth::user()->photo }}" alt="">
                                <a href="#"
                                    class="text-white p-2 no-underline hidden font-bold md:block lg:block">{{ Auth::user()->fullname }}</a>
                            </div>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link href="{{ route('users.show', Auth::user()) }}"
                                class="flex space-x-3 items-center  hover:text-blue-500">
                                <span class="fas fa-user-cog"></span>
                                <span>Mi cuenta</span>
                            </x-dropdown-link>
                            @hasanyrole('admin|seller')
                                <x-dropdown-link href="{{ route('charts.index') }}"
                                    class="flex space-x-3 items-center  hover:text-blue-500">
                                    <span class="fas fa-shopping-cart"></span>
                                    <span>Ver Carrito</span>
                                </x-dropdown-link>
                            @endhasanyrole
                            <x-dropdown-link href="{{ route('auth.logout') }}"
                                class="flex space-x-3 items-center hover:text-red-500">
                                <span class="fas fa-power-off"></span>
                                <span>Salir</span>
                            </x-dropdown-link>

                        </x-slot>
                    </x-dropdown>

                </div>
            </header>
            <!--/Header-->

            <div class="flex flex-1 py-12 bg-no-repeat bg-right bg-fixed lg:bg-cover "
                style="background-image:url('{{ asset('/fondo.jpg') }}')">
                <!--Sidebar-->
                @hasanyrole('admin|seller')
                    <x-menu></x-menu>
                @endhasanyrole
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-transparent flex-1 p-3 lg:px-8 overflow-hidden max-w-7xl mx-auto  xl:ml-auto relative pt-4">
                    @php
                        $count=App\Models\Chart::where('status','pendiente')->get()->count();
                    @endphp
                    @hasSection('body')
                        @yield('body')
                    @else
                        <x-panel-control></x-panel-control>
                    @endif
                    <div title="Carrito"
                        class="sm:w-8 sm:h-8 lg:w-12 lg:h-12 flex items-center justify-center rounded-full fixed z-40 bg-indigo-700 bottom-12 right-2 p-1 ">
                        <div class="w-4 h-4 lg:w-6 lg:h-6 bg-white shadow-xl text-green-800 rounded-full absolute -top-2 lg:-top-3 left-0 flex items-center justify-center">
                            <span class="text-xs lg:text-base font-bold">{{$count}}</span>
                        </div>
                        <a href="{{ route('charts.index') }}">
                        <span class="fas fa-shopping-cart sm:text-sm lg:text-xl text-white"></span>
                        </a>
                    </div>
                    <div title="Productos"
                        class="sm:w-8 sm:h-8 lg:w-12 lg:h-12 flex items-center justify-center rounded-full fixed z-40 bg-pink-700 bottom-28 right-2 p-1">
                        <a href="{{ route('products.index') }}">
                        <span class="fas fa-layer-group sm:text-sm lg:text-xl text-white"></span>
                        </a>
                    </div>
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="fixed bottom-0 z-30 bg-left text-blue-900 font-bold p-2 flex justify-between w-screen lg:px-8"
                style="background-image: url('/fondo.jpg')">
                <div class="">&copy; 2021</div>
                <div class=" f">Creado por: <a href="https://ismaeldigitador.com/" target=" _blank">Ismael
                        Contreras</a></div>
            </footer>
            <!--/footer-->
        </div>
    </div>
@endsection
