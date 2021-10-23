@extends('dashboard')

@section('body')
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-xl relative">
        <a href="{{ route('outcomes.create') }}" class="flex space-x-2 items-center">
            <span class="hidden lg:block font-bold">Nuevo</span>
            <span class="fas fa-plus"></span>
        </a>
        <h1 class="text-center font-bold uppercase text-xl my-4">Historial de pagos</h1>
        <form action="" class="mx-auto my-2 space-y-3 md:space-y-0 md:flex md:space-x-2" id="searchForm">
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
                <x-select class="searchForm" name="t">
                    <option value="">Todos</option>
                    <option {{ 'COMPRA' == request('t') ? 'selected' : '' }} value="COMPRA">Compra</option>
                    <option {{ 'PERSONAL' == request('t') ? 'selected' : '' }} value="PERSONAL">Empleados</option>
                    <option {{ 'SERVICIOS' == request('t') ? 'selected' : '' }} value="SERVICIOS">Servicios</option>
                </x-select>
            </div>
            <div class="w-full">
                <x-label>Filtrar fecha</x-label>
                <x-select class="searchForm" name="d">
                    <option value="">Todas</option>
                    @foreach ($days as $day)
                        <option {{ $day->day == request('d') ? 'selected' : '' }} value="{{ $day->day }}">
                            {{ date('d/m/Y', strtotime($day->day)) }}</option>
                    @endforeach

                </x-select>
            </div>
        </form>
        <div class="p-4 pt-0 overflow-auto max-h-screen" style="max-height: 600px">
            <table class=" relative border">
                <tbody>
                    @if ($outcomes->count())
                        @foreach ($outcomes as $days)
                            <thead class="md:sticky top-0">
                                <tr class="bg-blue-300">

                                    <th scope="col" colspan="4" class="font-bold text-xl capitalize">{{ $days[0]->day }}
                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col" class="md:hidden">Fecha</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Acreedor</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Responsable</th>
                                </tr>
                            </thead>
                            @foreach ($days as $outcome)
                                <tr>
                                    <td data-label="Fecha" class="md:hidden">{{ $outcome->day }}</td>
                                    <td data-label="No. Factura">
                                        <div class="flex items-center justify-end lg:justify-center space-x-2">
                                            <a href="{{route('invoices.edit',$outcome)}}" class="hidden lg:block text-blue-300"><span class="fas fa-pen"></span></a>
                                            <a
                                                href="{{ route('invoices.show', $outcome) }}">
                                                {{ $outcome->type }} 
                                            </a>
                                        </div>
                                    </td>
                                    <td data-label="Cliente" class="md:flex md:flex-col md:justify-center md:items-center">
                                        <div class="md:flex md:items-center md:space-x-2">
                                            <div class="hidden md:block w-min h-8 rounded-full bg-center bg-contain"
                                                ></div>
                                            <span>{{ $outcome->name }}</span>
                                        </div>
                                    </td>
                                    <td data-label="Monto">${{ number_format($outcome->amount, 2) }}</td>
                                    <td data-label="Vendedor" class="md:flex md:flex-col md:justify-center md:items-center">
                                        <div class="md:flex md:items-center md:space-x-2">
                                            <div class="hidden md:block w-8 h-8 rounded-full bg-center bg-contain"
                                                style="background-image: url({{ $outcome->user->photo }})"></div>
                                            <span>{{ $outcome->user->name }}</span>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            <tr class="bg-indigo-200">
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                                <th scope="col">${{ number_format($days->sum('amount'), 2) }}</th>
                                <th scope="col"></th>
                            </tr>

                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">
                                <h1 class="text-center font-bold text-xl uppercase">NO SE HALLARON REGISTROS</h1>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <style>
        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0;
            padding: 0;
            width: 100%;
            table-layout: fixed;
        }



        table tr {
            background-color: #f8f8f8;
            border: 1px solid #ddd;
            padding: .35em;
        }

        table th,
        table td {
            padding: .625em;
            text-align: center;
        }

        table th {
            font-size: .85em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }

        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }


            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
            }

            table td::before {
                /*
                                * aria-label has no advantage, it won't be read inside a table
                                content: attr(aria-label);
                                */
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }

    </style>
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
