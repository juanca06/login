<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lumen/bootstrap.min.css" integrity="sha384-GzaBcW6yPIfhF+6VpKMjxbTx6tvR/yRd/yJub90CqoIn2Tz4rRXlSpTFYMKHCifX" crossorigin="anonymous">
<!-- CSS -->
<style>
  /* Fuente Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700&display=swap');

/* Aquí van los estilos del cuerpo de página */
body {
  font-family: 'Spartan', sans-serif;
  height: 100%;
  display: flex;
  align-items: center;
  padding-top: 35px;
  background-color: #F2E0FF;
   
}

/* Estos son los estilos de la tarjeta */
.form-signin {
  width: 100%;
  max-width: 430px;
  padding: 15px;
  margin: auto;
  background-image:url(img/fondo.jpg); 
  /*background-color: #A3CFFF;  */
}

/* Aquí los estilos del imput de usuario */
.form-signin .form-floating:focus-within {
  z-index: 2;
}

/* Aquí tambien hay estilos del input de usuario */
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

/* Aquí hay estilos del input de la contraseña */
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Titulo de la página -->
<title>Login</title>
</head>

<!-- Cuerpo -->
<body class="text-center ">

<!-- Aquí inicia la terjeta donde va el login -->
<main class="form-signin container">
  <form name="login">
    <img class="mb-4 mt-2" src="img/komi-san.png" alt="" height="255">
    <h1 class="h3 mb-3 fw-normal">Inicia Sesión</h1>

    <!-- Aquí va el input del usuario -->
    <div class="form-floating">
      <input name="usuario" type="text" class="form-control" id="floatingInput" placeholder="nombre@email.com"> 
      <label for="floatingInput">Usuario</label>
    </div>

    <!-- Aquí va el input de la contraseña -->
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Contraseña"> 
      <label for="floatingPassword">Contraseña</label>
    </div>

    <!-- Aquí va el input del boton -->
    <input value="Entrar" class="w-100 btn btn-lg btn-info" target="_parent" onclick="Login()" type="button"></input>

    <!-- Aquí va un pequeño texto con la clase de muted de bootstrap -->
    <p class="mt-5 mb-3 ">&copy; Juan Carlos Ruperto Zarate</p> <!--text-muted
  </form>


  <!-- Aquí va el script del login -->
<script language="JavaScript"> 
function Login(){ 
var done=0; 
var usuario=document.login.usuario.value; 
var password=document.login.password.value; 
if (usuario=="empleado1" && password=="123") { /*Usuario y contraseña*/
window.location="frame1.php"; 
} 
if (usuario=="datos1" && password=="123") { /*Usuario y contraseña*/
window.location="frame2.php"; 
} 
if (usuario=="" && password=="") { 
window.location="error.php"; 
} 
} 
        </script> 

<script language="Javascript"> 
<!-- Begin 
document.oncontextmenu = function(){return false} 
// End --> 
</script>
</body>
</html>