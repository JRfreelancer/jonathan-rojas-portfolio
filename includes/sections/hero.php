<?php

/* ==========================================================
   HERO SHOWCASE CARDS
========================================================== */

$showcaseCards = [

    [
        'image' => 'assets/img/hero/imagen_slider_04.webp',
        'title' => 'Jonathan Rojas',
        'tag' => 'Freelancer',
        'description' => 'Diseño experiencias digitales modernas, rápidas y enfocadas en resultados.',
        'button' => 'Conóceme',
        'url' => 'acerca.php',
    ],

    [
        'image' => 'assets/img/hero/imagen_slider_01.webp',
        'title' => 'Diseño Web',
        'tag' => 'Landing Pages',
        'description' => 'Sitios web profesionales, rápidos y optimizados para convertir visitantes en clientes.',
        'button' => 'Ver servicio',
        'url' => 'diseno-web.php',
    ],

    [
        'image' => 'assets/img/hero/imagen_slider_02.webp',
        'title' => 'Diseño Gráfico',
        'tag' => 'Branding',
        'description' => 'Identidad visual moderna para empresas, marcas y emprendimientos.',
        'button' => 'Ver trabajos',
        'url' => 'diseno-grafico.php',
    ],

    [
        'image' => 'assets/img/hero/imagen_slider_03.webp',
        'title' => 'SEO',
        'tag' => 'Posicionamiento',
        'description' => 'Optimización para buscadores y mayor visibilidad en Google.',
        'button' => 'Más información',
        'url' => 'seo.php',
    ],

    [
        'image' => 'assets/img/hero/laptop.jpg',
        'title' => 'Proyectos',
        'tag' => 'Portfolio',
        'description' => 'Conoce algunos de los proyectos desarrollados para clientes reales.',
        'button' => 'Ver proyectos',
        'url' => 'proyectos.php',
    ]

];

?>

<!-- ==========================================================
    HERO
=========================================================== -->
<section class="hero" id="inicio">

    <div class="hero-wrapper">
        <!-- ==========================================
             COLUMNA IZQUIERDA
        =========================================== -->
        <div class="hero-content">

            <span class="hero-badge">
                <i class="fa-solid fa-circle"></i>
                Disponible para proyectos freelance
            </span>

            <p class="hero-intro">
                Hola, soy
            </p>

            <h1 class="hero-title">
                <span class="hero-name">
                    Jonathan
                </span>
                <span class="hero-lastname">
                    Rojas
                </span>
            </h1>

            <ul class="hero-specialties">
                <li>Diseño Web</li>
                <li>UI / UX</li>
                <li>SEO</li>
                <li>Diseño Gráfico</li>
            </ul>

            <p class="hero-description">
                Diseño y desarrollo experiencias digitales modernas,
                rápidas y optimizadas para ayudar a empresas y emprendedores
                a destacar en internet.
            </p>

            <div class="hero-actions">
                <a href="proyectos.php" class="btn btn-primary">
                    Ver proyectos
                </a>

                <a href="contacto.php" class="btn btn-outline">
                    Contactarme
                </a>
            </div>

            <ul class="hero-features">
                <li>
                    <i class="fa-solid fa-check"></i>
                    Responsive
                </li>

                <li>
                    <i class="fa-solid fa-check"></i>
                    SEO
                </li>

                <li>
                    <i class="fa-solid fa-check"></i>
                    Alto rendimiento
                </li>
            </ul>

        </div>

        <!-- ==========================================
             COLUMNA DERECHA
        =========================================== -->

<aside class="hero-showcase">

<div class="showcase-slider">

    <?php foreach ($showcaseCards as $index => $card): ?>

        <?php include __DIR__ . '/../components/cards/showcase-card.php'; ?>

    <?php endforeach; ?>

</div>

</aside>

    </div>

</section>