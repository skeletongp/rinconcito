

<?php $__env->startSection('body'); ?>
    <div class="max-w-3xl mx-auto bg-white p-2 px-4 rounded-xl">
        <div class="flex flex-col max-w-3xl p-6 space-y-4 md:px-6 md:py-4  ">
            <h2 class="text-xl font-semibold">Artículos para facturar</h2>
            <ul class="flex flex-col divide-y divide-coolGray-700">
                
                <?php if($carts->count()): ?>
                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="flex flex-col pb-3 pt-2 sm:flex-row sm:justify-between">
                            <div class="flex w-full space-x-2 sm:space-x-4">
                                <img class="flex-shrink-0 object-cover w-20 h-20 dark:border-transparent rounded outline-none sm:w-32 sm:h-32 dark:bg-coolGray-500"
                                    src="<?php echo e($cart->product->pict); ?>" alt="Polaroid camera">
                                <div class="flex flex-col justify-between w-full pb-4">
                                    <div class="flex justify-between w-full pb-2 space-x-2">
                                        <div class="space-y-1 w-full">
                                            <h3 class="text-lg md:text-xl font-semibold leading-snug sm:pr-8">
                                                <?php echo e($cart->product->code); ?></h3>
                                            <p class="text-sm md:text-base dark:text-coolGray-400"><?php echo e($cart->product->name); ?></p>
                                        </div>
                                        <div class="text-right w-full">
                                            <p class="text-md font-semibold"> <?php echo e($cart->cant); ?> x
                                                $<?php echo e(number_format($cart->price, 2)); ?></p>
                                            <p class=" text-sm md:text-lg font-semibold">Total.
                                                $<?php echo e(number_format($cart->cant * $cart->price, 2)); ?></p>

                                        </div>
                                    </div>
                                    <div class="flex text-sm divide-x">
                                        <div class="flex justify-between items-center w-full py-1 pl-0 space-x-1">
                                            <form class="w-full hover:text-red-400"
                                                action="<?php echo e(route('charts.destroy', $cart)); ?>" method="POST">
                                                <?php echo method_field('delete'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button onclick="return confirm('¿Eliminar del carrito?')">
                                                    <span class="fas fa-trash-alt"></span>
                                                    <span>Remover</span>
                                                </button>
                                            </form>
                                            <form action="<?php echo e(route('charts.update', $cart)); ?>" method="POST">
                                                <?php echo method_field('put'); ?>
                                                <?php echo csrf_field(); ?>
                                                <div class="">
                                                    <div>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Cant. <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                                        <div class="
                                                    flex space-x-2 items-center">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['name' => 'cant','type' => 'number','value' => ''.e($cart->cant).'','class' => 'w-12 h-8']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'cant','type' => 'number','value' => ''.e($cart->cant).'','class' => 'w-12 h-8']); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                                                    <button
                                                        class="w-6 h-6 flex items-center justify-center rounded-full bg-green-400 text-white"><span
                                                            class="fas fa-check"></span></button>
                                                </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </ul>
        </div>
        
        <div class="space-y-1 text-right ">
            <p>Subtotal:
                <input type=" text" disabled class="font-semibold  w-28 text-right" id="spSubtotal"
                    value="$<?php echo e(number_format($carts->sum('total'), 2)); ?>" />
            </p>
            <p>Desc:
                <input type="text" disabled class="font-semibold  w-28 text-right " id="spDesc"
                    value="$<?php echo e(number_format(0, 2)); ?>" />
            </p>
            <p>Total:
                <input type="text" disabled class="font-semibold  w-28 text-right" id="spTotal"
                    value="$<?php echo e(number_format($carts->sum('total'), 2)); ?>" />
            </p>
        </div>
        
        
        <div>
            <form action="<?php echo e(route('invoices.store')); ?>" method="POST" id="formInvoice" class="flex flex-col">
                <?php echo csrf_field(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'subtotal','class' => 'text-right hidden','type' => 'hidden','money' => 'true','name' => 'subtotal','readonly' => true,'required' => true,'value' => ''.e($carts->sum('total')).'']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'subtotal','class' => 'text-right hidden','type' => 'hidden','money' => 'true','name' => 'subtotal','readonly' => true,'required' => true,'value' => ''.e($carts->sum('total')).'']); ?>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'total','class' => 'text-right opacity-0','type' => 'hidden','money' => 'true','name' => 'total','value' => ''.e($carts->sum('total')).'','readonly' => true,'required' => true]]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'total','class' => 'text-right opacity-0','type' => 'hidden','money' => 'true','name' => 'total','value' => ''.e($carts->sum('total')).'','readonly' => true,'required' => true]); ?>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['class' => 'text-right hidden','type' => 'hidden','money' => 'true','name' => 'payed','id' => 'payed','required' => true,'value' => ''.e($carts->sum('total')).'','min' => '0','max' => ''.e($carts->sum('total')).'']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'text-right hidden','type' => 'hidden','money' => 'true','name' => 'payed','id' => 'payed','required' => true,'value' => ''.e($carts->sum('total')).'','min' => '0','max' => ''.e($carts->sum('total')).'']); ?>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <div class="lg:flex items-center lg:space-x-2 my-3">
                    <div class="flex space-x-4 items-center w-full">
                        <div class="w-full">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Cliente <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.select','data' => ['name' => 'client_id','required' => true]]); ?>
<?php $component->withName('select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'client_id','required' => true]); ?>
                                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($client->id); ?>"><?php echo e($client->name); ?>

                                    </option>
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
<?php $component->withAttributes([]); ?>Vendedor <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['readonly' => true,'required' => true,'value' => ''.e(Auth::user()->fullname).'']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['readonly' => true,'required' => true,'value' => ''.e(Auth::user()->fullname).'']); ?>
                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                        </div>
                    </div>
                    <div class="">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Descuento <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'discount','class' => 'text-right ','type' => 'text','name' => 'discount','required' => true,'value' => '0','min' => '0','max' => ''.e($carts->sum('total')).'']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'discount','class' => 'text-right ','type' => 'text','name' => 'discount','required' => true,'value' => '0','min' => '0','max' => ''.e($carts->sum('total')).'']); ?>
                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                </div> 
                <div class="md:w-1/2 xl:w-1/3">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.label','data' => []]); ?>
<?php $component->withName('label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>Nombre del cliente <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.input','data' => ['id' => 'discount','class' => 'text-right ','type' => 'text','name' => 'name','placeholder' => 'Ingrese nombre del cliente']]); ?>
<?php $component->withName('input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'discount','class' => 'text-right ','type' => 'text','name' => 'name','placeholder' => 'Ingrese nombre del cliente']); ?>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
            </form>
        </div>
        
        
        <div class="flex justify-end space-x-4">
            <a href="<?php echo e(route('products.index')); ?>" class="px-6 py-2 border rounded-md dark:border-indigo-400">Volver
            </a>

            <button type="submit" form="formInvoice"
                class="px-6 py-2 border rounded-md dark:bg-indigo-400 dark:text-coolGray-900 dark:border-indigo-400">
                Cobrar
            </button>
        </div>
        
    </div>
    <!---->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/pages/carts/index.blade.php ENDPATH**/ ?>