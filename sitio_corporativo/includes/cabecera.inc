<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
		
			$(document).ready(inicio)
			function inicio(){
				$("select").change(cambiacss);
			}
			function cambiacss(){
				var plantilla =$("select").attr("value");
				$("plantilla").html('<link rel=Stylesheet href="css/'+plantilla+'.css" type="text/css">')
			}
		</script>
		<link rel=Stylesheet href="css/base.css" type="text/css">
		
		<plantilla>
			<link rel=Stylesheet href="css/movil.css" type="text/css" media="screen and (max-width:400px) and (min-width:1px)">
			<link rel=Stylesheet href="css/tablet.css" type="text/css" media="screen and (max-width:600px) and (min-width:401px)">
			<link rel=Stylesheet href="css/pc1.css" type="text/css" media="screen and (max-width:1200px) and (min-width:601px)">
			<link rel=Stylesheet href="css/pchd.css" type="text/css" media="screen and (max-width:3600px) and (min-width:1201px)">
		</plantilla>
	</head>
	
	<body>
		<select name="plantilla">
			<option value="">Selecciona una plantilla</option>
			<option value="pc1">Plantilla para PC</option>
			<option value="pchd">Plantilla alta definición</option>
			<option value="movil">Plantilla para teléfono móvil</option>
			<option value="tablet">Plantilla para tableta digital</option>
		</select>
		<hr>
		<div id="contenedor">
			<header>
				<div id="titulo">
					<div id="logo">
					</div>
					<h1>J. Vicente Carratala</h1>
					<h2>eslogan de la web</h2>
				</div>
				<div style="clear:both;"></div>
				<nav>
					<ul>
						<li>
							<a href="?pagina=inicio.inc">Inicio</a> <!--Antes:index.php (15) Explicacion de este apartado en "index.php"-->
						</li>
						<li>
							<a href="?pagina=blog.inc">Blog</a> <!--Antes:blog.php (15)-->
						</li>
						<li>
							<a href="?pagina=productos.inc">Productos</a> <!--Antes:productos.php (15)-->
						</li>
						<li>
							<a href="?pagina=contacto.inc">Contacto</a> <!--Antes:contacto.php (15)-->
						</li>
						
					</ul>
				</nav>
				<div style="clear:both;"></div>
			</header>
