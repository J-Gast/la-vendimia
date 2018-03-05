<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href= {{ URL::asset('css/horizontalMenu.css') }}  />
	<link rel="stylesheet" type="text/css" media="screen" href= {{ URL::asset('css/clientes.css') }}  />
	<link rel="stylesheet" type="text/css" media="screen" href= {{ URL::asset('css/ventasPrincipal.css') }}  />
	<link rel="stylesheet" type="text/css" media="screen" href= {{ URL::asset('css/ventaNueva.css') }}  />
	<script src="main.js"></script>
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
	@yield('content')
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"> </script>
	<script src= {{ URL::asset('js/table.js') }} > 	</script>
</body>
</html>