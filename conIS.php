<?php

$server="localhost";
$user="root";
$pass ="";
$db="AdoptmeBD";

$conexion = new mysqli($server, $user, $pass, $db);

session_start();

$nombreusu=$_POST['usuario'];
$contra=$_POST['contraseña'];

	//hacemos la sentencia sql
$sql="SELECT COUNT(*) as contar FROM usuarios WHERE Usuario ='$nombreusu' and Contrasena='$contra'";

//ejecucion de sentencia sql
$ejecutar=mysqli_query($conexion, $sql);
$array=mysqli_fetch_array($ejecutar);

//verificamos la ejecucion
if($array['contar']>0){
	$_SESSION['username']=$nombreusu;


	header("location: Panel.php");
}else{
	echo"<br>Datos incorrectos<br> <a href='InicioSesion.html'>Volver</a>";
	
}

?>