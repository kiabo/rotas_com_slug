<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>
<body>
<section class="p-4">
    <header class="border border-slate-300 rounded-lg py-6 w-max-4xl">
            <ul class="flex justify-center space-x-6">
                @foreach(\App\Models\City::all() as $city)
                    <li><a href="{{route('products.index',$city)}}" class="underline">{{$city->name}}</a></li>
                @endforeach
            </ul>
    </header>
</section>
    {{$slot}}
</body>
</html>
