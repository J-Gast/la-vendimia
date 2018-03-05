<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>La Vendimia</title>
		<link rel="stylesheet" type="text/css" href="../globalcss/horizontalMenu.css" />
    <link rel="stylesheet" type="text/css" href="./configuracion.css" />
	</head>
	<body>
		<div>
			<h1 class="h1HeaderVendimia" align="right"> La Vendimia <img class="imgHeaderVendimia" src="../assets/sale.png" alt="Ventas"> </h1>
		</div>
		<div id="header">
			<ul class="nav">
				<li><a href="">Inicio</a>
					<ul>
						<li><a href="../ventas/ventasPrincipal.php">Ventas</a></li>
						<li><a href="">Clientes</a></li>
						<li><a href="">Articulos</a></li>
						<li><a href="">Configuración</a></li>
					</ul>
				</li>
			</ul>
		</div>
    <form>
      <table>
        <tr>
          <th>Tasa financiamiento</th>
          <th>%Enganche</th>
          <th>Plazo Máximo</th>
        </tr>
        <tr>
          <td><input class="inputTable"></td>
          <td><input class="inputTable"></td>
          <td><input class="inputTable"></td>
        </tr>
      </table>
      <br> <br>
      <div class="divButton">
        <button class="button"> Cancelar </button>
        <button class="button"> Siguiente </button>
      </div>
    </form>

	</body>
</html>
