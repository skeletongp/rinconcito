@extends('layouts.app')

@section('content')
<!--Container -->
<div class="mx-auto bg-grey-400">
    <!--Screen-->
    <div class="min-h-screen flex flex-col">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="p-1 mx-3 inline-flex items-center">
                    <i class="fas fa-bars pr-2 text-white cursor-pointer " onclick="sidebarToggle()"></i>
                    <h1 class="text-white p-2">Logo</h1>
                </div>
                <div class="p-1 flex flex-row items-center">
                    <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="https://therichpost.com/wp-content/uploads/2021/03/avatar2.png" alt="">
                    <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block">Jassa The Rich</a>
                    <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute pin-t mt-12 mr-1 pin-r top-2">
                        <ul class="list-reset">
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My account</a></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a></li>
                          <li><hr class="border-t mx-2 border-grey-ligght"></li>
                          <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!--/Header-->

        <div class="flex flex-1">
            <!--Sidebar-->
            <aside id="sidebar" class="fixed h-screen z-20 bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block ">

                <ul class="list-reset flex flex-col">
                    <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                        <a href="/"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fas fa-angle-right float-right"></i></span>
                        </a>
                    </li>
                    <li class="w-full h-full py-3 px-2">
                        <a href="{{route('products')}}"
                           class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                            <i class="far fa-file float-left mx-2"></i>
                            Pages
                            <span><i class="fa fa-angle-down float-right"></i></span>
                        </a>
                        <ul class="list-reset -mx-2 bg-white-medium-dark">
                            <li class="border-t mt-2 border-light-border w-full h-full px-2 py-3">
                                <a href="/login"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Login Page
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                            <li class="border-t border-light-border w-full h-full px-2 py-3">
                                <a href="/register"
                                   class="mx-4 font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                                    Register Page
                                    <span><i class="fa fa-angle-right float-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </aside>
            <!--/Sidebar-->
            <!--Main-->
            <main class="bg-white-300 flex-1 p-3 overflow-hidden max-w-7xl mx-auto">

              @hasSection ('body')
                  @yield('body')
              @else
              <div class="flex flex-col">
                <!-- Stats Row Starts Here -->
                <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                    <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                        <div class="p-4 flex flex-col">
                            <a href="#" class="no-underline text-white text-2xl">
                                $244
                            </a>
                            <a href="#" class="no-underline text-white text-lg">
                                Total Sales
                            </a>
                        </div>
                    </div>

                    <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
                        <div class="p-4 flex flex-col">
                            <a href="#" class="no-underline text-white text-2xl">
                                $199.4
                            </a>
                            <a href="#" class="no-underline text-white text-lg">
                                Total Cost
                            </a>
                        </div>
                    </div>

                    <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
                        <div class="p-4 flex flex-col">
                            <a href="#" class="no-underline text-white text-2xl">
                                900
                            </a>
                            <a href="#" class="no-underline text-white text-lg">
                                Total Users
                            </a>
                        </div>
                    </div>

                    <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                        <div class="p-4 flex flex-col">
                            <a href="#" class="no-underline text-white text-2xl">
                                500
                            </a>
                            <a href="#" class="no-underline text-white text-lg">
                                Total Products
                            </a>
                        </div>
                    </div>
                </div>

                <!-- /Stats Row Ends Here -->

                <!-- Card Sextion Starts Here -->
                <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                    <!-- card -->

                    <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                        <div class="px-6 py-2 border-b border-light-grey">
                            <div class="font-bold text-xl">Trending Categories</div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-grey-darkest">
                                <thead class="bg-grey-dark text-white text-normal">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Current</th>
                                    <th scope="col">Change</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                            Twitter
                                        </button>
                                    </td>
                                    <td>4500</td>
                                    <td>4600</td>
                                    <td>
                                        <span class="text-green-500"><i class="fas fa-arrow-up"></i>5%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <button class="bg-primary hover:bg-primary-dark text-white font-light py-1 px-2 rounded-full">
                                            Facebook
                                        </button>
                                    </td>
                                    <td>10000</td>
                                    <td>3000</td>
                                    <td>
                                        <span class="text-red-500"><i class="fas fa-arrow-down"></i>65%</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <button class="bg-success hover:bg-success-dark text-white font-light py-1 px-2 rounded-full">
                                            Amazon
                                        </button>
                                    </td>
                                    <td>10000</td>
                                    <td>3000</td>
                                    <td>
                                        <span class="text-red-500"><i class="fas fa-arrow-down"></i>65%</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">4</th>
                                    <td>
                                        <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                            Microsoft
                                        </button>
                                    </td>
                                    <td>10000</td>
                                    <td>3000</td>
                                    <td>
                                        <span class="text-green-500"><i class="fas fa-arrow-up"></i>65%</span>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /card -->

                </div>
                <!-- /Cards Section Ends Here -->
            </div>
              @endif
            </main>
            <!--/Main-->
        </div>
        <!--Footer-->
        <footer class="bg-grey-darkest text-white p-2 flex justify-between w-screen lg:px-8">
            <div class="">&copy; 2021</div>
            <div class="f">Distributed by:  <a href="https://therichpost.com/" target=" _blank">Jassa</a></div>
        </footer>
        <!--/footer-->
    </div>
</div>
@endsection