@extends('layouts.app')

@section('content')

    <!--Container -->
    <div class="mx-auto bg-grey-400">
        
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <header class="bg-nav top-0 fixed w-full z-20">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <i class="fas fa-bars pr-2 text-white cursor-pointer " onclick="sidebarToggle()"></i>
                        <h1 class="text-white p-2">Logo</h1>
                    </div>
                    <div class="p-1 flex flex-row items-center">
                        <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full"
                            src="https://therichpost.com/wp-content/uploads/2021/03/avatar2.png" alt="">
                        <a href="#" onclick="profileToggle()"
                            class="text-white p-2 no-underline hidden md:block lg:block">{{Auth::user()->fullname}}</a>
                        <div id="ProfileDropDown"
                            class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r top-2">
                            <ul class="list-reset">
                                <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My
                                        account</a></li>
                                <li><a href="#"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a>
                                </li>
                                <li>
                                    <hr class="border-t mx-2 border-grey-light">
                                </li>
                                <li><a href="{{route('auth.logout')}}"
                                        class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!--/Header-->

            <div class="flex flex-1 py-12">
                <!--Sidebar-->
               <x-menu></x-menu>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-300 flex-1 p-3 lg:px-8 overflow-hidden max-w-7xl mx-auto  xl:ml-auto">

                    @hasSection('body')
                        @yield('body')
                    @else
                    <x-panel-control></x-panel-control>
                    @endif
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="fixed bottom-0 z-30 bg-grey-darkest text-white p-2 flex justify-between w-screen lg:px-8">
                <div class="">&copy; 2021</div>
            <div class=" f">Distributed by: <a
                        href="https://therichpost.com/" target=" _blank">Jassa</a></div>
            </footer>
            <!--/footer-->
        </div>
    </div>
@endsection
