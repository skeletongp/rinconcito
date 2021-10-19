<?php $attributes = $attributes->exceptProps(['name', 'stock', 'code', 'price', 'url' => '', 'photo', 'id', 'type', 'show' => false]); ?>
<?php foreach (array_filter((['name', 'stock', 'code', 'price', 'url' => '', 'photo', 'id', 'type', 'show' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<li class="relative shadow-xl max-w-sm ">
    <form id="frm<?php echo e($id); ?>" action="<?php echo e(route('charts.store')); ?>" method="POST" class="card frmChart "
        disabled>
        <?php echo csrf_field(); ?>
        <div
            class="absolute top-0   items-center  flex flex-col justify-between -ml-1 -mt-1 rounded-b-full z-120 bg-white">
            <button class="text-lg lg:text-xl hover:bg-transparent p-3 hover:text-green-600"><span
                    class="fas fa-cart-plus"></span></button>
            <div class="bg-white py-0 h-max rounded-xl">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.quantity','data' => ['key' => $id,'id' => $id,'stock' => $stock]]); ?>
<?php $component->withName('quantity'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['key' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'stock' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stock)]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
            <input type="hidden" name="product_id" value="<?php echo e($id); ?>">
        </div>
        <div class="card_image w-full h-full bg-cover bg-center bg-no-repeat "
            style="background-image: url(<?php echo e($photo); ?>)">
            <?php if($show): ?>
                <a href="<?php echo e(route('products.show', $id)); ?>"
                    class=" absolute right-4 top-4 w-8 h-8 bg-white rounded-full flex items-center justify-center">
                    <span class="fas fa-eye text-xl"></span>
                </a>
            <?php else: ?>
                <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                <div class=" flex flex-col space-y-3 absolute right-4 top-4">
                    <a href="<?php echo e(route('products.edit', $id)); ?>"
                        class="  w-8 h-8 bg-white rounded-full flex items-center justify-center">
                        <span class="fas fa-pen text-xl text-green-500"></span>
                    </a>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['form' => 'formDelete','onclick' => 'return confirm(\'¿Eliminar este producto?\')','class' => ' w-8 h-8 bg-white rounded-full flex items-center justify-center']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['form' => 'formDelete','onclick' => 'return confirm(\'¿Eliminar este producto?\')','class' => ' w-8 h-8 bg-white rounded-full flex items-center justify-center']); ?>
                        <span class="fas fa-trash-alt text-xl text-red-500"></span>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    

                </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <img src="" class="card__image" alt="" />
        <div class="card__overlay">
            <div class="card__header">

                <div class="card__thumb flex items-center justify-center <?php echo e($stock ? 'bg-green-500' : 'bg-red-500'); ?>"
                    alt="">
                    <span class="fas <?php echo e($stock ? 'fa-check' : 'fa-times'); ?> text-white"></span>
                </div>
                <div class="card__header-text">
                    <h3 class="card__title flex justify-between <?php echo e($stock ? '' : 'line-through'); ?>">
                        <div>
                            <span class="font-medium capitalize"><?php echo e($code); ?></span>-
                            <span class="text-green-800 font-bold"><?php echo e($price); ?></span>
                        </div>
                        
                    </h3>
                    <div class="flex justify-between items-center w-72 ">
                        <span
                            class="card__status text-black"><?php echo e($type == 'OTRO' ? $stock . ' en' : ($stock ? 'En' : 'Sin ')); ?>

                            Stock</span>
                        <?php if(!$stock): ?>
                            <span class="text-sm text-red-500 font-semibold mr-12 lg:mr-8">
                                <?php echo e($type == 'COMIDA' ? 'Faltan ingredientes' : 'Agotado'); ?>

                            </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="flex justify-between  items-center">
                <p class="card__description leading-5 text-black lg:text-lg"><?php echo e($name); ?></p>
                <?php if($type == 'COMIDA'): ?>
                    <a class="mr-4 px-2 py-1 rounded-lg bg-black text-white"
                        href="<?php echo e(route('ingredients.ingredients', $id)); ?>">Ingredientes</a>
                <?php endif; ?>
            </div>
        </div>
    </form>
    <form id="formDelete" action="<?php echo e(route('products.destroy', $id)); ?>" method="POST">
        <?php echo method_field('delete'); ?>
        <?php echo csrf_field(); ?>
    </form>
</li>
<?php /**PATH D:\laragon\www\holy-hope\resources\views/components/card-product.blade.php ENDPATH**/ ?>