<!--
	ZIP - 1º PARTE EXPLICATIVA
	En este archivo explicaremos como crear en PHP archivos zip, crear directorios de extraccion zip y eliminar archivos dentro del zip. Todo mediante metodos que el lenguaje PHP contiene.

	1-Cremos un objeto del tipo "ZipArchive", método que tiene PHP.
	2-Creamos un if, para que podamos asi validar para abrir el archivo que se ejecuta mediante $zip->open.
	3-Entonces buscara el archivo de nombre definido en entre comillas, ahora SINO EXISTE, creará uno, esto se define en la linea luego de la coma ZipArchive::CREATE más ===TRUE que valida a todo el termino.
	4-Luego de abierto indicamos cual archivo de nombre "prueba.txt" se va a guardar en el zip. Siguiente de la coma va el nombre con el que guardaremos a "prueba.txt" que en este caso pondremos el mismo nombre. Sino llegase a encontrar ese archivo no zipeará nada, eso si ya esta definida la ultima linea close.
	5-Definimos "$zip->close();" para que ejecute/funcione la operación.
	6-Cierra con else indicando la no apertura del archivo si el ºer if no se cumple.
	
	
	ZIP - 2º PARTE EXPLICATIVA
	7-Podemos tambien añadir imagenes al archivo zip. De hecho si es un zip creado anteriormente. Suponiendo que quitamos el addFile que creo a "prueba.txt" y ahora cremos varios addFile con imagenes, estas se añadiran al archivo creado "comprimido.zip", que de hecho ya contenia antes el archivo de texto.
	8-Tambien para eliminar un archivo dentro del zip, lo hacemos mediante: ej  $zip->deleteName("DSC_9140");
	9-Por ultimo para descomprimir un archivo zip en una nueva carpeta, se realiza indicando $zip->extractTo más el directorio que especifiquemos, es decir la carpeta de nombre proporcionado. Sino existiera, la crea, dentro de la misma carpeta que contiene al archivo que ejecuta el php osea carpeta "zip".

-->

<?php

$zip = new ZipArchive; //(1)

if($zip->open("comprimido.zip",ZipArchive::CREATE) === TRUE){ //(2/3)
  //$zip->addFile("prueba.txt","prueba.txt") // comento (4)
  	
  /* comento (7)
  	$zip->addFile("DSC_9140","DSC_9140");
	$zip->addFile("DSC_9153","DSC_9153");
	$zip->addFile("DSC_9180","DSC_9180");
	$zip->addFile("DSC_9253","DSC_9253");
*/	
  //$zip->deleteName("DSC_9140"); // comento (8)

	$zip->extractTo('directoriodeprueba/');
	$zip->close();
}else{
	echo "No he podido abrir el archivo";
}

?>
