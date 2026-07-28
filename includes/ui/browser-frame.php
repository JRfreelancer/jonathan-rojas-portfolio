<?php
/**
 * ==========================================================================
 * COMPONENTE: BROWSER FRAME
 * ==========================================================================
 * Renderiza un marco de navegador reutilizable para mostrar capturas
 * de proyectos.
 */

$image = $image ?? '';
$alt   = $alt ?? '';
?>

<div class="browser-frame">

    <header class="browser-frame__header">

        <div class="browser-frame__controls">

            <span></span>
            <span></span>
            <span></span>

        </div>

        <div class="browser-frame__address"></div>

    </header>

    <div class="browser-frame__content">

        <img
            src="<?= htmlspecialchars($image) ?>"
            alt="<?= htmlspecialchars($alt) ?>"
            loading="lazy">

    </div>

</div>