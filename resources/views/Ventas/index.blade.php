@extends('layout')

@section('content')
<div class="divButton" align="right">
      <button class="button" onclick="window.location='/nuevaventa';">  <img src= {{ URL::asset('add.png') }} > <br> Nueva Venta </button>
    </div>
    <h3 class="h3Header">Ventas Activas</h3>
  <table>
    <tr>
        <th>Folio Venta</th>
        <th>Clave Cliente</th>
        <th>Total</th>
        <th>Fecha</th>
        <th>Estatus</th>
    </tr> 
    @foreach ($ventas as $venta)
      <tr>
        <td> {{ $venta->folioVenta }} </td>
        <td> {{ $venta->idCliente }}  </td>
        <td> {{ $venta->total }} </td>
        <td> {{ $venta->fecha }} </td>
        <td> {{ $venta->estatus }} </td>
      </tr>
    @endforeach
  </table>
@endsection