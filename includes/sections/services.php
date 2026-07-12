<?php

require_once __DIR__ . '/../data/services-data.php';

/* ==========================================================
   CONTENIDO DEL ENCABEZADO
========================================================== */

$badge = 'Servicios';

$title = 'Soluciones digitales para hacer crecer tu negocio';

$description = 'Ayudo a empresas y emprendedores a crear experiencias digitales modernas, optimizadas y orientadas a resultados.';

/* ==========================================================
   SECTION HEADER
========================================================== */

?>

<section class="services" id="services">

    <div class="container">

        <?php include __DIR__ . '/../components/section-header.php'; ?>

        <div class="services-grid">

            <?php foreach ($services as $service): ?>

                <?php include __DIR__ . '/../components/cards/service-card.php'; ?>

            <?php endforeach; ?>

        </div>

        <div class="services-cta">

        <p class="services-cta-text">

            ¿Tienes un proyecto en mente?

        </p>

        <h3 class="services-cta-title">

            Convirtamos tu idea en una experiencia digital profesional.

        </h3>

        <a href="contacto.php" class="btn btn-primary">

            Hablemos de tu proyecto

        </a>

    </div>

</section>