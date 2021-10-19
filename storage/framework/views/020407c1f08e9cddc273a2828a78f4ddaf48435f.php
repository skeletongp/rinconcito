<?php $attributes = $attributes->exceptProps(['id', 'stock']); ?>
<?php foreach (array_filter((['id', 'stock']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php
$product = App\Models\Product::find($id);
$cant = optional($product->chart('PENDIENTE'))->cant;
?>
<div class="flex flex-col items-center space-y-4 px-2 py-0 rounded-full select-none text-3xl lg:text-4xl">
    <span id="plus<?php echo e($id); ?>" class="my-0 cursor-pointer font-bold text-green-600">+</span>
    <input id="inp<?php echo e($id); ?>" type="number" required
        class="outline-none text-center  my-0 py-0 px-2  text-green-600 " name="cant"
        style="width: 2.6rem; height:1.9rem " value="<?php echo e($cant ?: '0'); ?>" min="1" max="<?php echo e($stock); ?>">
    <span id="minus<?php echo e($id); ?>" class="my-0 cursor-pointer font-bold text-red-600">-</span>
</div>

<script>
    $('#plus<?php echo e($id); ?>').click(function() {
        input = $('#inp<?php echo e($id); ?>')
        val = input.val();
        if (val < parseInt(<?php echo e($stock); ?>)) {
            input.val(parseInt(val) + 1);
        }
        return;
    })
    $('#minus<?php echo e($id); ?>').click(function() {
        input = $('#inp<?php echo e($id); ?>')
        val = input.val();
        if (val > 1) {
            input.val(parseInt(val) - 1);
        }
        return;
    })
</script>
<?php /**PATH D:\laragon\www\coffetech\resources\views/components/quantity.blade.php ENDPATH**/ ?>