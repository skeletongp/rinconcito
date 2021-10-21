

<?php $__env->startSection('body'); ?>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-xl">
        <h1 class="text-center font-bold uppercase text-xl my-4">Historial de facturas</h1>
        <form action="" class="max-w-sm mx-auto my-2">
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
        </form>
        <?php if($invoices->count()): ?>
            <ul class="cards grid grid-cols-1 md:grid-cols-2 m-3 lg:m-8">
                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class=" shadow-xl max-w-sm bg-white p-2 rounded-xl ">
                        <div class="w-full h-24 bg-cover bg-center flex flex-col justify-center rounded-xl "
                            style="background-image: url(/fondo.jpg)">
                            <div class="  h-full flex items-center space-x-3 bg-gray-50 p-2 md:p-4 bg-opacity-60 relative">
                                <div class="h-12 w-12 md:w-16 md:h-16 rounded-full bg-cover bg-center "
                                    style="background-image: url('<?php echo e($invoice->client->photo); ?>')">
                                </div>
                                <div class="flex flex-col justify-end">
                                    <span class="text-base md:text-xl font-bold"><?php echo e($invoice->num); ?> 
                                        <span class="text-red-500 text-xl"><?php echo e($invoice->note? '*':''); ?></span></span>
                                    <p class="text-sm w-max font-bold leading-4 mt-2">
                                        <?php echo e($invoice->client->phone); ?>

                                        <br>Total: $<?php echo e(number_format($invoice->payed, 2)); ?>

                                        <br><?php echo e($invoice->day); ?>

                                    </p>

                                </div>
                                <div
                                    class="absolute flex flex-col px-2 py-1 justify-center space-y-4 md:space-y-8 h-full right-1 ">
                                    <a href="<?php echo e(route('invoices.show', $invoice)); ?>">
                                        <span class="fas fa-eye text-blue-700"></span>
                                    </a>
                                    <a href="<?php echo e(route('invoices.edit', $invoice)); ?>">
                                        <span class="fas fa-pen text-green-700"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php else: ?>
            <h1 class="text-center my-8 uppercase text-lg font-bold">No se ha encontrado ninguna factura</h1>
        <?php endif; ?>
        <div class="mx-4 md:mx-8">
            <?php echo e($invoices->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/invoices/index.blade.php ENDPATH**/ ?>