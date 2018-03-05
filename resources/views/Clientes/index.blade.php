@extends('layout')

@section('content')
  <table>
    <tr>
      <th>Clave Cliente</th>
      <th>Nombre</th>
      <th>RFC</th>

    </tr> 
    @foreach ($clientes as $cliente)
      <tr>
        <td> {{ $cliente->idCliente }} </td>
        <td> {{ $cliente->nombre }}  </td>
        <td> {{ $cliente->RFC }} </td>
      </tr>
    @endforeach
  </table>
@endsection