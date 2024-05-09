<?php 
$servidor = "localhost";
$usuario = 'root';
$password = '';

try {
  $conexion = new PDO("mysql:host=$servidor;dbname=FincaRaiz_db", $usuario, $password);
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "<p>Conexion exitosa</p>";
  //code...
} catch (PDOException $msg) {
  echo "error ".$msg->getMessage();
}



?>