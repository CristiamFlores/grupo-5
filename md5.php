<?php
  // Password que puede ingresar un usuario
  $password = "password1234";
   
  // Encriptando el password para guardarlo en la base de datos
  $hash = md5($password);
   
  echo $hash;
?>