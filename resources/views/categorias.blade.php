@extends('layouts.app')

@section('content')

<h1 class="text-center text-gray-800 text-2x1 font-mediun">Elige una Categoria</h1>

<div class="flex flex-wrap justify-evenly mt-4 gap-4">

@foreach ($categorias as $categoria)
    <a href="{{ route('subcategorias', $categoria->id_categoria) }}" class="text-center">
        <img class="h-32 w-32 object-cover rounded-lg shadow-md" 
             src="{{ $categoria->imagen_url }}" 
             alt="{{ $categoria->nombre }}">
        <p class="text-sm font-semibold mt-2">{{ $categoria->nombre }}</p>
    </a>
@endforeach

    
</div>
@endsection