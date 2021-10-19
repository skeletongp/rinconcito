

<?php $__env->startSection('body'); ?>
    <div class="max-w-3xl mx-auto bg-white p-2 px-4 rounded-xl">
        <div class="flex flex-col max-w-3xl p-6 space-y-4 md:px-6 md:py-4  ">
            <?php if($invoices->count()): ?>
                <h2 class="text-xl font-semibold"><?php echo e($invoices->total()); ?> Pedidos pendientes</h2>
                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php if($invoices->count()): ?>
                        <div class="flex justify-between space-x-4">
                            <form action="<?php echo e(route('invoices.complete')); ?>" method="POST" id="formInvoice">
                                <?php echo method_field('put'); ?>
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="invoice" value="<?php echo e($invoice->id); ?>">
                            </form>
                            <span class="text-xl font-bold"><?php echo e($invoice->num); ?></span>

                            <button type=" submit" form="formInvoice" onclick="return confirm('¿Marcar como entregado?')"
                                class=" bg-black text-white px-6 pl-2 py-2 border rounded-md dark:bg-indigo-400 dark:text-coolGray-900 dark:border-indigo-400 md:text-xl  font-bold flex items-center space-x-3">
                                <span class="fas fa-check text-green-500"></span>
                                <span>Entregado</span>
                            </button>
                        </div>
                        
                    <?php endif; ?>
                    <ul class="flex flex-col divide-y divide-coolGray-700">
                        
                        <?php if($invoice->details->count()): ?>
                            <?php $__currentLoopData = $invoice->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="flex flex-col pb-3 pt-2 sm:flex-row sm:justify-between my-2">
                                    <div class="flex w-full space-x-2 sm:space-x-4">
                                        <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-coolGray-500"
                                            src="<?php echo e(optional($detail->product)->pict); ?>" alt="Polaroid camera">
                                        <div class="flex flex-col justify-between w-full pb-4">
                                            <div class="flex justify-between w-full pb-2 space-x-2">
                                                <div class="space-y-1 w-full">
                                                    <h3 class="text-lg md:text-xl font-semibold leading-snug sm:pr-8">
                                                        <?php echo e(optional($detail->product)->code); ?></h3>
                                                    <p class="text-sm md:text-base dark:text-coolGray-400">
                                                        <?php echo e(optional( $detail->product)->name); ?></p>
                                                </div>
                                                <div class="text-right w-full md:text-xl">
                                                    <p class="text-md font-semibold"> <?php echo e($detail->cant); ?> x
                                                        $<?php echo e(number_format(optional($detail->product)->price, 2)); ?></p>
                                                    <p class=" text-sm md:text-xl font-semibold">Total.
                                                        $<?php echo e(number_format($detail->cant * optional($detail->product)->price, 2)); ?>

                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </ul>
                    
                    <div class="space-y-1 text-right md:text-xl">
                        <?php if($invoice->discount>0): ?>
                            <p class="text-base text-red-500">Descuento:
                                <input type="text" disabled class="font-semibold  w-32 text-right " 
                                    value="$<?php echo e(number_format($invoice->discount, 2)); ?>" />
                            </p>
                        <?php endif; ?>
                        <p class="font-bold">Total:
                            <input type="text" disabled class="font-semibold  w-32 text-right text-blue-500" id="spTotal"
                                value="$<?php echo e(number_format($invoice->total, 2)); ?>" />
                        </p>
                    </div>
                    <hr class="my-3 h-1 border-4 bg-blue-300">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <h1 class="font-bold uppercase text-center  my-8 text-2xl">NO hay pedidos pendientes</h1>
            <?php endif; ?>
        </div>
        <div class="my-3">
            <?php echo e($invoices->links()); ?>

        </div>


    </div>
    <!---->
    <script>
        $('document').ready(function() {
            setInterval(() => {
                location.reload();
            }, 10000);
        })
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/invoices/pendings.blade.php ENDPATH**/ ?>