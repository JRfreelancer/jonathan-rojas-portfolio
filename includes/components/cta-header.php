<?php

/**
 * ==========================================================================
 * CTA HEADER COMPONENT
 * ==========================================================================
 */

if (empty($ctaData['header'])) {
    return;
}

$header = $ctaData['header'];
?>

<header class="cta-header">

<div class="cta-eyebrow">

    <span class="cta-eyebrow__label">
        Hablemos de tu proyecto
    </span>

</div>

    <h2
        id="cta-title"
        class="cta-title">
        <?= htmlspecialchars($header['title']) ?>
    </h2>

    <p class="cta-description">
        <?= htmlspecialchars($header['description']) ?>
    </p>

</header>