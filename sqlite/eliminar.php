<!--
    -Este archivo realiza un DELETE, realiza eliminacion de un registro de la tabla "pyr", en este caso para el utc nº 2.
    
    ACLARACIONES: 

(1)-El método ->query lo utilizamos cuando queremos pedirle algo a la dbo y que nos lo devuelva. Pero cuando solo queremos pedirle algo sin que devuelva nada se usa ->exec. En este caso al hacer INSERT se esta insertando algo en dbo pero no se solicita que devuelva ahi mismo nada, solo que escriba.

-->
<?php

$bd = new SQLite3('preguntasyrespuestas.db');

$bd->exec("DELETE FROM pyr WHERE utc='2'");

$bd->close();

?>
