<section id="contact">
  <div class="formgrid">
    <div class="formcontainer">
      <div class="contactcontainer">
        <p>¿Preguntas?</p>
          <p>¡Te asesoramos <span>gratis!</span></p>
      </div>
      <form method="post" action="guardar_datos.php">
        <label class="eliminar" for="nombre">Ingresa tu Nombre*</label>
        <input placeholder="Ingresa tu Nombre*" type="text" name="nombre" id="nombre" required>
        <label class="eliminar" for="apellido">Ingresa yu Apellido*</label>
        <input placeholder="Ingresa yu Apellido*" type="text" name="apellido" id="apellido" required>
        <label class="eliminar" for="whatsapp">Ingresa tu Teléfono*</label>
        <input placeholder="Ingresa tu Teléfono*" type="text" name="whatsapp" id="whatsapp" required>
        <label class="eliminar" for="correo">Ingresa tu correo*</label>
        <input placeholder="Ingresa tu correo*" type="email" name="correo" id="correo" required>
        <label class="eliminar" for="empresa">Ingresa el nombre de la empresa*</label>
        <input placeholder="Ingresa el nombre de la empresa*" type="text" name="empresa" id="empresa" required>
        <label class="lastlabel">
        <input id="submitform" type="checkbox" name="acepta_terminos" required>Aceptas los Términos y Condiciones</label>
        <button class="botonone" type="submit">Quiero que me contacten<span></span></button>
      </form>
    </div>
    <div class="ifdiv">
      <div class="marifdiv">
        <p>Si prefieres llámanos o escribenos...</p>
        <p>Estamos antentos a tu comunicación para poder implementar tus nuevas herramientas digitales.</p>
        <div class="reddiv">
          <a href="#"><span></span>(+51)1.322.2789</a>
          <a href="#"><span></span>hola@kom.pe</a>
          <a href="#"><span></span>(+51)932.222.223</a>
          <a href="#"><span></span>(+51)932.222.223</a>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- conexion
<?php
// Configuración de la conexión con la base de datos
// $servername = "localhost";
// $username = "tu_usuario";
// $password = "tu_contraseña";
// $dbname = "tu_base_de_datos";
//
// // Conexión con la base de datos
// $conn = mysqli_connect($servername, $username, $password, $dbname);
//
// // Verifica si se pudo conectar con la base de datos
// if (!$conn) {
//   die("Conexión fallida: " . mysqli_connect_error());
// }
//
// // Recibe los datos del formulario
// $nombre = $_POST['nombre'];
// $apellido = $_POST['apellido'];
// $whatsapp = $_POST['whatsapp'];
// $correo = $_POST['correo'];
// $empresa = $_POST['empresa'];
//
// // Prepara y ejecuta la consulta SQL para insertar los datos en la base de datos
// $sql = "INSERT INTO datos_usuarios (nombre, apellido, whatsapp, correo, empresa)
//         VALUES ('$nombre', '$apellido', '$whatsapp', '$correo', '$empresa')";
//
// if (mysqli_query($conn, $sql)) {
//   echo "Datos guardados correctamente";
// } else {
//   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
//
// // Cierra la conexión con la base de datos
// mysqli_close($conn);
// ?> -->
