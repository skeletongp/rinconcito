@extends('layouts.app')

@section('content')
<div class="h-screen font-sans register bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-8 bg-white dark:bg-gray-900  shadow-xl flex flex-col space-y-4 rounded-xl">
                    <h1 class="font-bold uppercase md:text-lg text-center mb-4">Register</h1>
                    <div>
                        <x-label for="name">Nombre</x-label>
                        <x-input placeholder="Nombre" type="text" for="name" name="name" id="name"></x-input>
                        <x-slot name="icon"> <span class="fas fa-home"></span></x-slot>
                    </div>
                    <div>
                        <x-label for="lastname">Apellido</x-label>
                        <x-input placeholder="Apellido" type="text" for="lastname" name="lastname" id="lastname"></x-input>
                        <x-slot name="icon"> <span class="fas fa-home"></span></x-slot>
                    </div>
                    <div>
                        <x-label for="email">Correo Electrónico</x-label>
                        <x-input placeholder="Correo Electrónico" type="email" for="email" name="email" id="email"></x-input>
                        <x-slot name="icon"> <span class="fas fa-home"></span></x-slot>
                    </div>
                    <div class="flex justify-between items-center">
                        <a class=" right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="/login">
                            ¿Ya tienes una cuenta?
                        </a>
                        <a class=" right-0 align-baseline font-bold text-lg text-500 hover:text-blue-800" href="/login">
                            Registrar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
@endsection