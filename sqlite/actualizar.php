<!--
    -Este archivo realiza un UPDATE, una actualizacion en la tabla "pyr" de uno de los valores de campo respectivo. Se toma como referencia otro campo para la edicion.
    
    ACLARACIONES: 

(1)-El método ->query lo utilizamos cuando queremos pedirle algo a la dbo y que nos lo devuelva. Pero cuando solo queremos pedirle algo sin que devuelva nada se usa ->exec. En este caso al hacer INSERT se esta insertando algo en dbo pero no se solicita que devuelva ahi mismo nada, solo que escriba.

-->
<?php

$bd = new SQLite3('preguntasyrespuestas.db');

$bd->exec("UPDATE pyr SET ip='127.0.0.1' WHERE utc = '0';");

$bd->close();

?>
