<!--
    -Este archivo hablaremos sobre: EXPRESIONES REGULARES.
    
	-Es lo que hay detras de un "motor de busqueda", nos permiten comparar una cadena y verificar si el contenido de ella (con multiples parametros que ejemplificaremos), esta contenido dentro de otra cadena.
	-Habia dos tipos de extresiones regulares, los que cumplian con el standard "Posix" (regex y preg_match) y las que no.
	-Explicaremos varios tipos de modificadores de expresiones regulares mediante "preg_match".

	ACLARACION: En la misma carpeta añadiremos otro archivo "validaremail.php" donde aplicaremos estos conceptos vistos para validar un email (ver también).
-->

<?php

/* 1º CASO 
- Para buscar una palabra dentro de una cadena ponemos: 
				preg_match("/video/","Este es un curso de video2brain");
-No mostrara nada si cargamos el archivo en el navegador, porque no mandamos a imprimirlo pero si lo hacemos dará: 0 o 1. Indicando en este caso 1 porque es cierto que esta y devuelve que cantidad de veces estaba esa cadena en la otra.

				echo "preg_match("/video2brain/","Este es un curso de video2brain");"
*/

/* 2º CASO 
- Para buscar una palabra obviando Mayusculas/Minusculas dentro de una cadena agregamos (i) luego de la ultima barra, ya que sino lo hacemos dara resultado 0, es decir no lo encontrará: 
				echo "preg_match("/Video2brain/i","Este es un curso de video2brain");"
*/

/* 3º CASO 
- Si buscamos solo la palabra "video" con la ultima sentencia aplicada indicara que "Existe una coincidencia" ya que no interpreta si forma parte de otra palabra o no:

				if(preg_match("/video/i","Este es un curso de video2brain"))
				{echo "Existe una coincidencia";} else {echo "No existe una coincidencia";}

-Pero si ponemos \b (como principio y fin) si identificara si forma parte de otra palabra, si fuera dara "No existe una coincidencia" y si estuviera suelta (o entiendase con espacio antes y despues) dará "Existe una coincidencia". La sentencia quedaria:

				if(preg_match("/\bvideo\b/i","Este es un curso de video2brain"))
				{echo "Existe una coincidencia";} else {echo "No existe una coincidencia";}
*/

/* 4º CASO 
- Para indicar una busqueda al "comienzo" de la cadena ponemos el simbolo de potencia o acento circunflejo (^). Se realiza en mi teclado Shift(flecha hacia arriba)+ tecla izq de P + Espacio. Pero en este caso dara que no existe ya que la palabra esta al final y no al comienzo. Sentencia: 
				if(preg_match("/^video2brain/i","Este es un curso de video2brain"))
				{echo "Existe una coincidencia";} else {echo "No existe una coincidencia";}

-Ahora para indicar una busqueda al "final" de la cadena ponemos el simbolo dólar ($) al final de la palabra a buscar. En este caso si dara correcto "Existe una coincidencia". 
Sentencia: 
				if(preg_match("/video2brain$/i","Este es un curso de video2brain"))
				{echo "Existe una coincidencia";} else {echo "No existe una coincidencia";}

*/

/* 5º CASO 
- Para buscar una cadena que contenga un numero podemos especificarlo directamente o bien poner un rango de la sgte manera, poniendo corchetes y los nº del rango separado por guión [Nº-N]. En este caso dará coincidencia. Tambien podemos poner para letras, en rangos de ej [a-z], osea letras unicamente, esto lo veremos en "validaremail.php".
Sentencia para nº:
				if(preg_match("/video[1-5]brain/i","Este es un curso de video2brain"))
				{echo "Existe una coincidencia";} else {echo "No existe una coincidencia";}

-Tambien podemos buscar la coincidencia de una repeticion, especificando entre signos mas el Nº y entre corchetes las repeticiones, en el ejemplo de la sgte manera +2{1,3}+ , entonces buscara: video2brain/video22brain/video222brain.
Sentencia:
				if(preg_match("/video+2{1,3}+brain/i","Este es un curso de video2brain"))
				{echo "Existe una coincidencia";}else{echo "No existe una coincidencia";}

-Dejamos esta expresión en el archivo.
*/

if(preg_match("/video+2{1,3}+brain/i","Este es un curso de video2brain")){
	echo "Existe una coincidencia";
}else{
	echo "No existe una coincidencia";
}

?>


