@extends('dashboard')

@section('body')
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-xl relative">
        <a href="{{ route('outcomes.create') }}" class="flex space-x-2 items-center">
            <span class="hidden lg:block font-bold">Nuevo</span>
            <span class="fas fa-plus"></span>
        </a>
        <h1 class="text-center font-bold uppercase text-xl my-4">Historial de pagos</h1>
        <form action="" class="mx-auto my-2 md:flex md:space-x-2" id="searchForm">
            <div class="w-full">
                <x-label>Buscar</x-label>
                <x-input name="s" type="search" value="{{ request('s') }}" placeholder="Buscar por número o vendedor">
                    <x-slot name="icon">
                        <button>
                            <span class="fas fa-search text-blue-500"></span>
                        </button>
                    </x-slot>
                </x-input>
            </div>
            <div class="w-full">
                <x-label>Filtrar tipo</x-label>
                <x-select class="searchForm"  name="t">
                    <option value="">Todos</option>
                    <option {{"COMPRA"==request('t')?'selected':''}}  value="COMPRA">Compra</option>
                    <option {{"PERSONAL"==request('t')?'selected':''}}  value="PERSONAL">Empleados</option>
                    <option {{"SERVICIOS"==request('t')?'selected':''}}  value="SERVICIOS">Servicios</option>
                </x-select>
            </div>
            <div class="w-full">
                <x-label>Filtrar fecha</x-label>
                <x-select class="searchForm" name="d">
                    <option value="" >Todas</option>
                   @foreach ($days as $day)
                   <option {{$day->day==request('d')?'selected':''}} value="{{$day->day}}">{{ date('d/m/Y', strtotime($day->day)) }}</option>
                   @endforeach
                    
                </x-select>
            </div>
        </form>
        @if ($outcomes->count())
            <!-- component -->
            <table class="min-w-full border-collapse block md:table">
                <thead class="block md:table-header-group">
                    <tr
                        class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                        <th
                            class="bg-pink-700 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Nombre</th>
                        <th
                            class="bg-pink-700 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Fecha</th>
                        <th
                            class="bg-pink-700 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Monto</th>
                        <th
                            class="bg-pink-700 p-2  text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">
                            Descripción</th>
                    </tr>
                </thead>
                <tbody class="block md:table-row-group">
                    @foreach ($outcomes as $outcome)
                        <tr class=" border border-grey-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ $outcome->name }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                {{ date('d/m/Y', strtotime($outcome->day)) }}
                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                ${{ number_format($outcome->amount, 2) }}</td>
                            <td class="p-2 md:border  md:border-grey-500 text-left block md:table-cell">
                                {{ $outcome->description }}</td>

                        </tr>

                    @endforeach
                    <tr class=" border border-grey-500 md:border-none block md:table-row font-bold text-lg uppercase">
                      
                        <td colspan="2" class="p-2 text-center block md:table-cell">
                            Total
                        </td>
                        <td class="p-2 text-left block md:table-cell">
                            ${{ number_format($outcomes->sum('amount'), 2) }}</td>
                        <td class="p-2   text-left block md:table-cell">
                          </td>

                    </tr>

                </tbody>
            </table>
            <div class="m-2">
                {{ $outcomes->links() }}
            </div>
        @else
            <h1 class="text-center my-8 uppercase text-lg font-bold">No se ha encontrado ningún gasto</h1>
        @endif

    </div>
    <script>
        $('document').ready(function() {
            $('.searchForm').each(function() {
                $(this).on('change', function() {
                    form = $("#searchForm");
                    form.submit();
                })
            })
        })
    </script>
@endsection
