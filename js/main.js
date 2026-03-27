/**
 * JavaScript principal del Museo de Entomología
 * Funcionalidades: Menú responsive, búsqueda, scroll suave
 */

document.addEventListener('DOMContentLoaded', function() {
  
  // ═══════════════════════════════════════
  // MENÚ RESPONSIVE (Hamburguesa)
  // ═══════════════════════════════════════
  const navToggle = document.querySelector('.nav-toggle');
  const mainNav = document.querySelector('.main-nav');
  
  if (navToggle && mainNav) {
    navToggle.addEventListener('click', function() {
      const isExpanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', !isExpanded);
      mainNav.classList.toggle('active');
      
      // Animación del icono hamburguesa
      const spans = this.querySelectorAll('span');
      if (!isExpanded) {
        spans[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
        spans[1].style.opacity = '0';
        spans[2].style.transform = 'rotate(-45deg) translate(7px, -6px)';
      } else {
        spans[0].style.transform = 'none';
        spans[1].style.opacity = '1';
        spans[2].style.transform = 'none';
      }
    });
    
    // Cerrar menú al hacer clic en un enlace (móvil)
    const navLinks = mainNav.querySelectorAll('a');
    navLinks.forEach(link => {
      link.addEventListener('click', function() {
        if (window.innerWidth <= 768) {
          mainNav.classList.remove('active');
          navToggle.setAttribute('aria-expanded', 'false');
          const spans = navToggle.querySelectorAll('span');
          spans[0].style.transform = 'none';
          spans[1].style.opacity = '1';
          spans[2].style.transform = 'none';
        }
      });
    });
  }
  
  // ═══════════════════════════════════════
  // SCROLL SUAVE PARA ANCLAS
  // ═══════════════════════════════════════
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;
      
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
  
  // ═══════════════════════════════════════
  // EFECTO DE HEADER AL HACER SCROLL
  // ═══════════════════════════════════════
  const topbar = document.querySelector('.topbar');
  let lastScrollY = window.scrollY;
  
  if (topbar) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 100) {
        topbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.3)';
      } else {
        topbar.style.boxShadow = 'none';
      }
      lastScrollY = window.scrollY;
    });
  }
  
  // ═══════════════════════════════════════
  // ANIMACIÓN DE APARICIÓN AL HACER SCROLL
  // ═══════════════════════════════════════
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };
  
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  // Observar elementos para animación
  document.querySelectorAll('.card, .insect-strip-item').forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
  });
  
  // ═══════════════════════════════════════
  // BÚSQUEDA CON VALIDACIÓN
  // ═══════════════════════════════════════
  const searchForm = document.querySelector('.search-bar');
  if (searchForm) {
    searchForm.addEventListener('submit', function(e) {
      const input = this.querySelector('input[type="text"]');
      const query = input.value.trim();
      
      if (!query) {
        e.preventDefault();
        input.focus();
        input.style.borderColor = 'var(--red)';
        setTimeout(() => {
          input.style.borderColor = 'rgba(255,255,255,0.3)';
        }, 2000);
        return false;
      }
    });
  }
  
  // ═══════════════════════════════════════
  // EFECTO PARALLAX EN HERO (opcional)
  // ═══════════════════════════════════════
  const heroBg = document.querySelector('.hero-bg');
  if (heroBg && window.innerWidth > 768) {
    window.addEventListener('scroll', function() {
      const scrolled = window.scrollY;
      const hero = document.querySelector('.hero');
      if (hero && scrolled < hero.offsetHeight) {
        heroBg.style.transform = `translateY(${scrolled * 0.3}px)`;
      }
    });
  }
  
});
