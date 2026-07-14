<?php
// =========================================================================
// ASIGNACIÓN Y EXTRACCIÓN DE VARIABLES DEL TESTIMONIO
// =========================================================================

$id       = $testimonial['id'];
$featured = $testimonial['featured'];
$name     = $testimonial['name'];
$position = $testimonial['position'];
$company  = $testimonial['company'];
$photo    = $testimonial['photo'];
$rating   = $testimonial['rating'];
$text     = $testimonial['text'];
$service  = $testimonial['service'];
?>

<!-- =========================================================================
     TARJETA DE TESTIMONIO INDIVIDUAL (Componente Semántico Article)
     ========================================================================= -->
<article class="testimonial-card <?= $featured ? 'testimonial-card-featured' : ''; ?>" id="testimonial-<?= htmlspecialchars($id) ?>" data-featured="<?= $featured ? 'true' : 'false'; ?>" data-testimonial-id="<?= $id ?>">




    <!-- ===================== DETALLES DECORATIVOS (Comillas) ===================== -->
    <div class="testimonial-quote">
        <i class="fa-solid fa-quote-left" aria-hidden="true"></i>
    </div>

    <!-- ===================== CALIFICACIÓN POR ESTRELLAS ===================== -->
    <div
        class="testimonial-rating"
        role="img"
        aria-label="5 de 5 estrellas">
        <?php for ($i = 0; $i < (int)$rating; $i++): ?>
            <!-- Las estrellas individuales se ocultan del lector de pantalla para evitar redundancia con el aria-label superior -->
            <i class="fa-solid fa-star" aria-hidden="true"></i>
        <?php endfor; ?>
    </div>



    <!-- ===================== CUERPO DEL TESTIMONIO (Cita Textual) ===================== -->
    <blockquote class="testimonial-text">
        <p><?= htmlspecialchars($text, ENT_QUOTES, 'UTF-8') ?></p>
    </blockquote>

    <hr class="testimonial-divider" aria-hidden="true">

    <!-- ===================== CREDENCIALES DEL AUTOR / CLIENTE ===================== -->
    <footer class="testimonial-author">

        <!-- Fotografía del Cliente / Avatar -->
        <div class="testimonial-avatar">
            <img src="<?= htmlspecialchars($photo, ENT_QUOTES, 'UTF-8') ?>"
                alt="Fotografía de <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>"
                loading="lazy" decoding="async" width="80"
                height="80">
        </div>

        <!-- Información Profesional -->
        <div class="testimonial-author-info">
            <h3 class="testimonial-author-name">
                <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>
            </h3>
            <p class="testimonial-author-position">
                <?= htmlspecialchars($position, ENT_QUOTES, 'UTF-8') ?>
            </p>
            <span class="testimonial-author-company">
                <?= htmlspecialchars($company, ENT_QUOTES, 'UTF-8') ?>
            </span>
        </div>

    </footer>
    <hr class="testimonial-divider" aria-hidden="true">
    <!-- ===================== SERVICIO ===================== -->

    <span class="testimonial-service"> 
        <i class="fa-solid fa-check"></i>
        <?= htmlspecialchars($service) ?>
    </span>
</article>