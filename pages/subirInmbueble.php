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
        <select id="selectDep">
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
          <select id="selectMun">
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

        <section class="upload__element-container upload__element-container--big">
          <h3>Ingrese una imagen de la casa</h3>
          <input type="file" name="uploadImage" id="">
        </section>
    </form>
  </main>
  <?php include("../components/footer.php") ?>
</body>

</html>