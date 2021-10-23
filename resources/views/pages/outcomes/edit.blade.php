@extends('dashboard')

@section('body')
    <div class="container mx-auto h-full flex flex-1 justify-center items-start">
        <div class="w-full max-w-lg relative">
            <a href="{{route('outcomes.index')}}" class="absolute font-bold top-3 left-3 p-3 flex space-x-1 items-center">
                <span  class="fas fa-angle-left"></span>
                <span>Volver</span>
            </a>
            <div class="leading-loose">
                <form class="max-w-xl m-4 p-8 bg-white dark:bg-gray-900  shadow-xl flex flex-col space-y-4 rounded-xl"
                    action="{{ route('outcomes.update', $outcome) }}" method="POST">
                    @method('put')
                    @csrf
                    
                    <h1 class="font-bold uppercase md:text-lg text-center mb-4">Registrar Gasto</h1>
                    <div class="space-y-4 lg:space-y-0 lg:flex lg:space-x-2">
                        <div class="lg:w-2/3">
                            <x-label for="name">Nombre de quien cobra</x-label>
                            <x-input placeholder="Nombre de quien cobra" type="text" for="name" name="name" id="name"
                                value="{{ old('name', $outcome->name) }}" required>
                                <x-slot name="icon"> <span class="fas fa-user"></span></x-slot>
                            </x-input>
                            <x-input-error for="name"></x-input-error>
                        </div>
                        <div class="lg:w-1/3">
                            <x-label for="amount">Monto a pagar</x-label>
                            <x-input placeholder="Monto pago" type="number" for="amount" name="amount" id="amount"
                                value="{{ old('amount', $outcome->amount) }}" required>
                                <x-slot name="icon"> <span class="fas fa-dollar-sign"></span></x-slot>
                            </x-input>
                            <x-input-error for="amount"></x-input-error>
                        </div>
                    </div>
                    <div>
                        <x-label for="day">Fecha</x-label>
                        <x-input type="date" for="day" name="day" id="day"
                            value="{{ old('day', $outcome->day) }}" required>
                        </x-input>
                        <x-input-error for="day"></x-input-error>
                    </div>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div>
                        <x-label for="description">Detalle</x-label>
                        <textarea required maxlength="85"
                        class="flex justify-between resize-none items-center rounde-md rounded-md border border-gray-600 relative overflow-hidden w-full outline-none  py-2 px-2 leading-tight   "
                         placeholder="Ingrese una descripción del pago" rows="3" gro type="tel" for="description" name="description" id="description"
                            >{{ old('description', $outcome->description) }}</textarea
                        >
                        <x-input-error for="description"></x-input-error>
                    </div>
                    <div>
                        <x-label for="type">Tipo de pago</x-label>
                        <x-select required name="type" id="type">
                            <x-slot name="icon"> <span class="fas fa-list"></span></x-slot>
                            <option {{$outcome->type=='COMPRA'?'selected':''}} value="COMPRA">Compra</option>
                            <option {{$outcome->type=='PERSONAL'?'selected':''}} value="PERSONAL">Empleados</option>
                            <option {{$outcome->type=='SERVICIOS'?'selected':''}} value="SERVICIOS">Servicios</option>
                        </x-select>
                        <x-input-error for="type"></x-input-error>
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
