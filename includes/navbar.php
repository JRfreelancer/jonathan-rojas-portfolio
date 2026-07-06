<?php require_once __DIR__ . '/navigation.php'; ?>

<!-- =========================================================================
     ENCABEZADO Y COMPONENTE DE NAVEGACIÓN PRINCIPAL
     ========================================================================= -->
<header class="site-header">

    <nav class="main-navigation" aria-label="Navegación principal">

        <!-- ===================== LOGO CORPORATIVO ===================== -->
        <a href="index.php" class="logo-link" aria-label="Ir al inicio">
            <img src="assets/img/icons/icono_64_x_64_fondo_blanco.png"
                width="64"
                height="64"
                alt="Logotipo de Jonathan Rojas">

                <div class="logo-text">
        <span class="logo-name">Jonathan Rojas</span>
    </div>
        </a>

        <!-- ===================== CONTENEDOR DEL MENÚ ===================== -->
        <!-- Inicialmente oculto para tecnologías de asistencia en móviles; JavaScript conmutará 'aria-hidden' -->
        <div class="desktop-nav">

            <ul class="main-nav-list">

                <li class="main-nav-item">
                    <a
                        class="main-nav-link <?= claseActiva('index.php', $paginaActual) ?>"
                        href="index.php"
                        <?= ariaActual('index.php', $paginaActual) ?>>
                        Inicio
                    </a>
                </li>

                <li class="main-nav-item">
                    <a
                        class="main-nav-link <?= claseActiva('acerca.php', $paginaActual) ?>"
                        href="acerca.php"
                        <?= ariaActual('acerca.php', $paginaActual) ?>>
                        Sobre mí
                    </a>
                </li>

                <li class="main-nav-item">
                    <a
                        class="main-nav-link <?= claseActiva('proyectos.php', $paginaActual) ?>"
                        href="proyectos.php"
                        <?= ariaActual('proyectos.php', $paginaActual) ?>>
                        Proyectos
                    </a>
                </li>

                <li class="main-nav-item">
                    <a
                        class="main-nav-link <?= claseActiva('diseno-web.php', $paginaActual) ?>"
                        href="diseno-web.php"
                        <?= ariaActual('diseno-web.php', $paginaActual) ?>>
                        Diseño web
                    </a>
                </li>

                <li class="main-nav-item">
                    <a
                        class="main-nav-link <?= claseActiva('diseno-grafico.php', $paginaActual) ?>"
                        href="diseno-grafico.php"
                        <?= ariaActual('diseno-grafico.php', $paginaActual) ?>>
                        Diseño gráfico
                    </a>
                </li>

                <li class="main-nav-item">
                    <a
                        class="main-nav-link <?= claseActiva('contacto.php', $paginaActual) ?>"
                        href="contacto.php"
                        <?= ariaActual('contacto.php', $paginaActual) ?>>
                        Contacto
                    </a>
                </li>

            </ul>

        </div>

        <!-- ===================== BOTONES DE ACCIÓN (Lado Derecho) ===================== -->
        <div class="nav-buttons">

            <!-- Acceso al sistema (Login) -->
            <a href="login.php" class="btn-login" aria-label="Iniciar sesión">
                <span class="login-text">Login</span>
                <i class="fa-solid fa-user" aria-hidden="true"></i>
            </a>

            <!-- ================= BOTÓN EXTERNO: ABRIR MENÚ (Móvil) ================= -->
            <!-- JavaScript conmutará de forma automática el valor del atributo 'aria-expanded' -->


            <!-- Hamburguesa -->

            <button
                type="button"
                class="btn-abrir-menu"
                id="btnAbrirMenu"
                aria-label="Abrir menú"
                aria-expanded="false"
                aria-controls="mobileMenu">

                <i class="fa-solid fa-bars" aria-hidden="true"></i>

            </button>

        </div>
    </nav>
</header>