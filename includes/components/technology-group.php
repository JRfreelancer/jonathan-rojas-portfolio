<?php
/**
 * ==========================================================================
 * COMPONENTE: TECHNOLOGY GROUP
 * ==========================================================================
 *
 * Variables esperadas:
 *
 * @var array{
 *     number: string,
 *     title: string,
 *     description: string
 * } $categoryInfo
 *
 * @var array<int, array> $items
 */

$number = htmlspecialchars($categoryInfo['number'], ENT_QUOTES, 'UTF-8');
$title = htmlspecialchars($categoryInfo['title'], ENT_QUOTES, 'UTF-8');
$description = htmlspecialchars($categoryInfo['description'], ENT_QUOTES, 'UTF-8');
?>

<article class="technology-group">

    <!-- Línea decorativa -->
    <span class="technology-group__line" aria-hidden="true"></span>

    <!-- Cabecera -->
    <header class="technology-group__header">

        <span class="technology-group__number">
            <?= $number ?>
        </span>

        <div class="technology-group__heading">

            <h3 class="technology-group__title">
                <?= $title ?>
            </h3>

            <p class="technology-group__description">
                <?= $description ?>
            </p>

        </div>

    </header>

    <!-- Tecnologías -->
    <div class="technology-group__chips">

        <?php foreach ($items as $technology): ?>

            <?php include __DIR__ . '/technology-chip.php'; ?>

        <?php endforeach; ?>

    </div>

</article>