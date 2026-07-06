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

    <?php foreach ($menu as $item): ?>

        <li class="mobile-nav-item">

            <a
                href="<?= $item['url']; ?>"
                class="mobile-nav-link <?= claseActiva($item['url'], $paginaActual); ?>"
                <?= ariaActual($item['url'], $paginaActual); ?>>

                <?= htmlspecialchars($item['titulo'], ENT_QUOTES, 'UTF-8'); ?>

            </a>

        </li>

    <?php endforeach; ?>

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