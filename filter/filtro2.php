<!--
    -Este archivo hablaremos sobre: FILTROS - Sanitizador de mail (filtro2.php)
    
-PHP tiene una serie de filtros que se usan en la sintaxis normalmente y que tiene predefinida en su lenguaje. Veremos como sanitizar osea corregir el mail, si tiene el formato correcto lo deja tal cual y sino lo corrige mostrandolo. Correctamente lo veremos en el PHP nº2.

	ACLARACION: 
-->

<?php


$email="inf!!o@joca?????rsa.com";


 echo "El email incorrecto/original es: ".$email."<br>Mientras que la cadena saneada es: ";
 echo filter_var($email, FILTER_SANITIZE_EMAIL);
//Asi como esta sigue dando incorrecto el mail, no sucede como en el video asique para que funcione hay que reemplazar la variable mail o bien crear otra (puede ser) e imprimirlo luego apra que veamos el cambio.

?>

<?php

echo "<br>";
// Ejemplo de otro practico donde funciona

$email = "john(.doe)@exa//mple.com";

$email = filter_var($email, FILTER_SANITIZE_EMAIL);

echo $email;

?> 
