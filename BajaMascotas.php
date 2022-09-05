<?php
$conexion=mysqli_connect('localhost','root','','adoptmebd');
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
            <a href="PanelAdmin.html">Mi panel</a>
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
            <h2>Daniela193</h2>
        </section>
        <section>
            <img>
            <img>
        </section>
    </section>
    <div class="navHorizontal">
        <a href="index.html">Página principal/</a>
        <a href="PanelAdmin.html"> MiPanel/</a>
        <a href=""> BajaMascotas</a>
    </div>
    <main class="mainPanel">
        <section class="Opciones-admin">
            <div class="Opciones">
                <a href="MascotasAdmin.html">Mascotas</a>
                <a href="UsuariosAdmin.html">Usuarios</a>
            </div>
        <section>
            <form class="busca">
                <input type="text" class="buscadorMascota" placeholder="Buscar mascota">
                <button type="submit" class="btn-buscaMascota">
                    <i class="fa fa-search"></i>
                </button>
            </form>
            <div class="TablaUsuarios">
                <table border="1"> 
                    <tr>
                        =Consultar usuarios=
                        <td>IdMascota</td>
                        <td>Nombre</td>
                        <td>Raza</td>
                        <td>Edad</td>
                        <td>Especie</td>
                        <td>Tamano</td>
                        <td>Descripcion</td>
                        <td style="height=100px">Acción</td>
                    </tr>
                    <?php
                    $sql="SELECT*FROM mascotas";
                    $result=mysqli_query($conexion,$sql);

                    while($mostrar=mysqli_fetch_array($result)){
                        ?>
                    <tr>
                        <td><?php echo $mostrar['IdMascota'] ?></td>
                        <td><?php echo $mostrar['NombreMas'] ?></td>
                        <td><?php echo $mostrar['Raza'] ?></td>
                        <td><?php echo $mostrar['Edad'] ?></td>
                        <td><?php echo $mostrar['Especie'] ?></td>
                        <td><?php echo $mostrar['Tamano'] ?></td>
                        <td><?php echo $mostrar['Descripcion'] ?></td>
                        <td>
                            <a class="btnActualizarBaja" href='update'>Actualizar</a>
                            <a class="btnEliminar" href='delete'>Eliminar</a>
                        </td>
                    </tr>
                    <?php
                }
                
                ?>

                </table>
               
            </div>
            
        </section>
        </section>
    </main>
    <footer>
        <p>Todos los derechos reservados</p>
    </footer>
</body>
</html> 
