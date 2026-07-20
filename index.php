<?php
// =========================================================================
// CONFIGURACIÓN DE METADATOS Y CONTROLADORES S.E.O. PRE-CARGA
// =========================================================================

$titulo      = "Jonathan Rojas | Diseñador Web, UI/UX y SEO";
$descripcion = "Portafolio profesional de Jonathan Rojas. Desarrollo web, diseño UI/UX, SEO y diseño gráfico.";
$autor       = "Jonathan Rojas";
$canonical   = "https://jonathanrojas.com/";

// Carga la estructura técnica del HEAD (Metadatos, Open Graph, Twitter Cards, CSS)
require_once 'includes/head.php';
?>

<body>

    <?php
    // =========================================================================
    // ESTRUCTURAS GLOBALES DE INTERFAZ DE USUARIO (U.I. COMPONENTES)
    // =========================================================================

    // Barra de navegación fija superior estándar para pantallas de escritorio
    require_once 'includes/navbar.php';

    // Panel de navegación colapsable lateral exclusivo para dispositivos móviles
    require_once 'includes/mobile-menu.php';
    ?>

    <!-- Capa de difuminado oscuro de fondo para aislar la pantalla al abrir el menú móvil -->
    <div
        class="overlay"
        id="overlay"
        aria-hidden="true">
    </div>

    <!-- =========================================================================
         BLOQUE CONTENEDOR PRINCIPAL (Módulos de la Página Index / Home)
         ========================================================================= -->
    <main id="main-content">
        <?php
        // Sección 1: Bienvenida, titular dinámico y Slider de Proyectos destacados
        require_once 'includes/sections/hero.php';

        // Sección 2: Módulo técnico de tecnologías de desarrollo y software especializado
        require_once 'includes/sections/technologies.php';

        // Sección 3: Cuadrícula informativa de servicios ofrecidos, alcances y viñetas
        require_once 'includes/sections/services.php';

        // Sección 4: Carrusel interactivo y accesible de testimonios de clientes
        require_once 'includes/sections/testimonials.php';

        // Sección 5: Tarjeta con efecto glassmorphism para conversión de llamadas a la acción
        require_once 'includes/sections/cta.php';
        ?>
    </main>

    <?php
    // =========================================================================
    // INYECCIONES DE CIERRE Y OPTIMIZACIÓN DE CARGA (PIE DE PÁGINA)
    // =========================================================================

    // Pie de página global con enlaces secundarios, derechos e información legal
    require_once 'includes/footer.php';

    // Inyección ordenada de scripts e interactividades JS (Observer, Sliders)
    require_once 'includes/scripts.php';
    ?>

</body>

</html>