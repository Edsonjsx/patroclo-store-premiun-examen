@extends('layouts.appsubcategoria')

@section('content')

<h1 class="text-center text-gray-800 text-2x1 font-mediun">Elige una Subcategoria</h1>

<div class="flex flex-wrap justify-evenly mt-4 gap-4">

@foreach ($subcategorias as $subcategoria)
    <a href="{{ route('productos', $subcategoria->id_categoria) }}" class="text-center">
        <img class="h-32 w-32 object-cover rounded-lg shadow-md" 
             src="{{ $subcategoria->imagen_url }}" 
             alt="{{ $subcategoria->nombre }}">
        <p class="text-sm font-semibold mt-2">{{ $subcategoria->nombre }}</p>
    </a>
@endforeach

    
</div>
@endsection