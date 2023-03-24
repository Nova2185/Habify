<?php
 $name = $_POST['Nombre'];
 $Email = $_POST['Email'];
 $Contraseña = $_POST['Contraseña'];

 //conexión a la base de datos
 $conn = new mysqli('localhost','root','registro');
 if ($conn->connect_error){
  die('Conexión no establecida  : ' . $conn->connect_error);
 }else{
  $stmt = $conn->prepare("insert into registration(Nombre, Email, Contraseña) values(?, ?, ?)");
  $stmt->bind_param("sss", $Nombre, $Email, $Contraseña);
  echo "Registro con exito...";
  $stmt->close();
  $conn->close();
 }
?>