@extends('layout.layout')

@section('title', 'Personas')

@section('content')
    <h2>Personas</h2>
    <table class="table">
        <tbody>
            <tr>
                @if($personas)
                    @foreach($personas as $item)
                        <td>
                            <a href="{{ route('personas.show', ['nPerCodigo' => $item->nPerCodigo]) }}">
                                {{ $item->cPerNombre }} {{ $item->cPerApellido }}
                            </a>
                        </td>
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