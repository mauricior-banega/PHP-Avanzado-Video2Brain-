<!--

    11-PHP Avanzado (Video2Brain) - Todos los videos estan en carpeta: videos

Videos/Temas contenidos del Dashboard: 
    -Desde C0_00_00 hasta C8_01_00

-Seguimos aplicando SQLite, y en este archivo creamos una tabla donde mostraremos todos los valores de la dbo "preguntasyrespuestas.db" de tabla "pyr", aplicando distintas interacciones sobre ella.

	ACLARACIONES:

(1)-Podemos observar que la codificacion en este practico es correcta, a diferencia del anterior PHP Basico/blog. Ademas cabe destacar que el metodo que utilizabamos para recorrer la fila en nuestra dbo la codificabamos asi: 

	$data= array();

	while ($fila = $resultado->fetchArray(1)) {}
La que utiliza para hacerlo funciona y es mas corta inclusive, asique usaremos esa, asi:

	while($fila = $resultado->fetchArray())	

(2)-El método ->query lo utilizamos cuando queremos pedirle algo a la dbo y que nos lo devuelva. Pero cuando solo queremos pedirle algo sin que devuelva nada se usa ->exec.
(3)-Tenemos varias formas de cargar imagenes en un archivo: 
	1-La forma estatica como ya sabemos pasando el URL de la carpeta o del archivo en que esta la imagen.
	2-La forma de pasarle a la dbo solo la "ruta" donde esta el archivo, ya que el nombre del archivo (imagen1.jpg) fue cargado en el campo imagen previamente en Adminer, quedando en la sentencia Ej:  <img src="imagen/$fila['imagen'].
	3-O ultima forma (no tan recomendable) es pasar la imagen "convertida" a Base64. Lo que hace es traducir una imagen en texto extenso. Una vez que entramos a la web (https://www.base64decode.org/) o la que tengamos Googleada, y hagamos la conversion, para que HTML la reconozca debemos de poner antes de cargarla asi a la dbo, lo sgte: 
			<img src="data:image/jpg;base64, (+ el codigo extenso obtenido).
	  Mismo si creamos un archivo HTML que tenga ese formato y ejecutamos el archivo, nos mostrará la foto. De esta manera dejaremos la dbo para el practico, pero no es recomendable a menos que sea impresidible hacerlo ya que aumenta en gran manera el peso de la dbo, y por ende la ejecusion y funcionamiento sera mas lento.
(4)-

-->
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
</head>
<body>
	<table border=1>
<?php

//Las conexiones se hacen mediante la creacion de un nuevo objeto SQLite3.
$bd = new SQLite3('preguntasyrespuestas.db');

$resultado = $bd->query("SELECT * FROM pyr;"); //(2)

while($fila = $resultado->fetchArray()){
	echo "<tr><td>".$fila['pregunta']."</td><td>".$fila['respuesta']."</td><td><img src='".$fila['imagen']."' width=200px></td></tr>"; //(3)
}

$bd->close(); //Cierre de la dbo

?>
</table>


	
</body>
</html>