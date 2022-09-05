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
            <a href="PanelAdmin.php">Mi panel</a>
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
            <h2><?php echo $usuario1 ?></h2>
        </section>
        <section>
            <img>
            <img>
        </section>
    </section>
    <div class="navHorizontal">
        <a href="index.html">Página principal/</a>
        <a href="PanelAdmin.php"> MiPanel/</a>
        <a href=""> Usuarios</a>
    </div>
    <main class="mainPanel">
        <section class="Opciones-admin">
            <div class="Opciones">
                <a href="MascotasAdmin.php">Mascotas</a>
                <a href="AdopcionesAdmin.php">Adopciones</a>
                <a href="UsuariosAdmin.php">Mascotas</a>
            </div>
        <section>
            
            <div class="TablaUsuarios">
                <form action="conEditUsu.php" method="POST">
                <table border="1"> 
                    <tr>
                        <td>Ingresar datos: </td>
                        <td><input type="text" name="id" style="visibility: hidden"></td>
                    </tr>
                    <tr>
                        <td>Nombre: </td>
                        <td><input type="text" name="nombreAlta" size="15" title="Es obligatorio ingresar un nombre" required /></td>
                    </tr>
                    <tr>
                        <td>Edad: </td>
                        <td><input type="number" min="0" name="edadAlta" size="15" title="Es obligatorio ingresar una edad" required /></td>
                    </tr>
                    <tr>
                        <td>Especie: </td>
                        <td><input type="radio" id="PERRO" name="mascotasAlta" value="PERRO" checked>
            <label for="PERRO">Perro</label>
            <input type="radio" id="GATO" name="mascotasAlta" value="GATO">
            <label for="GATO">Gatos</label></td>
                    </tr>
                    <tr>
                        <td>Tamaño: </td>
                        <td><input type="radio" id="grandes" name="tamañosAlta" checked>
            <label for="grandes">Grande</label>
            <input type="radio" id="medianos" name="tamañosAlta">
            <label for="medianos">Mediano</label>
            <input type="radio" id="pequeños" name="tamañosAlta">
            <label for="pequeños">Pequeño</label></td>
                    </tr>
                    <tr>
                        <td>Descripcion: </td>
                        <td><textarea name="Descripcion-Alta" id="" cols="30" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>Foto: </td>
                        <td><input atri type="file" name="adjuntoAlta" accept=".jpg,.png" multiple /></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Actualizar"></td>
                        <td><a href="UsuariosAdmin.php">Cancelar</a></td>
                    </tr>
                </table>
               </form>
            </div>
            
        </section>
        </section>
    </main>
    <footer>
        <p>Todos los derechos reservados</p>
    </footer>
</body>
</html> 