@extends('dashboard')

@section('body')
    <div class="container mx-auto h-full flex flex-1 justify-center items-start">
        <div class="w-full max-w-lg relative">
            <a href="{{ Auth::user()->hasRole('cooker')?route('invoices.pendings'):route('home') }}" class="absolute font-bold top-3 left-3 p-3 flex space-x-1 items-center">
                <span class="fas fa-angle-left"></span>
                <span>Volver</span>
            </a>

            <div class="leading-loose">

                <form class="max-w-xl m-4 p-8 bg-white dark:bg-gray-900  shadow-xl flex flex-col space-y-4 rounded-xl"
                    action="{{ route('users.store') }}" method="POST" id="u{{optional($user)->id}}">
                    @if (Session::has('success'))
                        <x-alert type="success"></x-alert>
                    @endif
                    @if (Session::has('error'))
                        <x-alert type="error"></x-alert>
                    @endif
                    @csrf
                    <input type="hidden" name="id" value="{{ optional($user)->id }}">
                    <input type="hidden" name="email" value="{{ optional($user)->email }}">

                    <h1 class="font-bold uppercase md:text-lg text-center mb-4">Actualiza tu Perfil</h1>
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
                    <div class="space-y-4 lg:space-y-0 lg:flex lg:space-x-4">
                        <div>
                            <x-label for="name">Nueva contraseña</x-label>
                            <x-input placeholder="Nueva contraseña" type="password" for="password" name="password"
                                id="password" required>
                                <x-slot name="icon"> <span class="fas fa-lock"></span></x-slot>
                            </x-input>

                        </div>
                        <div>
                            <x-label for="lastname">Confirmar contraseña</x-label>
                            <x-input placeholder="Repita la contraseña" type="password" for="password_confirmation"
                                name="password_confirmation" id="password_confirmation" required>
                                <x-slot name="icon"> <span class="fas fa-lock"></span></x-slot>
                            </x-input>

                        </div>
                    </div>
                    <x-input-error for="password"></x-input-error>

                    <div>
                        <x-label for="phone">No. Teléfono</x-label>
                        <x-input placeholder="No. Teléfono" type="tel" for="phone" name="phone" id="phone"
                            value="{{ old('phone', optional($user)->phone) }}">
                            <x-slot name="icon"> <span class="fas fa-phone"></span></x-slot>
                        </x-input>
                        <x-input-error for="phone"></x-input-error>
                    </div>

                    <div class="flex justify-end items-center">
                        <x-button data-label="¿Actualizar datos?" class="bg-gray-900 text-white confirm" form="u{{optional($user)->id}}">
                            Actualizar
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
 
    </div>
@endsection
