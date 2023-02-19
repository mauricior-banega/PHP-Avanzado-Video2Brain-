<?php

/*
Creamos imagenes.php y aqui explicaremos como cargar una imagen, darle distintos filtros que tiene PHP y poner texto.

-Mostraremos como podemos tambien darle /+/-) calidad y dimenciones en px, de manera de hacerlo mas liviana la imagen.

*/

header("Content-type: image/png"); //o jpg para la 1º imagen del ejemplo.

$imagen = ImageCreateTrueColor(600,600); //Tamaño de la imagen o lienzo donde estará

//Cargamos la imagen a la dbo. 1º variable del lienzo / 2º sentencia de asignacion + nombre de la imagen/ 3º y 4 º coordenada de inicio x / 5º y 6º coordenada de final y / 7º y 8º tamaño de la imagen.
imagecopy($imagen,imagecreatefromjpeg('Penguins.jpg'),0,0,0,0,600,600);

//Filtro de PHP
imagefilter($imagen,IMG_FILTER_EDGEDETECT);
/*Otros filtros: FILTER_GRAYSCALE (escala de grises) 
                 FILTER_NEGATE (en negativo)
                 FILTER_BRIGHTNESS (brillo, requiere nivel de este ej: FILTER_BRIGHTNESS,-10);
                 FILTER_CONTRAST (contraste, requiere nivel de este, paras darle mas contraste hay que poner valores negativos ej:  FILTER_CONTRAST,-40);
                 FILTER_GAUSSIAN_BLUR (desenfoque suave)
                 FILTER_EMBOSS (simular relieve)
                 FILTER_EDGEDETECT (detectar bordes)
 Podemos usar todos estos filtros al mismo tiempo es decir poner una sentencia de filtro, luego otra debajo etc.
*/


//RE-ESCALAR IMAGEN
$imagen2 = ImageCreateTrueColor(300,300); //Imagen a escalar, la otra estaba al doble (600,600)
imagecopyresized($imagen2,$imagen,0,0,0,0,300,300,600,600);
//Valores: Variable destino/Variable original/0,0 es el punto de insercion de la img final/0,0 punto de insercion de la img de destino/300,300 altura y anchura de img de destino y 600,600 altura y anchura de la img original.

//Le da color primero:rojo que sera asignado al texto declarado.
$rojo = ImageColorAllocate($imagen,255,0,0);
imagestring($imagen2,5,40,40,"Hola como estas",$rojo);


//Comento estas lineas para poder ejemplificar como bajar los px de una foto "re-escalar".

//ImageJPEG($imagen);
//ImageDestroy($imagen);


//Ejecutamos para que aplique re-escalar.

//ImageJPEG($imagen2,NULL,100); 
ImagePNG($imagen2);
ImageDestroy($imagen2);

//Para darle mayor calidad a la imagen porque jpeg de por si tiene menos calidad de png podemos asignarle parametros a ImageJPEG($imagen2); que sera como quedara ya la sentencia.

//NULL - para que no me modifique el nombre del archivo
//100 - Para que tenga el %100 de calidad la imagen, pero puede ser de o a 100.

//Al final de todo, le cambia de jpg a png el valor de la imagen en todas las sentencias de ejecucion.
?>
