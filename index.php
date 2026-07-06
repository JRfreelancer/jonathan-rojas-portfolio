<?php

$titulo = "Jonathan Rojas | Diseñador Web, UI/UX y SEO";

$descripcion = "Portafolio profesional de Jonathan Rojas. Desarrollo web, diseño UI/UX, SEO y diseño gráfico.";

$autor = "Jonathan Rojas";

include 'includes/head.php';

?>

<body>

<?php include 'includes/navbar.php'; ?>

<?php include 'includes/mobile-menu.php'; ?>

<div class="overlay" id="overlay"></div>

<main>

    <!-- =========================================================
         HERO
    ========================================================== -->

    <section class="hero" id="inicio">

        <div class="hero-container">

            <!-- ===================== CONTENIDO ===================== -->

            <div class="hero-content">

                <span class="hero-tag">
                    Diseñador Web · UI/UX · SEO
                </span>

                <h1 class="hero-title">
                    Transformo ideas en experiencias digitales que generan resultados.
                </h1>

                <p class="hero-description">
                    Soy Jonathan Rojas. Diseño y desarrollo sitios web modernos,
                    rápidos, optimizados para SEO y enfocados en ofrecer una
                    experiencia de usuario excepcional.
                </p>

                <div class="hero-actions">

                    <a href="proyectos.php" class="btn-primary">
                        Ver proyectos
                    </a>

                    <a href="contacto.php" class="btn-secondary">
                        Hablemos
                    </a>

                </div>

            </div>

            <!-- ===================== IMAGEN ===================== -->

            <div class="hero-image">

                <img
                    src="assets/img/hero/perfil.webp"
                    alt="Jonathan Rojas"
                    width="520"
                    height="620"
                    loading="eager">

            </div>

        </div>

    </section>

</main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>

</body>

</html>