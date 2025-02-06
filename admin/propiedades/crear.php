<?php
// dataabase connection
require '../../includes/config/database.php';
$db = connectDB();

// bring sellers from the database
$consulta = "SELECT * FROM vendedores";
$resultado   = mysqli_query($db, $consulta);

// arreglo con mensajes de errores
$errores = [];


$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$estacionamiento = '';
$wc = '';
$vendedor = '';

// ejecutar el codigo despues de que el usuario envie el formulario 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


  $titulo = $_POST['titulo'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $habitaciones = $_POST['habitaciones'];
  $estacionamiento = $_POST['parking'];
  $wc = $_POST['wc'];
  $vendedor = $_POST['vendedores_id'];


  if (!$titulo) {
    $errores['titulo'] = "You must add a title";
  }
  if (!$precio) {
    $errores['precio'] = "You must add a price";
  }
  if (strlen($descripcion) < 50) {
    $errores['descripcion'] = "You must add a description with at least 50 characters";
  }
  if (!$habitaciones) {
    $errores['habitaciones'] = "You must add the number of rooms";
  }
  if (!$estacionamiento) {
    $errores['parking'] = "You must add the number of parking paces ";
  }
  if (!$wc) {
    $errores['wc'] = "You must add the number of bathrooms ";
  }
  if (!$vendedor) {
    $errores['vendedores_id'] = "You must add a seller information";
  }

  // echo "<pre>";
  // var_dump($errores);
  // echo "</pre>";

  // Check for array errors are empty
  if (empty($errores)) {
    // insertar en la base de datos
    $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, parking, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$estacionamiento', '$wc', '$vendedor')";

    //  echo $query;
    $resultado = mysqli_query($db, $query);
    if ($resultado) {
      echo "Insertado correctamente";
    }
  }
}







require '../../includes/funciones.php';
includesTemplate('header');
?>

<main class="contenedor seccion">
  <h2>Create</h2>
  <a href="/admin" class="boton boton-verde">Back</a>

  <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
    <fieldset>
      <legend>General information</legend>

      <label for="titulo">title:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Title of the property" value="<?php echo $titulo; ?>">
      <?php if (isset($errores['titulo'])): ?>
        <p class="alerta error"><?php echo $errores['titulo']; ?></p>
      <?php endif; ?>

      <label for="precio">Price:</label>
      <input type="number" id="precio" name="precio" placeholder="Price of the property" value="<?php echo $precio; ?>">
      <?php if (isset($errores['precio'])): ?>
        <p class="alerta error"><?php echo $errores['precio']; ?></p>
      <?php endif; ?>

      <label for="imagen">Image:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Description:</label>
      <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
      <?php if (isset($errores['descripcion'])): ?>
        <p class="alerta error"><?php echo $errores['descripcion']; ?></p>
      <?php endif; ?>
    </fieldset>
    <fieldset>
      <legend>Property information</legend>

      <label for="habitaciones">Bedrooms:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Number of bedrooms" min="1" max="9" value="<?php echo $habitaciones; ?>">
      <?php if (isset($errores['habitaciones'])): ?>
        <p class="alerta error"><?php echo $errores['habitaciones']; ?></p>
      <?php endif; ?>

      <label for="wc">Bathrooms:</label>
      <input type="number" id="wc" name="wc" placeholder="Number of bathrooms" min="1" max="9" value="<?php echo $wc; ?>">
      <?php if (isset($errores['wc'])): ?>
        <p class="alerta error"><?php echo $errores['wc']; ?></p>
      <?php endif; ?>

      <label for="estacionamiento">Parking</label>
      <input type="number" id="parking" name="parking" placeholder="Number of parking places" min="1" max="9" value="<?php echo $parking; ?>">
      <?php if (isset($errores['parking'])): ?>
        <p class="alerta error"><?php echo $errores['parking']; ?></p>
      <?php endif; ?>
    </fieldset>

    <fieldset>
      <legend>Seller information</legend>
      <select name="vendedores_id">
        <option value="">--Choose a seller--</option>
        <?php while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
           <option value=""><?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>
          <?php endwhile; ?>
      </select>
      <?php if (isset($errores['vendedores_id'])): ?>
        <p class="alerta error"><?php echo $errores['vendedores_id']; ?></p>
      <?php endif; ?>
    </fieldset>
    <input type="submit" value="Add property" class="boton boton-verde">
  </form>
</main>
<!-- main -->
<?php
includesTemplate('footer');
?>