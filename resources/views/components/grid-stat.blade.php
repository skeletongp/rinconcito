@props(['url'=>'#','dataUp','dataDown', 'bg', 'icon'])
<div
class="shadow-lg {{$bg}} border-l-8 hover:{{$bg}}-dark border-black-vibrant-dark mb-2 p-2 md:w-full lg:w-1/3 mx-2">
<div class="p-4 flex flex-col">
    <a href="{{$url}}" class="no-underline {{$url=='#'?'text-white':'text-gray-700 font-bold'}}  text-2xl">
        <span class="fas {{$icon}} text-4xl"></span><br>
        {{ $dataUp }}
    </a>
    <a href="{{$url}}" class="no-underline {{$url=='#'?'text-white':'text-gray-700 font-bold'}}  text-lg">
        {{$dataDown}}
    </a>
</div>
</div>
