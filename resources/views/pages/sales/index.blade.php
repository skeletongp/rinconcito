@extends('dashboard')

@section('body')
    <div class="bg-white rounded-xl max-w-4xl p-4 lg:p-8 relative">
        <h1 class="text-center font-bold uppercase text-xl lg:text-2xl my-3">Listado de ventas</h1>
        <div class="p-4 pt-0 overflow-auto max-h-screen md:max-h-96">
            <table class=" relative border">
                <tbody>
                    @foreach ($sales as $days)
                        <thead class="md:sticky top-0">
                            <tr class="bg-blue-300">

                                <th scope="col" colspan="4" class="font-bold text-xl capitalize">{{ $days[0]->day }}</th>
                            </tr>
                            <tr>
                                <th scope="col" class="md:hidden">Fecha</th>
                                <th scope="col">No. Factura</th>
                                <th scope="col">Cliente</th>
                                <th scope="col">Monto</th>
                                <th scope="col">Vendedor</th>
                            </tr>
                        </thead>
                        @foreach ($days as $sale)
                            <tr>
                                <td data-label="Fecha" class="md:hidden">{{ $sale->day }}</td>
                                <td data-label="No. Factura"><a href="{{route('invoices.show',$sale)}}">{{ $sale->num }}</a></td>
                                <td data-label="Cliente" class="md:flex md:flex-col md:justify-center md:items-center">
                                    <div class="md:flex md:items-center md:space-x-2">
                                        <div class="hidden md:block w-8 h-8 rounded-full bg-center bg-contain"
                                            style="background-image: url({{ $sale->client->photo }})"></div>
                                        <span>{{ $sale->client->name }}</span>
                                    </div>
                                </td>
                                <td data-label="Monto">${{ number_format($sale->payed, 2) }}</td>
                                <td data-label="Vendedor" class="md:flex md:flex-col md:justify-center md:items-center">
                                    <div class="md:flex md:items-center md:space-x-2">
                                        <div class="hidden md:block w-8 h-8 rounded-full bg-center bg-contain"
                                            style="background-image: url({{ $sale->user->photo }})"></div>
                                        <span>{{ $sale->user->fullname }}</span>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                      
                          <tr class="bg-indigo-200">
                              <th scope="col" >Total</th>
                              <th scope="col"></th>
                              <th scope="col">${{number_format($days->sum('payed'),2)}}</th>
                              <th scope="col"></th>
                          </tr>
                      
                    @endforeach
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
@endsection
