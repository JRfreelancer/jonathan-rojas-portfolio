"use strict";

/**
 * ============================================================================
 * FOOTER.JS
 * ----------------------------------------------------------------------------
 * Funcionalidades:
 * - Mostrar/Ocultar el botón "Volver arriba".
 * - Desplazamiento suave al inicio de la página.
 * - Inicialización del componente Footer.
 * ============================================================================
 */

/* ==========================================================================
   Selección de elementos del DOM
========================================================================== */

const btnTop = document.getElementById("btnTop");

/* ==========================================================================
   Mostrar u ocultar el botón según el scroll
========================================================================== */

function toggleScrollButton() {
  if (!btnTop) return;

  if (window.scrollY > 300) {
    btnTop.classList.add("show");
  } else {
    btnTop.classList.remove("show");
  }
}

/* ==========================================================================
   Volver al inicio de la página
========================================================================== */

function scrollToTop() {
  window.scrollTo({
    top: 0,

    behavior: "smooth",
  });
}

/* ==========================================================================
   Inicialización
========================================================================== */

function initFooter() {
  if (!btnTop) return;

  window.addEventListener("scroll", toggleScrollButton);

  btnTop.addEventListener("click", scrollToTop);
}

/* ==========================================================================
   Inicio del componente
========================================================================== */

document.addEventListener("DOMContentLoaded", initFooter);
