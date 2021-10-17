@extends('dashboard')

@section('body')
    <div class="container mx-auto h-full flex flex-1 justify-center items-start">
        <div class="w-full max-w-lg relative">
            <a href="{{route('users.index')}}" class="absolute font-bold top-3 left-3 p-3 flex space-x-1 items-center">
                <span  class="fas fa-angle-left"></span>
                <span>Volver</span>
            </a>
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-8 bg-white dark:bg-gray-900  shadow-xl flex flex-col space-y-4 rounded-xl"
                    action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{optional($user)->id}}">
                    <h1 class="font-bold uppercase md:text-lg text-center mb-4">{{$user?'Edición':'Registro'}} de Usuario</h1>
                    <x-input-error for="fullname">Revise el nombre y el apellido</x-input-error>
                    <div class="space-y-4 lg:space-y-0 lg:flex lg:space-x-4">
                        <div>
                            <x-label for="name">Nombre</x-label>
                            <x-input placeholder="Primer nombre" type="text" for="name" name="name" id="name"
                                value="{{ old('name', optional($user)->name) }}">
                                <x-slot name="icon"> <span class="fas fa-user"></span></x-slot>
                            </x-input>
                            <x-input-error for="name"></x-input-error>
                        </div>
                        <div>
                            <x-label for="lastname">Apellidos</x-label>
                            <x-input placeholder="Apellidos" type="text" for="lastname" name="lastname" id="lastname"
                                value="{{ old('lastname', optional($user)->lastname) }}">
                                <x-slot name="icon"> <span class="fas fa-user"></span></x-slot>
                            </x-input>
                            <x-input-error for="lastname"></x-input-error>
                        </div>
                    </div>
                    <div>
                        <x-label for="email">Correo Electrónico</x-label>
                        <x-input placeholder="Correo Electrónico" type="email" for="email" name="email" id="email"
                            value="{{ old('email', optional($user)->email) }}">
                            <x-slot name="icon"> <span class="fas fa-at"></span></x-slot>
                        </x-input>
                        <x-input-error for="email"></x-input-error>
                    </div>
                    <div>
                        <x-label for="phone">No. Teléfono</x-label>
                        <x-input placeholder="No. Teléfono" type="tel" for="phone" name="phone" id="phone"
                            value="{{ old('phone',optional($user)->phone) }}">
                            <x-slot name="icon"> <span class="fas fa-phone"></span></x-slot>
                        </x-input>
                        <x-input-error for="phone"></x-input-error>
                    </div>
                    <div>
                        <x-label for="role">Rol</x-label>
                        <x-select required name="role" id="role">
                            <x-slot name="icon"> <span class="fas fa-user-tag"></span></x-slot>
                            <option value="admin">Dependiente</option>
                            <option value="cooker">Dependiente</option>
                            <option value="seller">Cajero</option>
                        </x-select>
                        <x-input-error for="role"></x-input-error>
                    </div>
                    <div class="flex justify-end items-center">
                        <x-button class="bg-gray-900 text-white">
                            Guardar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
