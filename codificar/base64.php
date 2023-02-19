<?php
/*
 En este archivo veremos como podemos codificar y encriptar la informacion en PHP (Encode/Decode)
*/


$cadena = "Este es el texto que quiero codificar";
$codificado = base64_encode($cadena);

echo "Esta es la cadena original".$cadena;
echo "<br>";
echo "Esta es la cadena codificada:".$codificado;
echo "<br>";
echo "Esta es la cadena descodificada: ".base64_decode($codificado);

//Ej: RXN0ZSBlcyBlbCB0ZXh0byBxdWUgcXVpZXJvIGNvZGlmaWNhcg==

?>
