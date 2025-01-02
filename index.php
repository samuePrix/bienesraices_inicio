<?php
declare (strict_types = 1);
require 'includes/funciones.php';

includesTemplate('header',$inicio = true);
?>

<main class="contenedor seccion">
  <h2>Más sobre nosotros</h2>
  <div class="iconos-nosotros">
    <div class="icono">
      <img
        src="build/img/icono1.svg"
        alt="seguridad y confianza"
        loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
        sint voluptas culpa illo consequatur ad sunt nemo dicta maiores rem
        similique accusamus repellat corporis hic voluptate, laudantium at
        cumque ipsa!
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="icono precio" loading="lazy" />
      <h3>precios</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
        sint voluptas culpa illo consequatur ad sunt nemo dicta maiores rem
        similique accusamus repellat corporis hic voluptate, laudantium at
        cumque ipsa!
      </p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="tiempo" loading="lazy" />
      <h3>A tiempo</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum
        sint voluptas culpa illo consequatur ad sunt nemo dicta maiores rem
        similique accusamus repellat corporis hic voluptate, laudantium at
        cumque ipsa!
      </p>
    </div>
  </div>
</main>
<!-- main -->

<section class="seccion contenedor">
  <h2>Casas y Departamentos en Venta</h2>
  <div class="contenedor-anuncios">
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="buil/img/anuncio1.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/anuncio1.jpg"
          alt="anuncio propiedad" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de lujo</h3>
        <p>
          Casa junto al lago con excelente vista, acabados de lujo a un
          excelente precio
        </p>
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

        <a class="boton-amarillo-block" href="anuncios.php">Ver propiedad</a>
      </div>
      <!-- contenido-anuncio -->
    </div>
    <!-- anuncio -->

    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="buil/img/anuncio2.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/anuncio2.jpg"
          alt="anuncio propiedad" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de lujo</h3>
        <p>
          Casa junto al lago con excelente vista, acabados de lujo a un
          excelente precio
        </p>
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

        <a class="boton-amarillo-block" href="anuncios.php">Ver propiedad</a>
      </div>
      <!-- contenido-anuncio -->
    </div>
    <!-- anuncio -->

    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="buil/img/anuncio3.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/anuncio3.jpg"
          alt="anuncio propiedad" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de lujo</h3>
        <p>
          Casa junto al lago con excelente vista, acabados de lujo a un
          excelente precio
        </p>
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

        <a class="boton-amarillo-block" href="anuncios.php">Ver propiedad</a>
      </div>
      <!-- contenido-anuncio -->
    </div>
    <!-- anuncio -->
  </div>
  <!-- contenedor anuncios GRID -->
  <div class="alinear-derecha">
    <a class="boton-verde" href="anuncios.php">Ver Todas</a>
  </div>
</section>
<!-- seccion -->

<section class="imagen-contacto">
  <h3 class="contacto-heading">Encuentra la Casa perfecta</h3>
  <p>
    Llena el formulario de contacto y un asesor se pondra en contacto
    contigo
  </p>
  <a class="boton-amarillo" href="contacto.php">Contáctanos</a>
</section>
<!-- imagen contacto -->

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro Blog</h3>

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
          <source srcset="build/img/blog2.webp" type="image/webp" />
          <source srcset="build/img/blog2.jpg" type="image/jpeg" />
          <img
            loading="lazy"
            src="build/img/blog2.jpg"
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
            maximiza el espacio en tu hogar con esta guia, aprende a
            combinar muebles y colores para darle vida a tu espacio.
          </p>
        </a>
      </div>
      <!-- texto entrada -->
    </article>
    <!-- entrada blog -->
  </section>
  <!-- blog -->

  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comportó de una excelente forma, muy buena atencion y
        la casa queme ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Anónimo.</p>
    </div>
  </section>
  <!-- testimoniales -->
</div>

<?php
includesTemplate('footer');
?>