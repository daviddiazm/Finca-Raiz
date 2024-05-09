<?php include("../components/head.php") ?>
<?php 
include('../conexion.php');
if(isset($_POST['aceptar_rechazar'])) {
  if($_POST['aceptar_rechazar'] == "Acpetar") {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $sentencia = $conexion->prepare("SELECT * FROM usuario WHERE email = ?");
    $sentencia->execute([$email]);
    $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
    print_r($usuario);
    $idUsuario = $usuario['id_usuario'];

    $sql = "INSERT INTO `publicador` (`id_publicador`, `id_usuario`, `id_inmueble`, `name`, `email`, `password`) VALUES (NULL, '17', '1', 'prueba', 'prueba', '123')";
    $sentencia = $conexion->prepare("insert into publicador(id_usuario,id_inmueble,name,email,password) value (?,?,?,?,?)");
    $resultado = $sentencia->execute([$idUsuario,null,$name,$email,$password]);
    echo "usuaroi registrado";
    header("Location: ./subirInmbueble.php");
  } else {
    header("Location: ./home.php");
  }


  
}


?>


<style>
  .body_terminos {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
  }
  .container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 70vh;
      width: 80%;
      margin: 50px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
  }
</style>
<body class="body_terminos">
  <?php include("../components/header.php") ?>
  <main class="main">
  <div class="container">
      <h1>Aviso sobre Términos y Condiciones</h1>
      <p>Por favor, lee detenidamente los siguientes términos y condiciones antes de utilizar este sitio web:</p>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vel libero in velit tristique fermentum. Nulla facilisi. Morbi id orci nec purus mollis lacinia. Nunc volutpat dui eu libero tempus tincidunt. Maecenas non magna lorem. Nullam rhoncus scelerisque felis vitae tempus. Duis consectetur odio eu lectus interdum, vel dignissim erat bibendum. Ut aliquam nunc eget feugiat accumsan. Nam sagittis elit sit amet arcu scelerisque, non lacinia lectus convallis. Aliquam id convallis lacus.</p>
      
      <p>Suspendisse potenti. Integer maximus purus ac turpis molestie, vel auctor orci aliquet. Vivamus condimentum dui ac diam posuere, sit amet ullamcorper lorem congue. Nulla rutrum sem non dui dapibus, sed aliquam neque fringilla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce efficitur magna vel nunc pharetra feugiat. Sed elementum, arcu eget blandit vehicula, magna ex semper purus, ac euismod justo risus ac enim.</p>
      
      <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut condimentum, ipsum et molestie convallis, velit turpis blandit lorem, vitae laoreet dolor sapien id magna. Curabitur bibendum est a magna tempor, eget maximus lorem hendrerit. Nulla facilisi. Fusce tempus neque eu nunc efficitur, nec dictum neque ullamcorper. Sed sagittis nulla velit, ac sollicitudin ipsum vehicula sed. Mauris venenatis mauris a magna aliquet, sit amet congue eros tempor. Vivamus sit amet efficitur ipsum.</p>
      
      <p>Al hacer clic en "Aceptar" o continuar utilizando este sitio web, aceptas todos los términos y condiciones establecidos anteriormente.</p>
      
      <p>Para más información, consulta nuestra página de <a href="terminos_y_condiciones.html" target="_blank">Términos y Condiciones</a>.</p>
      <form action="./acpetarTerminosSubir.php" method="post">
        <input type="submit" value="Rechazar" name="aceptar_rechazar">
        <input type="submit" value="Acpetar" name="aceptar_rechazar">
      </form>
    </div>
  </main>
  <?php include("../components/footer.php") ?>
</body>

</html>