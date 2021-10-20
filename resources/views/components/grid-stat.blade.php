@props(['url'=>'','dataUp','dataDown', 'bg', 'icon','color'])
<div
class="shadow-lg {{$bg}} border-l-8 hover:{{$bg}}-dark border-black-vibrant-dark mb-2 p-2 md:w-full lg:w-1/3 mx-2">
<div class="p-4 flex flex-col">
    <a href="{{$url}}" class="no-underline  {{$color}} font-bold  text-2xl">
        <span class="fas {{$icon}} text-4xl"></span><br>
        {{ $dataUp }}
    </a>
    <a href="{{$url}}" class="no-underline {{$color}} font-bold  text-lg">
        {{$dataDown}}
    </a>
</div>
</div>
