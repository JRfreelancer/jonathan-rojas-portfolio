document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".technology-card");

  if (!cards.length) return;

  // Respeta usuarios que prefieren reducir animaciones
  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)",
  ).matches;

  if (prefersReducedMotion) {
    cards.forEach((card) => card.classList.add("is-visible"));
    return;
  }

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      });
    },
    {
      threshold: 0.15,
    },
  );

  cards.forEach((card) => observer.observe(card));
});
