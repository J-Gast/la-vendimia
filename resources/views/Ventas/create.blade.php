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

    </div>

        <div class="divTextCantidad">
        Cantidad
        {{ Form::text('cantidad', 0) }}
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
        <tr>
        <td>0001</td>
        <td>C1</td>
        <td>0</td>
        <td>500.00</td>
        <td>23/12/2017</td>
        </tr>
        <tr>
        <td>0002</td>
        <td>C2</td>
        <td>0</td>
        <td>400.50</td>
        <td>01/01/2018</td>
        </tr>
        <tr>
        <td>0003</td>
        <td>C3</td>
        <td>0</td>
        <td>2000</td>
        <td>01/03/2018</td>
        </tr>
    </table>
    <div class="labelResultados">
        <label> Enganche: </label> <br>
        <label> Bonificación Enganche: </label><br>
        <label> Total: </label>
    </div>
    <div class="divButton">
        <button class="button"> Cancelar </button>
        <button class="button"> Siguiente </button>
    </div>
{{ Form::close() }}
<button onclick="agregarProducto()">Click me</button>
    <br> <br>
    <table>
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