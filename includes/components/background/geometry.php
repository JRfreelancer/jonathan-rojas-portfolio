<?php
/** @var array $heroHexagons */
?>

<div class="hero-geometry">

    <?php foreach ($heroHexagons as $hex): ?>

        <svg
            class="hero-hex <?= htmlspecialchars($hex['variant']); ?> <?= htmlspecialchars($hex['position']); ?>"
            style="
                --duration: <?= htmlspecialchars($hex['duration']); ?>;
                --delay: <?= htmlspecialchars($hex['delay']); ?>;
            "
            viewBox="0 0 100 100"
            aria-hidden="true">

            <?php include __DIR__ . '/hexagon.php'; ?>

        </svg>

    <?php endforeach; ?>

</div>