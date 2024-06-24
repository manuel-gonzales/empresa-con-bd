@extends('layout.layout')

@section('title', 'Crear persona')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">
                Editar persona
            </th>
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('personas.update', $persona) }}" method="POST">
            @method('PATCH')
            @include('partials.form', ['btnText' => 'Actualizar'])
        </form>
    </table>
    @include('partials.cancelar', ['routeVar' => 'personas.show', 'routePar' => $persona])
@endsection