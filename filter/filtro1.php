<!--
    -Este archivo hablaremos sobre: FILTROS - Validador de mail (filtro1.php)
    
-PHP tiene una serie de filtros que se usan en la sintaxis normalmente y que tiene predefinida en su lenguaje. Veremos como validar el mail, si tiene el formato correcto o no.

	ACLARACION: 
-->

<?php


$email = "info@jocarsa.com";

//Filtro validador de email

//echo filter_var($email,FILTER_VALIDATE_EMAIL); //Mostrara si es correcto el mail en el navegador

//Si hacemos un if veremos la respuesta de si es correcto o no de la sgte manera.
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
    echo "El email que has introducido es correcto";
}
else {echo "El email que has introducido es incorrecto"; }


?>
