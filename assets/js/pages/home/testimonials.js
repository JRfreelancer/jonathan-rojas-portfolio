/**
 * ==========================================================================
 * TESTIMONIALS
 * Animaciones de entrada
 * ==========================================================================
 */

document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".testimonial-card");

  if (!cards.length) return;

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry, index) => {
        if (!entry.isIntersecting) return;

        entry.target.style.transitionDelay = `${index * 120}ms`;

        entry.target.classList.add("is-visible");

        observer.unobserve(entry.target);
      });
    },
    {
      threshold: 0.2,
    },
  );

  cards.forEach((card) => observer.observe(card));
});
