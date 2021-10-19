<?php $attributes = $attributes->exceptProps(['active'=>false]); ?>
<?php foreach (array_filter((['active'=>false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div class="<?php echo e($active?'bg-black text-white ':''); ?>">
    <a <?php echo e($attributes->merge(['class' => 'block px-4 py-2 leading-5  hover:bg-gray-100 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out '])); ?>><?php echo e($slot); ?></a>
</div>
<?php /**PATH D:\laragon\www\holy-hope\resources\views/components/dropdown-link.blade.php ENDPATH**/ ?>