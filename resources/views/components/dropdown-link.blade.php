@props(['active'=>false])
<div class="{{$active?'bg-black text-white ':''}}">
    <a {{ $attributes->merge(['class' => 'block px-4 py-2 leading-5  hover:bg-gray-100 focus:outline-none focus:bg-gray-700 transition duration-150 ease-in-out ']) }}>{{ $slot }}</a>
</div>
