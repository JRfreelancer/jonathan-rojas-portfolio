<!-- ==========================================================
    HERO
=========================================================== -->
<?php

require_once __DIR__ . '/../data/hero-background-data.php';
require_once __DIR__ . '/../data/showcase-data.php';

?>

<section class="hero" id="inicio">

<?php include __DIR__ . '/../components/background/background.php'; ?>

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