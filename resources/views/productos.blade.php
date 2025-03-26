@extends('layouts.appproducto')

@section('content')

<h1 class="text-center text-gray-800 text-2x1 font-mediun">Resultados: </h1>

<div class="flex flex-wrap justify-evenly mt-4 gap-4">

   @foreach($productos as $producto)

    <div class="bg-gray-200 hover:bg-gray-100 w-[300px] h-[400px]  rounded cursor-pointer">
       <img height="h-[130px] w-full object-cover rounded " src="{{ $categoria->imagen_url}}" alt=""> 
       <p class="text-center mt-2 front-mediun text-gray-800">{{ $producto->nombre}}</p>
    </div>
    
    @endforeach
    
</div>
@endsection
