<div class=" bg-white rounded-xl py-2">
    <div class="flex flex-col items-center w-full my-3 bg-white text-center p-4 rounded-xl">
        <!-- Stats Row Starts Here -->
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.grid-stat','data' => ['dataUp' => 'Productos','dataDown' => 'Consulta el cátalogo','bg' => 'bg-success','icon' => 'fa-layer-group','url' => ''.e(route('products.index')).'']]); ?>
<?php $component->withName('grid-stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['dataUp' => 'Productos','dataDown' => 'Consulta el cátalogo','bg' => 'bg-success','icon' => 'fa-layer-group','url' => ''.e(route('products.index')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
           <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
           <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.grid-stat','data' => ['dataUp' => 'Facturas','dataDown' => 'Historial de facturas','bg' => 'bg-info','icon' => 'fa-file-invoice-dollar','url' => ''.e(route('invoices.index')).'']]); ?>
<?php $component->withName('grid-stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['dataUp' => 'Facturas','dataDown' => 'Historial de facturas','bg' => 'bg-info','icon' => 'fa-file-invoice-dollar','url' => ''.e(route('invoices.index')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
           <?php endif; ?>
    
        </div>
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.grid-stat','data' => ['dataUp' => 'Pendientes','dataDown' => ''.e($pendings->count()).' Pedidos por entregar','bg' => 'bg-info','icon' => 'fa-hourglass-half','url' => ''.e(route('invoices.pendings')).'']]); ?>
<?php $component->withName('grid-stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['dataUp' => 'Pendientes','dataDown' => ''.e($pendings->count()).' Pedidos por entregar','bg' => 'bg-info','icon' => 'fa-hourglass-half','url' => ''.e(route('invoices.pendings')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.grid-stat','data' => ['dataUp' => 'Entregados','dataDown' => ''.e($delivered->count()).' Pedidos entregados','bg' => 'bg-success','icon' => 'fa-check-double text-white','url' => ''.e(route('invoices.delivered')).'']]); ?>
<?php $component->withName('grid-stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['dataUp' => 'Entregados','dataDown' => ''.e($delivered->count()).' Pedidos entregados','bg' => 'bg-success','icon' => 'fa-check-double text-white','url' => ''.e(route('invoices.delivered')).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
       
    </div>
    <div class="flex flex-col items-center w-full my-3 bg-white text-center p-4 rounded-xl">
        <!-- Stats Row Starts Here -->
        <h1 class="text-center uppercase font-bold text-lg lg:text-3xl mb-4">Estadísticas de venta</h1>
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.grid-stat','data' => ['dataUp' => '$'.number_format($fromWeek, 2),'dataDown' => 'Vendido esta semana','bg' => 'bg-red-dark','icon' => 'fa-calendar-week']]); ?>
<?php $component->withName('grid-stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['dataUp' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('$'.number_format($fromWeek, 2)),'dataDown' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Vendido esta semana'),'bg' => 'bg-red-dark','icon' => 'fa-calendar-week']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.grid-stat','data' => ['dataUp' => '$'.number_format($fromDay, 2),'dataDown' => 'Ventas de hoy','bg' => 'bg-blue-dark ','icon' => 'fa-calendar-day']]); ?>
<?php $component->withName('grid-stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['dataUp' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('$'.number_format($fromDay, 2)),'dataDown' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Ventas de hoy'),'bg' => 'bg-blue-dark ','icon' => 'fa-calendar-day']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    
        </div>
        <div class="flex  flex-col md:flex-row lg:flex-row mx-2 w-full justify-center">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.grid-stat','data' => ['dataUp' => $fromProduct,'dataDown' => 'Productos vendidos hoy','bg' => 'bg-blue-dark ','icon' => 'fa-boxes']]); ?>
<?php $component->withName('grid-stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['dataUp' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fromProduct),'dataDown' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('Productos vendidos hoy'),'bg' => 'bg-blue-dark ','icon' => 'fa-boxes']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.grid-stat','data' => ['dataUp' => $fromClient,'dataDown' => ' Clientes atendidos hoy','bg' => 'bg-red-dark','icon' => 'fa-user']]); ?>
<?php $component->withName('grid-stat'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['dataUp' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fromClient),'dataDown' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(' Clientes atendidos hoy'),'bg' => 'bg-red-dark','icon' => 'fa-user']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
       
    </div>
</div>

<?php /**PATH D:\laragon\www\coffetech\resources\views/components/panel-control.blade.php ENDPATH**/ ?>