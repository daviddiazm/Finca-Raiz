<?php ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/style.css">
  <title>Finca Raiz</title>
</head>

<body class="body">
  <?php include("../components/header.php") ?>

  <div class="main__container">

  </div>

  <aside class="aside">
    <button class="aside__buttom" onclick="showAside()">
      <p>Filtros</p>
    </button>
    <h3 class="aside__h3">Filtros</h3>
    <form action="listaInmbuebles.php" method="post">
      <section class="filters">
        <h4 class="filters__h4">Precio</h4>
        <div class="filters__price-container">
          <input type="number" name="" id="" class="filters__price-range">
          <p class="filters__p">hasta</p>
          <input type="number" name="" id="" class="filters__price-range">
        </div>
        <hr>
      </section>
      <section class="filters">
        <h4 class="filters__h4">Estrato</h4>
        <div class="filters__stratum-container">
          <input type="radio" name="stratum" id="" class="filters__stratum" value="1">1
          <input type="radio" name="stratum" id="" class="filters__stratum" value="2">2
          <input type="radio" name="stratum" id="" class="filters__stratum" value="3">3
          <input type="radio" name="stratum" id="" class="filters__stratum" value="4">4
        </div>
      </section>
    </form>
  </aside>
  <main class="main">
    <section class="cards-container">
      <section class="card">
        <img src="../assets/screen_2x.webp" alt="" class="card__img">
        <section class="card__text">
          <p class="card__text-item--bolder">2000000</p>
          <p class="card__text-item">200mtr2</p>
          <p class="card__text-item">Popayan-Cauca</p>
          <p class="card__text-item--lighter">Cr48e #1-46</p>
        </section>
        <button class="card__buttom">Contactar</button>
      </section>

      <section class="card">
        <img src="../assets/screen_2x.webp" alt="" class="card__img">
        <section class="card__text">
          <p class="card__text-item--bolder">2000000</p>
          <p class="card__text-item">200mtr2</p>
          <p class="card__text-item">Popayan-Cauca</p>
          <p class="card__text-item--lighter">Cr48e #1-46</p>
        </section>
        <button class="card__buttom">Contactar</button>
      </section>

      <section class="card">
        <img src="../assets/screen_2x.webp" alt="" class="card__img">
        <section class="card__text">
          <p class="card__text-item--bolder">2000000</p>
          <p class="card__text-item">200mtr2</p>
          <p class="card__text-item">Popayan-Cauca</p>
          <p class="card__text-item--lighter">Cr48e #1-46</p>
        </section>
        <button class="card__buttom">Contactar</button>
      </section>

      <section class="card">
        <img src="../assets/screen_2x.webp" alt="" class="card__img">
        <section class="card__text">
          <p class="card__text-item--bolder">2000000</p>
          <p class="card__text-item">200mtr2</p>
          <p class="card__text-item">Popayan-Cauca</p>
          <p class="card__text-item--lighter">Cr48e #1-46</p>
        </section>
        <button class="card__buttom">Contactar</button>
      </section>

      <section class="card">
        <img src="../assets/screen_2x.webp" alt="" class="card__img">
        <section class="card__text">
          <p class="card__text-item--bolder">2000000</p>
          <p class="card__text-item">200mtr2</p>
          <p class="card__text-item">Popayan-Cauca</p>
          <p class="card__text-item--lighter">Cr48e #1-46</p>
        </section>
        <button class="card__buttom">Contactar</button>
      </section>

      <section class="card">
        <img src="../assets/screen_2x.webp" alt="" class="card__img">
        <section class="card__text">
          <p class="card__text-item--bolder">2000000</p>
          <p class="card__text-item">200mtr2</p>
          <p class="card__text-item">Popayan-Cauca</p>
          <p class="card__text-item--lighter">Cr48e #1-46</p>
        </section>
        <button class="card__buttom">Contactar</button>
      </section>

      <section class="card">
        <img src="../assets/screen_2x.webp" alt="" class="card__img">
        <section class="card__text">
          <p class="card__text-item--bolder">2000000</p>
          <p class="card__text-item">200mtr2</p>
          <p class="card__text-item">Popayan-Cauca</p>
          <p class="card__text-item--lighter">Cr48e #1-46</p>
        </section>
        <button class="card__buttom">Contactar</button>
      </section>

      <section class="card">
        <img src="../assets/screen_2x.webp" alt="" class="card__img">
        <section class="card__text">
          <p class="card__text-item--bolder">2000000</p>
          <p class="card__text-item">200mtr2</p>
          <p class="card__text-item">Popayan-Cauca</p>
          <p class="card__text-item--lighter">Cr48e #1-46</p>
        </section>
        <button class="card__buttom">Contactar</button>
      </section>

      <section class="card">
        <img src="../assets/screen_2x.webp" alt="" class="card__img">
        <section class="card__text">
          <p class="card__text-item--bolder">2000000</p>
          <p class="card__text-item">200mtr2</p>
          <p class="card__text-item">Popayan-Cauca</p>
          <p class="card__text-item--lighter">Cr48e #1-46</p>
        </section>
        <button class="card__buttom">Contactar</button>
      </section>

    </section>
  </main>
  <script>
    const showAside = () => {
      var aside = document.querySelector(".aside");
      var asideBtn = document.querySelector(".aside__buttom");
      var clicked = false;
      if (clicked) {
        aside.style.left = "0px";
        clicked = false;
      } else {
        aside.style.left = "-420px";
        clicked = true;
      }
    }
  </script>
</body>

</html>