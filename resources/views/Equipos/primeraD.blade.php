@extends('Layouts.plantilla')

@section('titulo', 'PrimeraDivisión')

@section('header')

<div class="border-2 p-6"><h1 class="text-center text-2xl">Primera división</h1></div>

@endsection



@section('contenido')

<div>
    <table class="border-2 border-green-600	w-full">
        <tr class="border-green-700 ">
            <th class="w-2/5">Club</th>
            <th>PJ</th>
            <th>E</th>
            <th>P</th>
            <th>GF</th>
            <th>GC</th>
            <th>DG</th>
            <th>Pts</th>
        </tr>

        <tr class="border-green-700 ">
            <td></td>
        </tr>
    </table>
</div>

@endsection