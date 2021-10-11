@extends('layouts.app')

@section('content')
    <div class="h-screen font-sans  bg-cover bg-center" style="background-image: url('/fondo.jpg')">
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            <div class="w-full max-w-lg">
                <div class="leading-loose">
                    <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl space-y-4"
                        action="{{ route('auth.access') }}" method="POST">
                        @csrf
                        <h1 class="text-gray-800 mb-4  text-center text-lg font-bold uppercase">Iniciar Sesión</h1>
                        <div class="">
                            <x-label for="username">Nombre de Usuario</x-label>
                            <x-input name="username" placeholder="Nombre de Usuario" id="username" type="text">
                                <x-slot name="icon"><span class="fas fa-user"></span></x-slot>
                            </x-input>
                        </div>
                        <div class="">
                          <x-label for=" password">Contraseña</x-label>
                            <x-input name="password" placeholder="Contraseña" id="email" type="password">
                                <x-slot name="icon"><span class="fas fa-lock"></span></x-slot>
                            </x-input>
                        </div>
                        <x-input-error for="error"></x-input-error>
                        <div class="mt-4 flex items-center justify-end">
                            <x-button class=" bg-gray-900 text-white rounded" type="submit">Login</x-button>
                        </div>
                       
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
