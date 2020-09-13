<?php
function showHeader(){
	echo "<h1>Usuario Registrado</h1>";
}
$nombre = $_POST['nombre']; //variables con los datos extraidos del form.php a traves del metodo post
$apellidos = $_POST['apellidos'];
$eMail = $_POST['e-mail'];
$contraseña = $_POST['contraseña'];
function mostrarDatos(){
   echo "Nombre: " echo $nombre "<br>";
   echo "Apellidos: " echo $apellidos "<br>";
   echo "E-mail: " echo $eMail "<br>";
   echo "Contraseña: " echo $contraseña ;
}