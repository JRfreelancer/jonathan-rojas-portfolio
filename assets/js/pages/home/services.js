/**
 * ==========================================================================
 * MÓDULO DE SERVICIOS (Intersection Observer con Retraso Escalonado)
 * ==========================================================================
 */

document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".service-card");
  if (!cards.length) return;

  // Constante de control para la separación de tiempo (en milisegundos) entre animaciones
  const STAGGER_DELAY = 120;

  // Instanciación del Observador de Intersección para capturar el scroll del usuario
  const observer = new IntersectionObserver(
    (entries) => {
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

  // Asigna el retraso de transición (stagger effect) basado en su índice antes de iniciar el rastreo
  cards.forEach((card, index) => {
    card.style.transitionDelay = `${index * STAGGER_DELAY}ms`;
    observer.observe(card);
  });
});
