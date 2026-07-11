<?php

require_once __DIR__ . '/../data/technologies-data.php';


/* ==========================================================
   AGRUPAR TECNOLOGÍAS POR CATEGORÍA
========================================================== */

$categories = [];

foreach ($technologies as $technology) {
    $categories[$technology['category']][] = $technology;
}

?>

<section class="technologies" id="technologies">

    <div class="container">

        <div class="technologies-wrapper">

            <!-- HEADER -->
            <?php include __DIR__ . '/../components/section-header.php'; ?>

            <!-- CATEGORÍAS -->
            <div class="technologies-categories">

                <?php foreach ($categories as $category => $items): ?>

                    <div class="technology-group">

                        <h3 class="technology-group-title">
                            <?= htmlspecialchars($category) ?>
                        </h3>

                        <div class="technologies-grid">

                            <?php foreach ($items as $technology): ?>
                                <?php include __DIR__ . '/../components/cards/technology-card.php'; ?>
                            <?php endforeach; ?>

                        </div>

                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>

</section>