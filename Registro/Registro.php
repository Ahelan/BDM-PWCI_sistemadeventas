<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro Ventas Bisontes </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- viejo estilo -->
  <link rel="stylesheet" href="../dist/css/lte.min.css">
 <!-- nuevo estilo -->
  <link rel="stylesheet" href="../public/css/Colores.css">
  <link rel="stylesheet" href="../prueba.scss">
</head>
<body class="hold-transition register-page">



<div class="register-box  ">
  <div class="card2a card-outline barrasuperior ">
    <div class="card-header text-center">
    <img src="../public/images/Logo.png" alt="" width="110px" style="display: block; margin: 0 auto;" top="50px">
      <a href="../../index2.html" class="h1"> Ventas Bisontes</a>
    </div>
    <div class="card-body ">
      <p class="login-box-header " style="color: #02318B "  >Registro.</p>
 
        
        
      <form action="../../index.html" method="post">
                <!-- correo electronico-->
                <div class="input-group mb-3">
          <input type="Correo" class="form-control" placeholder="Correo Electronico">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <!-- correo electronico-->
        <!-- Nombre de usuario-->
        <div class="input-group mb-3">
          <input type="Usuario" class="form-control" placeholder="Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
          <!-- Nombre de usuario-->
            <!-- Constraseña-->
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- Constraseña-->
        <!-- Rol de usuario-->
        <div class="input-group mb-3">
        <label for="miComboBox" class="content" style="padding: 0px 10px;">Rol: </label>
            <select id="miComboBox" name="opciones" class="form-control" >
                <option value="opcion1" >Privado</option>
                <option value="opcion2">Publico</option>
                <option value="opcion3">Vendedor</option>
               
            </select>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!-- Rol de usuario-->
        <!-- Nombre Completo-->
        <div class="input-group mb-3">
          <input type="NombreCompleto-" class="form-control" placeholder="Nombre">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!-- Nombre Completo-->
        <!-- Fecha de nacimiento-->
        <div class="input-group mb-3">
         
          <label for="birthday" >Fecha de Nacimiento</label>
                        <input class="form-control" type="date" name="birthday" id="birthday" required min="1977-01-01" max="2022-12-31">
                        <div id="myBirthday">
                        <br>
                        </div>
          
        </div>
        <!-- Fecha de nacimiento-->
       <!-- Sexo-->
       <div class="input-group mb-3">
        <label for="miComboBox" class="content" style="padding: 0px 10px;">Sexo: </label>
            <select id="miComboBox" name="opciones" class="form-control" >
                <option value="opcion1" >Mujer</option>
                <option value="opcion2">Hombre</option>
                <option value="opcion3">Indistinto</option>
               
            </select>

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <!-- Sexo-->
        
        <div class="container">
    <!--<br>-->
    <label for="avatar">Imagen de perfil</label>

    <input class="ocultaron"  type="file" id="avatar"  name="imagenSubida" accept="image/*"/>

    <label for="avatar" class="content" > 
        <div class="myLabel">
            <img class="myImg2" id="imagenSubida" src="../public/images/Logo.png" />
            <div>
                <span id="tituloArchivo">Agregar imagen</span><br />
                <span id="nombreArchivo"></span>
            </div>
        </div>
    </label>
    </div>


        <div class="row">

          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn boton-IniciarSesion btn-block2a "width="110px">Registrarse</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
<!--  
      <div class="social-auth-lnkis text-center">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>
--> 
      <a href="login.html" class="text-center"style="color: var(--azul-bisonte);" >¿Ya tienes cuenta? Inicia sesión </a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../dist/js/lte.min.js"></script>
</body>
</html>
