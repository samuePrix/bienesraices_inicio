<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h2>Nuestro Blog</h2>
  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcset="build/img/blog1.webp" type="webp" />
        <source srcset="build/img/blog1.jpg" type="jpeg" />
        <img
          loading="lazy"
          src="build/img/blog1.jpg"
          alt="Texto entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>terraza en el techo de tu casa</h4>
        <p class="info-meta">
          Escrito el: <span>11/21/24</span> por: <span>Admin</span>
        </p>

        <p>
          consejos para construir una terraza, con los mejores materiales.
        </p>
      </a>
    </div>
    <!-- texto entrada -->
  </article>
  <!-- entrada blog -->

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcset="build/img/blog3.webp" type="webp" />
        <source srcset="build/img/blog3.jpg" type="jpeg" />
        <img
          loading="lazy"
          src="build/img/blog3.jpg"
          alt="Texto entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Guia para la decoracion de tu hogar</h4>
        <p class="info-meta">
          Escrito el: <span>11/21/24</span> por: <span>Admin</span>
        </p>

        <p>
          maximiza el espacio en tu hogar con esta guia, aprende a combinar
          muebles y colores para darle vida a tu espacio.
        </p>
      </a>
    </div>
    <!-- texto entrada -->
  </article>
  <!-- entrada blog -->

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcset="build/img/blog3.webp" type="webp" />
        <source srcset="build/img/blog3.jpg" type="jpeg" />
        <img
          loading="lazy"
          src="build/img/blog3.jpg"
          alt="Texto entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Guia para la decoracion de tu hogar</h4>
        <p class="info-meta">
          Escrito el: <span>11/21/24</span> por: <span>Admin</span>
        </p>

        <p>
          maximiza el espacio en tu hogar con esta guia, aprende a combinar
          muebles y colores para darle vida a tu espacio.
        </p>
      </a>
    </div>
    <!-- texto entrada -->
  </article>
  <!-- entrada blog -->

  <article class="entrada-blog">
    <div class="imagen">
      <picture>
        <source srcset="build/img/blog4.webp" type="webp" />
        <source srcset="build/img/blog4.jpg" type="jpeg" />
        <img
          loading="lazy"
          src="build/img/blog4.jpg"
          alt="Texto entrada blog" />
      </picture>
    </div>
    <div class="texto-entrada">
      <a href="entrada.php">
        <h4>Guia para la decoracion de tu hogar</h4>
        <p class="info-meta">
          Escrito el: <span>11/21/24</span> por: <span>Admin</span>
        </p>

        <p>
          maximiza el espacio en tu hogar con esta guia, aprende a combinar
          muebles y colores para darle vida a tu espacio.
        </p>
      </a>
    </div>
    <!-- texto entrada -->
  </article>
  <!-- entrada blog -->
</main>
<!-- main -->

<?php
incluirTemplate('footer');
?>