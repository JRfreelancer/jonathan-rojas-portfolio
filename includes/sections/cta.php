<?php
/**
 * ==========================================================================
 * CTA SECTION
 * ==========================================================================
 */

if (!isset($ctaData)) {
    require_once __DIR__ . '/../data/cta-data.php';
}
?>

<section
    id="cta"
    class="cta"
    aria-labelledby="cta-title"
>

    <div class="container">

        <?php include __DIR__ . '/../components/cta-divider.php'; ?>

        <?php include __DIR__ . '/../components/cta-header.php'; ?>

        <?php include __DIR__ . '/../components/cta-card.php'; ?>

        <?php include __DIR__ . '/../components/cta-indicators.php'; ?>

        <?php if (!empty($ctaData['closing']['message'])) : ?>

            <div class="cta-closing">

                <p class="cta-closing__message">
                    <?= htmlspecialchars($ctaData['closing']['message']) ?>
                </p>

            </div>

        <?php endif; ?>

    </div>

</section>