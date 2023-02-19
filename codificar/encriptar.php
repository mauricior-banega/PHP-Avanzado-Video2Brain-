<?php
/*
 En este archivo veremos como podemos codificar y encriptar la informacion en PHP (MD5/SHA1). A diferencia del método anterior, este no se puede descodificar, estan creados para quedar encriptados.

 Esto sirve ya que se aplica en enparejamientos, esto queria asi. Si yo creo una clave, luego la encripto y se quiere comparar un nuevo acceso donde otro usuario ingrese la misma clave, este comparará las claves encriptadas pero emparejadas, es decir si coinciden (deberian coincidir si fuera = clave), entonces se concede el acceso o validacion entre ellas.

 -El método SHA1 es mas seguro, que MD5 por su copmplejidad.

*/

$cadena = "jocarsa";

echo "El valor original es: ".$cadena;
echo "<br>";
$encriptado1 = md5($cadena);
echo "El valor codificado con MD5 es: ".$encriptado1;
echo "<br>";
$encriptado2 = sha1($cadena);
echo "El valor codificado con SHA1 es: ".$encriptado2;

//Ej md5: 9412d34deda9f7e7a8e9632c62d30d02

//Ej sha1: cf8cc642329d251ef88ee5d32976ca3b6f335b85

?>
