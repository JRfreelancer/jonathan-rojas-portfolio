<?php

$titulo = "Proyectos | Jonathan Rojas";

$descripcion = "UNa muestra de lo que podemos hacer para llevar al otro nivel tu proyecto.";

$canonical = "https://jonathanrojas.com/proyectos.php";

include 'includes/header.php';
include 'includes/navbar.php';

?>
<main>

        <!-- ======================================================
             SECCIÓN: PROYECTOS
        ======================================================= -->
        <section id="proyectos">
            <div class="container_proyecto">

                <h2 class="tituloProyectos">Proyectos</h2>
                <!-- Aquí irá la galería o listado de proyectos -->

                <div class="card__container">
                    <article class="card__article">
                        <img src="img/imagen_slider_01.jpg" class="card__img"
                            alt="Página principal de la tienda virtual MacRo Print">

                        <div class="card__data">
                            <span class="card__description">Tienda On Line</span>
                            <h3 class="card__title">MacRo Print</h3>
                            <a href="href=" /proyectos/macro-print" class="card__button">Saber más</a>
                        </div>
                    </article>



                    <article class="card__article">
                        <img src="img/imagen_slider_02.jpg" class="card__img" alt="imagen proyecto de diseño web">

                        <div class="card__data">
                            <span class="card__description">Diseño web</span>
                            <h3 class="card__title">Diseño UI/UX</h3>
                            <a href="href=" /proyectos/macro-print" class="card__button">Saber más</a>
                        </div>
                    </article>



                    <article class="card__article">
                        <img src="img/imagen_slider_03.jpg" class="card__img"
                            alt="imagen proyecto diseños realizados para MacRo">

                        <div class="card__data">
                            <span class="card__description">Diseño Gráfico</span>
                            <h3 class="card__title">SEO / Marketing</h3>
                            <a href="href=" /proyectos/macro-print" class="card__button">Saber más</a>
                        </div>
                    </article>

                </div>
            </div>
        </section>



</main>


    <!-- ===================== LIBRERÍAS JAVASCRIPT ===================== -->
<?php include 'includes/scripts.php'; ?>

<?php include 'includes/footer.php'; ?>