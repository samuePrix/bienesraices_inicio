<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h2>Conoce sobre nosotros</h2>
  <div class="contenedor-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="buil  /img/nosotros.webp" type="image/webp" />
        <source srcset="build/img/nosotros.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/nosotros.jpg"
          alt="sala decorada testigo de nuestros años de experiencia" />
      </picture>
    </div>
    <!-- imagen -->
    <div class="texto-nosotros">
      <blockquote>25 años de experiencia</blockquote>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
        placeat velit rem quasi suscipit repudiandae eveniet nulla earum,
        dignissimos consectetur magnam ab voluptatem tempora quaerat fuga,
        quibusdam id omnis, soluta ipsum beatae quia. Vel perferendis
        dolorum, cumque sint iure culpa quisquam! Nulla saepe esse
        dignissimos illo animi a.
      </p>
    </div>
    <!-- texto-nosotros -->
  </div>
  <!-- contenedor nosotros -->

  <section class="contenedor seccion">
    <h2>Más sobre nosotros</h2>
    <div class="iconos-nosotros">
      <div class="icono">
        <img
          src="build/img/icono1.svg"
          alt="seguridad y confianza"
          loading="lazy" />
        <h3>Seguridad</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatum sint voluptas culpa illo consequatur ad sunt nemo dicta
          maiores rem similique accusamus repellat corporis hic voluptate,
          laudantium at cumque ipsa!
        </p>
      </div>
      <div class="icono">
        <img src="build/img/icono2.svg" alt="icono precio" loading="lazy" />
        <h3>precios</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatum sint voluptas culpa illo consequatur ad sunt nemo dicta
          maiores rem similique accusamus repellat corporis hic voluptate,
          laudantium at cumque ipsa!
        </p>
      </div>
      <div class="icono">
        <img src="build/img/icono3.svg" alt="tiempo" loading="lazy" />
        <h3>A tiempo</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatum sint voluptas culpa illo consequatur ad sunt nemo dicta
          maiores rem similique accusamus repellat corporis hic voluptate,
          laudantium at cumque ipsa!
        </p>
      </div>
    </div>
  </section>
  <!-- main -->
</main>
<!-- main -->

<?php
incluirTemplate('footer');
?>