<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lumen/bootstrap.min.css" integrity="sha384-GzaBcW6yPIfhF+6VpKMjxbTx6tvR/yRd/yJub90CqoIn2Tz4rRXlSpTFYMKHCifX" crossorigin="anonymous">
<style>

@import url('https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700&display=swap');

body {
  font-family: 'Spartan', sans-serif;
  height: 100%;
  display: flex;
  align-items: center;
  padding-top: 35px;
  background-color: #F2E0FF;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login para varios usuario</title>
</head>

<body class="text-center">

<!-- Contenedor -->
<div class="container">
  <!-- Texto -->
  <h1 class="mt-4">Datos Incorrectos</h1>
  <h4 class="lead">Por favor intente de nuevo</h4>
  <!-- Imagen -->
  <img src="img/komierror.png" alt="Alumno" height="350"><br>
  <!-- Botón -->
  <a href="frame.php" type="button" class="btn btn-info">Regresar</a>
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