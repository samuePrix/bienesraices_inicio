<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/build/css/app.css" />
    <title>Bienes Raices</title>
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : '' ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img class="logo-header" src="/src/img/logo.svg" alt="Logotipo company" />
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu hamburguesa" />
                </div>

                <nav class="navegacion">
                    <a href="/nosotros.php">Nosotros</a>
                    <a href="/anuncios.php">Anuncios</a>
                    <a href="/blog.php">Blog</a>
                    <a href="/contacto.php">Contacto</a>
                    <div class="derecha">
                        <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="dark mode button" />
                    </div>
                </nav>
            </div>
            <!-- barra -->
        </div>
        <!-- contenido-header -->
    </header>
    <!-- header -->