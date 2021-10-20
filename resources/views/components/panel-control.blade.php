<div class=" bg-white rounded-xl py-2">
    <div class="flex flex-col items-center w-full my-3 bg-white text-center p-4 rounded-xl">
        <!-- Stats Row Starts Here -->
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <x-grid-stat dataUp="Productos" dataDown="Consulta el cátalogo" bg='bg-success' icon="fa-layer-group" url="{{route('products.index')}}"  color="text-black"/>
           @hasrole('admin')
           <x-grid-stat dataUp="Facturas" dataDown="Historial de facturas" bg='bg-info' icon="fa-file-invoice-dollar" url="{{route('invoices.index')}}" color="text-black"/>
           @endhasanyrole
    
        </div>
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <x-grid-stat dataUp="Pendientes" dataDown="{{$pendings->count()}} Pedidos por entregar" bg='bg-info'  icon="fa-hourglass-half" url="{{route('invoices.pendings')}}"     color="text-black"/>
            <x-grid-stat dataUp="Entregados" dataDown="{{$delivered->count()}} Pedidos entregados" bg='bg-success' icon="fa-check-double text-white" url="{{route('invoices.delivered')}}"  color="text-black" />
        </div>
       
    </div>
    <div class="flex flex-col items-center w-full my-3 bg-white text-center p-4 rounded-xl">
        <!-- Stats Row Starts Here -->
        <h1 class="text-center uppercase font-bold text-lg lg:text-3xl mb-4">Estadísticas de venta</h1>
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <x-grid-stat :dataUp="'$'.number_format($fromWeek, 2)" :dataDown="'Vendido esta semana'" bg='bg-red-dark' icon="fa-calendar-week" url="{{route('sales.index')}}"   color="text-white"/>
            <x-grid-stat :dataUp="'$'.number_format($fromDay, 2)" :dataDown="'Ventas de hoy'" bg='bg-blue-dark ' icon="fa-calendar-day"  color="text-white" url="{{route('sales.index',['s'=>date('Y-m-d')])}}"/>
    
        </div>
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center"  color="text-white">
            <x-grid-stat :dataUp="$fromProduct" :dataDown="'Productos vendidos hoy'" bg='bg-blue-dark ' icon="fa-boxes"     color="text-white"/>
            <x-grid-stat :dataUp="$fromClient" :dataDown="' Clientes atendidos hoy'" bg='bg-red-dark'  icon="fa-user"    color="text-white"/>
        </div>
       
    </div>
</div>

