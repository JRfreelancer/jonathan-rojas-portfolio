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
function claseActiva($archivo, $paginaActual)
{
    return $archivo === $paginaActual ? 'active' : '';
}

/**
 * Devuelve el atributo aria-current cuando el enlace
 * corresponde a la página actual.
 *
 * @param string $archivo Nombre del archivo del enlace.
 * @param string $paginaActual Página actualmente cargada.
 * @return string Atributo ARIA.
 */
function ariaActual($archivo, $paginaActual)
{
    return $archivo === $paginaActual ? 'aria-current="page"' : '';
}