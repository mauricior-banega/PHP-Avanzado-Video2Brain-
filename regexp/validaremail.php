<!--
    -En este archivo veremos aplicado los conceptos vistos sobre las expresiones regulares y sus modificadores, con el fin de validar un mail es decir verificar si el mail que compararemos tiene el formato correcto para ser admintido como tal.
    -Aclaramos a medida que codifica para interpretar mejor el codigo.
	-Esto servira para validar cualquier tipo de cadena o dato con el que trabajemos en sistema.
-->

<?php

/* Para la busqueda e interpretacion mas correcta y completa de un formato de email: 
	Ej: jose.vicente.carratala@jocarsa.com

("/ /i") - Busca cadena indistintamente Mayu-Minu.

("/[a-z]/i") - Busca cadena indistintamente Mayu-Minu y rangos desde la letra A a la Z.

("/[a-z]+[@]+[a-z]+[.]+[a-z]/i") - Lo anterior, pero 3 veces ya que son 3 cadenas y ademas busca entre [] un (@) y un (.), encadenando cada busqueda con signo positivo.

("/[a-z0-9]+[@]+[a-z0-9]+[.]+[a-z]/i") - Aun asi el anterior puede no ser correcto ya que si la primera caena del email contiene numero daria incorrecto, asique ponemos [a-z0-9] para que lo tome, si el caso se diera. Entonces tambien se pondra para todas las cadenas el mismo modificador unificado, para letras y numeros.
	 Ej de otr mail: jose2.vicente.carratala@jocarsa.com


...+[a-z]{3}/i" (del ultimo segmento)
- Como vimos si ponemos {} y el Nº buscamos una cadena de 3 caracteres (com), pero si buscamos de 4 (info) tambien dará correcto siendo que no tendria que ser. Esto sucede porque el {3} valida "todo" el mail, de esta forma: cadena@cadena.cadena = {3}, porque EVALUA TODO JUNTO, entonces deberemos de poner para que solo vea el ultimo trozo, los indentificadores de principio (^) y fin ($). Quedando:

	("/^[a-z0-9]+[@]+[a-z0-9]+[.]+[a-z]{3}$/i")
-Dando correcto para (com) y para (info) no, para que acepte a ambas ponemos {3,4}. Quedando:

	("/^[a-z0-9]+[@]+[a-z0-9]+[.]+[a-z]{3,4}$/i")


("/^[a-z0-9]+... (del primer segmento)
-Ahora para el Ej de mail: jose.vicente@jocarsa.com, no especificamos el punto(.), no dimos instrucciones para tal, solo para letras y números. Para que lo acepte ponemos parentesis para "agrupar", seguido del corchetes que contendran el punto, y la cadena/numero. Quedando:

	("/^[a-z0-9]+([.][a-z0-9])+...

-Pero para el caso donde se repita en el mail este caso Ej: jose.vicente.carratala.programador@jocarsa.com" , hay que crear la expresion de manera que sea un bucle repetitivo de aceptacion, es decir no importa cuantos algo.algo.algo etc ponga, siempre lo aceptará con esta codificacion que se agrega un signo más y tras cerrado el ) reemplazo el + por * ya que este actua como multiplicador y es por eso lo del efecto bucle. Quedando:

	("/^[a-z0-9]+([.][a-z0-9]+)*...

-Dejamos esta expresión en el archivo.


*/
if(preg_match("/^[a-z0-9]+([.][a-z0-9]+)*[@]+[a-z0-9]+[.]+[a-z]{3,4}$/i","jose.vicente.carratala@jocarsa.com")){
	echo "Esto es una direccion de correo";
}else{
	echo "Esto NO es una direccion de correo";
}

?>
