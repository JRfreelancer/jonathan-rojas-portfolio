<?php

$glows = [
    ['glow glow-primary'],
    ['glow glow-secondary'],
    ['glow glow-accent']
];

foreach ($glows as $glow) {
    echo '<span class="' . $glow[0] . '"></span>';
}
?>

<div class="hero-glows">

    <?php foreach ($heroGlows as $glow): ?>

        <span
            class="<?= htmlspecialchars($glow['class']); ?>"
            style="--delay: <?= htmlspecialchars($glow['delay']); ?>;">
        </span>

    <?php endforeach; ?>

</div>