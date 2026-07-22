<?php

// ==========================================================================
// NAVEGACIÓN
// Funciones auxiliares para determinar el enlace activo.
// ==========================================================================

$paginaActual = basename($_SERVER['PHP_SELF']);

/**
 * Devuelve la clase CSS "active" si el enlace corresponde
 * a la página actual.
 *
 * @param string $archivo Nombre del archivo del enlace.
 * @param string $paginaActual Página actualmente cargada.
 * @return string Clase CSS.
 */
function claseActiva(string $archivo, string $paginaActual): string
{
    return $archivo === $paginaActual
        ? 'active'
        : '';
}

/**
 * Devuelve el atributo aria-current cuando el enlace
 * corresponde a la página actual.
 *
 * @param string $archivo Nombre del archivo del enlace.
 * @param string $paginaActual Página actualmente cargada.
 * @return string Atributo ARIA.
 */
function ariaActual(string $archivo, string $paginaActual): string
{
    return $archivo === $paginaActual
        ? 'aria-current="page"'
        : '';
}

$menu = [
    [
        'titulo' => 'Inicio',
        'url' => 'index.php',
        'icono' => 'fa-house',
        'mostrar_footer' => true
    ],
    [
        'titulo' => 'Sobre mí',
        'url' => 'acerca.php',
        'icono' => 'fa-user',
        'mostrar_footer' => true
    ],
    [
        'titulo' => 'Proyectos',
        'url' => 'proyectos.php',
        'icono' => 'fa-folder-open',
        'mostrar_footer' => true
    ],
    [
        'titulo' => 'Diseño Web',
        'url'    => 'diseno-web.php',
        'icono'  => 'fa-code'
    ],
    [
        'titulo' => 'Diseño Gráfico',
        'url'    => 'diseno-grafico.php',
        'icono'  => 'fa-palette',
    ],
    [
        'titulo' => 'Contacto',
        'url'    => 'contacto.php',
        'icono'  => 'fa-envelope'
    ]
];
