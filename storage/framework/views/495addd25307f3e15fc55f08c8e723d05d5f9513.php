

<?php $__env->startSection('content'); ?>

    <!--Container -->
    <div class="mx-auto bg-grey-400">

        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <header class=" top-0 fixed w-full z-20 bg-bottom bg-cover" style="background-image: url('/fondo.jpg')">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <i class="fas fa-bars pr-2 text-black lg:text-2xl cursor-pointer " onclick="sidebarToggle()"></i>
                        <h1 class="text-black p-2"><?php echo e(env('COMPANY_NAME','CoffeTech')); ?></h1>
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
                                    class="text-white p-2 no-underline hidden md:block lg:block"><?php echo e(Auth::user()->fullname); ?></a>
                            </div>
                         <?php $__env->endSlot(); ?>
                         <?php $__env->slot('content', null, []); ?> 
                                <ul class="list-reset">
                                    <li><a href="#" class="no-underline px-4 py-2 block text-black hover:bg-grey-light">My
                                            account</a></li>
                                    <li><a href="#"
                                            class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Notifications</a>
                                    </li>
                                    <li>
                                        <hr class="border-t mx-2 border-grey-light">
                                    </li>
                                    <li><a href="<?php echo e(route('auth.logout')); ?>"
                                            class="no-underline px-4 py-2 block text-black hover:bg-grey-light">Logout</a>
                                    </li>
                                </ul>
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
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-transparent flex-1 p-3 lg:px-8 overflow-hidden max-w-7xl mx-auto  xl:ml-auto">

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
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <footer class="fixed bottom-0 z-30 bg-left text-blue-900 font-bold p-2 flex justify-between w-screen lg:px-8"
                style="background-image: url('/fondo.jpg')">
                <div class="">&copy; 2021</div>
            <div class=" f">Creado by: <a
                        href="https://ismaeldigitador.com/" target=" _blank">Ismael Contreras</a></div>
            </footer>
            <!--/footer-->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\holy-hope\resources\views/dashboard.blade.php ENDPATH**/ ?>