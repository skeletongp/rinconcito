<?php $attributes = $attributes->exceptProps(['disabled' => false, 'class' => '']); ?>
<?php foreach (array_filter((['disabled' => false, 'class' => '']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class=" py-0 flex justify-between items-center overflow-hidden rounded-md border relative w-full  <?php echo e($class); ?>">
    <select <?php echo e($disabled ? 'disabled' : ''); ?>

        style="padding-top: 0.70rem; padding-bottom:0.70rem; -webkit-appearance: none;"
        class=" flex-grow outline-none text-gray-900 dark:text-gray-300   px-2 leading-tight border border-white dark:bg-gray-800 dark:border-gray-800 overflow-hidden"
        <?php echo e($attributes); ?>>
        <?php echo e($slot); ?>

    </select>
    <span class="absolute right-2">
        <?php if(isset($icon)): ?>
            <?php echo e($icon); ?>

        <?php endif; ?>
    </span>
</div>
<?php /**PATH D:\laragon\www\coffetech\resources\views/components/select.blade.php ENDPATH**/ ?>