<?php
/**
 * Componente de Tarjeta de Tecnología.
 * Renders una tarjeta estructurada con información de una tecnología específica.
 *
 * @var array{
 *   name: string,
 *   category: string,
 *   description: string,
 *   icon: string
 * } $technology
 */

// CORRECCIÓN DE SEGURIDAD: Asegura que las clases de los iconos no rompan las comillas del HTML
$iconClass = htmlspecialchars($technology['icon'], ENT_QUOTES, 'UTF-8');
$category  = htmlspecialchars($technology['category'], ENT_QUOTES, 'UTF-8');
$name      = htmlspecialchars($technology['name'], ENT_QUOTES, 'UTF-8');
$desc      = htmlspecialchars($technology['description'], ENT_QUOTES, 'UTF-8');
?>

<!-- ==========================================================================
     COMPONENTE: TARJETA DE TECNOLOGÍA
     ========================================================================== -->

     <article class="technology-card">
  
  <!-- Bloque Visual del Icono -->
  <div class="technology-card-icon">
    <span class="technology-card-glow"></span>
    <span class="technology-card__line" aria-hidden="true"></span>
    <div class="technology-icon-wrapper">
      <!-- ACCESIBILIDAD: Se añade role="img" ya que los lectores de pantalla necesitan el contexto semántico de un elemento decorativo oculto -->
      <i class="<?= $iconClass ?>" role="img" aria-hidden="true"></i>
    </div>
  </div>

  

  <!-- Bloque Informativo de Contenido -->
  <div class="technology-card-content">
    <span class="technology-card-category">
      <?= $category ?>
    </span>
    
    <h3 class="technology-card-title">
      <?= $name ?>
    </h3>
    
    <p class="technology-card-description">
      <?= $desc ?>
    </p>
  </div>

  <div class="technology-card-footer">

</div>

</article>
