@extends('layouts.app')

@section('content')
<div class="h-screen font-sans register bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-8 bg-white dark:bg-gray-900  shadow-xl flex flex-col space-y-4 rounded-xl"
                action="{{route('auth.store')}}">
                    <h1 class="font-bold uppercase md:text-lg text-center mb-4">Registro de Usuario</h1>
                    <div class="space-y-4 lg:space-y-0 lg:flex lg:space-x-4">
                        <div>
                            <x-label for="name">Nombre</x-label>
                            <x-input placeholder="Primer nombre" type="text" for="name" name="name" id="name">
                            <x-slot name="icon"> <span class="fas fa-user"></span></x-slot>
    
                            </x-input>
                        </div>
                        <div>
                            <x-label for="lastname">Apellidos</x-label>
                            <x-input placeholder="Apellidos" type="text" for="lastname" name="lastname" id="lastname">
                            <x-slot name="icon"> <span class="fas fa-user"></span></x-slot>
    
                            </x-input>
                        </div>
                    </div>
                    <div>
                        <x-label for="email">Correo Electrónico</x-label>
                        <x-input placeholder="Correo Electrónico" type="email" for="email" name="email" id="email">
                        <x-slot name="icon"> <span class="fas fa-at"></span></x-slot>

                        </x-input>
                    </div>
                    <div>
                        <x-label for="phone">No. Teléfono</x-label>
                        <x-input placeholder="No. Teléfono" type="email" for="phone" name="phone" id="phone">
                        <x-slot name="icon"> <span class="fas fa-at"></span></x-slot>

                        </x-input>
                    </div>
                    <div>
                        <x-label for="password">Contraseña</x-label>
                        <x-input placeholder="Contraseña" type="password" for="password" name="password" id="password">
                        <x-slot name="icon"> <span class="fas fa-lock"></span></x-slot>
                        </x-input>
                    </div>
                    <div>
                        <x-label for="password_confirm">Confirmación</x-label>
                        <x-input placeholder="Confirme la contraseña" type="password" for="password_confirm" name="password_confirm" id="password_confirm">
                        <x-slot name="icon"> <span class="fas fa-lock"></span></x-slot>
                        </x-input>
                    </div>
                    <div class="flex justify-between items-center">
                        <a class=" right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="{{route('auth.login')}}">
                            ¿Ya tienes una cuenta?
                        </a>
                        <x-button class="bg-gray-900 text-white">
                            Registrar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection