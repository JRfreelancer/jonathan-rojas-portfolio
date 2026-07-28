<?php 
/** 
 * ========================================================================== 
 * COMPONENTE: PROJECTS SHOWCASE (VISTA / ESTRUCTURA)
 * ========================================================================== 
 * Muestra el proyecto estrella o destacado del portafolio, utilizando un marco 
 * de navegador dinámico para previsualizar la interfaz de usuario.
 */ 

// ARCHIVO DE DATOS: Suministra las variables dinámicas $badge, $title y $description
require_once __DIR__ . '/../data/project-showcase-data.php'; 

// CONFIGURACIÓN DE MEDIOS: Parámetros requeridos de forma obligatoria por 'browser-frame.php'
/* CORRECCIÓN DE ENTORNO: Se cambiaron las barras invertidas (\) por barras inclinadas convencionales (/).
   El uso de '\' causa fallos de carga de imágenes en servidores Linux/Unix de producción. */
$image = 'assets/img/projects/mockups/project-desktop.webp'; 
$alt   = 'Vista previa del Portafolio Web Profesional'; 

// SANITIZACIÓN DE TEXTOS: Protege las cadenas contra ataques de inyección XSS
$showcaseBadge       = htmlspecialchars($badge, ENT_QUOTES, 'UTF-8');
$showcaseTitle       = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
$showcaseDescription = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
?> 

<!-- Sección de Vitrina o Proyecto Destacado Principal -->
<section class="projects-showcase" id="projects-showcase" aria-labelledby="projects-showcase-title"> 
  <div class="container"> 
    
    <!-- ==========================================================================
         BLOQUE 1: ENCABEZADO INFORMATIVO
         ========================================================================== -->
    <header class="projects-showcase__header"> 
      <span class="projects-showcase__badge"> 
        <?= $showcaseBadge ?> 
      </span> 
      
      <h2 class="projects-showcase__title" id="projects-showcase-title"> 
        <?= $showcaseTitle ?> 
      </h2> 
      
      <p class="projects-showcase__description"> 
        <?= $showcaseDescription ?> 
      </p> 
    </header> 

    <!-- ==========================================================================
         BLOQUE 2: ÁREA VISUAL REUTILIZABLE (MOCKUP)
         ========================================================================== -->
    <figure class="projects-showcase__visual"> 
      <?php 
      /* LÓGICA DE COMPONENTE: Se invoca la interfaz del navegador.
         Consume las variables globales $image y $alt para pintar el marco de la UI. */
      require_once __DIR__ . '/../ui/browser-frame.php'; 
      ?> 
    </figure> 

    <!-- ==========================================================================
         BLOQUE 3: METADATOS TÉCNICOS Y ELEMENTOS DE CONVERSIÓN
         ========================================================================== -->
    <!-- Listado de Tecnologías aplicadas en el caso de estudio -->
    <div class="projects-showcase__technologies"> 
      <!-- ... Contenido dinámico de etiquetas de desarrollo ... -->
    </div> 

    <!-- Enlaces de Llamada a la Acción (Ver Caso, Probar Demo) -->
    <div class="projects-showcase__actions"> 
      <!-- ... Botones comerciales de redirección ... -->
    </div> 

  </div> 
</section>
