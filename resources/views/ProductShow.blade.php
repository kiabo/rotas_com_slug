<x-layout>
    <div class="flex justify-center">
        <div class="border border-slate-300 rounded-lg p-6 w-72 text-center">
            <h1 class="text-lg font-bold">{{$product->name}}</h1>
            <ul class="space-y-4 mt-4">
                <li class="text-">R$ {{$product->price}}</li>
                <li class="text-sm text-slate-500">{{$product->description}}</li>
                <li>Apenas {{$product->stock}} disponíveis</li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-6">
        <a href="{{route('products.index',$city)}}" class="underline">Voltar</a>
    </div>
</x-layout>
