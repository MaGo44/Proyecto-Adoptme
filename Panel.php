<?php
    $server="localhost";
$user="root";
$pass ="";
$db="AdoptmeBD";

$conexion = new mysqli($server, $user, $pass, $db);

    session_start();
    $usuario=$_SESSION['username'];
    
    $sql2="SELECT * from usuarios where Usuario = '$usuario'";
    
    $ejecutarnombre=mysqli_query($conexion, $sql2);


    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap" rel="stylesheet">
    <title>AdoptMe</title>
    <!--Para responsivo-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Para el reset y que el navegador no modifique nada-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preload" href="reset.css"as="style">
    <link rel="stylesheet" href="reset.css">
    <link rel="preload" href="Estilo.css"as="style">
    <link rel="stylesheet" href="Estilo.css">
</head>
<body>
    <section class="navbar">
        <a href="index.html"><img src="logo adoptme.png" class="logo" href="index.html"></a>
       <nav class="Principal">
            <a href="Registro.html" class="NavPrimary">Registrarme</a>
            <a href="Adoptar.php">Adoptar</a>
            <a href="Nosotros.html">Sobre nosotros</a>
            <a href="Contacto.html">Contacto</a>
            <a href="Panel.html">Mi panel</a>
        </nav>  
    </section>
    <section class="PresentacionPanel">
        <header>
        </header>
        <section>
            <h1>Mi Panel</h1>
            <p>No compres la felicidad, adopta</p>
        </section>
        <section>
            <h2><?php echo $usuario ?></h2>
        </section>
        <section>
            <img>
            <img>
        </section>
    </section>
    <div class="navHorizontal">
        <a href="index.html">Página principal/</a>
        <a href=""> MiPanel</a>
    </div>
    <main class="mainPanel">
        <section class="Informacion">
            <div class="Cuenta-usuario">
                <h2>Mi información</h2>
                <?php
                while ($fila =mysqli_fetch_array($ejecutarnombre)){
                    ?>
                <p><?php echo 'Nombre: '.$fila ["Nombre"]; ?></p>
                
                <p><?php echo 'Apellido paterno: '.$fila ["ApellidoP"]; ?></p>
                <p><?php echo 'Apellido Materno: '.$fila ["ApellidoM"]; ?></p>
                <p><?php echo 'Nombre de usuario: '.$fila ["Usuario"]; ?></p>
                <p><?php echo 'Correo: '.$fila ["Correo"]; ?></p>
                <?php
                }
                ?>
				<a class="btnAdoptar" href="index.html">Editar perfil</a>
                <a class="btnAdoptar" href="index.html">Cerrar sesión</a>
            </div>
        <section class="Mainpanel">
			<h3>Reporte de adopción realizado...</h3>
                <embed class="pdfview" src="Informe.pdf" type="application/pdf" margin=auto display=block width="800px" height="500px"></embed>
        </section>
        </section>
    </main>
	<a href="PanelAdmin.html">Admin</a>
    <footer>
        <p>Todos los derechos reservados</p>
    </footer>
</body>
</html>  