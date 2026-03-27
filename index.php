<?php
/**
 * Museo de Entomología Klaus Raven Büller – UNALM
 * Home / Index
 * 
 * Desarrollo: Cesar Sandoval
 */

// Configuración básica
$site_title = "Museo de Entomología Klaus Raven Büller – UNALM";
$current_page = "home";

// Incluir header (se creará en siguiente paso)
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Museo de Entomología Klaus Raven Büller - Universidad Nacional Agraria La Molina. Miles de artrópodos peruanos en exhibición." />
  <title><?php echo $site_title; ?></title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet" />
  
  <!-- Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

<!-- ═══════════════════════════════════════
     TOP BAR / HEADER
════════════════════════════════════════ -->
<header class="topbar">
  <div class="topbar-logo">
    <div class="logo-circle">
      <!-- Ant / insect icon -->
      <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="32" cy="38" rx="8" ry="12"/>
        <ellipse cx="32" cy="24" rx="6" ry="7"/>
        <ellipse cx="32" cy="14" rx="4" ry="5"/>
        <line x1="32" y1="28" x2="16" y2="22" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
        <line x1="32" y1="32" x2="14" y2="32" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
        <line x1="32" y1="38" x2="16" y2="46" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
        <line x1="32" y1="28" x2="48" y2="22" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
        <line x1="32" y1="32" x2="50" y2="32" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
        <line x1="32" y1="38" x2="48" y2="46" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
        <line x1="30" y1="10" x2="24" y2="4" stroke="white" stroke-width="2" stroke-linecap="round"/>
        <line x1="34" y1="10" x2="40" y2="4" stroke="white" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </div>
  </div>

  <nav>
    <a href="index.php">MUSEO</a>
    <span class="sep">|</span>
    <a href="servicios.php">SERV. ENTOMOLÓGICOS</a>
    <span class="sep">|</span>
    <a href="eventos.php">EVENTOS</a>
    <span class="sep">|</span>
    <a href="sala-exhibicion.php">SALA EXHIBICIÓN</a>
    <span class="sep">|</span>
    <a href="contacto.php">CONTACTO</a>
  </nav>

  <div class="topbar-right">
    <div class="unalm-badge" title="UNALM">
      <!-- UNALM shield -->
      <svg viewBox="0 0 40 48" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 2 L38 10 L38 28 Q38 40 20 46 Q2 40 2 28 L2 10 Z" fill="none" stroke="white" stroke-width="2.5"/>
        <text x="20" y="28" text-anchor="middle" font-size="8" font-weight="bold" fill="white">UNALM</text>
      </svg>
    </div>
  </div>
</header>

<!-- ═══════════════════════════════════════
     HERO
════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-content">
    <h1>Relanzamiento del 1er Museo Entomológico del Perú</h1>
    <p>Miles de artrópodos peruanos en exhibición.</p>
  </div>
  <span class="hero-photo-credit">Foto: Archivo Museo</span>
</section>

<!-- ═══════════════════════════════════════
     SOCIAL / SEARCH BAR
════════════════════════════════════════ -->
<div class="social-bar">
  <div class="social-icons">
    <!-- LinkedIn -->
    <a href="#" aria-label="LinkedIn">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
        <rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>
      </svg>
    </a>
    <!-- Instagram -->
    <a href="#" aria-label="Instagram">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
      </svg>
    </a>
    <!-- Facebook -->
    <a href="#" aria-label="Facebook">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
      </svg>
    </a>
    <!-- X (Twitter) -->
    <a href="#" aria-label="X / Twitter">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
      </svg>
    </a>
    <!-- TikTok -->
    <a href="#" aria-label="TikTok">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.7a8.18 8.18 0 0 0 4.78 1.52V6.77a4.85 4.85 0 0 1-1.01-.08z"/>
      </svg>
    </a>
  </div>

  <form class="search-bar" action="buscar.php" method="GET">
    <input type="text" name="q" placeholder="¿Qué estás buscando?" aria-label="Buscar" />
    <button type="submit" aria-label="Buscar">
      <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
        <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
      </svg>
    </button>
  </form>
</div>

<!-- ═══════════════════════════════════════
     INTRO TEXT
════════════════════════════════════════ -->
<section class="intro-section">
  <p>
    El Museo de Entomología Klaus Raven Büller es el primer y más importante museo entomológico del Perú,
    albergando miles de artrópodos peruanos en exhibición. Somos parte de la Universidad Nacional Agraria
    La Molina y ofrecemos investigación, educación y servicios especializados a la comunidad científica y al público general.
  </p>
</section>

<!-- ═══════════════════════════════════════
     CARDS GRID
════════════════════════════════════════ -->
<section class="cards-section">
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

<!-- ═══════════════════════════════════════
     FOOTER
════════════════════════════════════════ -->
<footer>
  <div class="footer-top">
    <div class="footer-social">
      <a href="#" aria-label="LinkedIn">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
          <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
          <rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/>
        </svg>
      </a>
      <a href="#" aria-label="Instagram">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
        </svg>
      </a>
      <a href="#" aria-label="Facebook">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
          <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
        </svg>
      </a>
      <a href="#" aria-label="X / Twitter">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
          <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
        </svg>
      </a>
      <a href="#" aria-label="TikTok">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
          <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.7a8.18 8.18 0 0 0 4.78 1.52V6.77a4.85 4.85 0 0 1-1.01-.08z"/>
        </svg>
      </a>
    </div>
  </div>

  <div class="footer-main">

    <!-- Brand / Contact -->
    <div class="footer-brand">
      <div class="footer-logo-row">
        <div class="footer-logo-circle">
          <svg viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
            <ellipse cx="32" cy="38" rx="8" ry="12"/>
            <ellipse cx="32" cy="24" rx="6" ry="7"/>
            <ellipse cx="32" cy="14" rx="4" ry="5"/>
            <line x1="32" y1="28" x2="16" y2="22" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            <line x1="32" y1="32" x2="14" y2="32" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            <line x1="32" y1="38" x2="16" y2="46" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            <line x1="32" y1="28" x2="48" y2="22" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            <line x1="32" y1="32" x2="50" y2="32" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
            <line x1="32" y1="38" x2="48" y2="46" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="footer-logo-circle">
          <svg viewBox="0 0 40 48" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 2 L38 10 L38 28 Q38 40 20 46 Q2 40 2 28 L2 10 Z" fill="none" stroke="white" stroke-width="2.5"/>
            <text x="20" y="30" text-anchor="middle" font-size="7" font-weight="bold" fill="white">UNALM</text>
          </svg>
        </div>
      </div>
      <h3>Visítanos:</h3>
      <address>
        Lun - Vie de 9am a 3pm<br>
        (12-1pm descanso)<br><br>
        Reserva tu entrada en:<br>
        <a href="mailto:museoraven@lamolina.edu.pe">museoraven@lamolina.edu.pe</a><br>
        +51 6147800 Anexo 330
      </address>
    </div>

    <!-- Museo -->
    <div class="footer-col">
      <h4>Museo</h4>
      <ul>
        <li><a href="#">Historia</a></li>
        <li><a href="#">Científicos</a></li>
        <li><a href="#">Colecciones</a></li>
        <li><a href="eventos.php">Eventos</a></li>
        <li><a href="#">Talleres</a></li>
      </ul>
    </div>

    <!-- Investigación -->
    <div class="footer-col">
      <h4>Investigación</h4>
      <ul>
        <li><a href="#">Proyectos</a></li>
        <li><a href="#">Publicaciones</a></li>
        <li><a href="#">Base de Datos</a></li>
      </ul>
    </div>

    <!-- Servicios -->
    <div class="footer-col">
      <h4>Servicios</h4>
      <ul>
        <li><a href="servicios.php">Análisis</a></li>
        <li><a href="servicios.php">Evaluaciones</a></li>
        <li><a href="#">Depósito</a></li>
        <li><a href="#">Capacitaciones</a></li>
      </ul>
    </div>

    <!-- Sala Exhibición -->
    <div class="footer-col">
      <h4>Sala Exhibición</h4>
      <ul>
        <li><a href="sala-exhibicion.php">Qué encontrarás</a></li>
        <li><a href="sala-exhibicion.php">Visítanos</a></li>
        <li><a href="#">Tienda</a></li>
        <li><a href="contacto.php" class="strong">Contáctanos</a></li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <span>© <?php echo date('Y'); ?> Museo de Entomología Klaus Raven Büller – UNALM. Todos los derechos reservados.</span>
    <span>Desarrollo: <a href="#" style="color:rgba(255,255,255,0.6)">Cesar Sandoval</a></span>
  </div>
</footer>

<!-- JavaScript -->
<script src="assets/js/main.js"></script>

</body>
</html>
