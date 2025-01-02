<?php
require 'includes/funciones.php';
includesTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h2>Casa en venta frente al bosque</h2>

  <picture>
    <source src="build/img/destacada.webp" type="image/webp" />
    <source src="build/img/destacada.jpg" type="image/jpeg" />
    <img
      loading="lazy"
      src="build/img/destacada.jpg"
      alt="casa en venta frente al bosque" />
  </picture>

  <div class="resumen-propiedad">
    <p class="precio">$3,000,000</p>

    <ul class="iconos-caracteristicas">
      <li>
        <img
          class="iconos"
          loading="lazy"
          src="build/img/icono_wc.svg"
          alt="icono wc" />
        <p>3</p>
      </li>
      <li>
        <img
          class="iconos"
          loading="lazy"
          src="build/img/icono_estacionamiento.svg"
          alt="icono estacionamiento" />
        <p>3</p>
      </li>
      <li>
        <img
          class="iconos"
          loading="lazy"
          src="build/img/icono_dormitorio.svg"
          alt="icono dormitorio" />
        <p>4</p>
      </li>
    </ul>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat
      molestias porro quas, vero perspiciatis asperiores? Provident neque
      quae mollitia non pariatur natus quos debitis a minima exercitationem
      culpa eius esse beatae minus atque facere ullam in aut itaque, amet
      consectetur nisi. Voluptatem amet soluta magni. Illum minima, officiis
      ab ipsa unde quos aliquid aperiam recusandae exercitationem veritatis
      numquam nostrum sed reiciendis, nihil, accusamus nemo. Debitis fugit
      ex esse, deleniti fuga, dolorum consequuntur hic iure pariatur quis
      dolores qui minus expedita, quisquam quibusdam. Perferendis earum
      incidunt voluptatem illum esse tempora nobis odio doloremque
      exercitationem quibusdam sunt sequi aut totam, corporis iure?
    </p>
  </div>
</main>
<!-- main -->

<?php
includesTemplate('footer');
?>