

<?php $__env->startSection('body'); ?>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-xl relative">
        <a href="<?php echo e(route('outcomes.create')); ?>" class="flex space-x-2 items-center">
            <span class="hidden lg:block font-bold">Nuevo</span>
            <span class="fas fa-plus"></span>
        </a>
        <h1 class="text-center font-bold uppercase text-xl my-4">Historial de pagos</h1>
        <form action="" class="mx-auto my-2 space-y-3 md:space-y-0 md:flex md:space-x-2" id="searchForm">
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
                    <option <?php echo e('COMPRA' == request('t') ? 'selected' : ''); ?> value="COMPRA">Compra</option>
                    <option <?php echo e('PERSONAL' == request('t') ? 'selected' : ''); ?> value="PERSONAL">Empleados</option>
                    <option <?php echo e('SERVICIOS' == request('t') ? 'selected' : ''); ?> value="SERVICIOS">Servicios</option>
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
                    <option value="">Todas</option>
                    <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e($day->day == request('d') ? 'selected' : ''); ?> value="<?php echo e($day->day); ?>">
                            <?php echo e(date('d/m/Y', strtotime($day->day))); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
        </form>
        <div class="p-4 pt-0 overflow-auto max-h-screen" style="max-height: 600px">
            <table class=" relative border">
                <tbody>
                    <?php if($outcomes->count()): ?>
                        <?php $__currentLoopData = $outcomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $days): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <thead class="md:sticky top-0">
                                <tr class="bg-blue-300">

                                    <th scope="col" colspan="4" class="font-bold text-xl capitalize"><?php echo e($days[0]->day); ?>

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
                            <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outcome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td data-label="Fecha" class="md:hidden"><?php echo e($outcome->day); ?></td>
                                    <td data-label="No. Factura">
                                        <div class="flex items-center justify-end lg:justify-center space-x-2">
                                            <a href="<?php echo e(route('invoices.edit',$outcome)); ?>" class="hidden lg:block text-blue-300"><span class="fas fa-pen"></span></a>
                                            <a
                                                href="<?php echo e(route('invoices.show', $outcome)); ?>">
                                                <?php echo e($outcome->type); ?> 
                                            </a>
                                        </div>
                                    </td>
                                    <td data-label="Cliente" class="md:flex md:flex-col md:justify-center md:items-center">
                                        <div class="md:flex md:items-center md:space-x-2">
                                            <div class="hidden md:block w-min h-8 rounded-full bg-center bg-contain"
                                                ></div>
                                            <span><?php echo e($outcome->name); ?></span>
                                        </div>
                                    </td>
                                    <td data-label="Monto">$<?php echo e(number_format($outcome->amount, 2)); ?></td>
                                    <td data-label="Vendedor" class="md:flex md:flex-col md:justify-center md:items-center">
                                        <div class="md:flex md:items-center md:space-x-2">
                                            <div class="hidden md:block w-8 h-8 rounded-full bg-center bg-contain"
                                                style="background-image: url(<?php echo e($outcome->user->photo); ?>)"></div>
                                            <span><?php echo e($outcome->user->name); ?></span>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <tr class="bg-indigo-200">
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                                <th scope="col">$<?php echo e(number_format($days->sum('amount'), 2)); ?></th>
                                <th scope="col"></th>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">
                                <h1 class="text-center font-bold text-xl uppercase">NO SE HALLARON REGISTROS</h1>
                            </td>
                        </tr>
                    <?php endif; ?>
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

        @media  screen and (max-width: 600px) {
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/outcomes/index.blade.php ENDPATH**/ ?>