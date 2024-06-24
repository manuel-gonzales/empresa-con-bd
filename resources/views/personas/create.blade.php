@extends('layout.layout')

@section('title', 'Crear persona')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">
                Crear nuevo registro de persona
            </th>
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('personas.store') }}" method="post">
            @include('partials.form', ['btnText' => 'Guardar'])
        </form>
    </table>
    @include('partials.cancelar', ['routeVar' => 'personas.index', 'routePar' => null])
@endsection