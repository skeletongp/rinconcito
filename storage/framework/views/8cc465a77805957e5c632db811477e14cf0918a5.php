

<?php $__env->startSection('body'); ?>

    <div class="max-w-xl mx-auto bg-white p-4 rounded-xl">
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
        <h1 class="text-center font-bold uppercase text-xl mt-4 lg:mt-16 mb-4">Añadir ingredientes</h1>
        <form action="<?php echo e(route('products.add_ingredients', $product)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="flex items-center space-x-2">
                <div class="w-5/6">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Ingrediente <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['name' => 'ingredient_id']]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'ingredient_id']); ?>
                        <?php $__currentLoopData = $ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($ing->id); ?>"><?php echo e($ing->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
                <div>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Cantidad <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['type' => 'number','name' => 'cant','value' => '1','step' => '0.25']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'number','name' => 'cant','value' => '1','step' => '0.25']); ?>

                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="flex justify-end my-2">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => 'bg-black text-white hover:text-black']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'bg-black text-white hover:text-black']); ?>Añadir <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            </div>
        </form>
        <?php endif; ?>

        <?php if($product->ingredients->count()): ?>
            <h1 class="text-center text-xl font-bold uppercase ">Ingredientes de <br> <?php echo e($product->name); ?></h1>
            <div class="max-w-sm mx-auto">
                <?php $__currentLoopData = $product->ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class=" flex items-center  my-2 rounded-xl shadow-xl bg-gray-100 <?php echo e($ing->stock>0?'':'line-through'); ?>">
                    <div class="w-1/6 text-center text-xl  px-4 py-2 rounded-l-xl">
                        <div class=" h-7 font-semibold rounded-full ">
                            <span><?php echo e($ing->pivot->cant ?: 'X'); ?></span>
                        </div>
                    </div>
                    <div class="w-8/12 text-xl px-4 py-2  text-black">
                        <span><?php echo e($ing->name); ?></span>
                    </div>
                    <div class="w-3/12 text-xl  px-4 py-2 rounded-r-xl flex items-center space-x-4 justify-end">
                        <div class="w-7 h-7 text-center  font-semibold rounded-full bg-white">
                            <form action="<?php echo e(route('ingredients.remove')); ?>" method="POST" id="i<?php echo e($product->id.$ing->id); ?>">
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="ingredient" value="<?php echo e($ing->id); ?>">
                                <input type="hidden" name="product" value="<?php echo e($product->id); ?>">
                                <button data-label="¿Remover ingrediente?" form="i<?php echo e($product->id.$ing->id); ?>"
                                    class="fas fa-times cursor-pointer text-red-500 confirm"></button>
                            </form>
                        </div>
                        
                    </div>
                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php else: ?>
            <h1 class="my-6 text-center font-bold uppercase text-xl">Este producto no lleva ingredientes</h1>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/products/add-ingredients.blade.php ENDPATH**/ ?>