

<?php $__env->startSection('body'); ?>
    <div class="max-w-3xl mx-auto bg-white p-2 px-4 rounded-xl">
        <div class="flex flex-col max-w-3xl p-6 space-y-4 md:px-6 md:py-4  ">
            <?php if($invoices->count()): ?>
                <h2 class="text-xl font-semibold"><?php echo e($invoices->total()); ?> Pedidos entregados</h2>
                <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                    <ul class="flex flex-col divide-y divide-coolGray-700 shadow-xl p-3">
                        
                        <?php if($invoice->details->count()): ?>
                            <?php $__currentLoopData = $invoice->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="flex flex-col pb-3 pt-2 sm:flex-row sm:justify-between ">
                                    <div class="flex w-full space-x-2 sm:space-x-4">
                                        <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-coolGray-500"
                                            src="<?php echo e($detail->product->pict); ?>" alt="Polaroid camera">
                                        <div class="flex flex-col justify-between w-full pb-4">
                                            <div class="flex justify-between w-full pb-2 space-x-2">
                                                <div class="space-y-1 w-full">
                                                    <a href="<?php echo e(route('products.show', $detail->product)); ?>" class="text-lg md:text-xl font-semibold leading-snug sm:pr-8">
                                                        <?php echo e($detail->product->code); ?></a> <br>
                                                    <a href="<?php echo e(route('products.show', $detail->product)); ?>" class="text-sm md:text-base dark:text-coolGray-400">
                                                        <?php echo e($detail->product->name); ?></a>
                                                        <p class="text-sm md:text-base dark:text-coolGray-400">
                                                            <?php echo e($detail->updated_at); ?></p>
                                                </div>
                                                <div class="text-right w-full md:text-xl">
                                                    <p class="text-md font-semibold"> <?php echo e($detail->cant); ?> x
                                                        $<?php echo e(number_format($detail->price, 2)); ?></p>
                                                    <p class=" text-sm md:text-2xl font-semibold">Total.
                                                        $<?php echo e(number_format($detail->cant * $detail->price, 2)); ?>

                                                    </p>

                                                </div>
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
                        <p>Total:
                            <input type="text" disabled class="font-semibold  w-32 text-right " id="spTotal"
                                value="$<?php echo e(number_format($invoice->total, 2)); ?>" />
                        </p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <h1 class="font-bold uppercase text-center  my-8 text-2xl">No hay pedidos entregados hoy</h1>
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

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/invoices/delivered.blade.php ENDPATH**/ ?>