/**
 * ==========================================================================
 * ABOUT PHILOSOPHY
 * Animación Timeline
 * ==========================================================================
 */

class AboutTimeline {
  constructor(selector = ".timeline") {
    this.timeline = document.querySelector(selector);

    if (!this.timeline) return;

    this.init();
  }

  init() {
    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;

          this.timeline.classList.add("is-visible");

          observer.unobserve(this.timeline);
        });
      },

      {
        threshold: 0.3,
      },
    );

    observer.observe(this.timeline);
  }
}

document.addEventListener("DOMContentLoaded", () => {
  new AboutTimeline();
});
