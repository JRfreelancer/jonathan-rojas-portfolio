<?php

$titulo = "Jonathan Rojas | Diseñador Web, UI/UX y SEO";
$descripcion = "Portafolio profesional de Jonathan Rojas. Desarrollo web, diseño UI/UX, SEO y diseño gráfico.";
$autor = "Jonathan Rojas";

require_once 'includes/head.php';

?>

<body>

    <?php require_once 'includes/navbar.php'; ?>

    <?php require_once 'includes/mobile-menu.php'; ?>

    <div class="overlay" id="overlay"></div>

    <main>

        <?php require_once 'includes/sections/hero.php'; ?>

        <?php require_once 'includes/sections/technologies.php'; ?>

        <?php require_once 'includes/sections/services.php'; ?>
        <?php require_once 'includes/sections/testimonials.php'; ?>
        <?php require_once 'includes/sections/cta.php'; ?>




    </main>

    <?php require_once 'includes/footer.php'; ?>

    <?php require_once 'includes/scripts.php'; ?>

</body>

</html>