<?php

$server="localhost";
$user="root";
$pass ="";
$db="AdoptmeBD";

$conexion = new mysqli($server, $user, $pass, $db);
//verifica la conexion
if($conexion->connect_errno){
	die("La conexion ha fallado" . $conexion->connect_errno);
}
else{
	echo "¡HOLA! :)";
}
//recuperar las variables
$nombre=$_POST['nombre'];
$apellidop=$_POST['apellidoP'];
$apellidom=$_POST['apellidoM'];
$nombreusu=$_POST['usuario'];
$correo=$_POST['correo'];
$contra=$_POST['contraseña'];
$contra2=$_POST['contraseña2'];

//verifica que los campos de las contraseñas sean iguales
if ($contra2==$contra) {
	//hacemos la sentencia sql
$sql="INSERT INTO usuarios VALUES('', '$nombre', '$apellidop', '$apellidom', '$nombreusu', '$correo', '$contra')";

//ejecucion de sentencia sql
$ejecutar=$conexion->query($sql);
} else{
	echo"<br>Verifica que las contraseñas sean iguales";
}

//verificamos la ejecucion
if(!$ejecutar){
	echo"Hubo un error";
}else{
	echo"<br>Datos guardados correctamente<br> <a href='Registro.html'>Volver</a>";
}
?>