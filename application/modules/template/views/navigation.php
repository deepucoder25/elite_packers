<body>
  <?php
  $megaWhatsappLink = !empty($whatsapphtml) ? $whatsapphtml : '#';

  $ci =& get_instance();
  $class = strtolower($ci->router->fetch_class());
  $method = strtolower($ci->router->fetch_method());
  $segment1 = $ci->uri->segment(1);

  // Determine active tab
  $active_tab = '';
  if (empty($segment1) || $segment1 === 'home' || $class === 'home') {
    $active_tab = 'home';
  } elseif ($class === 'about' || in_array($segment1, ['about-us', 'why-choose-us', 'faqs', 'testimonials'])) {
    $active_tab = 'about';
  } elseif ($class === 'services' || in_array($segment1, ['our-services', 'home-shifting', 'office-relocation', 'car-transportation', 'bike-transportation', 'warehouse-and-storage', 'domestic-relocation', 'international-shifting', 'corporate-shifting', 'intercity-shifting', 'local-shifting', 'logistic-services', 'pet-relocation', 'home-relocation', 'storage-services', 'car-transportation-service'])) {
    $active_tab = 'services';
  } elseif ($class === 'packers_movers' || $segment1 === 'our-branches') {
    $active_tab = 'locations';
  } elseif ($class === 'blog' || $segment1 === 'blog') {
    $active_tab = 'blog';
  } elseif ($class === 'contacts' || $segment1 === 'contact-us') {
    $active_tab = 'contact';
  } elseif ($class === 'tracking' || $segment1 === 'tracking') {
    $active_tab = 'tracking';
  }
  ?>

  <!-- Top Bar (Hidden on Mobile View < 768px) -->
  <div class="top-bar d-none d-md-block">
    <div class="container-fluid px-2 px-sm-3 px-lg-4">
      <div class="d-flex align-items-center justify-content-between top-bar-inner">
        <!-- Left & Center Items in Gradient Bar -->
        <div class="d-flex align-items-center gap-2 gap-lg-3 top-bar-left py-1 flex-grow-1">
          <!-- Email Pill -->
          <a href="<?= $mailhtml ?>" class="top-info-pill d-flex align-items-center gap-1 text-white">
            <i class="bi bi-envelope-fill text-gold"></i> <span class="d-none d-xs-inline"><?= $mail ?></span><span class="d-inline d-xs-none">Email Us</span>
          </a>

          <!-- Location Pill (Desktop & Tablet) -->
          <span class="top-info-pill d-none d-md-inline-flex align-items-center gap-1 text-white">
            <i class="bi bi-geo-alt-fill text-gold"></i> <span><?= $addressRegion ?>, India</span>
          </span>

          <!-- Center Tagline (Desktop XL) -->
          <div class="d-none d-xl-flex align-items-center gap-3 ms-auto me-auto top-bar-tagline text-white">
            <span class="d-flex align-items-center gap-1"><i class="bi bi-shield-check text-gold fs-13"></i> Safe Move</span>
            <span class="top-bar-dot">•</span>
            <span class="d-flex align-items-center gap-1"><i class="bi bi-lock-fill text-gold fs-13"></i> Secure Move</span>
            <span class="top-bar-dot">•</span>
            <span class="d-flex align-items-center gap-1"><i class="bi bi-emoji-smile-fill text-gold fs-13"></i> Stress-Free Move</span>
          </div>

          <!-- Right Action Badges & Phone -->
          <div class="d-flex align-items-center gap-2 ms-auto top-bar-right-items">
            <a href="<?= site_url('our-branches') ?>" class="top-badge-pill white-pill d-none d-sm-inline-flex align-items-center gap-1">
              <i class="bi bi-geo-alt-fill text-danger"></i> <span>Branch Locator</span>
            </a>
            <a href="<?= $phonehtml ?>" class="top-phone-pill d-flex align-items-center gap-1 gap-sm-2 text-white">
              <i class="bi bi-telephone-fill phone-pulse"></i> <span><?= $phone ?></span>
            </a>
          </div>
        </div>

        <!-- Right End Slanted Metallic Gold Badge (Desktop LG+) -->
        <div class="top-bar-gold-badge d-none d-lg-flex align-items-center gap-1">
          <i class="bi bi-star-fill text-dark fs-13"></i> <span>Since <?= $startYear ?></span>
        </div>
      </div>
    </div>
  </div>

  <!-- SEO Friendly SiteNavigationElement Schema -->
  <?php
  $nav_schema = [
    "@context" => "https://schema.org",
    "@graph" => [
      ["@type" => "SiteNavigationElement", "name" => "Home", "url" => site_url()],
      ["@type" => "SiteNavigationElement", "name" => "About Us", "url" => site_url('about-us')],
      ["@type" => "SiteNavigationElement", "name" => "Services", "url" => site_url('our-services')],
      ["@type" => "SiteNavigationElement", "name" => "Locations", "url" => site_url('our-branches')],
      ["@type" => "SiteNavigationElement", "name" => "Blog", "url" => site_url('blog')],
      ["@type" => "SiteNavigationElement", "name" => "Contact Us", "url" => site_url('contact-us')],
      ["@type" => "SiteNavigationElement", "name" => "Track", "url" => site_url('tracking')]
    ]
  ];
  ?>
  <script type="application/ld+json">
  <?= json_encode($nav_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?>
  </script>

  <!-- Main Sticky Header -->
  <header class="main-header" id="mainHeader">
    <div class="container d-flex align-items-center justify-content-between">
      <!-- Brand Logo -->
      <a href="<?= site_url() ?>" class="brand-wrap">
        <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?>" class="brand-logo" loading="lazy">
      </a>



      <!-- Header Action Buttons (Yellow CTA + Hamburger) -->
      <div class="d-flex align-items-center gap-3">
        <!-- Get Free Quote Button -->
        <a href="#" class="btn-quote-gold d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#qteModal">
          <span>Get Free Quote</span>
        </a>

        <!-- Hamburger Icon Button (as requested) -->
        <button class="hamburger d-flex align-items-center justify-content-center" id="openMenu" aria-label="Open navigation menu">
          <span></span>
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full Screen Glassmorphism Blur Menu Overlay (Matching Reference Design) -->
  <div class="mega-overlay" id="megaMenu" aria-label="Main navigation">
    <!-- Fixed Top Right Close Button (X) -->
    <button class="mega-close" id="closeMenu" aria-label="Close navigation menu">
      <i class="bi bi-x-lg"></i>
    </button>

    <div class="mega-container container">
      <!-- Dark Translucent Glass Card -->
      <div class="mega-card-dark-glass">
        <div class="row g-4">
          <!-- Column 1: Main Links & Social -->
          <div class="col-12 col-lg-3 col-xl-3 d-flex flex-column justify-content-between border-end-lg pe-lg-4">
            <div class="d-flex flex-column gap-3 mb-4 mb-lg-0">
              <a href="<?= site_url() ?>" class="overlay-main-link<?= $active_tab === 'home' ? ' active' : '' ?>">
                <i class="bi bi-house-door-fill me-2"></i> Home
              </a>
              <a href="<?= site_url('contact-us') ?>" class="overlay-main-link<?= $active_tab === 'contact' ? ' active' : '' ?>">
                <i class="bi bi-envelope-fill me-2"></i> Contact Us
              </a>
            </div>

            <!-- Social Links with Real Brand Color SVGs -->
            <div class="overlay-social-wrap pt-3">
              <div class="d-flex align-items-center gap-2 flex-wrap">
                <span class="text-white fw-bold fs-15 me-1">Follow us :</span>
                <a href="<?= $facebookhtml ?>" class="overlay-social-icon social-facebook" aria-label="Facebook">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="<?= $twitterhtml ?>" class="overlay-social-icon social-twitter" aria-label="Twitter">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.936 9.936 0 0024 4.59z"/></svg>
                </a>
                <a href="<?= $pinteresthtml ?>" class="overlay-social-icon social-pinterest" aria-label="Pinterest">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/></svg>
                </a>
                <a href="<?= $linkedinhtml ?>" class="overlay-social-icon social-linkedin" aria-label="LinkedIn">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                <a href="<?= $instagramhtml ?>" class="overlay-social-icon social-instagram" aria-label="Instagram">
                  <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
              </div>
            </div>
          </div>

          <!-- Column 2: Company -->
          <div class="col-12 col-sm-4 col-lg-3 col-xl-3">
            <h5 class="overlay-col-title d-flex align-items-center gap-2 mb-3">
              Company <i class="bi bi-chevron-down fs-14"></i>
            </h5>
            <ul class="overlay-menu-list list-unstyled m-0">
              <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-info-circle item-icon"></i> About Us</a></li>
              <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-patch-check item-icon"></i> Why Choose Us</a></li>
              <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-geo-alt item-icon"></i> Our Branches</a></li>
              <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-question-circle item-icon"></i> FAQ</a></li>
              <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chat-square-quote item-icon"></i> Testimonials</a></li>
              <li><a href="<?= site_url('privacy-policy') ?>"><i class="bi bi-shield-lock item-icon"></i> Privacy Policy</a></li>
              <li><a href="<?= site_url('terms-and-conditions') ?>"><i class="bi bi-file-earmark-text item-icon"></i> Terms &amp; Conditions</a></li>
            </ul>
          </div>

          <!-- Column 3: Services -->
          <div class="col-12 col-sm-4 col-lg-3 col-xl-3">
            <h5 class="overlay-col-title d-flex align-items-center gap-2 mb-3">
              Services <i class="bi bi-chevron-down fs-14"></i>
            </h5>
            <ul class="overlay-menu-list list-unstyled m-0">
              <li><a href="<?= site_url('home-relocation') ?>"><i class="bi bi-house-door item-icon"></i> Home Relocation</a></li>
              <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-building item-icon"></i> Office Relocation</a></li>
              <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-car-front item-icon"></i> Car Transportation</a></li>
              <li><a href="<?= site_url('bike-transportation') ?>"><i class="bi bi-bicycle item-icon"></i> Bike Transportation</a></li>
              <li><a href="<?= site_url('packing-and-moving') ?>"><i class="bi bi-box-seam item-icon"></i> Packing &amp; Moving Service</a></li>
              <li><a href="<?= site_url('loading-unloading') ?>"><i class="bi bi-truck item-icon"></i> Loading &amp; Unloading</a></li>
              <li><a href="<?= site_url('storage-services') ?>"><i class="bi bi-archive item-icon"></i> Storage Services</a></li>
              <li><a href="<?= site_url('custom-relocation') ?>"><i class="bi bi-shield-check item-icon"></i> Custom Relocation</a></li>
            </ul>
          </div>

          <!-- Column 4: Media & Guides -->
          <div class="col-12 col-sm-4 col-lg-3 col-xl-3">
            <h5 class="overlay-col-title d-flex align-items-center gap-2 mb-3">
              Media &amp; Guides <i class="bi bi-chevron-down fs-14"></i>
            </h5>
            <ul class="overlay-menu-list list-unstyled m-0">
              <li><a href="<?= site_url('blog') ?>"><i class="bi bi-journal-text item-icon"></i> Our Blog</a></li>
              <li><a href="<?= site_url('photo-gallery') ?>"><i class="bi bi-images item-icon"></i> Photo Gallery</a></li>
              <li><a href="<?= site_url('tracking') ?>"><i class="bi bi-search item-icon"></i> Track Shipment</a></li>
              <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-map item-icon"></i> Branch Network</a></li>
              <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-pencil-square item-icon"></i> Get a Quote</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const openMenu = document.getElementById('openMenu');
    const closeMenu = document.getElementById('closeMenu');
    const megaMenu = document.getElementById('megaMenu');
    const body = document.body;
    const mainHeader = document.getElementById('mainHeader');

    if (openMenu && megaMenu) {
      openMenu.addEventListener('click', () => {
        megaMenu.classList.add('active');
        body.classList.add('menu-open');
      });
    }

    const handleClose = () => {
      if (megaMenu) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    };

    if (closeMenu) closeMenu.addEventListener('click', handleClose);

    // Toggle mobile dropdown accordions
    document.querySelectorAll('.mobile-dropdown-toggle').forEach(button => {
      button.addEventListener('click', (e) => {
        e.preventDefault();
        const parent = button.closest('.mobile-nav-item');

        // Close other open dropdowns
        document.querySelectorAll('.mobile-nav-item.mobile-dropdown').forEach(item => {
          if (item !== parent) {
            item.classList.remove('active');
          }
        });

        parent.classList.toggle('active');
      });
    });

    // Close menu when clicking on backdrop overlay outside card
    if (megaMenu) {
      megaMenu.addEventListener('click', (e) => {
        if (e.target === megaMenu) {
          megaMenu.classList.remove('active');
          body.classList.remove('menu-open');
        }
      });
    }

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && megaMenu && megaMenu.classList.contains('active')) {
        megaMenu.classList.remove('active');
        body.classList.remove('menu-open');
      }
    });

    if (mainHeader) {
      window.addEventListener('scroll', () => {
        mainHeader.classList.toggle('scrolled', window.scrollY > 20);
      });
    }
  </script>