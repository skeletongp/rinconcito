<aside id="sidebar" class="fixed  rounded-xl z-20  bg-left bg-cover w-2/3 md:w-1/2 lg:w-2/6 xl:w-1/6 hidden "
    style="background-image: url('/fondo.jpg'); ">
    <ul class="p-4 font-bold flex flex-col space-y-4">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('home'),'href' => ''.e(route('home')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('home')),'href' => ''.e(route('home')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
            <div class="w-1/6 h-full">
                <span class="fas fa-th-large text-lg"></span>
            </div>
            <span>Dashboard</span>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['contentClasses' => 'bg-menu py-3 px-2']]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentClasses' => 'bg-menu py-3 px-2']); ?>
             <?php $__env->slot('trigger', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('products.*'),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('products.*')),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
                    <div class="w-1/6 h-full">
                        <span class="fas fa-layer-group text-lg"></span>
                    </div>
                    <span>Productos</span>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('content', null, []); ?> 
                <div class="px-2 space-y-2">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('products.index'),'href' => ''.e(route('products.index')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('products.index')),'href' => ''.e(route('products.index')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']); ?>
                        <div class="w-1/6 h-full">
                            <span class="fas fa-eye text-lg"></span>
                        </div>
                        <span>Ver</span>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('products.create'),'href' => ''.e(route('products.create')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('products.create')),'href' => ''.e(route('products.create')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']); ?>
                        <div class="w-1/6 h-full">
                            <span class="fas fa-plus text-lg"></span>
                        </div>
                        <span>Añadir</span>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
             <?php $__env->endSlot(); ?>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('ingredients.index')).'','active' => request()->routeIs('ingredients.*'),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('ingredients.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('ingredients.*')),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
            <div class="w-1/6 h-full">
                <span class="fas fa-receipt text-lg"></span>
            </div>
            <span>Ingredientes</span>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['contentClasses' => 'bg-menu py-3 px-2 hidden']]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentClasses' => 'bg-menu py-3 px-2 hidden']); ?>
             <?php $__env->slot('trigger', null, []); ?> 
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('clients.*'),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('clients.*')),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
                    <div class="w-1/6 h-full">
                        <span class="fas fa-user text-lg"></span>
                    </div>
                    <span>Clientes</span>
                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
             <?php $__env->endSlot(); ?>
             <?php $__env->slot('content', null, []); ?> 
                <div class="px-2 space-y-2">
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('clients.index'),'href' => ''.e(route('clients.index')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('clients.index')),'href' => ''.e(route('clients.index')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']); ?>
                        <div class="w-1/6 h-full">
                            <span class="fas fa-eye text-lg"></span>
                        </div>
                        <span>Ver</span>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('clients.create'),'href' => ''.e(route('clients.create')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('clients.create')),'href' => ''.e(route('clients.create')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']); ?>
                        <div class="w-1/6 h-full">
                            <span class="fas fa-plus text-lg"></span>
                        </div>
                        <span>Añadir</span>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                </div>
             <?php $__env->endSlot(); ?>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['contentClasses' => 'bg-menu py-3 px-2']]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentClasses' => 'bg-menu py-3 px-2']); ?>
                 <?php $__env->slot('trigger', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('users.*'),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('users.*')),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
                        <div class="w-1/6 h-full">
                            <span class="fas fa-user-tie text-lg"></span>
                        </div>
                        <span>Usuarios</span>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('content', null, []); ?> 
                    <div class="px-2 space-y-2">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('users.index'),'href' => ''.e(route('users.index')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('users.index')),'href' => ''.e(route('users.index')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']); ?>
                            <div class="w-1/6 h-full">
                                <span class="fas fa-eye text-lg"></span>
                            </div>
                            <span>Ver</span>
                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('users.create'),'href' => ''.e(route('users.create')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('users.create')),'href' => ''.e(route('users.create')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']); ?>
                            <div class="w-1/6 h-full">
                                <span class="fas fa-plus text-lg"></span>
                            </div>
                            <span>Añadir</span>
                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('invoices.index')).'','active' => request()->routeIs('invoices.*'),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('invoices.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('invoices.*')),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
                <div class="w-1/6 h-full">
                    <span class="fas fa-file-invoice-dollar text-lg"></span>
                </div>
                <span>Facturas</span>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown','data' => ['contentClasses' => 'bg-menu py-3 px-2']]); ?>
<?php $component->withName('dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['contentClasses' => 'bg-menu py-3 px-2']); ?>
                 <?php $__env->slot('trigger', null, []); ?> 
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('outcomes.*'),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('outcomes.*')),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
                        <div class="w-1/6 h-full">
                            <span class="fas fa-dollar-sign text-lg"></span>
                        </div>
                        <span>Gastos</span>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                 <?php $__env->endSlot(); ?>
                 <?php $__env->slot('content', null, []); ?> 
                    <div class="px-2 space-y-2">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('outcomes.index'),'href' => ''.e(route('outcomes.index')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('outcomes.index')),'href' => ''.e(route('outcomes.index')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']); ?>
                            <div class="w-1/6 h-full">
                                <span class="fas fa-eye text-lg"></span>
                            </div>
                            <span>Ver</span>
                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['active' => request()->routeIs('outcomes.create'),'href' => ''.e(route('outcomes.create')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('outcomes.create')),'href' => ''.e(route('outcomes.create')).'','class' => 'flex justify-start space-x-2 items-center hover:bg-gray-800 hover:text-white p-3 border-b-2']); ?>
                            <div class="w-1/6 h-full">
                                <span class="fas fa-plus text-lg"></span>
                            </div>
                            <span>Añadir</span>
                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                 <?php $__env->endSlot(); ?>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('sales.index')).'','active' => request()->routeIs('sales.index'),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('sales.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('sales.index')),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
            <div class="w-1/6 h-full">
                <span class="fas fa-dollar-sign text-lg"></span>
            </div>
            <span>Ventas</span>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php if(auth()->check() && auth()->user()->hasRole('admin')): ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['href' => ''.e(route('sales.show')).'','active' => request()->routeIs('sales.show'),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('sales.show')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('sales.show')),'class' => 'flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
                <div class="w-1/6 h-full">
                    <span class="fas fa-exchange-alt text-lg"></span>
                </div>
                <span>Balance</span>
             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.dropdown-link','data' => ['id' => 'linkcart','class' => ' flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']]); ?>
<?php $component->withName('dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'linkcart','class' => ' flex justify-start space-x-2 items-center cursor-pointer hover:bg-gray-900 hover:text-white p-3 border-b-2']); ?>
            <div class="w-1/6 h-full">
                <span class="fas fa-shopping-cart text-lg"></span>
            </div>
            <div class="flex justify-between w-full items-center space-x-6 px-2 ">
                <span>Carrito</span>
                <span class="fas fa-angle-down"></span>
            </div>

         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

        <div id="divcart" class="  w-full items-center bg-white p-3 ">
            <?php if (isset($component)) { $__componentOriginal711acba64db3c556a13f1bcacacd11dac9e393c5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\InvoiceControl::class, []); ?>
<?php $component->withName('invoice-control'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php if (isset($__componentOriginal711acba64db3c556a13f1bcacacd11dac9e393c5)): ?>
<?php $component = $__componentOriginal711acba64db3c556a13f1bcacacd11dac9e393c5; ?>
<?php unset($__componentOriginal711acba64db3c556a13f1bcacacd11dac9e393c5); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        </div>
    </ul>
    <style>
        aside span {
            text-transform: uppercase;
        }

    </style>

</aside>
<?php /**PATH D:\laragon\www\coffetech\resources\views/components/menu.blade.php ENDPATH**/ ?>