

<?php $__env->startSection('body'); ?>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-xl relative">
        <a href="<?php echo e(route('outcomes.create')); ?>" class="flex space-x-2 items-center">
            <span class="hidden lg:block font-bold">Nuevo</span>
            <span class="fas fa-plus"></span>
        </a>
        <h1 class="text-center font-bold uppercase text-xl my-4">Historial de pagos</h1>
        <form action="" class="mx-auto my-2 md:flex md:space-x-2" id="searchForm">
            <div class="w-full">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Buscar <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['name' => 's','type' => 'search','value' => ''.e(request('s')).'','placeholder' => 'Buscar por número o vendedor']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 's','type' => 'search','value' => ''.e(request('s')).'','placeholder' => 'Buscar por número o vendedor']); ?>
                     <?php $__env->slot('icon', null, []); ?> 
                        <button>
                            <span class="fas fa-search text-blue-500"></span>
                        </button>
                     <?php $__env->endSlot(); ?>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
            <div class="w-full">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Filtrar tipo <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['class' => 'searchForm','name' => 't']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'searchForm','name' => 't']); ?>
                    <option value="">Todos</option>
                    <option <?php echo e("COMPRA"==request('t')?'selected':''); ?>  value="COMPRA">Compra</option>
                    <option <?php echo e("PERSONAL"==request('t')?'selected':''); ?>  value="PERSONAL">Empleados</option>
                    <option <?php echo e("SERVICIOS"==request('t')?'selected':''); ?>  value="SERVICIOS">Servicios</option>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
            <div class="w-full">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Filtrar fecha <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['class' => 'searchForm','name' => 'd']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'searchForm','name' => 'd']); ?>
                    <option value="" >Todas</option>
                   <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <option <?php echo e($day->day==request('d')?'selected':''); ?> value="<?php echo e($day->day); ?>"><?php echo e(date('d/m/Y', strtotime($day->day))); ?></option>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
        </form>
        <?php if($outcomes->count()): ?>
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
                    <?php $__currentLoopData = $outcomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outcome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class=" border border-grey-500 md:border-none block md:table-row">
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                <?php echo e($outcome->name); ?>

                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                <?php echo e(date('d/m/Y', strtotime($outcome->day))); ?>

                            </td>
                            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                $<?php echo e(number_format($outcome->amount, 2)); ?></td>
                            <td class="p-2 md:border  md:border-grey-500 text-left block md:table-cell">
                                <?php echo e($outcome->description); ?></td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr class=" border border-grey-500 md:border-none block md:table-row font-bold text-lg uppercase">
                      
                        <td colspan="2" class="p-2 text-center block md:table-cell">
                            Total
                        </td>
                        <td class="p-2 text-left block md:table-cell">
                            $<?php echo e(number_format($outcomes->sum('amount'), 2)); ?></td>
                        <td class="p-2   text-left block md:table-cell">
                          </td>

                    </tr>

                </tbody>
            </table>
            <div class="m-2">
                <?php echo e($outcomes->links()); ?>

            </div>
        <?php else: ?>
            <h1 class="text-center my-8 uppercase text-lg font-bold">No se ha encontrado ningún gasto</h1>
        <?php endif; ?>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/outcomes/index.blade.php ENDPATH**/ ?>