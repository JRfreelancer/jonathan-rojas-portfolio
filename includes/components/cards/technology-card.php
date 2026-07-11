<?php

/**
 * Datos de una tecnología.
 *
 * @var array{
 *     name:string,
 *     category:string,
 *     description:string,
 *     icon:string
 * } $technology
 */

?>


<article class="technology-card">

<div class="technology-card-icon">

    <div class="technology-icon-wrapper">

        <i
            class="<?= htmlspecialchars($technology['icon']) ?>"
            aria-hidden="true">
        </i>

    </div>

</div>

    <div class="technology-card-content">

        <span class="technology-card-category">
            <?= htmlspecialchars($technology['category']) ?>
        </span>

        <h3 class="technology-card-title">
            <?= htmlspecialchars($technology['name']) ?>
        </h3>

        <p class="technology-card-description">
            <?= htmlspecialchars($technology['description']) ?>
        </p>

    </div>

</article>