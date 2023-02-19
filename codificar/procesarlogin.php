<!--
    -Archivo PHP que funcionará en conjunto con el archivo "login.php".
	-Lo que crearemos es la validacion para tener acceso o no al logueo comaprando la clave ingresada pero siendo estas ya claves encriptadas a "sha1".
    -Se utilizara Adminer, por lo que tomaremos la dbo creada para ejemplificar.
	-En ella esta cargado el usuario: jocarsa/pass:jocarsa.


-->

<?php

$contador = 0; //Para que no muestre echo de ingreso correcto/ incorrecto.

$bd = new SQLite3('login.db');

$passwordcodificado = sha1($_POST['password']);

$resultado = $bd->query("SELECT * FROM login WHERE usuario='".$_POST['usuario']."' AND password='".$passwordcodificado."';");

while($fila = $resultado->fetchArray()){
	echo "Has entrado correctamente a la aplicación";
	$pass = $fila['password'];
	$contador++; //Contador para la no repeticion.
}
if($contador == 0){
	echo "No has entrado correctamente en la aplicación"; //echo de ingreso incorrecto, dentro del if para que valida mediante contador.
}


echo "<br>";
echo "La contraseña que has enviado es: ".$_POST['password'];
echo "<br>";
echo "Si yo cojo tu contraseña y la codifico, me da: ".$passwordcodificado;
echo "<br>";
echo "Mientras tanto, la contraseña YA codificada de la base de datos es: ".$pass;

$bd->close();

?>
