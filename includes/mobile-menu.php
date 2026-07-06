<?php require_once __DIR__ . '/navigation.php'; ?>

<!-- =========================================================================
     MENÚ MÓVIL (OFF-CANVAS)
     ========================================================================= -->

<aside
    class="mobile-menu"
    id="mobileMenu"
    role="dialog"
    aria-hidden="true"
    aria-labelledby="mobileMenuTitle"
    inert>

    <div class="mobile-menu-content">

        <!-- Cabecera -->
        <div class="mobile-menu-header">
            <h2 id="mobileMenuTitle" class="mobile-menu-title">Menú</h2>
            <button
                type="button"
                class="btn-cerrar-menu"
                id="btnCerrarMenu"
                aria-label="Cerrar menú"
                aria-expanded="true"
                aria-controls="mobileMenu">

                <i class="fa-solid fa-xmark" aria-hidden="true"></i>
            </button>
        </div>

        <!-- Navegación móvil -->
        <nav class="mobile-nav" aria-label="Menú móvil">
            <ul class="mobile-nav-list">

                <li class="mobile-nav-item">
                    <a
                        class="mobile-nav-link <?= claseActiva('index.php', $paginaActual) ?>"
                        href="index.php"
                        <?= ariaActual('index.php', $paginaActual) ?>>
                        Inicio
                    </a>
                </li>

                <li class="mobile-nav-item">
                    <a
                        class="mobile-nav-link <?= claseActiva('acerca.php', $paginaActual) ?>"
                        href="acerca.php"
                        <?= ariaActual('acerca.php', $paginaActual) ?>>
                        Sobre mí
                    </a>
                </li>

                <li class="mobile-nav-item">
                    <a
                        class="mobile-nav-link <?= claseActiva('proyectos.php', $paginaActual) ?>"
                        href="proyectos.php"
                        <?= ariaActual('proyectos.php', $paginaActual) ?>>
                        Proyectos
                    </a>
                </li>

                <li class="mobile-nav-item">
                    <a
                        class="mobile-nav-link <?= claseActiva('diseno-web.php', $paginaActual) ?>"
                        href="diseno-web.php"
                        <?= ariaActual('diseno-web.php', $paginaActual) ?>>
                        Diseño web
                    </a>
                </li>

                <li class="mobile-nav-item">
                    <a
                        class="mobile-nav-link <?= claseActiva('diseno-grafico.php', $paginaActual) ?>"
                        href="diseno-grafico.php"
                        <?= ariaActual('diseno-grafico.php', $paginaActual) ?>>
                        Diseño gráfico
                    </a>
                </li>

                <li class="mobile-nav-item">
                    <a
                        class="mobile-nav-link <?= claseActiva('contacto.php', $paginaActual) ?>"
                        href="contacto.php"
                        <?= ariaActual('contacto.php', $paginaActual) ?>>
                        Contacto
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Login -->
        <a href="login.php" class="btn-login mobile-login">
            <span>Login</span>
            <i class="fa-solid fa-user"></i>
        </a>
    </div>
</aside>
<div id="overlay" class="overlay"></div>