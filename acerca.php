<?php

$titulo = "Acerca de mí | Jonathan Rojas";

$canonical = "https://jonathanrojas.com/acerca.php";

$descripcion = "Contáctame te cuento como puedo ayudarte a desarrollar tu próximo sitio web o proyecto digital.";

include 'includes/header.php';
include 'includes/navbar.php';

?>

<!-- ==========================================================
         CONTENIDO PRINCIPAL
    =========================================================== -->
    <main>

        <!-- ======================================================
             SECCIÓN: ACERCA DE MÍ
        ======================================================= -->
        <section id="acerca" aria-labelledby="about-title">
            <div class="container">
                <h2 id="about-title" class="section-title">Acerca de mí</h2>
                <div class="row">
                    <div class="col-md-6 acerca-imagen fade-up">
                        <img src="img/imagen_slider_03.webp" alt="Jonathan Rojas trabajando en diseño web" width="800"
                            height="600" loading="lazy" decoding="async">
                    </div>

                    <div class="col-md-6 acerca-texto fade-up">
                        <p class="about-description">
                            Diseño sitios web que inspiran confianza, comunican valor y generan oportunidades de
                            negocio.
                        </p>
                        <p class="about-description">Soy Jonathan Rojas, diseñador web y gráfico profesional
                            independiente en Colombia especializado en crear
                            identidades
                            visuales y experiencias digitales que combinan estética, funcionalidad y estrategia.</p>
                        <p class="about-description">Mi
                            objetivo es ayudar a cada cliente a destacar en un entorno digital cada vez más competitivo,
                            construyendo marcas memorables y proyectos con impacto real.</p>

                        <!-- Botón CTA: lleva al formulario de contacto -->
                        <a href="#contacto" class="btn-primary-hero" aria-label="Ir al formulario de contacto">
                            Contáctame
                        </a>
                    </div>
                </div>
            </div>
        </section>


</main>

<?php include 'includes/scripts.php'; ?>

<?php include 'includes/footer.php'; ?>