<?php

$badge ??= '';
$title ??= '';
$description ??= '';

?>

<header class="section-header">

    <?php if ($badge): ?>
        <span class="section-badge">
            <?= htmlspecialchars($badge) ?>
        </span>
    <?php endif; ?>

    <?php if ($title): ?>
        <h2 class="section-title">
            <?= htmlspecialchars($title) ?>
        </h2>
    <?php endif; ?>

    <?php if ($description): ?>
        <p class="section-description">
            <?= htmlspecialchars($description) ?>
        </p>
    <?php endif; ?>

</header>