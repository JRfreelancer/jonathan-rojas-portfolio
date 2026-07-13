<?php

/* ==========================================================================
   DATOS DEL TESTIMONIO
   ========================================================================== */

$id        = $testimonial['id'];
$featured  = $testimonial['featured'];

$name      = $testimonial['name'];
$position  = $testimonial['position'];
$company   = $testimonial['company'];

$photo     = $testimonial['photo'];

$rating    = $testimonial['rating'];

$text      = $testimonial['text'];

?>

<article
    class="testimonial-card<?= $featured ? ' testimonial-card-featured' : ''; ?>"
    id="testimonial-<?= $id ?>">

    <!-- ===================== COMILLAS ===================== -->

    <div class="testimonial-quote">

        <i class="fa-solid fa-quote-left"></i>

    </div>

    <!-- ===================== ESTRELLAS ===================== -->

    <div
        class="testimonial-rating"
        aria-label="<?= $rating ?> de 5 estrellas">

        <?php for ($i = 0; $i < $rating; $i++): ?>

            <i class="fa-solid fa-star"></i>

        <?php endfor; ?>

    </div>

    <!-- ===================== TEXTO ===================== -->

    <blockquote class="testimonial-text">

        <?= htmlspecialchars($text) ?>

    </blockquote>

    <hr class="testimonial-divider">


    

    <!-- ===================== CLIENTE ===================== -->

    <footer class="testimonial-author">

        <div class="testimonial-avatar">

            <img
                src="<?= htmlspecialchars($photo) ?>"
                alt="<?= htmlspecialchars($name) ?>"
                loading="lazy">

        </div>

        <div class="testimonial-author-info">

            <h3 class="testimonial-author-name">

                <?= htmlspecialchars($name) ?>

            </h3>

            <p class="testimonial-author-position">

                <?= htmlspecialchars($position) ?>

            </p>

            <span class="testimonial-author-company">

                <?= htmlspecialchars($company) ?>

            </span>

        </div>

    </footer>

</article>