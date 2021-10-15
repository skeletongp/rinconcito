<div class=" bg-white rounded-xl py-2">
    <div class="flex flex-col items-center w-full my-3 bg-white text-center p-4 rounded-xl">
        <!-- Stats Row Starts Here -->
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <x-grid-stat dataUp="Productos" dataDown="Consulta el cátalogo" bg='bg-success' icon="fa-layer-group" url="{{route('products.index')}}" />
            <x-grid-stat dataUp="Facturas" dataDown="Historial de facturas" bg='bg-info' icon="fa-file-invoice-dollar" url="{{route('invoices.index')}}" />
    
        </div>
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <x-grid-stat dataUp="Pendientes" dataDown="{{$pendings->count()}} Pedidos por entregar" bg='bg-info'  icon="fa-hourglass-half" url="{{route('invoices.pendings')}}"/>
            <x-grid-stat dataUp="Entregados" dataDown="{{$delivered->count()}} Pedidos entregados" bg='bg-success' icon="fa-check-double" url="{{route('invoices.delivered')}}" />
        </div>
       
    </div>
    <div class="flex flex-col items-center w-full my-3 bg-white text-center p-4 rounded-xl">
        <!-- Stats Row Starts Here -->
        <h1 class="text-center uppercase font-bold text-lg lg:text-3xl mb-4">Estadísticas de venta</h1>
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <x-grid-stat :dataUp="'$'.number_format($fromWeek, 2)" :dataDown="'Vendido esta semana'" bg='bg-red-dark' icon="fa-calendar-week" />
            <x-grid-stat :dataUp="'$'.number_format($fromDay, 2)" :dataDown="'Ventas de hoy'" bg='bg-blue-dark ' icon="fa-calendar-day" />
    
        </div>
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <x-grid-stat :dataUp="$fromProduct" :dataDown="'Productos vendidos hoy'" bg='bg-blue-dark ' icon="fa-boxes" />
            <x-grid-stat :dataUp="$fromClient" :dataDown="' Clientes atendidos hoy'" bg='bg-red-dark'  icon="fa-user" />
        </div>
       
    </div>
</div>

