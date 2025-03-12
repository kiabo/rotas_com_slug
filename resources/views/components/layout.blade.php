<!doctype html>
<html>
<head>
    <title>Teste com rotas com slug</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>
<section class="p-4">
    <header class="border border-slate-300 rounded-lg py-6 w-max-4xl">
            <ul class="flex justify-center items-start space-x-6">
                <li class="flex flex-col"><a href="{{route('users')}}" class="underline font-bold">Users</a><span class="text-xs text-slate-300">Item fixo<br/>rota anterior</span></li>
                <li class="flex flex-col"><a href="{{route('sao-paulo')}}" class="underline font-bold">São Paulo</a><span class="text-xs text-slate-300">Item fixo<br/>rota anterior</span></li>
                <li class="flex flex-col"><a href="{{route('belo-horizonte')}}" class="underline font-bold">Belo Horizonte</a><span class="text-xs text-slate-300">Item fixo<br/>rota posterior</span></li>
                @foreach(\App\Models\City::all() as $city)
                    <li class="flex flex-col"><a href="{{route('products.index',$city)}}" class="underline font-bold text-slate-500">{{$city->name}}</a><span class="text-xs text-slate-300">Item dinâmico</span></li>
                @endforeach
            </ul>
    </header>
</section>
    {{$slot}}
</body>
</html>
