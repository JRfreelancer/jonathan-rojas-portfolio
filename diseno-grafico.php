<?php

$titulo = "Diseño Web | Jonathan Rojas";

$descripcion = "Servicios de diseño y desarrollo web moderno, responsivo y optimizado para SEO.";

$canonical = "https://jonathanrojas.com/d_web.php";

include 'includes/header.php';
include 'includes/navbar.php';

?>
<main>

        <!-- ======================================================
     SECCIÓN: DISEÑO WEB
     Presenta el servicio de diseño y desarrollo web mediante
     una composición dividida en dos columnas:
     - Información del servicio.
     - Vista previa interactiva de un sitio web.
====================================================== -->
        <section id="diseno-web" aria-labelledby="titulo-diseno-web">

            <div class="container">

                <!-- ===================== ENCABEZADO ===================== -->
                <header class="section-header">

                    <h2 id="titulo-diseno-web" class="section-title">
                        Diseño Web
                    </h2>

                    <p class="section-subtitle">
                        Diseño y desarrollo sitios web modernos, rápidos y optimizados
                        para ofrecer la mejor experiencia de usuario y convertir visitas
                        en oportunidades de negocio.
                    </p>

                </header>

                <!-- ================= CONTENIDO PRINCIPAL ================= -->
                <div class="row align-items-center">

                    <!-- ===========================================
                 COLUMNA IZQUIERDA
                 Información del servicio
            ============================================ -->
                    <div class="col-lg-5">

                        <div class="web-design-content">

                            <!-- Título principal -->
                            <h3 class="web-design-title">
                                Experiencias digitales que generan resultados
                            </h3>

                            <!-- Descripción -->
                            <p class="web-design-description">
                                Cada proyecto es desarrollado combinando diseño,
                                estrategia y tecnología para crear sitios web que
                                transmiten confianza, fortalecen la marca y ayudan a
                                conseguir nuevos clientes.
                            </p>

                            <!-- ================= BENEFICIOS ================= -->
                            <div class="web-features">

                                <article class="feature-card">

                                    <div class="feature-icon">
                                        <!-- Icono -->
                                    </div>

                                    <div class="feature-text">

                                        <h4>Responsive</h4>

                                        <p>
                                            Adaptado a cualquier dispositivo.
                                        </p>

                                    </div>

                                </article>

                                <article class="feature-card">

                                    <div class="feature-icon">
                                        <!-- Icono -->
                                    </div>

                                    <div class="feature-text">

                                        <h4>SEO</h4>

                                        <p>
                                            Optimizado para buscadores.
                                        </p>

                                    </div>

                                </article>

                                <article class="feature-card">

                                    <div class="feature-icon">
                                        <!-- Icono -->
                                    </div>

                                    <div class="feature-text">

                                        <h4>UI / UX</h4>

                                        <p>
                                            Interfaces intuitivas y atractivas.
                                        </p>

                                    </div>

                                </article>

                                <article class="feature-card">

                                    <div class="feature-icon">
                                        <!-- Icono -->
                                    </div>

                                    <div class="feature-text">

                                        <h4>Alto rendimiento</h4>

                                        <p>
                                            Sitios rápidos y optimizados.
                                        </p>

                                    </div>

                                </article>

                            </div>

                            <!-- ================= BOTÓN ================= -->
                            <a href="#contacto" class="btn-primary-hero"
                                aria-label="Solicitar un proyecto de diseño web">

                                Solicitar proyecto

                            </a>

                        </div>

                    </div>

                    <!-- ===========================================
                 COLUMNA DERECHA
                 Vista previa del navegador
            ============================================ -->
                    <div class="col-lg-7">

                        <div class="browser-wrapper">

                            <!-- Glow decorativo -->
                            <div class="browser-glow" aria-hidden="true"></div>

                            <!-- Navegador -->
                            <article class="browser-window">

                                <!-- Barra superior -->
                                <header class="browser-header">

                                    <div class="browser-controls">

                                        <span class="browser-dot"></span>
                                        <span class="browser-dot"></span>
                                        <span class="browser-dot"></span>

                                    </div>

                                    <div class="browser-address">

                                        www.jonathanrojas.com

                                    </div>

                                </header>

                                <!-- Pantalla -->
                                <div class="browser-screen">

                                    <!--
                                Aquí construiremos posteriormente
                                una Landing Page ficticia completamente
                                hecha en HTML y CSS.
                            -->

                                </div>

                            </article>

                        </div>

                    </div>

                </div>

            </div>

        </section>

</main>

    <!-- ===================== LIBRERÍAS JAVASCRIPT ===================== -->
<?php include 'includes/scripts.php'; ?>

<?php include 'includes/footer.php'; ?>