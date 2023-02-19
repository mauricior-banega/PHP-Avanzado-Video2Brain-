<?php

/*
Una vez que verificamos si funciona la libreria gd que averiguamos atravez de "phpinfo.php" podremos continuar con el practico.

 -Ademas aclaro que crearé una copia de este practico para ejemplificar lo que modifica para dibujar una seria de barras en el archivo, (ver grafica2.php).

*/

header ("Content-Type: image/png"); //Indicamos al navegador que creamos un archivo no del tipo (txt) sino de imagen. Puede ser png o jpg





$im = imagecreatetruecolor(400, 400)
      or die('No se puede Iniciar el nuevo flujo a la imagen GD');

//Lienzo: Se crea mediante imagecreatetruecolor pasandole el tamaño en x/y en px. Aqui es donde dibujaremos

$blanco = imagecolorallocate($im, 225, 225, 225);
imagefilltoborder($im, 0, 0, $blanco, $blanco);

//Creamos el objeto a dibujar pasandole el color
$rojo = imagecolorallocate($im,255,0,0);

//Finalmente dibujamos rectangulo
imagefilledrectangle($im,10,10,200,200,$rojo);

//Finalmente dibujamos elipse
imagefilledellipse($im,250,250,100,20,$rojo);

$color_texto = imagecolorallocate($im, 225, 225, 225);

imagestring($im, 4, 15, 50,  'Es una simple oracion', $color_texto);
//Funcion gd que muestra una cadena, 1º imagen, 2º va el tamaño (1,2,3,4,5), 3º posision en x, 4º posicion en y, 5º cadena y 6º variable del color.

imagepng($im); //Hacemos el llamado a crearlo. Tipo png (imagepng) o jpg (imagejpeg).

imagedestroy($im); //Para luego eliminarlo. Esto se hace para quwe no ocupe lugar en lña dbo y se quede la web unicamente mostrandolo.

?>
