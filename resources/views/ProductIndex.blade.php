<x-layout>

    <section class="p-4">
        <div class="w-max-4xl border border-slate-400 rounded-lg">
        <h3 class="rounded-t-lg bg-slate-200 text-slate-700 font-bold text-xl p-3">{{$city->name}}</h3>

            <div class="flex flex-wrap justify-center gap-6 p-6">
                @foreach($city->products as $product)
                    <div class="border border-slate-300 rounded-lg p-6 w-72 text-center">
                        <h3 class="text-lg font-bold underline"><a href="{{route('products.show',[$city->slug,$product->slug])}}">{{$product->name}}</a></h3>
                        <ul class="space-y-4 mt-4">
                            <li class="text-">R$ {{$product->price}}</li>
                            <li class="text-sm text-slate-500">{{$product->description}}</li>
                            <li>Apenas {{$product->stock}} disponíveis</li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
