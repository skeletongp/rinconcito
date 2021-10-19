<div>
    <?php if($carts->count()): ?>
        <div class=" flex justify-between items-center px-2">
            <span>Total:</span>
            <span>$<?php echo e(number_format($carts->sum('total'), 2)); ?></span>
        </div>

        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex items-center space-x-2 my-2">
                <div
                    class="flex w-full items-center justify-between bg-white leading-none  rounded-full p-2 shadow text-teal text-sm">
                    <form action="<?php echo e(route('charts.destroy', $cart)); ?>" method="POST">
                        <?php echo method_field('delete'); ?>
                        <?php echo csrf_field(); ?>
                        <button onclick="return confirm('¿Eliminar del carrito?')"><span
                                class="text-red-400 fas fa-times"></span></button>
                    </form>
                    <span class="inline-flex px-2 text-pink-600 text-left w-full pl-3">
                        <?php echo e($cart->product->code); ?>

                    </span>
                    <span class="inline-flex px-2 text-blue-800">
                        <?php echo e($cart->cant); ?>

                    </span>
                </div>

            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<div class="flex items-center <?php echo e($carts->count()?:'hidden'); ?> justify-between space-x-3 ">

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('charts.index')).'']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('charts.index')).'']); ?>
        Facturar
     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <form action="<?php echo e(route('charts.empty')); ?>" method="POST">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
        <button onclick="return confirm('Vaciar el carrito?')"
            class='text-white px-2 py-1 rounded xl:text-lg font-bold'><span class="text-red-700">Vaciar</span>
        </button>
    </form>

</div>
<?php /**PATH D:\laragon\www\coffetech\resources\views/components/invoice-control.blade.php ENDPATH**/ ?>