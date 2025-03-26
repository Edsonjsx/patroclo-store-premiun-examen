@extends('layouts.appproducto')

@section('content')

<h1 class="text-center text-gray-800 text-2x1 font-mediun">Producto Seleccionado: </h1>

<div class="flex flex-wrap justify-evenly mt-4 gap-4">

@foreach ($productos as $producto)
    <a href="{{ route('productodetalle', $producto->id_producto) }}" class="text-center">
    <img class="h-32 w-32 object-cover rounded-lg shadow-md" 
             src="{{ $producto->imagen_url }}" 
             alt="{{ $producto->nombre }}">
        <p class="text-sm font-semibold mt-2">{{ $producto->nombre }}</p>
    </a>
@endforeach
    
</div>
@endsection
