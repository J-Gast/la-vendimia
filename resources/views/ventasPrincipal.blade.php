<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>La Vendimia</title>
    <link rel="stylesheet" type="text/css" href= {{URL::asset('css/horizontalMenu.css') }} />
    <link rel="stylesheet" type="text/css" href= {{URL::asset('css/ventasPrincipal.css') }} />
	</head>
	<body>
    <div>
      <h1 class="h1HeaderVendimia" align="right"> La Vendimia <img class="imgHeaderVendimia" src= {{ URL::asset('sale.png') }} alt="Ventas"> </h1>
    </div>
    <div id="header">
      <ul class="nav">
        <li><a href="">Inicio</a>
          <ul>
            <li><a href="ventas">Ventas</a></li>
            <li><a href="">Clientes</a></li>
            <li><a href="">Articulos</a></li>
            <li><a href="">Configuración</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="divButton" align="right">
      <button class="button" onclick="window.location='/nuevaventa';">  <img src= {{ URL::asset('add.png') }} > <br> Nueva Venta </button>
    </div>
    <h3 class="h3Header">Ventas Activas</h3>
    <table>
      <tr>
        <th>Folio Venta</th>
        <th>Clave Cliente</th>
        <th>Nombre</th>
        <th>Total</th>
        <th>Fecha</th>
        <th>Estatus</th>
      </tr>
      <tr>
        <td>0001</td>
        <td>C1</td>
        <td>Jorge Gastelum</td>
        <td>500.00</td>
        <td>23/12/2017</td>
        <td>Activo</td>
      </tr>
      <tr>
        <td>0002</td>
        <td>C2</td>
        <td>Austria Anderson</td>
        <td>400.50</td>
        <td>01/01/2018</td>
        <td>Activo</td>
      </tr>
      <tr>
        <td>0003</td>
        <td>C3</td>
        <td>Roland Mendel</td>
        <td>2000</td>
        <td>01/03/2018</td>
        <td>Activo</td>
      </tr>
    </table>
	</body>
</html>
