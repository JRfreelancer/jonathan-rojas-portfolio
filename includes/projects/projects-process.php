<?php

require_once __DIR__ . '/../data/projects-process-data.php';

/*
|--------------------------------------------------------------------------
| Configuración del encabezado reutilizable
|--------------------------------------------------------------------------
*/

$badge = $processBadge;

$title = $processTitle;

$description = $processDescription;

?>

<section
    class="projects-process"
    id="projects-process"
    aria-labelledby="projects-process-title">

    <div class="container">

        <?php

        require __DIR__ . '/../components/section-header.php';

        ?>

        <div class="projects-process__grid">

            <?php foreach ($processSteps as $step): ?>

                <?php

                require __DIR__ . '/../components/process-step.php';

                ?>

            <?php endforeach; ?>

        </div>

    </div>

</section>