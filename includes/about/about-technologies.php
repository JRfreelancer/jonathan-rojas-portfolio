<?php

require_once __DIR__ . '/../data/technologies-data.php';

/*
|--------------------------------------------------------------------------
| Agrupar tecnologías por categoría
|--------------------------------------------------------------------------
*/

$groupedTechnologies = [];

foreach ($technologies as $technology) {
    $groupedTechnologies[$technology['category']][] = $technology;
}

?>

<section
    class="about-technologies"
    id="stack">

    <div class="container about-technologies__container">

        <!-- ==========================================================
             ENCABEZADO
        =========================================================== -->

    <div class="container about-technologies__container">

        <?php
            $sectionBadge = $badge;
            $sectionTitle = $title;
            $sectionDescription = $description;

            include __DIR__ . '/../components/section-header.php';
        ?>

        <!-- ==========================================================
             GRID DE CATEGORÍAS
        =========================================================== -->

        <div class="about-technologies__grid">

            <?php foreach ($technologyCategories as $category => $categoryInfo): ?>

                <?php
                $items = $groupedTechnologies[$category] ?? [];
                include __DIR__ . '/../components/technology-group.php';
                ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>