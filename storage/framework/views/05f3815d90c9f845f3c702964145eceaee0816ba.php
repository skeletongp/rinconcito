

<?php $__env->startSection('body'); ?>
    <div class="max-w-4xl mx-auto bg-white p-4 rounded-xl">
        <h1 class="text-center font-bold uppercase text-xl my-4">Usuarios registrados</h1>
        <ul class="cards grid grid-cols-1 md:grid-cols-2 m-3 lg:m-8">
            <?php if($users->count()): ?>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class=" shadow-xl max-w-sm bg-white p-2 rounded-xl ">
                        <div class="w-full h-24 bg-cover bg-center flex flex-col justify-center rounded-xl "
                            style="background-image: url(/fondo.jpg)">
                            <div class="  h-full flex items-center space-x-3 bg-gray-50 p-2 md:p-4 bg-opacity-60 relative">
                                <div class="h-12 w-12 md:w-16 md:h-16 rounded-full bg-cover bg-center "
                                    style="background-image: url('<?php echo e($user->photo); ?>')">
                                </div>
                                <div class="flex flex-col justify-end">
                                    <span class="text-base md:text-xl font-bold"><?php echo e($user->fullname); ?></span>
                                    <p class="text-sm w-max font-bold leading-4 mt-2">
                                        <?php echo e($user->phone); ?>

                                        <br><?php echo e($user->role); ?>

                                        <br><?php echo e($user->email); ?>

                                    </p>

                                </div>
                                <div class="absolute flex flex-col px-2 py-1 justify-center space-y-4 md:space-y-8 h-full right-1 ">
                                    <a href="<?php echo e(route('users.edit', $user)); ?>">
                                        <span class="fas fa-pen text-blue-700"></span>
                                    </a>
                                    <form action="<?php echo e(route('users.destroy', $user)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <button onclick="return confirm('¿Eliminar usuario?')" class=" outline-none">
                                            <span class="fas fa-trash-alt text-red-700"></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <h1 class="text-center my-8 uppercase text-lg">No has añadido ningún usero</h1>
            <?php endif; ?>
        </ul>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\holy-hope\resources\views/pages/users/index.blade.php ENDPATH**/ ?>