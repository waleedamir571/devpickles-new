<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Software and Mobile App Development Company | Dev Pickles</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@700&family=Montserrat:wght@400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/smallfan.png">
    
  <style>
    /* Dropdown Menu - Force Load */
    .nav-dropdown {
      position: relative !important;
    }
    
    .nav-dropdown .dropdown-menu {
      position: absolute !important;
      top: 100% !important;
      left: 50% !important;
      transform: translateX(-50%) !important;
      background: #043c2f !important;
      border-radius: 12px !important;
      padding: 12px 0 !important;
      min-width: 240px !important;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25) !important;
      display: none !important;
      z-index: 9999 !important;
      margin-top: 0px !important;
      list-style: none !important;
    }
    
    .nav-dropdown:hover .dropdown-menu,
    .dropdown-menu:hover {
      display: block !important;
    }
    
    .nav-dropdown .dropdown-menu li {
      list-style: none !important;
    }
    
    .nav-dropdown .dropdown-menu .dropdown-item {
      display: block !important;
      padding: 12px 24px !important;
      font-family: 'Montserrat', sans-serif !important;
      font-size: 16px !important;
      font-weight: 500 !important;
      color: #f3f4ec !important;
      transition: all 0.2s ease !important;
      white-space: nowrap !important;
      text-decoration: none !important;
    }
    
    .nav-dropdown .dropdown-menu .dropdown-item:hover {
      background: transparent !important;
      padding-left: 28px !important;
      color: #81f774 !important;
    }
  </style>
  
  <script>
    // Dropdown menu ko force show karo on hover
    document.addEventListener('DOMContentLoaded', function() {
      const dropdown = document.querySelector('.nav-dropdown');
      const menu = document.querySelector('.dropdown-menu');
      
      if (dropdown && menu) {
        let hideTimeout;
        
        // Show menu when hovering on dropdown
        dropdown.addEventListener('mouseenter', function() {
          clearTimeout(hideTimeout);
          menu.style.display = 'block';
        });
        
        // Keep menu visible when hovering on menu itself
        menu.addEventListener('mouseenter', function() {
          clearTimeout(hideTimeout);
          menu.style.display = 'block';
        });
        
        // Hide with delay when leaving dropdown
        dropdown.addEventListener('mouseleave', function(e) {
          // Check if moving to menu
          hideTimeout = setTimeout(function() {
            if (!menu.matches(':hover')) {
              menu.style.display = 'none';
            }
          }, 100);
        });
        
        // Hide when leaving menu
        menu.addEventListener('mouseleave', function() {
          hideTimeout = setTimeout(function() {
            menu.style.display = 'none';
          }, 100);
        });
      }
    });
  </script>

</head>

<body>

  <!-- LOADER -->
  <div class="page-loader" id="pageLoader">
    <div class="loader-body">
      <span class="loader-brand">DEVPICKLES</span>
      <div class="loader-bar">
        <div class="loader-fill"></div>
      </div>
    </div>
  </div>
  <div id="scrollProg"></div>

  <!-- ========================================================
     S1 — HERO
======================================================== -->
  <section class="hero" id="home">
    <nav class="hero-nav" id="mainNav">
      <div class="nav-wrap">
        <a class="nav-brand" href="#home">

          <div class="logo-stack">
            <img src="assets/images/logo-sm1.png" alt="" class="logo-base">
            <img src="assets/images/logo-sm2.png" alt="" class="logo-spin">
          </div>
           <!-- <img src="assets/images/logo2.gif" alt="" class="nav-brand-icon" onerror="this.style.display='none'"> -->
          <span class="nav-brand-name">DevPickles</span>
        </a>
        <button class="hamburger" id="hamburger"><span></span><span></span><span></span></button>
        <div class="nav-center" id="navCenter">
          <ul class="nav-items">
            <li><a href="index" class="ni active">Home</a></li>
            <li class="nav-dropdown">
              <a href="#" class="ni">Services</a>
              <ul class="dropdown-menu">
                <li><a href="mobile-app-development" class="dropdown-item">Mobile App Development</a></li>
                <li><a href="web-development" class="dropdown-item">Web Development</a></li>
              </ul>
            </li>
            <li><a href="about-us" class="ni">About us</a></li>
            <li><a href="#contact" class="ni">Contact us</a></li>
          </ul>
        </div>
        <div class="nav-actions" id="navActions">
          <a href="tel:+9493233170" class="btn-nav-call"><i class="fa-solid fa-phone"></i> Call Us</a>
          <a href="#contact" class="btn-nav-inquire">Inquire Now</a>
        </div>
      </div>
    </nav>