@extends('Layouts.plantilla')

@section('titulo', 'PrimeraDivisión')

@section('header')

<div class="border-2 p-6"><h1 class="text-center text-2xl">Contacto</h1></div>

@endsection



@section('contenido')

    <div class="bg-green-50	 p-20">

        <form action="" method="POST" class="text-center">

            <input type="text" placeholder="Nombre" name="nombre" class="placeholder-gray-500 p-2 w-60"> <br> <br>
            <input type="email" placeholder="Correo Electronico" name="email" class="placeholder-gray-500 p-2 w-60"> <br> <br>
            <input type="text" placeholder="Asunto" name="nombre" class="placeholder-gray-500 p-2 w-60"> <br> <br>

            <textarea name="message" class="w-60 p-6">Escribe tu mensaje
            </textarea>

            <br>

            <input type="submit" name="ingresar" class="p-2 bg-green-200 w-60"> <br> <br>

        </form>
    </div>

@endsection