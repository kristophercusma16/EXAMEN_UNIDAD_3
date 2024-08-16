@extends('layout')
@section('title', 'Cliente | ' . $cliente->id)

@section('content')
<style>
.action-buttons {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.action-button {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Botón de edición en tono anaranjado */
.action-button.edit-button {
    background-color: #FFA500; /* Color anaranjado */
}

.action-button.edit-button:hover {
    background-color: #FF8C00; /* Tono más oscuro al pasar el mouse */
}

/* Botón de eliminación en tono anaranjado */
.action-button.delete-button {
    background-color: #FF4500; /* Color anaranjado rojizo */
}

.action-button.delete-button:hover {
    background-color: #FF6347; /* Tono más oscuro al pasar el mouse */
}

</style>

<div class="action-buttons">
    <h2>Cliente</h2>
        <a href="{{ route('clientes.edit', ['id' => $cliente->id]) }}" class="action-button edit-button">Editar</a>
        <form action="{{ route('clientes.destroy', ['id' => $cliente->id]) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="action-button delete-button">Eliminar</button>
        </form>
    </div>

<table class="table" >
    <tr>
        <th>Código:</th>
        <td>{{$cliente->id}}</td>
    </tr>
    <tr>
        <th>Nombres:</th>
        <td>{{$cliente->nombres}}</td>
    </tr>
    <tr>
        <th>Email:</th>
        <td>{{$cliente->email}}</td>
    </tr>
    <tr>
        <th>Dirección:</th>
        <td>{{$cliente->direccion}}</td>
    </tr>
    <tr>
        <th>Fono:</th>
        <td>{{$cliente->fono}}</td>
    </tr>
    
</table>
@endsection