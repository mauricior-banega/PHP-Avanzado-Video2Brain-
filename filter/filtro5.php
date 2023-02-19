<!--
    -Este archivo hablaremos sobre: FILTROS - Verificador de IP
    
-PHP tiene una serie de filtros que se usan en la sintaxis normalmente y que tiene predefinida en su lenguaje. Sirve ver si es correcto el formato de una direccion IP.

	ACLARACION: 
-->

<?php


//$ip="192.168.1.126"; 

//echo filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_NO_RES_RANGE);


//Codigo, funciona. 

$ip2="0.0.0.0"; 

echo filter_var($ip2,FILTER_VALIDATE_IP,FILTER_FLAG_NO_RES_RANGE);

//Codigo, funciona pero no se mustra y esta bien porque esa direccion de IP esta reservada y no se permite ser usada.

$ip3="192.168.1.255"; 

echo filter_var($ip3,FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE);

//Codigo, funciona pero no se mustra y esta bien porque esa direccion de IP es similar a las de rango privado o INTRANET.

?>
