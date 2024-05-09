<?php 
include("../conexion.php");

if (isset($_POST['subirPrecioInmueble'])) {
  $precio = $_POST['subirPrecioInmueble'];
  $metros = $_POST['subirMtrInmueble'];
  $departamento = $_POST['selectDep'];
  $municipio = $_POST['selectMun'];
  $direccion = $_POST['subirDireccionInmueble'];
  $estrato = $_POST['uploadStratum'];
  $category = $_POST['uploadCategory'];

  $sql = "INSERT INTO `inmueble` (`id_inmueble`, `price`, `mtr`, `departamento`, `municipio`, `direccion`, `estrato`) VALUES (NULL, '123', '123', 'cauca', 'popayan', 'a12312', '4')";
  $sentencia = $conexion->prepare("insert into inmueble(price,mtr,departamento,municipio,direccion,estrato,category) value (?,?,?,?,?,?,?)");
  $resultado = $sentencia->execute([$precio,$metros,$departamento,$municipio,$direccion,$estrato,$category]);
  if($resultado == true) {
    echo "inmueble subido correctamente";
  }


}


?>


<?php include("../components/head.php") ?>

<body>
  <?php include("../components/header.php") ?>
  <main class="upload">
    <form action="subirInmbueble.php" method="post" class="upload__form--blur">

      <section class="upload__element-container">
        <h3>Precio del Inmbueble</h3>
        <input type="number" name="subirPrecioInmueble" id="">
      </section>

      <section class="upload__element-container">
        <h3>Subir los metros cuadrados del Inmuble</h3>
        <input type="number" name="subirMtrInmueble" id="">
      </section>

      <section class="upload__element-container">
        <h3>Subir el departamento en el que se encuentra el inmbueble</h3>
        <label for="selectDep">Selecciona un departamento:</label>
        <select name="selectDep">
          <option value=""></option>
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
      </section>

        <section class="upload__element-container">
          <h3>Subir el municipio en el que se encuentra el inmbueble</h3>
          <label for="selectMun">Selecciona un municiop:</label>
          <select name="selectMun">
            <option value=""></option>
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
        </section>

        <section class="upload__element-container">
          <h3>Ingresar la direccion del inmbueble</h3>
          <input type="text" name="subirDireccionInmueble" id="">
        </section>

        <section class="upload__element-container">
          <h3>Selecciona el estrato</h3>
          <input type="radio" name="uploadStratum" id="" class="upload__stratum" value="1">1
          <input type="radio" name="uploadStratum" id="" class="upload__stratum" value="2">2
          <input type="radio" name="uploadStratum" id="" class="upload__stratum" value="3">3
          <input type="radio" name="uploadStratum" id="" class="upload__stratum" value="4">4
        </section>
        <section class="upload__element-container">
          <h3>Selecciona el estrato</h3>
          <input type="radio" name="uploadCategory" id="" class="upload__stratum" value="finca">Finca
          <input type="radio" name="uploadCategory" id="" class="upload__stratum" value="casa">Casa
          <input type="radio" name="uploadCategory" id="" class="upload__stratum" value="apartamento">Apartamento
        </section>

        <section class="upload__element-container upload__element-container--big">
          <h3>Ingrese una imagen de la casa</h3>
          <input type="file" accept="image/*" name="uploadImage" id="">
        </section>
        <input type="submit" value="Enviar">
    </form>
  </main>
  <?php include("../components/footer.php") ?>
</body>

</html>