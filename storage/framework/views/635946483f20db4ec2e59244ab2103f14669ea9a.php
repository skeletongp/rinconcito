

<?php $__env->startSection('content'); ?>

    <!--Container -->
    <div class="mx-auto bg-grey-400">

        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <header class=" top-0 fixed w-full z-20 bg-bottom bg-cover" style="background-image: url('/fondo.jpg')">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <?php if(auth()->check() && auth()->user()->hasAnyRole('admin|seller')): ?>
                            <i class="fas fa-bars pr-2 text-black lg:text-2xl cursor-pointer " onclick="sidebarToggle()"></i>
                            <a href="<?php echo e(route('home')); ?>"
                                class="text-black p-2 font-bold uppercase text-xl md:text-2xl font-sans"><?php echo e(env('COMPANY_NAME', 'CoffeTech')); ?></a>
                        <?php endif; ?>
                        <?php if(auth()->check() && auth()->user()->hasRole('cooker')): ?>
                            <a
                                class="text-black select-none p-2 font-bold uppercase text-xl md:text-2xl font-sans"><?php echo e(env('COMPANY_NAME', 'CoffeTech')); ?></a>
                        <?php endif; ?>

                    </div>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => []]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                         <?php $__env->slot('trigger', null, []); ?> 
                            <div class="flex items-center space-x-1 cursor-pointer mt-3">
                                <img class="inline-block h-8 w-8 rounded-full" src="<?php echo e(Auth::user()->photo); ?>" alt="">
                                <a href="#"
                                    class="text-white p-2 no-underline hidden font-bold md:block lg:block"><?php echo e(Auth::user()->fullname); ?></a>
                            </div>
                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('content', null, []); ?> 
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('users.show', Auth::user())).'','class' => 'flex space-x-3 items-center  hover:text-blue-500']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('users.show', Auth::user())).'','class' => 'flex space-x-3 items-center  hover:text-blue-500']); ?>
                                <span class="fas fa-user-cog"></span>
                                <span>Mi cuenta</span>
                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php if(auth()->check() && auth()->user()->hasAnyRole('admin|seller')): ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('charts.index')).'','class' => 'flex space-x-3 items-center  hover:text-blue-500']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('charts.index')).'','class' => 'flex space-x-3 items-center  hover:text-blue-500']); ?>
                                    <span class="fas fa-shopping-cart"></span>
                                    <span>Ver Carrito</span>
                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('auth.logout')).'','class' => 'flex space-x-3 items-center hover:text-red-500']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('auth.logout')).'','class' => 'flex space-x-3 items-center hover:text-red-500']); ?>
                                <span class="fas fa-power-off"></span>
                                <span>Salir</span>
                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                         <?php $__env->endSlot(); ?>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                </div>
            </header>
            <!--/Header-->

            <div class="flex flex-1 py-12 bg-no-repeat bg-right bg-fixed lg:bg-cover "
                style="background-image:url('<?php echo e(asset('/fondo.jpg')); ?>')">
                <!--Sidebar-->
                <?php if(auth()->check() && auth()->user()->hasAnyRole('admin|seller')): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.menu','data' => []]); ?>
<?php $component->withName('menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                <?php endif; ?>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-transparent flex-1 p-3 lg:px-8 overflow-hidden max-w-7xl mx-auto  relative pt-4">
                    <?php
                        $count=App\Models\Chart::where('status','pendiente')->get()->count();
                    ?>
                    <?php if (! empty(trim($__env->yieldContent('body')))): ?>
                        <?php echo $__env->yieldContent('body'); ?>
                    <?php else: ?>
                        <?php if (isset($component)) { $__componentOriginala93223b18f0c4b48c2e5fc16cc64e46cc9596216 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\PanelControl::class, []); ?>
<?php $component->withName('panel-control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginala93223b18f0c4b48c2e5fc16cc64e46cc9596216)): ?>
<?php $component = $__componentOriginala93223b18f0c4b48c2e5fc16cc64e46cc9596216; ?>
<?php unset($__componentOriginala93223b18f0c4b48c2e5fc16cc64e46cc9596216); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php endif; ?>
                    <div title="Carrito"
                        class="sm:w-8 sm:h-8 lg:w-12 lg:h-12 flex items-center justify-center rounded-full fixed z-40 bg-indigo-700 bottom-12 right-2 p-1 ">
                        <div class="w-4 h-4 lg:w-6 lg:h-6 bg-white shadow-xl text-green-800 rounded-full absolute -top-2 lg:-top-3 left-0 flex items-center justify-center">
                            <span class="text-xs lg:text-base font-bold"><?php echo e($count); ?></span>
                        </div>
                        <a href="<?php echo e(route('charts.index')); ?>">
                        <span class="fas fa-shopping-cart sm:text-sm lg:text-xl text-white"></span>
                        </a>
                    </div>
                    <div title="Productos"
                        class="sm:w-8 sm:h-8 lg:w-12 lg:h-12 flex items-center justify-center rounded-full fixed z-40 bg-pink-700 bottom-28 right-2 p-1">
                        <a href="<?php echo e(route('products.index')); ?>">
                        <span class="fas fa-layer-group sm:text-sm lg:text-xl text-white"></span>
                        </a>
                    </div>
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="fixed bottom-0 z-30 bg-left text-blue-900 font-bold p-2 flex justify-between w-screen lg:px-8"
                style="background-image: url('/fondo.jpg')">
                <div class="">&copy; 2021</div>
                <div class=" f">Creado por: <a href="https://ismaeldigitador.com/" target=" _blank">Ismael
                        Contreras</a></div>
            </footer>
            <!--/footer-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\coffetech\resources\views/dashboard.blade.php ENDPATH**/ ?>