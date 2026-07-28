<?php 
/** 
 * ========================================================================== 
 * VISTA PRINCIPAL: PORTAFOLIO DE PROYECTOS
 * ========================================================================== 
 * Archivo maestro que configura los metadatos SEO y compone la estructura 
 * modular de la sección de proyectos de Jonathan Rojas.
 */ 

// CONFIGURACIÓN DE METADATOS (SEO): Consumidos dinámicamente por 'includes/head.php'
$titulo      = 'Proyectos | Jonathan Rojas'; 
$descripcion = 'Descubre proyectos de diseño web, UI/UX y desarrollo frontend creados para ofrecer experiencias digitales modernas, rápidas y orientadas a resultados.'; 
$canonical   = '/proyectos'; 
?> 
<!DOCTYPE html> 
<html lang="es"> 
<head> 
  <?php 
  // Inyección de etiquetas meta, favicons, fuentes y estilos CSS globales 
  require_once __DIR__ . '/includes/head.php'; 
  ?> 
</head> 
<body> 

  <?php 
  // COMPONENTES GLOBALES DE CARGA Y NAVEGACIÓN
  require_once __DIR__ . '/includes/loader.php'; 
  require_once __DIR__ . '/includes/navbar.php'; 
  ?> 

  <!-- ==========================================================================
       CONTENIDO PRINCIPAL DE LA PÁGINA (SEMÁNTICA DE FLUJO)
       ========================================================================== -->
  <main> 
    
    <?php 
    /* --- Fase 1: Introducción y Destacados -------------------------------- */
    // Pantalla de bienvenida principal de la sección de portafolio
    require_once __DIR__ . '/includes/projects/projects-hero.php'; 
    
    // Vitrina visual de los proyectos con mayor relevancia o impacto
    require_once __DIR__ . '/includes/projects/projects-showcase.php'; 

    require_once __DIR__ . '/includes/projects/projects-showcase.php';

require_once __DIR__ . '/includes/projects/projects-approach.php';

require_once __DIR__ . '/includes/projects/projects-process.php';

    /* --- Fase 2: Exploración e Interacción --------------------------------- */
    // Barra de herramientas para filtrar elementos (Categorías, UI/UX, Frontend)
    require_once __DIR__ . '/includes/projects/projects-filters.php'; 
    
    // Cuadrícula dinámica donde se renderizan las tarjetas de proyectos
    require_once __DIR__ . '/includes/projects/projects-grid.php'; 

    /* --- Fase 3: Metodología y Respaldo Técnico -------------------------- */
    // Explicación paso a paso de la metodología de desarrollo y diseño
    require_once __DIR__ . '/includes/projects/projects-process.php'; 
    
    // Carrusel o rejilla de las tecnologías utilizadas en el portafolio
    require_once __DIR__ . '/includes/projects/projects-technologies.php'; 

    /* --- Fase 4: Conversión Final ----------------------------------------- */
    // Bloque de llamada a la acción (CTA) para invitar al usuario a cotizar
    require_once __DIR__ . '/includes/projects/projects-cta.php'; 
    ?> 

      <?php 
  /* --- ARCHIVOS COMPLEMENTARIOS / INVISIBLES ------------------------------ */
  // CORRECCIÓN ARQUITECTÓNICA: El estudio de caso estructurado se traslada aquí.
  // Al ser un componente detallado o una plantilla que suele abrirse mediante 
  // modales/modos asíncronos, se inyecta fuera del flujo lineal de lectura del <main>.
  require_once __DIR__ . '/includes/projects/projects-case-study.php'; 
  ?>

  </main> 

  <?php 
  // COMPONENTES GLOBALES DE CIERRE Y SCRIPTS
  // Pie de página del sitio web con enlaces y redes sociales
  require_once __DIR__ . '/includes/footer.php'; 
  
  // Scripts JavaScript de inicialización, librerías y animaciones finales
  require_once __DIR__ . '/includes/scripts.php'; 
  ?> 



</body> 
</html>
