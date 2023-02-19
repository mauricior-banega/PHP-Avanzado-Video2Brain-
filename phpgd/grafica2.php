<?php

/*
Creamos grafica2.php para seguir con los demas ejemplos de como podemos aplicar esta funcion de PHP. Esta es una copia a modificar finalmente, de grafica.php.

-Mostraremos como crear una barra estadistica dibujando directamente en PHP. Esto sirve para poder traer la imagen que dibujemos de forma dinamica, y podamos usar mas practicamente el contenido de imagen de la una dbo grafica.db.

*/
header ("Content-Type: image/png");


$y= 300; //Variable que utilizaremos para darle dimenciones al dibujo.
$contador= 70;
//Lienzo
$im = imagecreatetruecolor(600,$y);

//Creamos el color=blanco
$blanco = imagecolorallocate($im, 225, 225, 225);

//Indicamos color/coordenadas de donde se dibuja el lienzo.
imagefilltoborder($im, 0, 0, $blanco, $blanco);


//Insertamos esta sentencia para poder insertar un fondo que creamos.
imagecopy($im,imagecreatefrompng('fondo.png'),0,0,0,0,600,600); //NO FUNCIONA
//Filtro de brillo
imagefilter($im,IMG_FILTER_BRIGHTNESS,30);

//Creamos el color=rojo
$rojo = imagecolorallocate($im,255,0,0);

$negro = imagecolorallocate($im,0,0,0);

$texto = "Hola soy un texto";

$font = "arial.ttf";

/////////////////////////////////////////////////////////

//Copiamos de leer.php el trozo de codigo y reemplazamos:

$bd = new SQLite3('grafica.db');

$resultado = $bd->query("SELECT * FROM grafica;"); //(2)

while($fila = $resultado->fetchArray()){

	imagefilledrectangle($im,$contador,$y-55,$contador+10,($y-55-($fila['valores']*5)), $rojo);
     //Separa las barras una de otra

    //Al recorrer la tabla usamos $fila que contiene los valores de cada registro cargado para mostrar en el navegador la barra.
    //imagettftext($im,8,-45,$contador,250,$negro,$font,$fila['meses']);
    imagettftext($im,8,-45,$contador,250,$y-55,$font,$fila['meses']);
    $contador+=20;
}

$bd->close();

/////////////////////////////////////////////////////////


//Dibujamos barras del tipo estadisticas con rectangulos rojos.
/*
imagefilledrectangle($im,10,$y-20,20,($y-20-50),$rojo);
imagefilledrectangle($im,30,$y-20,40,($y-20-70),$rojo);
imagefilledrectangle($im,50,$y-20,60,($y-20-60),$rojo);
imagefilledrectangle($im,70,$y-20,80,($y-20-90),$rojo);
imagefilledrectangle($im,90,$y-20,100,($y-20-50),$rojo);
imagefilledrectangle($im,110,$y-20,120,($y-20-70),$rojo);
imagefilledrectangle($im,130,$y-20,140,($y-20-60),$rojo);
imagefilledrectangle($im,150,$y-20,160,($y-20-90),$rojo);
*/
//Dibujamos elipse rojo
//imagefilledellipse($im,250,250,100,20,$rojo);


//$color_texto = imagecolorallocate($im, 225, 225, 225);

//imagestring($im, 4, 15, 50,  'Es una simple oracion', $color_texto);

imagepng($im);

imagedestroy($im);

?>
