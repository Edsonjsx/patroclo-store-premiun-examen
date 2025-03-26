@extends('layouts.appproductodetalle')

@section('content')

<h1 class="text-center text-gray-800 text-2x1 font-mediun">Detalles del producto seleccionado: </h1>

<div class="flex flex-wrap justify-evenly mt-4 gap-4">

@foreach ($productodetalles as $productodeta)
    <a href="{{ route('productodetalle', $productodeta->id_producto) }}" class="text-center">
    <br>
        <p class="text-sm font-semibold mt-2">{{ $productodeta->detalle }}</p>
    </a>
@endforeach
    
</div>
@endsection
