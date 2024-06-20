@extends('layout.layout')

@section('title', 'Personas')

@section('content')
    <h2>Personas</h2>
    <table class="table">
        <tbody>
            <tr>
                <td colspan="4">
                    <a href="{{ route('personas.create') }}">
                        Nueva persona
                    </a>
                </td>
            </tr>
            <tr>
                <th colspan="4">
                    Listado de personas
                </th>
            </tr>
            <tr>
                @if($personas)
                    @foreach($personas as $persona)
                        <tr>
                            <td>
                                <a href="{{ route('personas.show', ['nPerCodigo' => $persona->nPerCodigo]) }}">
                                    {{ $persona->cPerNombre }} {{ $persona->cPerApellido }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p>No existe ningún servicio que mostrar.</p>
                @endif
            </tr>
            <tr>
                <td colspan="4">
                    {{ $personas->links('pagination::bootstrap-4') }}
                </td>
            </tr>
        </tbody>
    </table>
@endsection