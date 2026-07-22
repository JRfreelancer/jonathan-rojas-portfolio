<?php

/** 
 * ========================================================================== 
 * COMPONENTE: TECHNOLOGY CHIP 
 * ========================================================================== 
 * Este componente renderiza una ficha compacta e individual para una tecnología,
 * mostrando su icono, nombre y una breve descripción.
 */

// SANITIZACIÓN: Previene ataques XSS al escapar de forma segura los atributos y textos
$icon = htmlspecialchars($technology['icon'], ENT_QUOTES, 'UTF-8');
$name = htmlspecialchars($technology['name'], ENT_QUOTES, 'UTF-8');
$desc = htmlspecialchars($technology['description'], ENT_QUOTES, 'UTF-8');
?>

<!-- Contenedor modular de la ficha tecnológica -->
<div class="technology-chip">

  <!-- Área visual destinada al icono representativo -->
  <div class="technology-chip__icon">
    <!-- ACCESIBILIDAD: Se añade role="img" para definir semánticamente el elemento decorativo oculto -->
    <i class="<?= $icon ?>" role="img" aria-hidden="true"></i>
  </div>

  <!-- Bloque informativo con los textos de la tecnología -->
  <div class="technology-chip__content">
    <p class="technology-chip__title">
      <?= $name ?>
    </p>

    <p class="technology-chip__description">
      <?= $desc ?>
    </p>
  </div>

</div>