<!--

	PHP Multipágina con "includes"

-En este practico "sitio_corporativo" explicaremos y modificaremos el titulo, opciones de menu de forma tambien dinamica, cosa que en HTML no podria hacerse. Esto sucede por ejemplo cuando se desea en un proyecto html modificar un titulo, donde se tiene ese mismo titulo en inicio/blog/productos/contacto osea varios html mas, solo podriamos modificarlo uno a uno para que el cambio se vea reflejado en cada archivo que indexe, siendo muy complicado de realizar, sin contacr si la pagina tiene 400 html. Para hacer todo mas dinamico/practico explicamos como.

1-Cambiamos la extension del archivo principal (index.html) a (index.php).
2-Creamos carpeta "includes" donde guardaremos ciertos trozos de nuestra web.
3-Creamos los archivo "cabecera.inc" o "cabecera.php" aunque podemos ponex la extesion que desiemos .pepito, no influye. Tambien lo hacemos para "pie.inc".
4-Del index cortaremos y pegaremos los trozos de codigo que corresponden a cada tipo y pegaremos en los archivos del nombre indicado, ej footer en "pie.inc" y asi con cada uno.
5-Si ejecutamos index mostrara solo los titulos de los banner y destacados, todo lo demas fue quitado. Entonces lo que haremos es mediante include, incluir justamente los archivos a los que lo subdividimos, de manera de recuperar la estructura inicial, colocando cada include en el sector correspondiente, osea cabecera.inc arriba, footer abaj. Ej: include "includes/cabecera.inc";
6-Aplicamos tambien los reemplazos para cada archivo del documento (inicio/blog/productos/contacto) de manera que tambien queden dinamicamente disexionados estructuralmente tambien.
7-Ahora al tocar en pestaña blog en el navegador dará error, y es porque desde "cabecera.inc" ejecuta los archivos pero con la extesion html, lo mismo sucedera tambien para cada uno de los otros enlaces (inicio/productos/contacto). Entonces cambiamos remplazamos html por .inc de cada uno.
8-De esta manera logramos esto de crear archivos separados compuestos por estructura estatica HTML a PHP donde cada modificacion de aplicara dinamicamente a todo el documento.

----------

9-No solo aplicaremos includes a "cabecera y a pie de pagina", sino que tambien al "contenido del cuerpo".
10-Creamos los archivos "inicio.inc"/"productos.inc"/"contacto.inc"/"blog.inc".
11-En cada uno cortamos similar al punto 4 anterior, cortamos y pegamos el trozo de codigo que pertenece segun el nombre que le dimos, el html al archivo .inc, ej en blog.inc cortamos/pegamos desde inicio a fin al div que contiene <div id="contieneblog">. Y asi con cada seccion para determinado archivo.
12-Ojo, no pegamos los includes, solamente el contenido estatico html que teniamos en cada archivo.
13-Hasta este punto tenemos archivos .php y .inc con el mismo nombre, eliminamos la redundancia. Osea elimino los archivos .php dejando solo index.php y los includes de cada archivo .inc en la carpeta includes.
14-Lo que hará "index.php" es justamente llamar a cada uno de estos archivos mediante includes. Asi podra abrirse de forma dinamica cada trozado realizado en esta segunda seccion por cada uno de los archivos haciendo la llamada "index.php".
15-Ahora capturamos la pagina, esto se trata de convertir un pedaso de url web en variable, de manera que al cargar index haga el llamado a ese pedazo de url que necesita para ejecutar el archivo ej "blog.inc". Entonces de la pagina index.php le completamos ?pagina=inicio que sera el valor de una variable $url. OJO: Sino le pone
	Ejemplo:
			$url = $_GET['pagina']; 
			
			-GET captura lo que hay en una URL, y buscara el valor que contenga un elemento llamado justamente "pagina" que será igual a "inicio" or ejemplo.
			-La captura sucede de la URL que tenga el sgte formato ...sitio_corporativo/?pagina=inicio.inc; pero como por defecto la URL carga con formato ...sitio_corporativo/index.php y nada mas, deberemos de indexar al index y a todos los archivos a donde redirija esa finalizacion de URL.
			-Eso lo hacemos en los "a href de cabecera" donde redirige a los distintos archivos. De esa manera accederemos no a distintos archivos, sino a distintas variables de url. Esto es porque como explicamos index.php no cambia en ningun momento en la url del navegador podremos verificarlo, siempre varia el trozo luego de "/". Quedando:
				
				http://localhost/Estudios/.../PHP-Avanzado-Video2Brain-/sitio_corporativo/?pagina=inicio.inc

16-Ahora, hablamos que GET captura el valor de pagina que esta escrito en la URL del navegador, pero existe un fallo. Si alguien borra ese trozo donde dice "pagina" y cargase "index.php" que si bien es cierto que existe, la web dará error. Esto es porque GET no podra realizar esa captura indicada si cargo ej .../sitio_corporativo/index.php
17-Para solucionarlo, crearemos un metodo que corrija esa accion. Creando un if que compruebe si en la url que quiere quiere captar el GET existe "pagina", si se cumple entonces preguntara si pagina es = a alguna de las especificaciones a los archivos exactamente para cada caso, pero sino que cargue por defecto "inicio.inc". Si tampoco pasa el 1º if tambien deririgira a "inicio.inc". Osea de todas formas se cargara correctamente, y por ultimo como siempre será valida la direccion ponemos el includes a la url final, ej include "includes/".$url;
18-El 2º if del punto 16 es un antihack, ya que con este método si se escribiera ...sitio_corporativo/?pagina=../../../../ tendria acceso a los archivos de mi web ya que va desde un extremo hasta la raiz de mi directorio web. Pudiendo extraer informacion de archivos vulnerables como passwords, dbo de clientes, o añadir archivos maliciosos, eliminarlos, etc. Decimos que es antihack porque solo podra editarse la url cuando se ingresen esos datos, si se carga otra cosa esta de todas formas como explicamos, siempre cargara "inicio.inc".

-->
<?php include "includes/cabecera.inc"; ?>

<?php 



if(isset($_GET['pagina'])){

	if($_GET['pagina'] == "inicio.inc" || $_GET['pagina'] == "blog.inc" || $_GET['pagina'] == "productos.inc" || $_GET['pagina'] == "contacto.inc"){ //If antihack (18)
		$url = $_GET['pagina'];
	}else{
		$url = "inicio.inc";
	}

	
}else{
	$url = "inicio.inc";
}



include "includes/".$url; //Carga la cabecera, pie de pagina y dependiendo de la opcion seleccionada en el "a href" completara la url llevandonos hacia ese archivo .inc(html).

?>
			
<?php include "includes/pie.inc"; ?>
