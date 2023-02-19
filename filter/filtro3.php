<!--
    -Este archivo hablaremos sobre: FILTROS - Verificadores de URL`s
    
-PHP tiene una serie de filtros que se usan en la sintaxis normalmente y que tiene predefinida en su lenguaje. 

	ACLARACION: 
-->
<!--
<?php

//$url="http://www.jocarsa.com"; //Formato correcto

//Si fuera $url="jocarsa.com"; dará incorrecto.

/* OLD 
echo filter_var($url, FILTER_VALIDATE_URL,FILTER_FLAG_SCHEME_REQUIRED); 
*/

/* OLD 
echo filter_var($url, FILTER_VALIDATE_URL,FILTER_FLAG_HOST_REQUIRED); 
*/

//Correcta y actualizada
//echo filter_var($url, FILTER_VALIDATE_URL);


//ACLARACION DE CODIGO OBSOLETO: Desde PHP 7.3 en adelante ya no es necesario usar FILTER_FLAG_SCHEME_REQUIRED y/o FILTER_FLAG_HOST_REQUIRED ya que FILTER_VALIDATE_URL cumplen la funcion, es decir ya esta incluida esa correccion directamente en la declaración. Es decir en el video esta mal.

//------------------------------------------------



?>


<?php

echo "<br>";

//$url2="www.jocarsa.com/blog/"; 

//echo filter_var($url2,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED);

$url=filter_var($url2,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED);

echo $url2;

//ACLARACION DE CODIGO OBSOLETO: No funciona, desconozco el motivo pero este codigo esta bien escrito.

?>

<?php
echo "<br>";

$url3="http://www.jocarsa.com/blog.php?user=josevicente"; 

//echo filter_var($url3,FILTER_VALIDATE_URL,FILTER_FLAG_PATH_REQUIRED);

echo filter_var($url3,FILTER_VALIDATE_URL,FILTER_FLAG_QUERY_REQUIRED);

//ACLARACION DE CODIGO OBSOLETO: No tampoco funciona, desconozco el motivo pero este codigo esta bien escrito.

?>