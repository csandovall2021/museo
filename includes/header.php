<?php
/**
 * Header del Museo de Entomología Klaus Raven Büller
 * Incluye: Topbar con logos y navegación responsive
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($page_title) ? $page_title . ' – ' : ''; ?>Museo de Entomología Klaus Raven Büller – UNALM</title>
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=Source+Sans+3:wght@300;400;600;700&display=swap" rel="stylesheet" />
  
  <!-- Hoja de estilos principal -->
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>

<!-- ═══════════════════════════════════════
     TOP BAR / HEADER
════════════════════════════════════════ -->
<header class="topbar">
  <div class="container">
    
    <!-- Logo Izquierdo (PC) / Centro (Móvil) -->
    <div class="topbar-logo-left">
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

    <!-- Botón Hamburguesa (Móvil/Tablet) -->
    <button class="nav-toggle" aria-label="Abrir menú" aria-expanded="false">
      <span></span>
      <span></span>
      <span></span>
    </button>

    <!-- Navegación -->
    <nav class="main-nav">
      <ul>
        <li><a href="index.php">MUSEO</a></li>
        <li><a href="servicios.php">SERV. ENTOMOLÓGICOS</a></li>
        <li><a href="eventos.php">EVENTOS</a></li>
        <li><a href="sala-exhibicion.php">SALA EXHIBICIÓN</a></li>
        <li><a href="contacto.php">CONTACTO</a></li>
      </ul>
    </nav>

    <!-- Logo Derecho (PC) / Centro (Móvil) -->
    <div class="topbar-logo-right">
      <div class="unalm-badge" title="UNALM">
        <!-- UNALM shield -->
        <svg viewBox="0 0 40 48" xmlns="http://www.w3.org/2000/svg">
          <path d="M20 2 L38 10 L38 28 Q38 40 20 46 Q2 40 2 28 L2 10 Z" fill="none" stroke="white" stroke-width="2.5"/>
          <text x="20" y="28" text-anchor="middle" font-size="8" font-weight="bold" fill="white">UNALM</text>
        </svg>
      </div>
    </div>

  </div>
</header>

<!-- Barra de búsqueda y redes sociales (debajo del header) -->
<div class="social-bar">
  <div class="container">
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

    <form class="search-bar" action="buscar.php" method="get">
      <input type="text" name="q" placeholder="¿Qué estás buscando?" aria-label="Buscar" />
      <button type="submit" aria-label="Buscar">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round">
          <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
        </svg>
      </button>
    </form>
  </div>
</div>

<script src="js/main.js"></script>
