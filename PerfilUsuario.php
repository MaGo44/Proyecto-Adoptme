<?php
$server="localhost";
$user="root";
$pass="";
$db="AdoptmeBD";
$nombrePerfil="";
$apellidoPPerfil="";
$apellidoMPerfil="";
$usuarioPerfil="";
$contraseñaPerfil="";
$correoPerfil="";

$conexion=new mysqli($server, $user, $pass, $db);

session_start();
$usuario=$_SESSION['username'];

if(isset($_GET['edit'])){
    $result=$mysqli->query("SELECT * FROM usuarios WHERE Usuario=$usuario");
    if(count($result)==1){
        $dato=$result->fetch_array();
        $nombre=$dato['nombrePerfil'];
        $apep=$dato['apellidoPPerfil'];
        $apem=$dato['apellidoMPerfil'];
        $usu=$dato['usuarioPerfil'];
        $cont=$dato['contraseñaPerfil'];
        $corre=$dato['correoPerfil'];
    }   

}
if(isset($_POST['update'])){
    $id=$_POST['username'];
    $nombre=$_POST['nombrePerfil'];
        $apep=$_POST['apellidoPPerfil'];
        $apem=$_POST['apellidoMPerfil'];
        $usu=$_POST['usuarioPerfil'];
        $cont=$_POST['contraseñaPerfil'];
        $corre=$_POST['correoPerfil'];
        $mysqli->query("UPDATE usuarios SET Nombre='$nombre',ApellidoP='$apep',ApellidoM='$apem',Usuario='$usu',Contrasena='$cont',Correo='$corre' where Usuario='$usuario'");
}
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
            <a href="InicioSesion.html">Iniciar sesion</a>
            <a href="Adoptar.html">Adoptar</a>
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
            <p>Se unió en noviembre 2020</p>
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
                <form action="" method="POST">
                <h2>Mi información</h2>
                <p>Nombre: </p>
                <input type="text" name="nombrePerfil" size="15" title="Es obligatorio ingresar un nombre" value="<?php echo $nombrePerfil; ?>" required /> <br> <br>
                <p>Apellido paterno: </p>
                <input type="text" name="apellidoPPerfil" size="15" title="Es obligatorio ingresar un apellido" value="<?php echo $apellidoPPerfil; ?>" required /> <br> <br>
                <p>Apellido materno: </p>
                <input type="text" name="apellidoMPerfil" size="15" title="Es obligatorio ingresar un apellido" value="<?php echo $apellidoMPerfil; ?>" required /> <br> <br>
                <p>Nombre de usuarios: </p>
                <input type="text" name="usuarioPerfil" size="15" title="Es obligatorio ingresar un nombre de usuario" value="<?php echo $usuarioPerfil; ?>" required /> <br> <br> 
                <p>Contraseña: </p>
                <input type="password" name="contraseñaPerfil" onChange="onChange()" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,15}$" size="15" placeholder="8 digitos mínimo, una mayúscula, un símbolo" title="8 digitos mínimo, una mayúscula, un símbolo" value="<?php echo $contraseñaPerfil; ?>" required /> <br> <br>
                <p>Correo electrónico: </p>
                <input type="email" name="correoPerfil"  size="15"/ title="Es obligatorio ingresar un correo" value="<?php echo $correoPerfil; ?>" required> <br> <br>
                <button class="ActualizarPerfil" name="update">Actualizar</button>
                </form>
                
            </div>
        <section>
            <div>

            
            <div>
                <h2>Adopciones</h2>
                <h3>En proceso</h3>
                <div class="Adopción">
                    <table border="1"> 
                        <tr>
                            <td>DireccionDoc</td>
                            <td>Estado</td>
                        </tr>
                        <?php
                        $sql="SELECT * from DocAdopcion";
                        $result=mysql_query($conexion,$sql);
    
                        while($mostrar=mysql_fetch_array($result)){
    
                        ?>
                        <tr>
                            <td><?php echo $mostrar['DireccionDoc'] ?></td>
                            <td><?php echo $mostrar['Estado'] ?></td>
                            <td>
                                <a class="btnDocumentacion" href="Documentacion.html">Ver</a>
                            </td>
                        </tr>
                        <?php
                        }
                    
                        ?>
    
                    </table>
                   
                </div>
                <h3>Terminado</h3>
                <div class="AdopciónT">
                    <table border="1"> 
                        <tr>
                            <td>DireccionDoc</td>
                            <td>Estado</td>
                        </tr>
                        <?php
                        $sql="SELECT * from DocAdopcion";
                        $result=mysql_query($conexion,$sql);
    
                        while($mostrar=mysql_fetch_array($result)){
    
                        ?>
                        <tr>
                            <td><?php echo $mostrar['DireccionDoc'] ?></td>
                            <td><?php echo $mostrar['Estado'] ?></td>
                            <td>
                                <a class="btnDocumentacion" href="Documentacion.html">Ver</a>
                            </td>
                        </tr>
                        <?php
                        }
                    
                        ?>
    
                    </table>
                   
                </div>
                
            </div>
            </div>
        </section>
        </section>
        <a href="PanelAdmin.html">Admin</a>
    </main>
    <footer>
        <p>Todos los derechos reservados</p>
    </footer>
</body>
</html>  