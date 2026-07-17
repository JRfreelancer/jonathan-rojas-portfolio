<?php

if (empty($ctaData['indicators'])) {
    return;
}
?>

<div class="cta-indicators">

    <?php foreach ($ctaData['indicators'] as $indicator) : ?>

        <?php include __DIR__ . '/cards/cta-indicator-card.php'; ?>

    <?php endforeach; ?>

</div>