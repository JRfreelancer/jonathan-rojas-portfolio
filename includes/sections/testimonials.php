<?php

require_once __DIR__ . '/../data/testimonials-data.php';

/* ==========================================================
   CONTENIDO DEL ENCABEZADO
========================================================== */

$badge = 'Testimonios';

$title = 'La confianza de mis clientes es mi mayor respaldo';

$description = 'Cada proyecto representa un compromiso con la calidad, la comunicación y los resultados. Estas son algunas experiencias de quienes han trabajado conmigo.';

?>

<section class="testimonials" id="testimonials">

    <div class="container">

        <!-- ===================== SECTION HEADER ===================== -->

        <?php include __DIR__ . '/../components/section-header.php'; ?>

        <!-- ===================== TESTIMONIOS ===================== -->

        <div class="testimonials-slider">

            <?php foreach ($testimonials as $testimonial): ?>

                <?php include __DIR__ . '/../components/cards/testimonial-card.php'; ?>

            <?php endforeach; ?>

        </div>

        <!-- ===================== INDICADORES ===================== -->

        <div class="testimonials-pagination">

            <!-- Se generarán desde JavaScript -->

        </div>

    </div>

</section>