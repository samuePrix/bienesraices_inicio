<?php
require 'includes/funciones.php';
includesTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h2>Guia para la decoracion de tu hogar</h2>

  <picture>
    <source src="build/img/destacada2.webp" type="image/webp" />
    <source src="build/img/destacada2.jpg" type="image/jpeg" />
    <img
      loading="lazy"
      src="build/img/destacada2.jpg"
      alt="casa en venta frente al bosque" />
  </picture>

  <p class="info-meta">
    Escrito el: <span>03/12/24</span> por: <span>Admin</span>
  </p>

  <div class="resumen-propiedad">
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