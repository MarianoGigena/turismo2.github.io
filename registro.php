<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width">
  <title>Cudi Turismo - Registro</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Pacifico&family=Poppins:wght@300&family=Roboto:wght@100&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="asset/css/styles.css">
  <link rel="stylesheet" href="asset/css/registro.css">
  <link rel="icon" href="asset/media/logo.ico">
</head>

<body class="bodyRegistro">
  
  <header>

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
      <spam class="avion">¡Bienvenidos a Cudi Turismo!<img src="asset/media/avion.png" alt="" width="10%">
      </spam>

      <a href="index.html"><img class="logo" src="asset/media/CudiLogo.png" alt="Logo" width="10%" title="Inicio"></a>

      <nav class="nav_pos2">
        <ul class="login_registro">
          <li><a href="login.html">Login</a></li>
          <li><a href="registro.html">Registrarse</a></li>
        </ul>
      </nav>


    </div>





  </header>
  <?php
        if(isset($_POST['enviar'])){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $edad=$_POST['edad'];
        $genero=$_POST['genero'];
        $email=$_POST['email'];
        include("conexion.php");
        $sql="insert into usuarios(nombre,apellido,edad,genero,email) values ('".$nombre."', '".$apellido."', '".$edad."', '".$genero."' , '".$email."'  )";
        $resultado=mysqli_query($conexion, $sql);
        if($resultado){
            echo "<script language='JavaScript'>
                 alert('Los datos fueron ingresados correctamente a la BD');
                 location.assign('registro.php');
                 </script>";
        }else{
            echo "<script language='JavaScript'>
                 alert('ERROR: Los datos no fueron ingresados correctamente a la BD');
                 location.assign('registro.php');
                 </script>";
        }
        mysqli_close($conexion);
    }else{
    ?>
  <div class="conteiner2">
    <div class="conteinerForm">
      <main>
        <div class="formulario">
          <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <fieldset title="Alta de Usuario">
              <legend>Alta de Usuario</legend>
              <label for="nombre">Nombre</label>
              <div>
                <input type="text" name="nombre" maxlength="40" id="nombre" />
              </div>
              <label for="apellido">Apellido</label>
              <div>
                <input type="text" name="apellido" maxlength="40" id="apellido" />
              </div>
              <label for="edad">Edad:</label>
              <div><input type="text" name="edad" maxlength="50" id="edad" /></div>
              <label for="genero">Sexo:</label>
              <div>Masculino<input type="radio" name="genero" id="genero" value="Masculino" /></div>
              <div>Femenino <input type="radio" name="genero" id="genero" value="Femenino" /></div>
              <label for="email">Email:</label>
              <div>
                <input class="email" type="email" name="email" maxlength="40" id="email" />
              </div>
              <br />

              <div><input type="SUBMIT" name="enviar" value="AGREGAR"></div>
            </fieldset>
          </form>
         
        </div>
        <?php
    }
    ?>
      </main>
    </div>
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
        <a href="https://twitter.com/" target="_blank"><img src="asset/media/twitter.ico" alt="" width="50px"></a>
      </div>
      <div class="container__redes-link">
        <a href="https://www.instagram.com/" target="_blank"><img src="asset/media/instagram.ico" alt=""
            width="50px"></a>
      </div>
      <siv class="container__redes-link">
        <a href="https://www.facebook.com/" target="_blank"><img src="asset/media/facebook.ico" alt="" width="50px"></a>
    </div>
    <br>
    <p class="derechos">Derechos reservados 2023</p>


  
  </footer>

</body>
</html>