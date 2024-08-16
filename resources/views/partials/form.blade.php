@csrf
<table class="table" style="font-size: 0.8em; background-color: white; width: 30%">
    <tr>
        <th>Nombres</th>
        <td><input type="text" name="nombres" value="{{ old('nombres',$cliente->nombres) }}"></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><input type="text" name="email" value="{{ old('email',$cliente->email) }}"></td>
    </tr>
    <tr>
        <th>Dirección</th>
        <td><input type="text" name="direccion" value="{{ old('direccion',$cliente->direccion) }}"></td>
    </tr>
    <tr>
        <th>Fono</th>
        <td><input type="text" name="fono" value="{{ old('fono',$cliente->fono) }}"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><button>{{$btnText}}</button>
        </td>
    </tr>
</table>
