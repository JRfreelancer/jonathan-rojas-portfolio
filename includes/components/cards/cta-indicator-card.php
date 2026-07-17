<?php
/**
 * ==========================================================================
 * CTA INDICATOR CARD
 * ==========================================================================
 */
?>

<article class="cta-indicator">

    <div class="cta-indicator__icon">

        <i
            class="<?= htmlspecialchars($indicator['icon']) ?>"
            aria-hidden="true">
        </i>

    </div>

    <h3 class="cta-indicator__title">

        <?= htmlspecialchars($indicator['title']) ?>

    </h3>

    <p class="cta-indicator__description">

        <?= htmlspecialchars($indicator['description']) ?>

    </p>

</article>