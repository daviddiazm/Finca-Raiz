
<?php include("../components/head.php") ?>
<?php 
include("../conexion.php");

if(isset($_GET['id'])){
  $_SESSION['idInmueble'] = $_GET['id'];
}



$idInmueble = $_SESSION['idInmueble'];
$idUsuario = $_SESSION['idUsuario'];
// if (!isset($_SESSION['primeraVisita'])) {
//     echo '<script>location.reload();</script>';
//   } else {
//     $_SESSION['primeraVisita'] = true; // Marcar la variable de sesión para futuras visitas
//   }


$sentencia = $conexion->prepare("SELECT * FROM `inmueble` WHERE id_inmueble = $idInmueble");

$sentencia->execute();


if(isset($_POST['wha_like'])) {
  if($_POST['wha_like'] == "Whatsapp") {

  } else {
    $sql = "INSERT INTO `usuaruio_inmueble` (`id_usu_inm`, `id_usuario`, `id_inmueble`) VALUES (NULL, '1', '1');";
    $sentencia = $conexion->prepare("insert into usuaruio_inmueble(id_usuario,id_inmueble) value (?,?)");
    $resultado = $sentencia->execute([$idUsuario,$idInmueble]);
    echo "<script>alert('Me gusta exitosamente!');</script>";
    echo "<script>setTimeout(function(){ window.location.href = './home.php'; }, 100);</script>";
    exit();
  }
}


?>


<body class="body_terminos">
  <?php include("../components/header.php") ?>
  <main class="main">
    
    <div class="container__detail">
      <section class="detail-card">
      <?php
      while ($consulta = $sentencia->fetch()) {
        $idInmueble = $consulta['id_inmueble'];
        $precio = $consulta['price'];
        $metros = $consulta['mtr'];
        $municipio = $consulta['municipio'];
        $departamento = $consulta['departamento'];
        $direccion = $consulta['direccion'];
        # code...
        echo '<img src="../assets/screen_2x.webp" alt="" class="detail-card__image">';
        echo '<section class="detail-card__content">';
        echo '  <p class="detail-card__content-item--bolder">'.$precio.'</p>';
        echo '  <p class="detail-card__content-item">'.$metros.' mtr2</p>';
        echo '  <p class="detail-card__content-item">'.$municipio.' - '.$departamento.'</p>';
        echo '<p class="detail-card__content-item--lighter">'.$direccion.'</p>';
      }
      ?>
      </section>
      <form action="./inmuebleDetail.php" method="post" class="form-buttons">
        <input type="submit" value="Whatsapp" name="wha_like">
        <input type="submit" value="Me Gusta" name="wha_like">
      </form>

      <section>
        <form action="./inmuebleDetail.php" method="post">
          <label for="num_cuotas">Número de cuotas:</label>
          <input type="number" id="num_cuotas" name="num_cuotas" min="1" max="100" required>
          <input type="submit" value="Calcular Cuotas">
        </form>
        <?php 
        if (isset($_POST['num_cuotas'])) {
          $num_cuotas = $_POST['num_cuotas'];
          $costo_cuota = $precio / $num_cuotas;

          echo '<p class="custom-style">Número de cuotas: '.$num_cuotas.'</p>';
          echo '<p class="custom-style">Costo total por cuota: '.$costo_cuota.'</p>';
          echo '<p class="custom-style">Costo de cada cuota: '.$costo_cuota.'</p>';
        }
        ?>
      </section>
    </section>
  </div>
  </main>
  <?php include("../components/footer.php") ?>
</body>
<?php 

?>
</html>