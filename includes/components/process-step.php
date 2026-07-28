<?php

$step = $step ?? [];

?>

<article class="process-step">

    <span class="process-step__number">

        <?= htmlspecialchars($step['number']) ?>

    </span>

    <h3 class="process-step__title">

        <?= htmlspecialchars($step['title']) ?>

    </h3>

    <p class="process-step__description">

        <?= htmlspecialchars($step['description']) ?>

    </p>

</article>