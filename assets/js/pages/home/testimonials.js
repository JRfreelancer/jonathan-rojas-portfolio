/**
 * ==========================================================================
 * MÓDULO INTEGRADO DE TESTIMONIOS (Observer & Carrousel Slider)
 * ==========================================================================
 */

document.addEventListener("DOMContentLoaded", () => {
  // Inicialización de la animación secuencial de entrada
  initTestimonialsObserver();

  // Inicialización del control y física del carrusel deslizante
  initTestimonialsSlider();
});

/**
 * --------------------------------------------------------------------------
 * 1. ANIMACIÓN DE ENTRADA CON INTERSECTION OBSERVER
 * --------------------------------------------------------------------------
 */
function initTestimonialsObserver() {
  const cards = document.querySelectorAll(".testimonial-card");
  if (!cards.length) return;

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        // Lee el índice guardado en el dataset de la tarjeta para calcular el delay
        const delay = Number(entry.target.dataset.index) * 120;
        entry.target.style.transitionDelay = `${delay}ms`;
        entry.target.classList.add("is-visible");

        // Detiene el rastreo del elemento una vez completada la animación
        observer.unobserve(entry.target);
      });
    },
    { threshold: 0.2 },
  );

  // Asigna el índice dinámico en el dataset antes de observar
  cards.forEach((card, index) => {
    card.dataset.index = index;
    observer.observe(card);
  });
}

/**
 * --------------------------------------------------------------------------
 * 2. CONTROLADOR E INSTANCIACIÓN DEL DESLIZADOR
 * --------------------------------------------------------------------------
 */
function initTestimonialsSlider() {
  const sliderElement = document.querySelector(".testimonials");
  if (!sliderElement) return;

  // Instanciación única del objeto slider (puedes guardarla en una variable global si necesitas destruirla luego)
  window.testimonialsSliderInstance = new TestimonialsSlider(sliderElement);
}

/**
 * --------------------------------------------------------------------------
 * 3. CLASE ORIENTADA A OBJETOS: TESTIMONIALS SLIDER
 * --------------------------------------------------------------------------
 */
class TestimonialsSlider {
  /**
   * Instancia las propiedades elementales, arrays de nodos y temporizadores.
   * @param {HTMLElement} root Nodo contenedor de la sección de testimonios.
   */
  constructor(root) {
    this.root = root;
    this.cardWidth = 0;
    this.gap = 0;

    // Selectores DOM internos
    this.track = root.querySelector(".testimonials-track");
    this.cards = [...root.querySelectorAll(".testimonial-card")];
    this.prevButton = root.querySelector(".testimonial-arrow-prev");
    this.nextButton = root.querySelector(".testimonial-arrow-next");
    this.pagination = root.querySelector(".testimonials-pagination");

    // Controladores de estado e índices
    this.currentIndex = 0;
    this.totalSlides = this.cards.length;

    // Configuración del motor de Autoplay y temporizadores
    this.autoplayDelay = 5000;
    this.autoplayTimer = null;
    this.resizeTimer = null;

    // Estado de gestos Pointer Events
    this.pointerStartX = 0;
    this.pointerCurrentX = 0;
    this.isDragging = false;
    this.swipeThreshold = 60;

    // ESTRUCTURA FUGAS DE MEMORIA: Mapeo de referencias fijas con contexto enlazado
    this.handlers = {
      next: () => this.next(),
      prev: () => this.prev(),
      resize: this.handleResize.bind(this),
      mouseenter: () => this.pause(),
      mouseleave: () => this.resume(),
      focusin: () => this.pause(),
      focusout: () => this.resume(),
      keydown: this.handleKeyDown.bind(this),
      visibility: this.handleVisibilityChange.bind(this),
      pointerdown: this.handlePointerDown.bind(this),
      pointermove: this.handlePointerMove.bind(this),
      pointerup: this.handlePointerUp.bind(this),
    };

    this.init();
  }

  /**
   * Ejecuta la secuencia ordenada de arranque del componente.
   */
  init() {
    if (!this.track || !this.cards.length) return;

    this.createPagination();
    this.bindEvents();
    this.calculateDimensions();
    this.update();
    this.startAutoplay();
  }

  /**
   * Vincula las interacciones utilizando las referencias fijas de 'this.handlers'.
   */
  bindEvents() {
    this.nextButton?.addEventListener("click", this.handlers.next);
    this.prevButton?.addEventListener("click", () => this.prev()); // Si el botón existe se vincula
    this.nextButton &&
      this.nextButton.addEventListener("click", this.handlers.next);
    this.prevButton &&
      this.prevButton.addEventListener("click", this.handlers.prev);

    window.addEventListener("resize", this.handlers.resize);
    this.root.addEventListener("mouseenter", this.handlers.mouseenter);
    this.root.addEventListener("mouseleave", this.handlers.mouseleave);
    this.root.addEventListener("focusin", this.handlers.focusin);
    this.root.addEventListener("focusout", this.handlers.focusout);
    this.root.addEventListener("keydown", this.handlers.keydown);
    document.addEventListener("visibilitychange", this.handlers.visibility);

    this.track.addEventListener("pointerdown", this.handlers.pointerdown);
    this.track.addEventListener("pointermove", this.handlers.pointermove);
    this.track.addEventListener("pointerup", this.handlers.pointerup);
    this.track.addEventListener("pointercancel", this.handlers.pointerup);
  }

  /**
   * Control con Debounce para reajustes de tamaño.
   */
  handleResize() {
    clearTimeout(this.resizeTimer);
    this.resizeTimer = setTimeout(() => {
      this.calculateDimensions();
      this.currentIndex = Math.min(this.currentIndex, this.maxIndex);
      this.update();
    }, 150);
  }

  /**
   * Manejador de accesibilidad de teclas direccionales.
   */
  handleKeyDown(event) {
    switch (event.key) {
      case "ArrowLeft":
        event.preventDefault();
        this.prev();
        break;
      case "ArrowRight":
        event.preventDefault();
        this.next();
        break;
    }
  }

  /**
   * Manejador de optimización por cambio de pestaña.
   */
  handleVisibilityChange() {
    if (document.hidden) {
      this.pause();
    } else {
      this.resume();
    }
  }

  /**
   * Captura inicial del puntero táctil o ratón.
   */
  handlePointerDown(event) {
    this.isDragging = true;
    this.pointerStartX = event.clientX;
    this.pointerCurrentX = event.clientX;
    this.pause();
    this.track.classList.add("is-dragging");
  }

  /**
   * Rastreo del deslizamiento continuo.
   */
  handlePointerMove(event) {
    if (!this.isDragging) return;
    this.pointerCurrentX = event.clientX;
  }

  /**
   * Liberación del puntero y ejecución física de los métodos prev/next según el umbral.
   */
  handlePointerUp() {
    if (!this.isDragging) return;

    const distance = this.pointerCurrentX - this.pointerStartX;

    if (Math.abs(distance) > this.swipeThreshold) {
      if (distance > 0) {
        this.prev();
      } else {
        this.next();
      }
    }

    this.isDragging = false;
    this.track.classList.remove("is-dragging");
    this.resume();
  }

  /**
   * Calcula las dimensiones físicas del riel y las tarjetas.
   */
  calculateDimensions() {
    const firstCard = this.cards[0];
    if (!firstCard) return;

    const styles = window.getComputedStyle(this.track);
    this.gap = parseFloat(styles.columnGap || styles.gap) || 0;
    this.cardWidth =
      firstCard.offsetWidth || firstCard.getBoundingClientRect().width;
  }

  /**
   * Mueve el track a la posición calculada y actualiza la paginación.
   */
  update() {
    const offset = this.currentIndex * (this.cardWidth + this.gap);
    this.track.style.transform = `translateX(-${offset}px)`;
    this.updateActiveDot();
  }

  next() {
    this.currentIndex++;
    if (this.currentIndex > this.maxIndex) {
      this.currentIndex = 0;
    }
    this.update();
  }

  prev() {
    this.currentIndex--;
    if (this.currentIndex < 0) {
      this.currentIndex = this.maxIndex;
    }
    this.update();
  }

  goToSlide(index) {
    if (index < 0 || index > this.maxIndex) return;
    this.currentIndex = index;
    this.update();
  }

  createPagination() {
    if (!this.pagination) return;
    this.pagination.innerHTML = "";

    this.cards.forEach((_, index) => {
      const dot = document.createElement("button");
      dot.className = "testimonial-dot";
      dot.type = "button";
      dot.dataset.index = index;
      dot.setAttribute("aria-label", `Ir al testimonio ${index + 1}`);
      dot.setAttribute("aria-controls", "testimonials-track");

      dot.addEventListener("click", () => this.goToSlide(index));
      this.pagination.append(dot);
    });
  }

  updateActiveDot() {
    if (!this.pagination) return;
    const dots = this.pagination.querySelectorAll(".testimonial-dot");
    dots.forEach((dot, index) => {
      dot.classList.toggle("is-active", index === this.currentIndex);
    });
  }

  get visibleSlides() {
    if (window.innerWidth >= 1200) return 3;
    if (window.innerWidth >= 768) return 2;
    return 1;
  }

  get maxIndex() {
    return Math.max(this.totalSlides - this.visibleSlides, 0);
  }

  startAutoplay() {
    this.pause();
    this.autoplayTimer = setInterval(() => this.next(), this.autoplayDelay);
  }

  pause() {
    clearInterval(this.autoplayTimer);
    this.autoplayTimer = null;
  }

  resume() {
    this.startAutoplay();
  }

  /**
   * MEJORA COMPLETA (MÉTODO DESTROY): Remueve de forma estricta todos los listeners
   * activos y limpia las líneas de tiempo/timers de la memoria global.
   */
  destroy() {
    // Desvinculación de controles de clics y eventos de ventana/documento
    this.nextButton?.removeEventListener("click", this.handlers.next);
    this.prevButton?.removeEventListener("click", this.handlers.prev);
    window.removeEventListener("resize", this.handlers.resize);
    document.removeEventListener("visibilitychange", this.handlers.visibility);

    // Desvinculación de eventos sobre el elemento raízthis.root.removeEventListener("mouseenter", this.handlers.mouseenter);
    this.root.removeEventListener("mouseleave", this.handlers.mouseleave);
    this.root.removeEventListener("focusin", this.handlers.focusin);
    this.root.removeEventListener("focusout", this.handlers.focusout);
    this.root.removeEventListener("keydown", this.handlers.keydown);

    // // Desvinculación de eventos Pointer (Táctil/Mouse) sobre el
    // rielthis.track.removeEventListener("pointerdown", this.handlers.pointerdown);
    this.track.removeEventListener("pointermove", this.handlers.pointermove);
    this.track.removeEventListener("pointerup", this.handlers.pointerup);
    this.track.removeEventListener("pointercancel", this.handlers.pointerup);

    //Limpieza de estados y recolección de basura de timersthis.pause();
    clearTimeout(this.resizeTimer);
    // Opcional: Remoción de la clase por si se destruye en pleno
    arrastrethis.track.classList.remove("is-dragging");
  }
}
