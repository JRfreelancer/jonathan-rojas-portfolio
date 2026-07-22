<?php

/**
 * ==========================================================================
 * ABOUT HERO
 * Sección principal de la página "Sobre mí"
 * ==========================================================================
 */
?>

<section
    class="about-hero"
    id="about-hero"
    aria-labelledby="about-hero-title">

    <!-- Elementos decorativos del fondo -->
    <div class="about-hero__background" aria-hidden="true">
        <span class="about-hero__glow about-hero__glow--primary"></span>
        <span class="about-hero__glow about-hero__glow--secondary"></span>
        <span class="about-hero__grid"></span>
    </div>

    <div class="container">

        <div class="about-hero__wrapper">

            <!-- ==========================================================
                 CONTENIDO
            =========================================================== -->
            <!-- ==========================================================
     CONTENIDO
=========================================================== -->

            <div class="about-hero__content">

                <!-- Badge -->
                <div class="about-hero__badge">

                    <i class="fa-solid fa-user"></i>

                    <span>
                        Sobre mí
                    </span>

                </div>

                <!-- Encabezado -->
                <header class="about-hero__header">

                    <h1 class="about-hero__title" id="about-hero-title">
                        Diseño experiencias digitales que impulsan marcas y negocios.
                    </h1>

                    <p class="about-hero__description">
                        Soy Jonathan Rojas, diseñador y desarrollador web apasionado por crear soluciones digitales modernas, accesibles y pensadas para generar resultados reales.
                    </p>

                </header>

                <!-- Acciones -->
                <div class="about-hero__actions">

                    <a
                        href="#about-process"
                        class="btn btn-primary">
                        Conoce mi proceso
                    </a>

                    <a
                        href="proyectos.php"
                        class="btn btn-outline">
                        Ver proyectos
                    </a>

                </div>

                <!-- Especialidades -->
                <ul
                    class="about-hero__highlights"
                    aria-label="Especialidades profesionales">

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Diseño Web

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        UI / UX

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        SEO

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Frontend

                    </li>

                </ul>

            </div>

            <!-- ==========================================================
     VISUAL
=========================================================== -->
            <div class="about-hero__visual">

                <div class="about-hero__media">

                    <!-- Glow decorativo -->
                    <span
                        class="about-hero__glow"
                        aria-hidden="true">
                    </span>

                    <!-- Tarjeta principal -->
                    <figure class="about-hero__card">

                        <img
                            src="assets/img/about/jonathan-rojas.webp"
                            alt="Jonathan Rojas trabajando en un proyecto de diseño y desarrollo web."
                            class="about-hero__image"
                            loading="eager"
                            decoding="async">

                        <figcaption class="about-hero__caption">

                            <h2 class="about-hero__name">
                                Jonathan Rojas
                            </h2>

                            <p class="about-hero__role">
                                Diseñador Web · UI / UX · SEO
                            </p>

                            <div class="about-hero__status">

                                <span class="about-hero__status-dot"></span>

                                Disponible para nuevos proyectos

                            </div>

                        </figcaption>

                    </figure>

                </div>

                <!-- Tarjetas flotantes -->
                <div
                    class="about-hero__floating-elements"
                    aria-hidden="true">

                    <div class="about-hero__floating about-hero__floating--design">
                        <i class="fa-solid fa-pencil-ruler"></i>

                        <div>

                            <strong>UI / UX</strong>

                            <small>Interfaces modernas</small>

                        </div>

                    </div>

                    <div class="about-hero__floating about-hero__floating--code">

                        <i class="fa-solid fa-code"></i>

                        <div>

                            <strong>Frontend</strong>

                            <small>Código limpio</small>

                        </div>

                    </div>

                    <div class="about-hero__floating about-hero__floating--seo">

                        <i class="fa-solid fa-chart-line"></i>

                        <div>

                            <strong>SEO</strong>

                            <small>Optimización</small>

                        </div>

                    </div>

                </div>

            </div>

</section>


