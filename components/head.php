<?php
session_start();
if($_SESSION['name'] != "david") {
  // header("Location: ./loginSingUp.php");
}
if(isset($_SESSION['name'])){
  echo "<p>Hola ".$_SESSION['name']."</p>";
} else {
  header("Location: ./loginSingUp.php");
}
// print_r($_SESSION);


?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Finca Raiz</title>
</head>