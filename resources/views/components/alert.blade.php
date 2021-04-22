<div {{$attributes->merge(['class' => "bg-$color-100 border-l-4 border-$color-400 text-$color-800 p-4"])}}  role="alert">
    <p class="font-bold">{{$title}}</p>
    <p>{{$slot}}</p>
    {{$prueba()}}
</div>
