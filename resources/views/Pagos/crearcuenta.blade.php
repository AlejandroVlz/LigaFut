@extends('Layouts.plantilla')
@section('titulo', 'CrearCuenta')

@section('header')

<div class="border-2 p-6"><h1 class="text-center text-2xl ">Crear una cuenta</h1></div>

@endsection

@section('contenido')

<div class="">
    <div class="bg-green-50	 p-20">

        <form action="" method="POST" class="text-center">
            
            <input type="email" placeholder="Correo Electronico" name="email" class="p-2 w-60"> <br> <br>
            <input type="email" placeholder="Confirmar Correo Electronico" name="email" class="p-2 w-60"> <br> <br>
            <input type="password" placeholder="Password" name="password" class="p-2 w-60"> <br> <br>
            <input type="password" placeholder="Password" name="password" class="p-2 w-60"> <br> <br>

            <button type="button" class="bg-green-200 p-2 w-60" > <a href="">Crear cuenta</a></button>

        </form>
    </div>
</div>
@endsection