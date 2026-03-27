/**
 * Museo de Entomología Klaus Raven Büller
 * JavaScript Principal
 * Desarrollo: Cesar Sandoval
 */

document.addEventListener('DOMContentLoaded', function() {
  
  // Smooth scroll para enlaces internos
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId !== '#') {
        const target = document.querySelector(targetId);
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth' });
        }
      }
    });
  });

  // Efecto hover en tarjetas - feedback visual adicional
  const cards = document.querySelectorAll('.card');
  cards.forEach(card => {
    card.addEventListener('mouseenter', function() {
      this.style.zIndex = '10';
    });
    card.addEventListener('mouseleave', function() {
      this.style.zIndex = '1';
    });
  });

  // Animación de aparición al hacer scroll
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, observerOptions);

  // Observar elementos para animación
  const animateElements = document.querySelectorAll('.card, .insect-strip-item');
  animateElements.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
  });

  // Formulario de búsqueda
  const searchForm = document.querySelector('.search-bar');
  if (searchForm) {
    searchForm.addEventListener('submit', function(e) {
      const input = this.querySelector('input');
      const query = input.value.trim();
      
      if (!query) {
        e.preventDefault();
        input.focus();
        input.style.borderBottom = '2px solid var(--lime)';
        setTimeout(() => {
          input.style.borderBottom = 'none';
        }, 2000);
      }
    });
  }

  // Header sticky effect (opcional)
  let lastScroll = 0;
  const header = document.querySelector('.topbar');
  
  window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
      header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.3)';
    } else {
      header.style.boxShadow = 'none';
    }
    
    lastScroll = currentScroll;
  });

  console.log('Museo de Entomología - Sitio cargado correctamente');
});
