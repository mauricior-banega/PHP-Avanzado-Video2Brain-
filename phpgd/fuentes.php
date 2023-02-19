
<?php


/*Creamos fuentes.php para mostrar como podemos presonalizar texto a las imagenes que creemos en PHP.
-Cabe destacar que el codigo del video es tal cual, pero aun asi no funciona. Posiblemente alguno de los valores/paramentros ya no tenga compatibilidad.*/


header("Content-type: image/png");

$im = imagecreatetruecolor(600,600);

//Creamos el color=blanco
$blanco = @imagecolorallocate($im, 225, 225, 225);


//Indicamos color/coordenadas de donde se dibuja el lienzo.
imagefilltoborder($im, 0, 0, $blanco, $blanco);


/*
$imagen = imagecreatetruecolor(600,600);

$blanco = imagecolorallocate($imagen,225,225,225);

imagefilltoborder($imagen,0,0,$blanco,$blanco);

/*
$negro = imagecolorallocate($imagen,0,0,0);
$texto ="Hola yo soy un texto";
$font ="arialbi.ttf";

//Sentencia para crear texto en la imagen (personalizada)
imagettftext($imagen,20,0,60,60,$negro,$font,$texto);
//Estructura: variable img/tamaño/rotacion/posicion x/posicion y/color/fuente/texto.


*/


imagepng($im);
imagedestroy($im);

?>