<?php include('../components/head.php')?>
<?php 
include("../conexion.php");


if(isset($_GET['id'])){
  echo $_GET['id'];
  $_SESSION['idInmueble'] = $_GET['id'];
}
function subirInmueble($id) {
  $id = $_GET['id'];
  echo "el id es "+$id;
  $_SESSION['idInmueble'] = $id;
}


?>

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
    <form action="lista_inmuebles.php" method="post">
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
        <h4 class="filters__h4">Departamento y municipio</h4>
        <select id="selectDep">
          <option value="">Departamento</option>
          <option value="amazonas">Amazonas</option>
          <option value="antioquia">Antioquia</option>
          <option value="arauca">Arauca</option>
          <option value="atlantico">Atlántico</option>
          <option value="bogota">Bogotá D.C.</option>
          <option value="bolivar">Bolívar</option>
          <option value="boyaca">Boyacá</option>
          <option value="caldas">Caldas</option>
          <option value="caqueta">Caquetá</option>
          <option value="casanare">Casanare</option>
          <option value="cauca">Cauca</option>
          <option value="cesar">Cesar</option>
          <option value="choco">Chocó</option>
          <option value="cordoba">Córdoba</option>
          <option value="cundinamarca">Cundinamarca</option>
          <option value="guainia">Guainía</option>
          <option value="guaviare">Guaviare</option>
          <option value="huila">Huila</option>
          <option value="la_guajira">La Guajira</option>
          <option value="magdalena">Magdalena</option>
          <option value="meta">Meta</option>
          <option value="nariño">Nariño</option>
          <option value="norte_santander">Norte de Santander</option>
          <option value="putumayo">Putumayo</option>
          <option value="quindio">Quindío</option>
          <option value="risaralda">Risaralda</option>
          <option value="san_andres_providencia">San Andrés y Providencia</option>
          <option value="santander">Santander</option>
          <option value="sucre">Sucre</option>
          <option value="tolima">Tolima</option>
          <option value="valle_del_cauca">Valle del Cauca</option>
          <option value="vaupes">Vaupés</option>
          <option value="vichada">Vichada</option>
        </select>
        <select id="selectMun">
          <option value="">Municipio</option>
          <option value="bogota">Bogotá D.C.</option>
          <option value="medellin">Medellín</option>
          <option value="cali">Cali</option>
          <option value="barranquilla">Barranquilla</option>
          <option value="cartagena">Cartagena</option>
          <option value="cucuta">Cúcuta</option>
          <option value="bucaramanga">Bucaramanga</option>
          <option value="pereira">Pereira</option>
          <option value="manizales">Manizales</option>
          <option value="pasto">Pasto</option>
          <option value="villavicencio">Villavicencio</option>
          <option value="neiva">Neiva</option>
          <option value="armenia">Armenia</option>
          <option value="popayan">Popayán</option>
          <option value="valledupar">Valledupar</option>
          <option value="monteria">Montería</option>
          <option value="sincelejo">Sincelejo</option>
          <option value="ibague">Ibagué</option>
          <option value="florence">Florencia</option>
          <option value="quibdo">Quibdó</option>
          <option value="riohacha">Riohacha</option>
          <option value="tunja">Tunja</option>
          <option value="puerto_carreno">Puerto Carreño</option>
          <option value="leticia">Leticia</option>
        </select>
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
        <hr>
      </section>

      <section class="filters">
        <h4 class="filters__h4">Tipo de inmueble</h4>
        <div class="filters__stratum-container">
          <?php
          $sentencia = $conexion->prepare("SELECT * FROM `categoria`");
          $sentencia->execute();
          while ($consulta = $sentencia->fetch()) {
            $categoriaName = $consulta['categoriaName'];
            echo '<input type="radio" name="'.$categoriaName.'" id="" class="filters__stratum" value="'.$categoriaName.'">'.$categoriaName.'';
          }
          ?>
        </div>
        <!-- <hr> -->
      </section>
      <input type="submit" value="buscar">
    </form>
  </aside>

  <main class="main">
    <section class="cards-container">
      <?php
      // if ($_POST) {
      //   $isCasa = (isset($_POST['casa'])) ? $_POST['casa'] : FALSE;
      //   $isFinca = (isset($_POST['finca'])) ? $_POST['finca'] : FALSE;
      //   $isApartamento = (isset($_POST['apartamento'])) ? $_POST['apartamento'] : FALSE;
      //   //print_r($isCasa, $isApartamento, $isFinca);
      //   if ($isCasa) {
      //     for ($i = 0; $i < 10; $i++) {
      //       include("../components/cardCasa.php");
      //       $isCasa = false;
      //     }
      //   } else if ($isFinca) {
      //     for ($i = 0; $i < 10; $i++) {
      //       include("../components/cardFinca.php");
      //       $isFinca = false;
      //     }
      //   } else if ($isApartamento) {
      //     for ($i = 0; $i < 10; $i++) {
      //       include("../components/cardApartamento.php");
      //       $isApartamento = false;
      //     }
      //   }
      // }
      // for ($i = 0; $i < 10; $i++) {
      //   include("../components/card.php");
      // }
      // ?>

      <?php 
      $sentencia = $conexion->prepare("SELECT * FROM `inmueble`");
      $sentencia->execute();
      while ($consulta = $sentencia->fetch()) {
        $idInmueble = $consulta['id_inmueble'];
        $precio = $consulta['price'];
        $metros = $consulta['mtr'];
        $municipio = $consulta['municipio'];
        $departamento = $consulta['departamento'];
        $direccion = $consulta['direccion'];
        
        echo '<section class="card">';
        echo ' <img src="../assets/screen_2x.webp" alt="" class="card__img">';
        echo '    <section class="card__text">';
        echo '    <p class="card__text-item--bolder">'.$precio.'</p>';
        echo '    <p class="card__text-item">'.$metros.'mtr2</p>';
        echo '    <p class="card__text-item">'.$municipio.'-'.$departamento.'</p>';
        echo '    <p class="card__text-item--lighter">'.$direccion.'</p>';
        echo '  </section>';
        // echo '  <button class="card__buttom">Contactar</button>';
        // echo '  <a class="card__buttom" target="_blank" href=lista_inmuebles.php?id="'.$idInmueble.'" >Contactar</a>';
        // echo '  <a class="card__buttom" target="_blank" href=inmuebleDetail.php?id="'.$idInmueble.'" >Contactar</a>';
        echo '  <a class="card__button" target="_blank" href="inmuebleDetail.php?id='.$idInmueble.'">Contactar</a>';
        echo '</section>';
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