@extends('layout.layout')

@section('title','Crear persona')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">
                Crear nuevo registro de persona
            </th>
        </tr>
        <form action="{{ route('personas.store') }}" method="post">
            @csrf
            <tr>
                <th>
                    Apellidos
                </th>
                <td>
                    <input type="text" name="cPerApellido"><br>
                    {{ $errors->first('cPerApellido') }}
                </td>
            </tr>
            <tr>
                <th>
                    Nombre
                </th>
                <td>
                    <input type="text" name="cPerNombre"><br>
                    {{ $errors->first('cPerNombre') }}
                </td>
            </tr>
            <tr>
                <th>
                    Dirección
                </th>
                <td>
                    <input type="text" name="cPerDireccion"><br>
                    {{ $errors->first('cPerDireccion') }}
                </td>
            </tr>
            <tr>
                <th>
                    Fecha de nacimiento
                </th>
                <td>
                    <input type="date" name="dPerFecNac"><br>
                    {{ $errors->first('dPerFecNac') }}
                </td>
            </tr>
            <tr>
                <th>
                    Edad
                </th>
                <td>
                    <input type="number" name="nPerEdad" step="1" min="0" max="120"><br>
                    {{ $errors->first('nPerEdad') }}
                </td>
            </tr>
            <tr>
                <th>
                    Sueldo
                </th>
                <td>
                    <input type="number" name="nPerSueldo" step="0.01" min="0" max="9999.99"><br>
                    {{ $errors->first('nPerSueldo') }}
                </td>
            </tr>
            <tr>
                <th>
                    Estado
                </th>
                <td>
                    <select name="nPerEstado">
                        <option value="" disabled selected hidden>Elige una opción</option>
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select><br>
                    {{ $errors->first('nPerEstado') }}
                </td>
            </tr>
            <tr>
                <td colspan="2" text-align="center">
                    <button>
                        Guardar
                    </button>
                </td>
            </tr>
        </form>
    </table>
@endsection