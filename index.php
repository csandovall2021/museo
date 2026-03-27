<?php
/**
 * Museo de Entomología Klaus Raven Büller - UNALM
 * Página Principal (Home)
 * Desarrollo | Cesar Sandoval
 */

$page_title = "Inicio";

include 'includes/header.php';
?>

<!-- ═══════════════════════════════════════
     HERO SECTION
════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="container">
    <div class="hero-content">
      <h1>Relanzamiento del 1er Museo Entomológico del Perú</h1>
      <p>Miles de artrópodos peruanos en exhibición.</p>
    </div>
  </div>
  <span class="hero-photo-credit">Foto: XYZ</span>
</section>

<!-- ═══════════════════════════════════════
     INTRO TEXT
════════════════════════════════════════ -->
<section class="intro-section">
  <div class="container">
    <p>
      El Museo de Entomología Klaus Raven Büller es el primer y más importante museo entomológico del Perú,
      albergando miles de artrópodos peruanos en exhibición. Somos parte de la Universidad Nacional Agraria
      La Molina y ofrecemos investigación, educación y servicios especializados a la comunidad científica y al público general.
    </p>
  </div>
</section>

<!-- ═══════════════════════════════════════
     CARDS GRID
════════════════════════════════════════ -->
<section class="cards-section">
  <div class="container">
    <div class="cards-grid">

      <!-- Card 1: Sala de Exhibición -->
      <article class="card card-1">
        <div style="padding: 1.2rem; z-index:1; position:relative;">
          <p class="card-title">Quiero visitar la Sala de Exhibición</p>
        </div>
        <div class="card-img-wrapper">
          <img
            src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80"
            alt="Sala de Exhibición"
            loading="lazy"
          />
        </div>
      </article>

      <!-- Card 2: Arte y Naturaleza -->
      <article class="card card-2">
        <img
          class="card-bg-img"
          src="https://images.unsplash.com/photo-1601459427108-47e20d579a35?w=600&q=80"
          alt="Taller de Arte y Naturaleza"
          loading="lazy"
        />
        <div class="card-overlay">
          <p class="card-title">Quiero llevar un taller de Arte y Naturaleza</p>
        </div>
      </article>

      <!-- Card 3: Investigar -->
      <article class="card card-3">
        <div class="card-top">
          <p class="card-title">Me interesa investigar</p>
          <p class="card-subtitle">Capacitaciones<br>Charlas / Biblioteca<br>Identificación</p>
        </div>
        <div class="card-photo">
          <img
            src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=600&q=80"
            alt="Biblioteca científica"
            loading="lazy"
          />
        </div>
      </article>

      <!-- Card 4: Maestría -->
      <article class="card card-4">
        <div class="card-photo">
          <img
            src="https://images.unsplash.com/photo-1584592487914-a29c64f25887?w=600&q=80"
            alt="Insecto - Maestría en Entomología"
            loading="lazy"
          />
        </div>
        <div class="card-bottom">
          <p class="card-tagline">Todo sobre la</p>
          <p class="card-title">Maestría en Entomología</p>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════
     INSECT PHOTO STRIP
════════════════════════════════════════ -->
<div class="insect-strip">
  <div class="insect-strip-item strip-1">
    <img
      src="https://images.unsplash.com/photo-1580752300992-559f8e0734e0?w=500&q=80"
      alt="Artrópodo 1"
      loading="lazy"
    />
  </div>
  <div class="insect-strip-item strip-2">
    <img
      src="https://images.unsplash.com/photo-1601459427108-47e20d579a35?w=500&q=80"
      alt="Artrópodo 2"
      loading="lazy"
    />
  </div>
  <div class="insect-strip-item strip-3">
    <img
      src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=500&q=80"
      alt="Artrópodo 3"
      loading="lazy"
    />
  </div>
  <div class="insect-strip-item strip-4">
    <img
      src="https://images.unsplash.com/photo-1584592487914-a29c64f25887?w=500&q=80"
      alt="Artrópodo 4"
      loading="lazy"
    />
  </div>
</div>

<?php include 'includes/footer.php'; ?>
