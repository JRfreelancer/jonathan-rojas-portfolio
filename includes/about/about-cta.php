<?php

$badge = 'Trabajemos juntos';

$title = 'Construyamos algo extraordinario.';

$description = 'Cada proyecto comienza con una conversación. Escucho tus ideas, analizo tus objetivos y desarrollo soluciones digitales que combinan estrategia, diseño y tecnología para crear experiencias modernas, funcionales y pensadas para las personas.';

?>

<section
    class="about-cta"
    id="about-contact">

    <div class="container about-cta__container">

        <?php include __DIR__ . '/../components/section-header.php'; ?>

        <div class="about-cta__actions">

            <a
                href="/contacto.php"
                class="btn btn-primary about-cta__button">

                <span>Hablemos de tu proyecto</span>

                <i
                    class="fa-solid fa-arrow-right"
                    aria-hidden="true"></i>

            </a>

            <a
                href="/proyectos.php"
                class="about-cta__link">

                Ver mi portafolio

                <i
                    class="fa-solid fa-arrow-right"
                    aria-hidden="true"></i>

            </a>

        </div>

    </div>

</section>