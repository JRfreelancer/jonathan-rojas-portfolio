/**
 * ==========================================================================
 * MÓDULO DE TECNOLOGÍAS (Intersection Observer con Accesibilidad)
 * ==========================================================================
 */

document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".technology-card");
  if (!cards.length) return;

  // ACCESIBILIDAD: Respeta estrictamente a los usuarios que prefieren reducir animaciones en su S.O.
  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;

  if (prefersReducedMotion) {
    // Si prefiere movimiento reducido, muestra las tarjetas de inmediato saltando la animación
    cards.forEach((card) => card.classList.add("is-visible"));
    return;
  }

  // Instanciación del Observador de Intersección para cargas secuenciales fluidas
  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        // Inyecta la clase visual activa para disparar las transiciones CSS
        entry.target.classList.add("is-visible");

        // Remueve la tarjeta del rastreador de memoria de forma inmediata
        observer.unobserve(entry.target);
      });
    },
    {
      threshold: 0.15, // El elemento debe asomarse un 15% en el viewport para activarse
    },
  );

  // Inicializa el rastreo dinámico sobre cada tarjeta técnica indexada
  cards.forEach((card) => observer.observe(card));
});
