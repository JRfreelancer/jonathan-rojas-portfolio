<?php

/** 
 * ========================================================================== 
 * COMPONENTE: PROJECTS HERO (VISTA / ESTRUCTURA)
 * ========================================================================== 
 * Carga el archivo de datos local e imprime la sección introductoria principal 
 * de la página de proyectos con soporte para renderizado de mockups.
 */

// ARCHIVO DE DATOS: Define las variables $badge, $title, $description, $primaryButton y $secondaryButton 
require_once __DIR__ . '/../data/projects-hero-data.php';

// SANITIZACIÓN DE VARIABLES: Previene ataques XSS al renderizar textos dinámicos 
$heroBadge       = htmlspecialchars($badge, ENT_QUOTES, 'UTF-8');
$heroTitle       = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
$heroDescription = htmlspecialchars($description, ENT_QUOTES, 'UTF-8');
$btnPrimary      = htmlspecialchars($primaryButton, ENT_QUOTES, 'UTF-8');
$btnSecondary    = htmlspecialchars($secondaryButton, ENT_QUOTES, 'UTF-8');
?>

<!-- Sección Hero Principal del Portafolio -->
<section class="projects-hero" id="projects-hero" aria-labelledby="projects-hero-title">
    <div class="container">
        <div class="projects-hero__grid">

            <!-- ==========================================================================
           COLUMNA IZQUIERDA: BLOQUE DE TEXTO Y CONVERSIÓN
           ========================================================================== -->
            <div class="projects-hero__content">

                <!-- Textos Introductorios -->
                <div class="projects-hero__text">
                    <span class="projects-hero__badge">
                        <?= $heroBadge ?>
                    </span>

                    <h1 class="projects-hero__title" id="projects-hero-title">
                        <?= $heroTitle ?>
                    </h1>

                    <p class="projects-hero__description">
                        <?= $heroDescription ?>
                    </p>
                </div>

                <!-- Botones de Acción Obligatorios -->
                <!-- CORRECCIÓN ARQUITECTÓNICA: Se corrige la etiqueta de cierre de </nav> que estaba declarada como un </div> erróneo -->
                <nav class="projects-hero__actions" aria-label="Acciones principales">
                    <!-- Enlace de ancla interno hacia la cuadrícula de portafolio -->
                    <a href="#projects-grid" class="btn btn-primary">
                        <?= $btnPrimary ?>
                    </a>

                    <!-- Enlace externo hacia el formulario comercial -->
                    <a href="contacto.php" class="btn btn-secondary">
                        <?= $btnSecondary ?>
                    </a>
                </nav>

            </div>

            <!-- ==========================================================================
           COLUMNA DERECHA: ESCENA VISUAL Y COMPOSICIÓN DE MOCKUPS
           ========================================================================== -->
            <!-- ACCESIBILIDAD: Se mantiene oculto del árbol de lectura por ser puramente decorativo -->
            <div class="projects-hero__visual" aria-hidden="true">
                <div class="projects-hero__scene">

                    <!-- Capas Ambientales de Fondo -->
                    <div class="projects-hero__background">

                        <div class="projects-hero__glow"></div>

                        <div class="projects-hero__glow projects-hero__glow--secondary"></div>

                        <div class="projects-hero__grid-lines"></div>

                        <div class="projects-hero__gradient"></div>

                    </div>

                    <!-- Contenedor Maquetado de Dispositivos Responsivos -->
                    <div class="projects-hero__mockups">

                        <!-- Dispositivo: Desktop -->
                        <figure class="projects-hero__device projects-hero__device--desktop">

                            <div class="projects-hero__device-frame">

                                <!-- Barra superior -->
                                <div class="projects-hero__browser">

                                    <span></span>
                                    <span></span>
                                    <span></span>

                                </div>

                                <!-- Pantalla -->
                                <div class="projects-hero__screen">

                                    <div class="projects-ui">

                                        <div class="projects-ui__hero"></div>

                                        <div class="projects-ui__cards">

                                            <div class="projects-ui__card"></div>
                                            <div class="projects-ui__card"></div>
                                            <div class="projects-ui__card"></div>

                                        </div>

                                    </div>

                                </div>

                        </figure>

                        <!-- Dispositivo: Tablet -->
                        <figure class="projects-hero__device projects-hero__device--tablet">
                            <div class="projects-hero__device-frame">
                                <img src="..." alt="" loading="eager" fetchpriority="high">
                            </div>
                        </figure>

                        <!-- Dispositivo: Mobile -->
                        <figure class="projects-hero__device projects-hero__device--mobile">
                            <div class="projects-hero__device-frame">
                                <img src="..." alt="" loading="eager" fetchpriority="high">
                            </div>
                        </figure>


                    </div>
                    <div class="projects-hero__floating">

                        <article class="projects-card projects-card--analytics">

                            <span class="projects-card__label">
                                Performance
                            </span>

                            <strong class="projects-card__value">
                                98%
                            </strong>

                        </article>

                        <article class="projects-card projects-card--seo">

                            <span class="projects-card__label">
                                SEO
                            </span>

                            <strong class="projects-card__value">
                                100
                            </strong>

                        </article>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="projects-impact">

    <div class="container">

        <header class="projects-impact__header">

            Badge

            Título

            Descripción

        </header>

        <div class="projects-impact__grid">

            <!-- Métricas -->

        </div>

    </div>

</section>
</section>