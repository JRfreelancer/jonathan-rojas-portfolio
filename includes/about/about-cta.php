<?php 
/** 
 * ========================================================================== 
 * COMPONENTE: ABOUT CTA (VISTA / ESTRUCTURA)
 * ========================================================================== 
 * Carga las variables requeridas por el subcomponente 'section-header.php' 
 * y renderiza el bloque final de llamada a la acción con metadatos.
 */ 

// DECLARACIÓN DE VARIABLES: Información que consumirá el componente del encabezado
$badge       = 'Trabajemos juntos'; 
$title       = 'Construyamos algo extraordinario.'; 
$description = 'Cada proyecto comienza con una conversación. Escucho tus ideas, analizo tus objetivos y desarrollo soluciones digitales que combinan estrategia, diseño y tecnología para crear experiencias modernas, funcionales y pensadas para las personas.'; 
?> 

<!-- Bloque Principal de Llamada a la Acción (CTA) -->
<section class="about-cta" id="about-contact"> 
  <div class="container about-cta__container"> 
    
    <?php 
    /* INCLUSIÓN: Renderiza las etiquetas .section-badge, .section-title 
       y .section-description usando las variables declaradas arriba */
    include __DIR__ . '/../components/section-header.php'; 
    ?> 

    <!-- Bloque de Enlaces y Acciones Principales -->
    <div class="about-cta__actions"> 
      
      <!-- Enlace Principal (Botón Destacado) -->
      <a href="/contacto.php" class="btn btn-primary about-cta__button"> 
        <span>Hablemos de tu proyecto</span> 
        <!-- ACCESIBILIDAD: Se añade role="img" para validar el elemento tipográfico decorativo -->
        <i class="fa-solid fa-arrow-right" role="img" aria-hidden="true"></i> 
      </a> 

      <!-- Enlace Secundario (Texto Simple) -->
      <a href="/proyectos.php" class="about-cta__link"> 
        Ver mi portafolio 
        <i class="fa-solid fa-arrow-right" role="img" aria-hidden="true"></i> 
      </a> 
      
    </div> 

    <!-- Bloque de Metadatos: Disponibilidad y Servicios Ofrecidos -->
    <div class="about-cta__meta"> 
      
      <!-- Indicador de Estatus de Disponibilidad -->
      <p class="about-cta__availability"> 
        <span class="about-cta__status-dot"></span> 
        Disponible para proyectos freelance y colaboraciones. 
      </p> 

      <!-- Listado Horizontal Corto de Especialidades -->
      <ul class="about-cta__services"> 
        <li>Diseño Web</li> 
        <li>UI / UX</li> 
        <li>SEO</li> 
        <li>Diseño gráfico</li> 
      </ul> 
      
    </div> 

  </div> 
</section>
