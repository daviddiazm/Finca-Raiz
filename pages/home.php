<?php include("../components/head.php") ?>

<body class="body">
  <?php include("../components/header.php") ?>
  <main class="main">
    <section class="main__canva">
      <div class="main__canva-cuadrilatero"></div>
      <article class="main__canva-text">
        <h3 class="main__canva-text--h3">!Ven y revisa las mejores casas de tu ciudad!</h3>
      </article>
      <!-- <img src="../assets/screen_2x.webp" alt="" class="main__canva-img"> -->
      <!-- <video src="../assets/videos/CGI - Animação Arquitetura - Casa Contemporânea (Blender).mp4" class="main__canva-img" controls></video> -->
      <video src="../assets/videos/CGI - Animação Arquitetura - Casa Contemporânea (Blender).mp4" class="main__canva-img" autoplay controls></video>
    </section>
    <section class="cards-container">
      <?php include("../components/card.php") ?>
      <?php include("../components/card.php") ?>
      <?php include("../components/card.php") ?>
    </section>

    <section class="redirectBoxes">
      <articlle class="redirectBoxes__Box-big redirectBoxes__Box">
        <h3 class="redirectBoxes__box-h3">Ven a ver tu nueva casa</h3>
        <p class="redirectBoxes__box-p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam quas nisi odio eius asperiores corporis nemo ad doloremque. Facilis, ab!</p>
        <button>Ir a ver inmuebles</button>
        <img src="../assets/tendencias.png" class="redirectBoxes__box-img redirectBoxes__box-img--big" alt="">
      </articlle>
      <articlle class="redirectBoxes__Box">
        <h3 class="redirectBoxes__box-h3">Trabaja con nosotros</h3>
        <p class="redirectBoxes__box-p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam quas nisi odio eius asperiores corporis nemo ad doloremque. Facilis, ab!</p>
        <button>Publica tu Inmuebles</button>
        <img src="../assets/tendencias.png" class="redirectBoxes__box-img" alt="">
      </articlle>
      <articlle class="redirectBoxes__Box">
        <h3 class="redirectBoxes__box-h3">contactanos</h3>
        <p class="redirectBoxes__box-p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam quas nisi odio eius asperiores corporis nemo ad doloremque. Facilis, ab!</p>
        <button>Ven y conoce mas sobre nosotros</button>
        <img src="../assets/tendencias.png" class="redirectBoxes__box-img" alt="">
      </articlle>
    </section>

  </main>
  <?php include("../components/footer.php") ?>
</body>

</html>