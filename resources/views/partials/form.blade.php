@csrf
<tr>
    <th>
        Apellidos
    </th>
    <td>
        <input type="text" name="cPerApellido" value="{{ old('cPerApellido', $persona->cPerApellido) }}">
    </td>
</tr>
<tr>
    <th>
        Nombre
    </th>
    <td>
        <input type="text" name="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre) }}">
    </td>
</tr>
<tr>
    <th>
        Dirección
    </th>
    <td>
        <input type="text" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}">
    </td>
</tr>
<tr>
    <th>
        Fecha de nacimiento
    </th>
    <td>
        <input type="date" name="dPerFecNac" value="{{ old('dPerFecNac', $persona->dPerFecNac) }}">
    </td>
</tr>
<tr>
    <th>
        Edad
    </th>
    <td>
        <input type="number" name="nPerEdad" step="1" min="0" max="120" value="{{ old('nPerEdad', $persona->nPerEdad) }}">
    </td>
</tr>
<tr>
    <th>
        Sexo
    </th>
    <td>
        <input type="text" name="cPerSexo" value="{{ old('cPerSexo', $persona->cPerSexo) }}">
    </td>
</tr>
<tr>
    <th>
        Sueldo
    </th>
    <td>
        <input type="number" name="nPerSueldo" value="{{ old('nPerSueldo', $persona->nPerSueldo) }}">
    </td>
</tr>
<tr>
    <th>
        Estado
    </th>
    <td>
        <select name="nPerEstado">
            <option selected hidden>{{ old('nPerEstado', $persona->nPerEstado) }}</option>
            <option value="0">0</option>
            <option value="1">1</option>
        </select>
    </td>
</tr>
<tr>
    <td colspan="2" text-align="center">
        <button type="button" id="cancelBtn">
            Cancelar
        </button>
        <button>
            {{ $btnText }}
        </button>
    </td>
</tr>