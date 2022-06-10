<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lumen/bootstrap.min.css" integrity="sha384-GzaBcW6yPIfhF+6VpKMjxbTx6tvR/yRd/yJub90CqoIn2Tz4rRXlSpTFYMKHCifX" crossorigin="anonymous">

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap');

body {
  font-family: 'Spartan', sans-serif;
  height: 100%;
  display: flex;
  align-items: center;
  padding-top: 35px;
  background-color: #F2E0FF;

}

</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login para varios usuario</title>
</head>

<body class="text-center">

<!-- Contenedor -->
<div class="container">
  <!-- Texto -->
  <h1 class="mt-4">Bienvenido</h1>
  <!-- Imagen -->
  <img src="img/nahimi-log.png" alt="Alumno" height="350"><br>
  <!-- Botón -->
  <a href="frame.php" type="button" class="btn btn-info">Regresar</a>
  <a href="/segunda_unidad/json/mostrar2.html" type="button" class="btn btn-info">Siguiente</a>
</div>

<script language="JavaScript"> 
function Login(){ 
var done=0; 
var usuario=document.login.usuario.value; 
var password=document.login.password.value; 
if (usuario=="angel" && password=="santillan") { 
window.location="frame1.php"; 
} 
if (usuario=="angel2" && password=="santillan2") { 
window.location="frame2.php"; 
} 
if (usuario=="" && password=="") { 
window.location="error.php"; 
} 
} 
        </script> 
</center> 
<script language="Javascript"> 
<!-- Begin 
document.oncontextmenu = function(){return false} 
// End --> 
</script>
</body>
</html>