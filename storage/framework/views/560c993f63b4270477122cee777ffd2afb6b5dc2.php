

<?php $__env->startSection('body'); ?>
    <div class="bg-white rounded-xl max-w-4xl p-4 lg:p-8 relative">
        <h1 class="text-center font-bold uppercase text-xl lg:text-2xl my-3">Listado de ventas</h1>
        <form action="" class="max-w-sm mx-auto my-2 flex items-center space-x-2" id="searchForm">
            <div class="w-full">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Fecha <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['name' => 's','type' => 'text','class' => 'searchForm']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 's','type' => 'text','class' => 'searchForm']); ?>
                     <?php $__env->slot('icon', null, []); ?> 
                        <button>
                            <span class="fas fa-search text-blue-500"></span>
                        </button>
                     <?php $__env->endSlot(); ?>
                    <option value="">Todas</option>
                    <?php $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e($date->day == request('s') ? 'selected' : ''); ?> value="<?php echo e($date->day); ?>">
                            <?php echo e(date_format(date_create($date->day), 'd M Y')); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $component->withAttributes([]); ?>Tanda <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['name' => 't','type' => 'text','class' => 'searchForm']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 't','type' => 'text','class' => 'searchForm']); ?>
                     <?php $__env->slot('icon', null, []); ?> 
                        <button>
                            <span class="fas fa-search text-blue-500"></span>
                        </button>
                     <?php $__env->endSlot(); ?>
                    <option value="">Todas</option>
                    <option <?php echo e(request('t') == 'mañana' ? 'selected' : ''); ?> value="mañana">Mañana</option>
                    <option <?php echo e(request('t') == 'tarde' ? 'selected' : ''); ?> value="tarde">Tarde</option>
                    <option <?php echo e(request('t') == 'noche' ? 'selected' : ''); ?> value="noche">Noche</option>
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
                    <?php if($sales->count()): ?>
                        <?php $__currentLoopData = $sales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $days): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <thead class="md:sticky top-0">
                                <tr class="bg-blue-300">

                                    <th scope="col" colspan="4" class="font-bold text-xl capitalize"><?php echo e($days[0]->day); ?>

                                    </th>
                                </tr>
                                <tr>
                                    <th scope="col" class="md:hidden">Fecha</th>
                                    <th scope="col">No. Factura</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Monto</th>
                                    <th scope="col">Vendedor</th>
                                </tr>
                            </thead>
                            <?php $__currentLoopData = $days; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td data-label="Fecha" class="md:hidden"><?php echo e($sale->day); ?></td>
                                    <td data-label="No. Factura">
                                        <div class="flex items-center justify-end lg:justify-center space-x-2">
                                            <a href="<?php echo e(route('invoices.edit',$sale)); ?>" class="hidden lg:block text-blue-300"><span class="fas fa-pen"></span></a>
                                            <a
                                                href="<?php echo e(route('invoices.show', $sale)); ?>">
                                                <?php echo e($sale->num); ?> <span class="text-red-500 text-xl"><?php echo e($sale->note? '*':''); ?></span>
                                            </a>
                                        </div>
                                    </td>
                                    <td data-label="Cliente" class="md:flex md:flex-col md:justify-center md:items-center">
                                        <div class="md:flex md:items-center md:space-x-2">
                                            <div class="hidden md:block w-8 h-8 rounded-full bg-center bg-contain"
                                                style="background-image: url(<?php echo e($sale->client->photo); ?>)"></div>
                                            <span><?php echo e($sale->client->name); ?></span>
                                        </div>
                                    </td>
                                    <td data-label="Monto">$<?php echo e(number_format($sale->payed, 2)); ?></td>
                                    <td data-label="Vendedor" class="md:flex md:flex-col md:justify-center md:items-center">
                                        <div class="md:flex md:items-center md:space-x-2">
                                            <div class="hidden md:block w-8 h-8 rounded-full bg-center bg-contain"
                                                style="background-image: url(<?php echo e($sale->user->photo); ?>)"></div>
                                            <span><?php echo e($sale->user->name); ?></span>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <tr class="bg-indigo-200">
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                                <th scope="col">$<?php echo e(number_format($days->sum('payed'), 2)); ?></th>
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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/sales/index.blade.php ENDPATH**/ ?>