<?php

/**
 * ============================================================================
 * COMPONENTE: FOOTER
 * ----------------------------------------------------------------------------
 * Descripción:
 * Pie de página global del portafolio profesional.
 *
 * Características:
 * - HTML5 semántico.
 * - Accesible (ARIA).
 * - Responsive mediante Bootstrap 5.
 * - Preparado para microanimaciones.
 * - Año automático mediante PHP.
 * ============================================================================
 */
?>

<?php require_once __DIR__ . '/navigation.php'; ?>

<footer id="footer" class="footer" role="contentinfo">

    <!-- =======================================================================
         Franja decorativa superior
         Se utilizará posteriormente para crear una transición elegante entre
         el contenido principal y el pie de página.
    ======================================================================== -->
    <div class="footer-top-line" aria-hidden="true"></div>

    <!-- =======================================================================
         Contenedor principal
    ======================================================================== -->
    <div class="container py-5">

        <div class="row">

            <!-- ===============================================================
                 Marca personal
            ================================================================ -->
            <section class="col-lg-4 mb-5 mb-lg-0">

                <h2 class="footer-logo">
                    Jonathan Rojas
                </h2>

                <p class="footer-profession">
                    Diseñador Web &amp; Desarrollador Frontend
                </p>

                <p class="footer-description">
                    Desarrollo sitios web modernos, rápidos y responsivos,
                    combinando diseño atractivo con buenas prácticas de
                    programación para ofrecer experiencias digitales de alta
                    calidad.
                </p>

            </section>

            <!-- ===============================================================
                 Navegación del sitio
            ================================================================ -->
            <nav class="col-lg-3 mb-5 mb-lg-0"
                aria-label="Navegación del pie de página">

                <h3 class="footer-title">
                    Navegación
                </h3>

                <ul class="footer-menu list-unstyled">

                    <?php foreach ($menu as $item): ?>

                        <li>

                            <a href="<?= htmlspecialchars($item['url'], ENT_QUOTES, 'UTF-8'); ?>">

                                <?= htmlspecialchars($item['titulo'], ENT_QUOTES, 'UTF-8'); ?>

                            </a>

                        </li>

                    <?php endforeach; ?>

                </ul>

            </nav>

            <!-- ===============================================================
                 Información de contacto
            ================================================================ -->
            <section class="col-lg-3 mb-5 mb-lg-0">

                <h3 class="footer-title">
                    Contacto
                </h3>

                <address class="footer-contact">

                    <p>
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:joro502@gmail.com">
                            joro502@gmail.com
                        </a>
                    </p>

                    <p>
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        Riosucio, Caldas - Colombia
                    </p>

                    <p>
                        <i class="fas fa-briefcase" aria-hidden="true"></i>
                        Disponible para proyectos freelance.
                    </p>

                </address>

            </section>

            <!-- ===============================================================
                 Redes sociales
            ================================================================ -->
            <section class="col-lg-2">

                <h3 class="footer-title">
                    Sígueme
                </h3>

                <div class="footer-social"
                    aria-label="Redes sociales">

                    <a href="#"
                        aria-label="GitHub">
                        <i class="fab fa-github"></i>
                    </a>

                    <a href="#"
                        aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <a href="#"
                        aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#"
                        aria-label="WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>

                </div>

            </section>

        </div>

        <!-- ===================================================================
             Línea divisoria
        ==================================================================== -->
        <hr class="footer-divider">

        <!-- ===================================================================
             Footer inferior
        ==================================================================== -->
        <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">

            <!-- Copyright -->
            <p class="footer-copy mb-0">
                &copy; <?= date('Y'); ?>
                Jonathan Rojas.
                Todos los derechos reservados.
            </p>

            <!-- Botón volver arriba -->
            <button
                id="btnTop"
                class="btn-top"
                type="button"
                aria-label="Volver al inicio de la página">

                <i class="fas fa-arrow-up" aria-hidden="true"></i>

            </button>

        </div>

    </div>

</footer>