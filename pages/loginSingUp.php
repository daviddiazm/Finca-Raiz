<?php 
include("../conexion.php");
session_start();
session_destroy();

if(isset($_POST['registerName']) & isset($_POST['registerEmail']) & isset($_POST['registerPass'])) {
  $registerName = $_POST['registerName'] ? $_POST['registerName'] : null;
  $registerEmail = $_POST['registerEmail'] ? $_POST['registerEmail'] : null;  
  $registerPass = $_POST['registerPass'] ? $_POST['registerPass'] : null;

  $sentencia = $conexion->prepare("insert into usuario(name,email,password) value (?,?,?)");
  $resultado = $sentencia->execute([$registerName,$registerEmail,$registerPass]);
  if($resultado == true) {
    echo "ususerio Registrado correctamente";
    header("Location: ./home.php");
    session_start();
    $_SESSION['name'] = $registerName;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['idUsuario'] = $idUsuario;
  }
}


if(isset($_GET['loginEmail']) && isset($_GET['loginPass'])) {
  $loginEmail = $_GET['loginEmail'];
  $loginPass = $_GET['loginPass'];

  $sentencia = $conexion->prepare("SELECT * FROM usuario WHERE email = ?");
  $sentencia->execute([$loginEmail]);
  $usuario = $sentencia->fetch(PDO::FETCH_ASSOC);
  print_r($usuario);
  
  // if($usuario && password_verify($loginPass, $usuario['password'])) {
  //   $_SESSION['nombre'] = $usuario['name'];
  //   header("Location: ./home.php");
  //   exit(); // Termina el script después de redirigir
  // } else {
  //   echo "Correo electrónico o contraseña incorrectos";
  // }

  $password = $usuario['password'];
  $email = $usuario['email'];
  $name = $usuario['name'];
  $idUsuario = $usuario['id_usuario'];

  if($password == $loginPass & $email == $loginEmail) {
    header("Location: ./home.php");
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['idUsuario'] = $idUsuario;
  }
  
  print_r($_GET);
}


?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Finca Raiz</title>
</head>

<body>
  <main class="main__login">
    <div class="main__login-blur">

      <article class="box__back">
        <section class="box__back-login">
          <h3>Ya tienes una cueneta?</h3>
          <p>inicia sesion para ingresar a la pagina</p>
          <button class="box__back-login--btn" onclick="login()">
            Iniciar sesion
          </button>
        </section>

        <section class="box__back-register">
          <h3>Ya tienes una cueneta?</h3>
          <p>Registrate para ingresar a la pagina</p>
          <button class="box__back-register--btn" onclick="register()">
            Registrate
          </button>
        </section>
      </article>

      <section class="container__login-register">

        <form action="./loginSingUp.php" method="get" class="form__login">
          <h3>Iniciar sesion</h3>
          <input type="email" name="loginEmail" id="" placeholder="hola@email.com">
          <input type="password" name="loginPass" id="">
          <input type="submit" value="Iniciar sesion" class="container__login-register--sub">
        </form>

        <form action="./loginSingUp.php" method="post" class="form__register">
          <h3>Registrate</h3>
          <input type="text" name="registerName" id="" placeholder="Nombre Completo">
          <input type="email" name="registerEmail" id="" placeholder="hola@email.com">
          <input type="password" name="registerPass" id="">
          <input type="submit" value="Registrate" class="container__login-register--sub">
        </form>

      </section>
    </div>
  </main>
  <?php include("../components/footer.php") ?>

  <script>
    var conenedor_login_register = document.querySelector("container__login-register")
    var formulario__login = document.querySelector(".form__login")
    var formulario__register = document.querySelector(".form__register")
    var caja_trasera_login = document.querySelector("box__back-login")
    var caja_trasera_register = document.querySelector("box__back-register")

    function login() {
      formulario__register.style.visibility = "hidden";
      formulario__login.style.visibility = "visible"
      // formulario__login.style.right = "100%"
      formulario__login.style.transform = "translateX(-100%)"
      formulario__register.style.transform = "translateX(-100%)"
    }


    function register() {
      formulario__login.style.visibility = "hidden"
      formulario__register.style.visibility = "visible"
      // formulario__register.style.left = "10%"
      formulario__register.style.transform = "translateX(10%)"
      formulario__login.style.transform = "translateX(10%)"

    }
  </script>
</body>

</html>