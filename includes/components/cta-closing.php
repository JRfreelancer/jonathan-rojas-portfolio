<?php
/**
 * ==========================================================================
 * CTA CLOSING
 * Mensaje final de la sección CTA
 * ==========================================================================
 */

if (empty($ctaData['closing']['message'])) {
    return;
}
?>

<div class="cta-closing">

    <p class="cta-closing__message">
        <?= htmlspecialchars($ctaData['closing']['message']) ?>
    </p>

</div>