<?php $attributes = $attributes->exceptProps(['disabled' => false, 'class' => '', 'money'=>false]); ?>
<?php foreach (array_filter((['disabled' => false, 'class' => '', 'money'=>false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class="bg-white dark:bg-gray-800 rounded-md"> 
    
    <div class=" py-1 px-1 flex justify-between items-center rounde-md rounded-md border border-gray-600 relative overflow-hidden <?php echo e($class); ?>">
        
        <input <?php echo e($disabled ? 'disabled' : ''); ?>

            class=" w-full outline-none <?php echo e($money?'money':''); ?> text-gray-600  py-2 px-2 leading-tight  dark:text-gray-300 dark:bg-gray-800 "
            <?php echo e($attributes); ?> />
        <div class="mx-1 right-2 w-max">
            <?php if(isset($icon)): ?>
                <?php echo e($icon); ?>

            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH D:\laragon\www\coffetech\resources\views/components/input.blade.php ENDPATH**/ ?>