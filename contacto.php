<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Contacto</h1>

  <picture>
    <source srcset="build/img/destacada3.webp" type="image/webp" />
    <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
    <img
      loading="lazy"
      src="src/img/destacada3.jpg"
      alt="imagen destacada" />
  </picture>

  <h3>Llene el formulario de contacto</h3>
  <form action="" class="formulario">
    <fieldset>
      <legend>Información personal</legend>

      <label for="nombre">Nombre</label>
      <input type="text" placeholder="Tu nombre" id="nombre" required />

      <label for="email">E-mail</label>
      <input type="email" placeholder="E-mail" id="email" required />

      <label for="phone">Teléfono</label>
      <input type="tel" placeholder="Tu teléfono" id="phone" required />

      <label for="mensaje">Mensaje :</label>
      <textarea name="" id="mensaje"></textarea>
    </fieldset>

    <fieldset>
      <legend>Información sobre la propiedad</legend>

      <label for="opciones">Vende o compra:</label>
      <select name="" id="opciones">
        <option value="" disabled selected>-- Seleccione --</option>
        <option value="compra">Compra</option>
        <option value="vende">Vende</option>
      </select>

      <label for="presupuesto">Precio o presupuesto</label>
      <input
        type="number"
        placeholder="Precio o presupuesto"
        id="presupuesto" />
    </fieldset>

    <fieldset>
      <legend>Contacto</legend>

      <p>Cómo desea ser contactado</p>

      <div class="forma-contacto">
        <label for="contactar-telefono">Telefono</label>
        <input
          name="contacto"
          type="radio"
          value="telefono"
          id="contactar-telefono" />

        <label for="contactar-email">E-mail</label>
        <input
          name="contacto"
          type="radio"
          value="email"
          id="contactar-email" />
      </div>

      <p>
        Si eligio telefono, elija la fecha y la hora para ser contactado
      </p>

      <label for="fecha">Fecha</label>
      <input type="date" id="fecha" required />

      <label for="hora">Hora</label>
      <input type="time" id="hora" min="09:00" max="18:00" required />
    </fieldset>

    <input type="submit" name="" id="" value="Enviar" class="boton-verde" />
  </form>
</main>
<!-- main -->

<?php
incluirTemplate('footer');
?>