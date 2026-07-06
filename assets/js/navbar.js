"use strict";

document.addEventListener("DOMContentLoaded", () => {
  const menu = document.getElementById("mobileMenu");
  const openBtn = document.getElementById("btnAbrirMenu");
  const closeBtn = document.getElementById("btnCerrarMenu");
  const overlay = document.getElementById("overlay");
  const header = document.querySelector(".site-header");

  if (!menu || !openBtn) return;

  let lastFocusedElement = null;
  let focusableElements = [];
  let firstFocusable = null;
  let lastFocusable = null;

  function updateFocusableElements() {
    focusableElements = Array.from(
      menu.querySelectorAll(
        'a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])',
      ),
    );

    firstFocusable = focusableElements[0] || null;
    lastFocusable = focusableElements[focusableElements.length - 1] || null;
  }

  function openMenu() {
    lastFocusedElement = document.activeElement;

    menu.classList.add("is-open");
    overlay?.classList.add("active");

    menu.setAttribute("aria-hidden", "false");
    openBtn.setAttribute("aria-expanded", "true");

    menu.removeAttribute("inert");

    document.body.style.overflow = "hidden";

    updateFocusableElements();

    requestAnimationFrame(() => {
      firstFocusable?.focus();
    });
  }

  function closeMenu() {
    if (!menu.classList.contains("is-open")) return;

    menu.classList.remove("is-open");
    overlay?.classList.remove("active");

    menu.setAttribute("aria-hidden", "true");
    openBtn.setAttribute("aria-expanded", "false");

    menu.setAttribute("inert", "");

    document.body.style.overflow = "";

    lastFocusedElement?.focus();
  }

  function toggleMenu() {
    menu.classList.contains("is-open") ? closeMenu() : openMenu();
  }

  /* =========================
   EFECTO HEADER AL SCROLL
========================= */

  function handleHeaderScroll() {
    if (!header) return;

    if (window.scrollY > 40) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }
  }

  openBtn.addEventListener("click", toggleMenu);
  closeBtn?.addEventListener("click", closeMenu);
  overlay?.addEventListener("click", closeMenu);

  menu.addEventListener("click", (e) => {
    if (e.target.closest("a")) closeMenu();
  });

  document.addEventListener("keydown", (e) => {
    if (!menu.classList.contains("is-open")) return;

    if (e.key === "Escape") return closeMenu();

    if (e.key !== "Tab") return;

    if (!firstFocusable || !lastFocusable) return;

    if (e.shiftKey && document.activeElement === firstFocusable) {
      e.preventDefault();
      lastFocusable.focus();
    } else if (!e.shiftKey && document.activeElement === lastFocusable) {
      e.preventDefault();
      firstFocusable.focus();
    }
  });

  window.addEventListener("scroll", handleHeaderScroll);

  // Ejecutar al cargar la página
  handleHeaderScroll();
});
