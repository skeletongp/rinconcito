

<?php $__env->startSection('body'); ?>
    <div class=" bg-transparent rounded-xl py-2">
        <?php
            $balance = $invoices->sum('payed') - $outcomes->sum('amount');
            $percent = 0;
            if ($invoices->sum('payed')>0) {
                $percent = $balance / $invoices->sum('payed');
                $percent = $percent * 100;
            }
            $bsPercent = 0;
            if ($invoices->sum('payed') > 0) {
                $beforeSales = ($invoices->sum('payed') - $beforeInvoices->sum('payed')) / $invoices->sum('payed');
                $bsPercent = $beforeSales * 100;
            }
            $bbPercent = 0;
            if ($outcomes->sum('amount')) {
                $beforeBuys = ($outcomes->sum('amount') - $beforeOutcomes->sum('amount')) / $outcomes->sum('amount');
                $bbPercent = $beforeBuys * 100;
            }
        ?>
        <!-- component -->
        <div class="w-full py-16 bg-transparent -my-2 flex justify-center items-center">
            <div class="container p-6 mx-8 bg-white">
                <h1 class="text-black font-bold tracking-wider text-center my-3  text-lg ">
                    Desde: <span class="text-green-800"><?php echo e($start); ?></span>
                    Hasta: <span class="text-green-800"><?php echo e($end); ?></span>
                </h1>
                <div
                    class="bg-gray-100 rounded-lg w-full h-auto py-4 flex flex-col space-y-8 max-w-md mx-auto justify-between divide-x divide-solid divide-gray-400">
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-gray-800 text-lg font-semibold tracking-wider">Ventas del período</label>
                        <label
                            class="text-green-800 text-xl md:text-3xl font-bold">$<?php echo e(number_format($invoices->sum('payed'), 2)); ?></label>
                        <div title="Período anterior"
                            class="absolute bg-white shadow-xl rounded-md font-semibold text-sm <?php echo e($bsPercent >= 0 ? 'text-green-700' : 'text-red-700'); ?> p-2 right-4 bottom-0">
                            <span class="fas <?php echo e($bsPercent >= 0 ? 'fa-angle-up' : 'fa-angle-down'); ?>"></span>
                            <?php echo e(number_format($bsPercent, 2)); ?>%
                        </div>
                    </div>
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-gray-800 text-lg font-semibold tracking-wider">Gastos del período</label>
                        <label
                            class="text-red-800 text-xl md:text-3xl font-bold">$<?php echo e(number_format($outcomes->sum('amount'), 2)); ?></label>
                        <div title="Período anterior"
                            class="absolute bg-white shadow-xl rounded-md font-semibold text-sm <?php echo e($bbPercent <= 0 ? 'text-green-700' : 'text-red-700'); ?> p-2 right-4 bottom-0">
                            <span class="fas <?php echo e($bbPercent >= 0 ? 'fa-angle-up' : 'fa-angle-down'); ?>"></span>
                            <?php echo e(number_format($bbPercent, 2)); ?>%
                        </div>
                    </div>
                    <div class="relative flex-1 flex flex-col gap-2 px-4">
                        <label class="text-gray-800 text-base font-semibold tracking-wider">Balance general</label>
                        <label
                            class="text-green-800 text-xl md:text-3xl font-bold">$<?php echo e(number_format($balance, 2)); ?></label>
                        <div
                            class="absolute bg-white shadow-xl rounded-md font-semibold text-sm <?php echo e($percent >= 0 ? 'text-green-700' : 'text-red-700'); ?> p-2 right-4 bottom-0">
                            <span class="fas <?php echo e($percent >= 0 ? 'fa-angle-up' : 'fa-angle-down'); ?>"></span>
                            <?php echo e(number_format($percent, 2)); ?>%
                        </div>
                    </div>
                </div>
                <form action="" class="max-w-md mx-auto my-2">
                    <div class="flex flex-col space-y-4 md:space-y-0 md:flex-row md:space-x-2">
                        <div class="w-full">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Desde <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['type' => 'date','name' => 'start','value' => ''.e(request('start', date('Y-m-d'))).'']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'date','name' => 'start','value' => ''.e(request('start', date('Y-m-d'))).'']); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
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
<?php $component->withAttributes([]); ?>Hasta <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['type' => 'date','name' => 'end','value' => ''.e(request('end', date('Y-m-d'))).'']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'date','name' => 'end','value' => ''.e(request('end', date('Y-m-d'))).'']); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                        </div>
                    </div>
                    <div class="flex space-y-2 justify-end">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => 'my-3 bg-black text-white']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'my-3 bg-black text-white']); ?>Buscar <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/sales/show.blade.php ENDPATH**/ ?>