<header class="header">
  <?php include("../components/nav.php") ?>
  <section class="header__login-register-container">
    <?php 
    if(!$_SESSION){
      echo '<button class="header__login-register-btn"><a href="../pages/loginSingUp.php">Inicia sesion - Registrate</a></button>';
    }
    if($_SESSION) {
      echo '<button class="header__login-login-btn"><a href="../pages/closeSession.php">Cerrar Sesion</a></button>';
    }
    ?>
  </section>
</header>