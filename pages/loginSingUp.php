<?php include("../components/head.php") ?>

<body>
  <main class="main__login">
    <div class="main__login-blur">
      
      <article class="box__back">
        <section class="box__back-login">
          <h3>Ya tienes una cueneta?</h3>
          <p>inicia sesion para ingresar a la pagina</p>
          <button class="box__back-login--btn">
            Iniciar sesion
          </button>
        </section>
  
        <section class="box__back-register">
          <h3>Ya tienes una cueneta?</h3>
          <p>inicia sesion para ingresar a la pagina</p>
          <button class="box__back-register--btn">
            Registrate
          </button>
        </section>
      </article>
  
      <section class="container__login-register">
        <form action="./loginSingUp.php" method="post" class="form__login">
          <h3>Iniciar sesion</h3>
          <input type="email" name="loginEmail" id="" placeholder="hola@email.com">
          <input type="password" name="loginPass" id="">
          <input type="submit" value="Iniciar sesion">
        </form>
  
        <form action="./loginSingUp.php" method="post" class="form__register">
          <h3>Registrate</h3>
          <input type="text" name="registerName" id="" placeholder="Nombre Completo">
          <input type="email" name="registerEmail" id="" placeholder="hola@email.com">
          <input type="password" name="registerPass" id="">
          <input type="submit" value="Registrate">
        </form>
      </section>
    </div>
  </main>

  <?php include("../components/footer.php") ?>
</body>

</html>