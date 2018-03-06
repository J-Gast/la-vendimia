@extends('layout')

@section('content')

<label class="labelFecha">
    Fecha: <script> var f = new Date(); document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()); </script>
</label>

{{Form::open(array('method' => 'post')) }}
    <div class="divTextCliente">
        Cliente
        {{ Form::text('cliente', null, ['list' => 'listaclientes', 'id' => 'cliente']) }}
        <datalist id="listaclientes">
        @foreach ($clientes as $cliente)
            <option value=" {{ $cliente->idCliente }}">
        @endforeach
        </datalist>

        <label> RFC: AAA010101AAA </label>
    </div>

    <div class="divTextProducto">
        Articulos
        {{ Form::text('articulo', null, ['list' => 'listaarticulos', 'id' => 'articulo']) }}
        <datalist id="listaarticulos">
            @foreach ($articulos as $articulo)
                <option value=" {{ $articulo->idArticulo }}">
            @endforeach
        </datalist>
        <button type="button" onclick="agregarProducto()">Click me</button>
    </div>
    <div class="divTextCantidad">
        Cantidad
        {{ Form::text('cantidad', 0, ['id' => 'cantidad']) }}
    </div>

    <br> <br>
    <table id="detalleVenta">
        <tr>
        <th>Descripcion Articulo</th>
        <th>Modelo</th>
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Importe</th>
        </tr>
    </table>
    <div class="labelResultados">
        <label> Enganche: </label> <br>
        <label> Bonificación Enganche: </label><br>
        <label> Total: </label>
    </div>
    <div class="divButtond">
        <button type="button" class="button" id="cancelar" onclick="window.location='/ventas/create';"> Cancelar </button>
        <button type="button" class="button" id="siguiente" onclick="next()"> Siguiente </button>
    </div>
{{ Form::close() }}

    <br> <br>
    <table style="display:none;" id="abonos">
        <tr>
            <td>3 ABONOS DE</td>
            <td>$1125.33</td>
            <td>TOTAL A PAGAR 3376.00</td>
            <td>SE AHORRA 784.84</td>
            <td><input type="radio" name="plazo"></td>
        </tr>
        <tr>
            <td>6 ABONOS DE</td>
            <td>$606.27</td>
            <td>TOTAL A PAGAR 3637.00</td>
            <td>SE AHORRA 523.24</td>
            <td><input type="radio" name="plazo"></td>
        </tr>
        <tr>
            <td>9 ABONOS DE</td>
            <td>$433.24</td>
            <td>TOTAL A PAGAR 3899.20</td>
            <td>SE AHORRA 261.64</td>
            <td><input type="radio" name="plazo"></td>
        </tr>
        <tr>
            <td>12 ABONOS DE</td>
            <td>$346.73</td>
            <td>TOTAL A PAGAR 4160.84</td>
            <td>SE AHORRA 0.00</td>
            <td><input type="radio" name="plazo"></td>
        </tr>
    </table>
@endsection