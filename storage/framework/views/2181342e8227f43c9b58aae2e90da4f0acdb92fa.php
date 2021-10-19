

<?php $__env->startSection('body'); ?>

    <div class="max-w-6xl mx-auto ">

        <div class="bg-white p-4 lg:p-8 max-w-lg mx-auto rounded-xl relative">
            <a href="<?php echo e(route('products.index')); ?>" class="absolute font-bold top-3 left-3 p-3 flex space-x-1 items-center">
                <span class="fas fa-angle-left"></span>
                <span>Atrás</span>
            </a>
            <div class="absolute right-3 top-3">
                <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['contentClasses' => ' border-none outline-none p-1 w-max bg-white z-20','align' => 'right']]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentClasses' => ' border-none outline-none p-1 w-max bg-white z-20','align' => 'right']); ?>
                         <?php $__env->slot('trigger', null, []); ?> 
                            <span class="fas fa-plus cursor-pointer "></span>
                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('content', null, []); ?> 
                            <form action="<?php echo e(route('products.upstock', $product)); ?>" method="POST" id="formadd">
                                <?php echo csrf_field(); ?>
                                <div class="space-x-2 flex items-center">
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['name' => 'stock','form' => 'formadd','class' => 'h-8','placeholder' => 'Sumar stock','required' => true,'min' => '1']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'stock','form' => 'formadd','class' => 'h-8','placeholder' => 'Sumar stock','required' => true,'min' => '1']); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                    <button form="formadd" class="w-7 h-7 rounded-full bg-green-500"><span
                                            class="fas fa-check text-white"></span></button>
                                </div>
                            </form>
                         <?php $__env->endSlot(); ?>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php endif; ?>
            </div>
            <div class=" max-w-lg mx-auto my-3">
                <ul class="cards m-8">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card-product','data' => ['name' => $product->name,'stock' => $product->hasStock(),'price' => $product->price,'code' => $product->code,'photo' => $product->pict,'id' => $product->id,'type' => $product->type]]); ?>
<?php $component->withName('card-product'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->name),'stock' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->hasStock()),'price' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->price),'code' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->code),'photo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->pict),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->id),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product->type)]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                </ul>
            </div>
            <div class="max-w-xl mx-auto">
                <?php if($details->count()): ?>
                    <h1 class="mt-2 mb-4 text-center font-bold text-xl lg:text-2xl">Ventas de hoy</h1>
                    <table class="table p-4 bg-white shadow rounded-lg">
                        <thead>
                            <tr>
                                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-bold text-gray-900">
                                    Cant.
                                </th>
                                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-bold text-gray-900">
                                    Hora
                                </th>
                                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-bold text-gray-900">
                                    Cliente
                                </th>
                                <th class="border-b-2 p-4 dark:border-dark-5 whitespace-nowrap font-bold text-gray-900">
                                    Monto
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $det): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="text-gray-700">
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        <?php echo e($det->cant); ?>

                                    </td>
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        <?php echo e($det->created_at->toTimeString()); ?>

                                    </td>
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        <?php echo e($det->client->name); ?>

                                    </td>
                                    <td class="border-b-2 p-4 dark:border-dark-5">
                                        $<?php echo e(number_format($det->price * $det->cant, 2)); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div>
                        <?php echo e($details->links()); ?>

                    </div>
                <?php endif; ?>

            </div>
        </div>
        <?php if(Session::has('success')): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alert','data' => ['type' => 'success']]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'success']); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php endif; ?>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/products/show.blade.php ENDPATH**/ ?>