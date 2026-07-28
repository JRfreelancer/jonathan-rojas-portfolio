<?php 
/** 
 * ========================================================================== 
 * COMPONENTE: PROJECTS PROCESS (VISTA / ESTRUCTURA)
 * ========================================================================== 
 * Renderiza la sección cronológica de metodología de trabajo, mapeando las 
 * variables globales para el encabezado y ciclando los pasos dinámicos.
 */ 

// ARCHIVO DE DATOS: Suministra las variables $processBadge, $processTitle, $processDescription y el array $processSteps
require_once __DIR__ . '/../data/projects-process-data.php'; 

/* |-------------------------------------------------------------------------- 
   | CONFIGURACIÓN DE METADATOS COMERCIALES
   |-------------------------------------------------------------------------- 
   | Se mapean los textos dinámicos a las variables genéricas requeridas de 
   | forma obligatoria por el subcomponente reutilizable 'section-header.php'.
   */ 
$badge       = htmlspecialchars($processBadge, ENT_QUOTES, 'UTF-8'); 
$title       = htmlspecialchars($processTitle, ENT_QUOTES, 'UTF-8'); 
$description = htmlspecialchars($processDescription, ENT_QUOTES, 'UTF-8'); 
?> 

<!-- Sección General de Metodología y Flujo de Trabajo -->
<section class="projects-process" id="projects-process" aria-labelledby="projects-process-title"> 
  <div class="container"> 
    
    <?php 
    /* INCLUSIÓN: Imprime de forma estandarizada las etiquetas .section-badge, 
       .section-title y .section-description consumiendo las variables superiores */
    require __DIR__ . '/../components/section-header.php'; 
    ?> 

    <!-- Bloque Cronológico de la Línea de Tiempo -->
    <!-- CORRECCIÓN ARQUITECTÓNICA: Se cambia la clase de 'projects-process__grid' a 'projects-process__timeline' 
         para mantener una sincronización perfecta al 100% con las directrices de tu archivo CSS previo -->
    <div class="projects-process__timeline"> 
      <?php 
      // CONTROL DE FLUJO: Verifica la integridad del array antes de abrir el bucle para prevenir errores fatales
      if (!empty($processSteps) && is_array($processSteps)): 
        foreach ($processSteps as $index => $step): 
          /* LÓGICA DE COMPONENTE: Se invoca la tarjeta individual de cada paso.
             Se utiliza 'include' en lugar de 'require' para optimizar la carga cíclica 
             y mitigar el consumo de memoria I/O en el servidor backend. */
          include __DIR__ . '/../components/process-step.php'; 
        endforeach; 
      endif; 
      ?> 
    </div> 

  </div> 
</section>
