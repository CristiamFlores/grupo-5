<?php
require 'database.php';
$message='';

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="bootstrap/css/login.css">

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


	
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
  

    <h2 class="inactive underlineHover">BIENVENIDOS </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="jpg/login.png" id="" alt="" />
    </div> 
         <form action="menu.php" method="post">
                <div class="form-group has-feedback">
                <input type="text" id="login" class="form-control" name="nombreUsuario" placeholder="Ingrese su Nombre de Usuario">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                 <input type="text" id="password" class="fadeIn third" name="Contraseña" placeholder="Ingrese su Contraseña">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                <div class="col-xs-12">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">INGRESAR</button>
                </div>
                 
                </div>
            </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">HAS OLVIDADO TU CONTRASEÑA..?</a>
    </div>

  </div> 
</div>
</body>
</html>