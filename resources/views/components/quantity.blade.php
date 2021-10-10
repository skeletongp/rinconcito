@props(['id', 'stock'])
@php
$product = App\Models\Product::find($id);
$cant = optional($product->chart)->cant;
@endphp
<div class="flex flex-col items-center px-2 py-0 rounded-full select-none text-xl lg:text-2xl">
    <span id="plus{{ $id }}" class="my-0 cursor-pointer font-bold text-green-600">+</span>
    <input id="inp{{ $id }}" type="number" required
        class="outline-none text-center  my-0 py-0 px-2  text-green-600 " name="cant"
        style="width: 2.6rem; height:1.3rem " value="{{ $cant ?: '0' }}" min="1" max="{{ $stock }}">
    <span id="minus{{ $id }}" class="my-0 cursor-pointer font-bold text-red-600">-</span>
</div>

<script>
    $('#plus{{ $id }}').click(function() {
        input = $('#inp{{ $id }}')
        val = input.val();
        if (val < parseInt({{ $stock }})) {
            input.val(parseInt(val) + 1);
        }
        return;
    })
    $('#minus{{ $id }}').click(function() {
        input = $('#inp{{ $id }}')
        val = input.val();
        if (val > 1) {
            input.val(parseInt(val) - 1);
        }
        return;
    })
</script>
