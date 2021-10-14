<div class="flex flex-col my-8 bg-white p-4 rounded-xl">

    <!-- Stats Row Starts Here -->
    <h1 class="text-center uppercase font-bold text-lg lg:text-3xl mb-4">Ventas de la semana</h1>
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
        <div
            class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
            <div class="p-4 flex flex-col">
                <a href="#" class="no-underline text-white text-2xl">
                    ${{ number_format($fromWeek, 2) }}
                </a>
                <a href="#" class="no-underline text-white text-lg">
                    Vendido esta semana
                </a>
            </div>
        </div>

        <div class="shadow bg-info border-l-8 hover:bg-info-dark border-info-dark mb-2 p-2 md:w-1/4 mx-2">
            <div class="p-4 flex flex-col">
                <a href="#" class="no-underline text-white text-2xl">
                    ${{ number_format($fromDay, 2) }}
                </a>
                <a href="#" class="no-underline text-white text-lg">
                    Ventas de hoy
                </a>
            </div>
        </div>

        <div class="shadow bg-warning border-l-8 hover:bg-warning-dark border-warning-dark mb-2 p-2 md:w-1/4 mx-2">
            <div class="p-4 flex flex-col">
                <a href="#" class="no-underline text-white text-2xl">
                    {{ $fromProduct }}
                </a>
                <a href="#" class="no-underline text-white text-lg">
                    Productos vendidos hoy
                </a>
            </div>
        </div>

        <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
            <div class="p-4 flex flex-col">
                <a href="#" class="no-underline text-white text-2xl">
                    {{ $fromClient }}
                </a>
                <a href="#" class="no-underline text-white text-lg">
                    Clientes atendidos hoy
                </a>
            </div>
        </div>
    </div>

    <!-- /Stats Row Ends Here -->

    <!-- Card Sextion Starts Here -->
    <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

        <!-- card -->

        <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
            @if ($lastSales->count())
                <div class="lg:flex space-y-4 lg:space-y-0 px-2 lg:px-4 lg:space-x-4 items-center">
                    <div class="w-full">
                        {{-- Last sales --}}
                        <div class="px-6 py-2 border-b border-light-grey">
                            <div class="font-bold text-xl">Últimas ventas realizadas</div>
                        </div>
                        <div class="table-responsive max-w-xl">
                            <table class="table text-grey-darkest">
                                <thead class="bg-grey-dark text-white text-normal">
                                    <tr>
                                        <th scope="col">Hora</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Monto</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lastSales as $sale)
                                        <tr>
                                            <th scope="row">
                                                {{ $sale->created_at->toTimeString() }}
                                            </th>
                                            <td>
                                                {{ $sale->client->name }}
                                            </td>
                                            <td>
                                                ${{ number_format($sale->payed, 2) }}
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Last products --}}
                    <div class="w-full">
                        <div class="px-6 py-2 border-b border-light-grey">
                            <div class="font-bold text-xl">Últimos productos vendidos</div>
                        </div>
                        <div class="table-responsive max-w-xl">
                            <table class="table text-grey-darkest">
                                <thead class="bg-grey-dark text-white text-normal">
                                    <tr>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Cliente</th>
                                        <th scope="col">Monto</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lastProducts as $sale)
                                        <tr>
                                            <th scope="row">
                                                {{ $sale->product->name }}
                                            </th>
                                            <td>
                                                {{ $sale->client->name }}
                                            </td>
                                            <td>
                                                ${{ number_format($sale->cant * $sale->product->price, 2) }}
                                            </td>

                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <h1 class="my-4 font-bold uppercase text-center text-xl lg:text-3xl">No hay estadísticas para mostrar
                </h1>
            @endif
        </div>
        <!-- /card -->

    </div>
    <!-- /Cards Section Ends Here -->
</div>
