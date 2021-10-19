

<?php $__env->startSection('body'); ?>
    <div class="max-w-4xl mx-auto md:mx-16 lg:mx-auto bg-white p-4 rounded-xl">
        
        <div class="my-2 ">
            <h1 class="my-3 font-bold text-center uppercase text-lg">Nuevo Ingrediente</h1>
            <form action="<?php echo e(route('ingredients.store')); ?>" method="POST"
                class="max-w-md mx-auto shadow-xl px-4 pt-4 pb-2 rounded-xl">
                <?php echo csrf_field(); ?>
                <div class="flex items-center space-x-2  ">
                    <div class="w-3/4">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Nombre <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['name' => 'name','value' => ''.e(old('name', request('name'))).'','type' => 'text','placeholder' => 'Nombre','required' => true]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'name','value' => ''.e(old('name', request('name'))).'','type' => 'text','placeholder' => 'Nombre','required' => true]); ?>
                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <div class="w-1/4">
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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['name' => 'stock','value' => ''.e(old('stock', request('stock'))).'','type' => 'number','step' => '0.5','placeholder' => 'Cantidad','required' => true]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'stock','value' => ''.e(old('stock', request('stock'))).'','type' => 'number','step' => '0.5','placeholder' => 'Cantidad','required' => true]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div>
                <div class="flex justify-end my-4">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button','data' => ['class' => 'bg-black text-white']]); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'bg-black text-white']); ?>Guardar <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
            </form>
        </div>
        
        
        <?php if($ingredients->count()): ?>
            <h1 class="text-center font-bold uppercase text-xl mb-4 lg:mb-10 mt-4">Lista de ingredientes disponibles</h1>
            <div class="lg:grid lg:grid-cols-2 lg:gap-6">
                <?php $__currentLoopData = $ingredients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class=" flex items-center  my-2 rounded-xl shadow-xl bg-gray-100">
                        <div class="w-1/6 text-center text-xl  px-4 py-2 rounded-l-xl">
                            <div class=" h-7 font-semibold rounded-full ">
                                <span><?php echo e($ing->stock ?: 'X'); ?></span>
                            </div>
                        </div>
                        <div class="w-8/12 text-xl px-4 py-2  text-black">
                            <span><?php echo e($ing->name); ?></span>
                        </div>
                        <div class="w-3/12 text-xl  px-4 py-2 rounded-r-xl flex items-center space-x-4 justify-between">
                            <div class="w-7 h-7 text-center  font-semibold rounded-full bg-white">
                                <form action="" method="POST">
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button onclick="return confirm('Remover ingrediente?')"
                                        class="fas fa-times cursor-pointer text-red-500"></button>
                                </form>
                            </div>
                            <a href="<?php echo e(route('ingredients.index', ['name' => $ing->name, 'stock' => $ing->stock])); ?>"
                                class="w-7 h-7 text-center flex  justify-center items-center  font-semibold rounded-full bg-white">
                                <span class="fas fa-pen text-sm cursor-pointer text-blue-700"></span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="px-4 my-3">
                <?php echo e($ingredients->links()); ?>

            </div>
            
        <?php else: ?>
            <h1 class="text-center font-bold uppercase text-xl">No hay ingredientes registrados</h1>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\holy-hope\resources\views/pages/ingredients/index.blade.php ENDPATH**/ ?>