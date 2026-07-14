<?php
// =========================================================================
// CARGA DE DATOS Y CONFIGURACIÓN DEL ENCABEZADO DE SECCIÓN
// =========================================================================

// Carga el archivo de origen que contiene la matriz con los datos de los testimonios
require_once __DIR__ . '/../data/testimonials-data.php';

// Variables inyectadas dinámicamente en el componente reutilizable 'section-header.php'
$badge       = 'Testimonios';
$title       = 'La confianza de mis clientes es mi mayor respaldo';
$description = 'Cada proyecto representa un compromiso con la calidad, la comunicación y los resultados. Estas son algunas experiencias de quienes han trabajado conmigo.';
?>

<!-- =========================================================================
     SECCIÓN DE TESTIMONIOS (Módulo Principal)
     ========================================================================= -->
<section class="testimonials" id="testimonials">
    <div class="container">

        <!-- ===================== ENCABEZADO DE LA SECCIÓN ===================== -->
        <!-- Componente parcial que renderiza el badge, h2 y párrafo descriptivo -->
        <?php include __DIR__ . '/../components/section-header.php'; ?>

        <!-- ===================== CONTENEDOR DEL SLIDER ===================== -->
        <div
            class="testimonials-slider"
            role="region"
            aria-roledescription="carousel"
            aria-label="Carrusel de testimonios"
            tabindex="0">

            <!-- Botón de Control: Testimonio Anterior -->
            <button type="button" class="testimonial-arrow testimonial-arrow-prev" aria-label="Testimonio anterior" aria-controls="testimonials-track">
                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
            </button>

            <!-- Carrusel / Riel de Tarjetas (Track) -->
            <div
                class="testimonials-track"
                id="testimonials-track"
                aria-live="polite">
                <?php foreach ($testimonials as $testimonial): ?>
                    <!-- Inyecta de forma iterativa cada tarjeta individual de cliente -->
                    <?php include __DIR__ . '/../components/cards/testimonial-card.php'; ?>
                <?php endforeach; ?>
            </div>

            <!-- Botón de Control: Siguiente Testimonio -->
            <button type="button" class="testimonial-arrow testimonial-arrow-next" aria-label="Siguiente testimonio">
                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
            </button>

        </div>

        <!-- ===================== INDICADORES / PAGINACIÓN ===================== -->
        <!-- Puntos interactivos (bullets) generados y controlados mediante JavaScript -->
        <div
            class="testimonials-pagination"
            aria-label="Paginación de testimonios">
        </div>

    </div>
</section>