@extends('layout.layout')

@section('title', 'Persona | '.$persona->nPerCodigo)

@section('content')
    <table class="table">
        <tr>
            <td colspan="4">
                <strong>{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</strong>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Dirección: {{ $persona->cPerDireccion }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Fecha de nacimiento: {{ $persona->dPerFecNac }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                {{ $persona->nPerEdad }} años
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Sexo: {{ $persona->cPerSexo }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Sueldo: S/ {{ $persona->nPerSueldo }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Registro creado: {{ $persona->created_at->diffForHumans() }}
            </td>
        </tr>
    </table>
    <a href="{{ route('personas.edit', $persona) }}">
        Editar
    </a><br>
    <form action="{{ route('personas.destroy', $persona) }}" method="POST">
        @csrf
        @method('DELETE')
        <button>
            Eliminar
        </button>
    </form>
    <a href="/personas">
        <- Regresar
    </a>
@endsection