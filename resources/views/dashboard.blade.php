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
                        <i class="fas fa-bars pr-2 text-black lg:text-2xl cursor-pointer " onclick="sidebarToggle()"></i>
                        <a href="{{route('home')}}" class="text-black p-2 font-bold uppercase text-xl md:text-2xl font-sans">{{env('COMPANY_NAME','CoffeTech')}}</a>
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
                                <ul class="list-reset">
                                    <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My
                                            account</a></li>
                                    <li><a href="#"
                                            class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a>
                                    </li>
                                    <li>
                                        <hr class="border-t mx-2 border-grey-light">
                                    </li>
                                    <li><a href="{{ route('auth.logout') }}"
                                            class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a>
                                    </li>
                                </ul>
                        </x-slot>
                    </x-dropdown>

                </div>
            </header>
            <!--/Header-->

            <div class="flex flex-1 py-12 bg-no-repeat bg-right bg-fixed lg:bg-cover "
                style="background-image:url('{{ asset('/fondo.jpg') }}')">
                <!--Sidebar-->
                <x-menu></x-menu>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-transparent flex-1 p-3 lg:px-8 overflow-hidden max-w-7xl mx-auto  xl:ml-auto">

                    @hasSection('body')
                        @yield('body')
                    @else
                        <x-panel-control></x-panel-control>
                    @endif
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="fixed bottom-0 z-30 bg-left text-blue-900 font-bold p-2 flex justify-between w-screen lg:px-8"
                style="background-image: url('/fondo.jpg')">
                <div class="">&copy; 2021</div>
            <div class=" f">Creado por: <a
                        href="https://ismaeldigitador.com/" target=" _blank">Ismael Contreras</a></div>
            </footer>
            <!--/footer-->
        </div>
    </div>
@endsection
