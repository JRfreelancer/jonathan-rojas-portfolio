<?php

/* ==========================================================
   VARIABLES DEL SERVICIO
========================================================== */

$category    = $service['category'];
$title       = $service['title'];
$description = $service['description'];
$icon        = $service['icon'];
$features    = $service['features'];
$button      = $service['button'];
$url         = $service['url'];
$image = $service['image'];

?>

<article class="service-card">

    <div class="service-card-media">

        <img
            src="<?= htmlspecialchars($image); ?>"
            alt="<?= htmlspecialchars($title); ?>"
            loading="lazy">

    </div>


    <div class="service-card-body">

        <div class="service-icon-wrapper">

            <span class="service-card-icon" aria-hidden="true">

                <i class="<?= htmlspecialchars($icon); ?>"></i>

            </span>

        </div>

        <span class="service-card-category">

            <?= htmlspecialchars($category); ?>

        </span>

        <h3 class="service-card-title">

            <?= htmlspecialchars($title); ?>

        </h3>

        <p class="service-card-description">

            <?= htmlspecialchars($description); ?>

        </p>

        <ul class="service-card-features">

            <?php foreach ($features as $feature): ?>

                <li>

                    <i class="fa-solid fa-check"></i>

                    <?= htmlspecialchars($feature); ?>

                </li>

            <?php endforeach; ?>

        </ul>

        <a
            href="<?= htmlspecialchars($url); ?>"
            class="service-card-link"
            aria-label="Conocer más sobre <?= htmlspecialchars($title); ?>">

            <?= htmlspecialchars($button); ?>

            <i class="fa-solid fa-arrow-right"></i>

        </a>
    </div>
</article>