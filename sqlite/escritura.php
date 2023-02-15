<!--
    -Este archivo realiza un INSERT, una carga de datos a la dbo.
    
    ACLARACIONES: 

(1)-El método ->query lo utilizamos cuando queremos pedirle algo a la dbo y que nos lo devuelva. Pero cuando solo queremos pedirle algo sin que devuelva nada se usa ->exec. En este caso al hacer INSERT se esta insertando algo en dbo pero no se solicita que devuelva ahi mismo nada, solo que escriba.

-->
<?php

$bd = new SQLite3('preguntasyrespuestas.db');

$bd->exec("INSERT INTO pyr VALUES ('2','¿Cuál es el color cálido?','Rojo','127.0.0.1','')"); // (1)

//Aclaro: Daba error sino declaro el valor vacio de "imagen". Me decia que habia pasado 4 paramentros en vez de 5. Ahora funciona.

$bd->close();

?>
