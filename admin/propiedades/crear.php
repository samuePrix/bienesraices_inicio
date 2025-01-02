<?php
// dataabase connection
require '../../includes/config/database.php';
$db = connectDB();

if($_SERVER['REQUEST_METHOD']=== 'POST'){
  

  $titulo = $_POST['titulo'];
  $precio = $_POST['precio'];
  $descripcion = $_POST['descripcion'];
  $habitaciones = $_POST['habitaciones'];
  $estacionamiento = $_POST['parking'];
  $wc = $_POST['wc'];
  $vendedor = $_POST['vendedores_id'];

  // insertar en la base de datos
  $query = "INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, parking, vendedores_id) VALUES ('$titulo', '$precio', '$descripcion', '$habitaciones', '$estacionamiento', '$wc', '$vendedor')";

    //  echo $query;
    $resultado = mysqli_query($db, $query);
    if($resultado){
      echo "Insertado correctamente"; 
    }
}



require '../../includes/funciones.php';
includesTemplate('header');
?>

<main>
  <h2>Create</h2>
  <a href="/admin" class="boton boton-verde">Back</a>

  <form class="formulario" method="POST" action="/admin/propiedades/crear.php">
    <fieldset>
      <legend>General information</legend>

      <label for="titulo">Title:</label>
      <input type="titulo" id="titulo" name="titulo" placeholder="Title of the property">

      <label for="precio">Price:</label>
      <input type="number" id="precio" name="precio" placeholder="Price of the property">

      <label for="imagen">Image:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Description:</label>
      <textarea id="descripcion" name="descripcion"></textarea>
    </fieldset>
    <fieldset>
      <legend>Property Information</legend>
      <label for="habitaciones">Rooms:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Number of rooms" min="1" max="9">

      <label for="wc">Bathrooms:</label>
      <input type="number" id="wc" name="wc" placeholder="Number of bathrooms" min="1" max="9">

      <label for="estacionamiento">Parking</label>
      <input type="number" id="parking" name="parking" placeholder="Number of parking spaces" min="1" max="9">
    </fieldset>

    <fieldset>
      <legend>Seller Information</legend>
      <select name="vendedores_id">
        <option value="1">Juan</option>
        <option value="2">Karen</option>
      </select>
    </fieldset>
    <input type="submit" value="Create Property" class="boton boton-verde">
  </form>
</main>
<!-- main -->
<?php
includesTemplate('footer');
?>