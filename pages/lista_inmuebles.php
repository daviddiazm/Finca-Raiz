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

  <aside class="aside" id="asideId">
    <!-- <aside class="aside__move"> -->
    <!-- <button class="aside__buttom" onclick="showAside()" ><p>Filtros</p></button> -->
    <button class="aside__buttom">
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
      <?php
      for ($i = 0; $i < 10; $i++) {
        include("../components/card.php");
      }
      ?>
    </section>
  </main>
  <?php include("../components/footer.php") ?>
  <script>
    var aside = document.querySelector("#asideId");
    var asideBtn = document.querySelector(".aside__buttom");
    let isTrue = false;
    asideBtn.addEventListener('click', function() {
      isTrue = !isTrue;
      if (isTrue) {
        aside.className = "aside__move"
      } else {
        aside.className = "aside"
      }
    });
  </script>
</body>

</html>