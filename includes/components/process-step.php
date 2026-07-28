<?php 
/** 
 * ========================================================================== 
 * COMPONENTE: PROCESS STEP (FICHA CRONOLÓGICA)
 * ========================================================================== 
 * Renderiza de forma iterativa cada paso de la línea de tiempo metodológica.
 * Consume de manera nativa la variable local $step inyectada por el bucle padre.
 *
 * @var array{
 *   number: string,
 *   title: string,
 *   description: string
 * } $step
 */ 

// DEFENSIVA: Asegura que la variable exista y previene colapsos si llega vacía
$step = $step ?? []; 

// SANITIZACIÓN Y BLINDAJE: Extrae los textos y previene inyecciones XSS o advertencias por claves faltantes
$stepNumber = htmlspecialchars($step['number'] ?? '', ENT_QUOTES, 'UTF-8');
$stepTitle  = htmlspecialchars($step['title'] ?? '', ENT_QUOTES, 'UTF-8');
$stepDesc   = htmlspecialchars($step['description'] ?? '', ENT_QUOTES, 'UTF-8');
?> 

<!-- Bloque Modular de cada Fase o Paso de Trabajo -->
<article class="process-step"> 
  
  <!-- Identificador Gráfico / Número de la Etapa -->
  <span class="process-step__number"> 
    <?= $stepNumber ?> 
  </span> 
  
  <!-- Círculo indicador / Nodo visual luminoso controlado por CSS -->
  <div class="process-step__dot" aria-hidden="true"></div> 

  <div class="process-step__connector" aria-hidden="true"></div>
  
  <!-- Bloque Informativo del Paso -->
  <h3 class="process-step__title"> 
    <?= $stepTitle ?> 
  </h3> 
  
  <p class="process-step__description"> 
    <?= $stepDesc ?> 
  </p> 

  <?php
/* --------------------------------------------------------------------------
 | ÍCONO DECORATIVO DE LA ETAPA
 * -------------------------------------------------------------------------- */

$icons = [
    '01' => 'fa-solid fa-compass',
    '02' => 'fa-solid fa-crosshairs',
    '03' => 'fa-solid fa-pen-ruler',
    '04' => 'fa-solid fa-laptop-code',
    '05' => 'fa-solid fa-gauge-high'
];

$icon = $icons[$stepNumber] ?? 'fa-solid fa-circle';
?>

<div class="process-step__icon" aria-hidden="true">
    <i class="<?= $icon ?>"></i>
</div>

</article>
