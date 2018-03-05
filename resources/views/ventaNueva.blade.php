<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>La Vendimia</title>
    <link rel="stylesheet" type="text/css" href= {{URL::asset('css/horizontalMenu.css') }} />
    <link rel="stylesheet" type="text/css" href= {{URL::asset('css/ventaNueva.css') }} />
    <link rel="stylesheet" type="text/css" href="https://www.prepbootstrap.com/Content/shieldui-lite/dist/css/light/all.min.css" />
	</head>
	<body>

    <div>
      <h1 class="h1HeaderVendimia" align="right"> La Vendimia <img class="imgHeaderVendimia" src= {{URL::asset('sale.png') }}  alt="Ventas"> </h1>
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

		<label class="labelFecha">
			Fecha: <script> var f = new Date(); document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()); </script>
		</label>

  	<form>
			<div class="divTextCliente">
				Cliente

	      <input list="listacolores">
	      <datalist id="listacolores">
	        <option value="Comedor 4 sillas">
	        <option value="Sillón">
	        <option value="Silla">
	        <option value="Escritorio blanco">
	        <option value="Cama">
	      </datalist>

				<label> RFC: AAA010101AAA </label>
	    </div>

	    <div class="divTextProducto">
				Producto
	      <input list="listacolores">
	      <datalist id="listacolores">
	        <option value="Azul">
	        <option value="Rojo">
	        <option value="Amarillo">
	        <option value="Negro">
	        <option value="Blanco">
	      </datalist>
				<button> click </button>
	    </div>
			<br> <br>
	    <table>
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
	        <td><input></td>
	        <td>500.00</td>
	        <td>23/12/2017</td>
	      </tr>
	      <tr>
	        <td>0002</td>
	        <td>C2</td>
	        <td><input></td>
	        <td>400.50</td>
	        <td>01/01/2018</td>
	      </tr>
	      <tr>
	        <td>0003</td>
	        <td>C3</td>
	        <td><input></td>
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
		</form>
	</body>
</html>
