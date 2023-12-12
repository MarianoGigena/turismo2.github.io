<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Pacifico&family=Poppins:wght@300&family=Roboto:wght@100&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="asset/css/styles.css">
    <link rel="icon" href="asset/media/logo.ico">
    <link rel="stylesheet" href="asset/css/modal_1.css">
    <link rel="stylesheet" href="asset/css/modal_f.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
</head>
    <title>Registro</title>
    <script type="text/javascript">
        function confirmar(){
           return confirm('¿Estas seguro?, se eliminaran los datos'); 
        }
    </script>
</head>
<body>
<header>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

        <!--logo de la compania-->
        <div class="navegacion">

        <nav class="nav_pos">
                <ul class="navegacion_p">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="destinos.html">Destinos</a></li>
                    <li><a href="nosotros.html">Nosotros</a></li>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="carrito.html">Viajes</a></li>

                </ul>
            </nav>
            <!-- <spam class="avion">¡Bienvenidos a Cudi Turismo!<img src="asset/media/avion.png" alt="" width="10%">
            </spam> -->
            <a href="index.html"><img class="logo" src="asset/media/CudiLogo.png" alt="Logo" width="10%"
                    title="Inicio"></a>
            <nav class="nav_pos2">
                <ul class="login_registro">
                    <li><a href="#" id="openModalLink">Login</a></li>
                    <li><a href="registro.php">Registrarse</a></li>
                </ul>
            </nav>


        </div>
    </header>
<?php
    include("conexion.php");
    $sql="select * from usuarios";
    $resultado=mysqli_query($conexion, $sql);
?>
<div id="listaUsuarios">
    <h1> Lista de usuario</h1>
    <!-- <a id="nuevoUsuario" href="agregar.php">Nuevo Usuario</a><br> -->
    <button id="nuevoUsuario" onclick="window.location.href='agregar.php'" class="btn">Nuevo Usuario</button>
    <table>
        <thead>
        <tr>    
            <th>id.</th>
            <th>Nombre</th>
            <th>apellido</th>
            <th>edad</th>
            <th>genero</th>
            <th>email</th>
            
        </tr>    
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($resultado)){
             ?>
            <tr>
                <td><?php echo $filas['id']?></td>
                <td><?php echo $filas['nombre']?></td>
                <td><?php echo $filas['apellido']?></td>
                <td><?php echo $filas['edad']?></td>
                <td><?php echo $filas['genero']?></td>
                <td><?php echo $filas['email']?></td>
                <td>
<?php echo "<a href='editar.php?id=".$filas['id']."'>Editar</a>";?>
                    -
<?php echo "<a href='eliminar.php?id=".$filas['id']."' onclick='return confirmar()'>Eliminar</a>";?>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <a href="index.html">Volver a la pagina</a><br>
    <?php
        mysqli_close($conexion);
    ?>
    </div>
<footer>


<h2>Contactenos</h2>
<h4> Nuestras redes</h4>
<div class="container__redes">


    <br>
    <div class="container__redes-link">
        <a href="mailto:cudi.turismo@gmail.com"><img src="asset/media/gmail.ico" alt="" width="50px"></a>
    </div>
    <div class="container__redes-link">
        <a href="https://twitter.com/" target="_blank"><img src="asset/media/twitter.ico" alt=""
                width="50px"></a>
    </div>
    <div class="container__redes-link">
        <a href="https://www.instagram.com/" target="_blank"><img src="asset/media/instagram.ico" alt=""
                width="50px"></a>
    </div>
    <siv class="container__redes-link">
        <a href="https://www.facebook.com/" target="_blank"><img src="asset/media/facebook.ico" alt=""
                width="50px"></a>
</div>
<br>
<p class="derechos">Derechos reservados 2023</p>



</footer>
</body>
</html>