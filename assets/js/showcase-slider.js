/* ==========================================================
   SHOWCASE SLIDER
========================================================== */

document.addEventListener("DOMContentLoaded", () => {
  console.log("Showcase Slider cargado");

  const cards = document.querySelectorAll(".showcase-card");

  console.log(cards);

  if (!cards.length) return;

  cards.forEach((card) => {
    card.addEventListener("click", () => {
      console.log("CLICK");

      cards.forEach((item) => {
        item.classList.remove("active");
      });

      card.classList.add("active");
    });
  });
});
