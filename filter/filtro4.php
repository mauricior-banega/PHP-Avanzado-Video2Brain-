<!--
    -Este archivo hablaremos sobre: FILTROS - Verificadores de comillas
    
-PHP tiene una serie de filtros que se usan en la sintaxis normalmente y que tiene predefinida en su lenguaje. Sirve para no tener el problema de recuperar un mensaje por Ej en la dbo donde comienze con "" y dentro tenga '' y al mostrar mediante echo ese mensaje, sabemos que echo tambien maneja comillas, y al aplicarse puede dar inconsistencias como no mostrarlo correctamente. Para ello aplicamos lo sgte:

	ACLARACION: 
-->

<?php


$mensaje="Tengo un problema con PHP me dice que 'Error 404', que puedo hacer?"; 

echo filter_var($mensaje,FILTER_SANITIZE_MAGIC_QUOTES);


//ACLARACION DE CODIGO OBSOLETO: No funciona FILTER_SANITIZE_MAGIC_QUOTES a partir de PHP 8.0. 

//Sirve unicamente FILTER_SANITIZE_ADD_SLASHES (int) ~ para numeros y no cadenas. 

?>

