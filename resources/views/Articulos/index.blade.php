@extends('layout')

@section('content')
<table>
    <tr>
        <th>Clave Articulo</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Existencia</th>
        <th>Modelo</th> 
    </tr> 
    @foreach ($articulos as $articulo)
      <tr>
        <td> {{ $articulo->idArticulo }} </td>
        <td> {{ $articulo-> descripcion }}  </td>
        <td> {{ $articulo-> precio }} </td>
        <td> {{ $articulo-> existencia }} </td>
        <td> {{ $articulo-> modelo }} </td>
      </tr>
    @endforeach
  </table>
@endsection