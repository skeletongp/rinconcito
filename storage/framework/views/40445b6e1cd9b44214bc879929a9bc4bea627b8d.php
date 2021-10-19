<?php $attributes = $attributes->exceptProps(['url'=>'#','dataUp','dataDown', 'bg', 'icon']); ?>
<?php foreach (array_filter((['url'=>'#','dataUp','dataDown', 'bg', 'icon']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<div
class="shadow-lg <?php echo e($bg); ?> border-l-8 hover:<?php echo e($bg); ?>-dark border-black-vibrant-dark mb-2 p-2 md:w-full lg:w-1/3 mx-2">
<div class="p-4 flex flex-col">
    <a href="<?php echo e($url); ?>" class="no-underline <?php echo e($url=='#'?'text-white':'text-gray-700 font-bold'); ?>  text-2xl">
        <span class="fas <?php echo e($icon); ?> text-4xl"></span><br>
        <?php echo e($dataUp); ?>

    </a>
    <a href="<?php echo e($url); ?>" class="no-underline <?php echo e($url=='#'?'text-white':'text-gray-700 font-bold'); ?>  text-lg">
        <?php echo e($dataDown); ?>

    </a>
</div>
</div>
<?php /**PATH D:\laragon\www\holy-hope\resources\views/components/grid-stat.blade.php ENDPATH**/ ?>