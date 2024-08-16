@extends('layout')

@section('content')
<td >
    <h2>Clientes </h2>
    <tr>
        <td colspan="4">
            <a href="{{route('clientes.create')}}"> Crear Nuevo Cliente</a>
        </td>
    </tr>
    <table class="table">
    <tr>
        @if ($clientes)
            @foreach ($clientes as $cliente)
                <td>
                    <a href="{{ route('clientes.show', ['id' => $cliente->id]) }}">
                        {{ $cliente->nombres }}</a>
                </td>
            @endforeach
        @else
                <td colspan="4">No existen clientes</td>
        @endif
    </tr>
    <tr>
        <td colspan="4">
            {{$clientes->links('pagination::bootstrap-4')}}
        </td>
    </tr>
    </table>
    </td>
@endsection
