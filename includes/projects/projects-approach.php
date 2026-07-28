<?php

/** 
 * ========================================================================== 
 * COMPONENTE: PROJECTS APPROACH (VISTA / ESTRUCTURA)
 * ========================================================================== 
 * Renderiza el manifiesto o enfoque de trabajo del portafolio profesional,
 * incorporando una firma semántica del autor al cierre del bloque.
 */

// ARCHIVO DE DATOS: Suministra las variables dinámicas $approachBadge, $approachTitle, $approachDescription y el array $approachSignature
require_once __DIR__ . '/../data/projects-approach-data.php';

// SANITIZACIÓN DE TEXTOS: Protege todas las cadenas y sub-arrays contra inyecciones XXSS
$badge = htmlspecialchars($approachBadge, ENT_QUOTES, 'UTF-8');
$title = htmlspecialchars($approachTitle, ENT_QUOTES, 'UTF-8');
$desc  = htmlspecialchars($approachDescription, ENT_QUOTES, 'UTF-8');
$name  = htmlspecialchars($approachSignature['name'], ENT_QUOTES, 'UTF-8');
$role  = htmlspecialchars($approachSignature['role'], ENT_QUOTES, 'UTF-8');
?>

<!-- Sección del Manifiesto / Enfoque de Diseño y Desarrollo -->
<section
    class="projects-approach"
    id="projects-approach"
    aria-labelledby="projects-approach-title">

    <div class="container">

        <div class="projects-approach__wrapper">

            <!-- ==========================================
                 COLUMNA IZQUIERDA
            =========================================== -->

            <div class="projects-approach__content">

                <header class="projects-approach__header">

                    <span class="projects-approach__badge">
                        <?= $badge ?>
                    </span>

                    <h2
                        id="projects-approach-title"
                        class="projects-approach__title">

                        <?= $title ?>

                    </h2>

                    <p class="projects-approach__description">

                        <?= $desc ?>

                    </p>

                </header>

                <footer class="projects-approach__footer">

                    <address class="projects-approach__signature">

                        <span
                            class="projects-approach__line"
                            aria-hidden="true"></span>

                        <strong class="projects-approach__name">

                            <?= $name ?>

                        </strong>

                        <small class="projects-approach__role">

                            <?= $role ?>

                        </small>

                    </address>

                </footer>

            </div>

            <!-- ==========================================
                 COLUMNA DERECHA
            =========================================== -->

            <aside
                class="projects-approach__aside"
                aria-hidden="true">
                <div class="projects-approach__canvas">

                    <div class="projects-approach__background">

                        <span class="projects-approach__orb"></span>

                        <span class="projects-approach__grid"></span>

                        <span class="projects-approach__line projects-approach__line--1"></span>

                        <span class="projects-approach__line projects-approach__line--2"></span>

                    </div>

                    <span class="projects-approach__word">STRATEGY</span>

                    <span class="projects-approach__word">DESIGN</span>

                    <span class="projects-approach__word">DEVELOPMENT</span>

                    <span class="projects-approach__word">RESULTS</span>
                </div>
            </aside>

        </div>

    </div>

</section>