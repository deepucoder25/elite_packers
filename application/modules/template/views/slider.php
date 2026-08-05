<!-- HERO SLIDER SECTION (SAME TO SAME REFERENCE DESIGN) -->
<section class="hero-slider-section" itemscope itemtype="https://schema.org/WPHeader">
  <!-- Dark Gradient Background Overlay -->
  <div class="hero-bg-overlay"></div>

  <div class="container relative-z py-4 py-lg-5">
    <div class="row align-items-center g-4 g-lg-5">

      <!-- Left Column: Hero Text, Feats, Rating & CTAs -->
      <div class="col-12 col-lg-7 text-white">
        
        <!-- Slanted Yellow Tag Badge -->
        <div class="hero-tag-badge">
          <span>SAFE | SECURE | RELIABLE</span>
        </div>

        <!-- Main Title -->
        <h1 class="hero-main-title mt-3" itemprop="name">
          WE MAKE YOUR
          MOVE <span class="text-gold">SIMPLE, SAFE</span>
          <span class="text-gold">AND STRESS-FREE</span>
        </h1>

        <!-- Hero Subtitle -->
        <p class="hero-lead-text my-3" itemprop="description">
          From packing to delivery, we provide end-to-end moving solutions tailored to your needs.
        </p>

        <!-- 4 Circular Icon Badges -->
        <div class="d-flex flex-wrap align-items-center gap-3 gap-md-4 my-4">
          <div class="hero-feat-item d-flex align-items-center gap-2">
            <div class="hero-feat-icon"><i class="bi bi-shield-check text-danger"></i></div>
            <span class="hero-feat-text">Safe<br>Transportation</span>
          </div>
          <div class="hero-feat-item d-flex align-items-center gap-2">
            <div class="hero-feat-icon"><i class="bi bi-box-seam text-danger"></i></div>
            <span class="hero-feat-text">Secure<br>Packing</span>
          </div>
          <div class="hero-feat-item d-flex align-items-center gap-2">
            <div class="hero-feat-icon"><i class="bi bi-people text-danger"></i></div>
            <span class="hero-feat-text">Trained<br>Professionals</span>
          </div>
          <div class="hero-feat-item d-flex align-items-center gap-2">
            <div class="hero-feat-icon"><i class="bi bi-truck text-danger"></i></div>
            <span class="hero-feat-text">On-Time<br>Delivery</span>
          </div>
        </div>

        <!-- Google Review Badge Card -->
        <div class="hero-google-card d-inline-flex align-items-center gap-3 p-3 rounded-4 mb-4">
          <div class="google-logo-wrap">
            <svg width="32" height="32" viewBox="0 0 24 24">
              <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
              <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.11-6.72-4.96H1.27v3.13C3.25 21.3 7.31 24 12 24z"/>
              <path fill="#FBBC05" d="M5.28 14.24c-.25-.72-.38-1.49-.38-2.24s.13-1.52.38-2.24V6.63H1.27C.46 8.24 0 10.06 0 12s.46 3.76 1.27 5.37l4.01-3.13z"/>
              <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.31 0 3.25 2.7 1.27 6.63l4.01 3.13c.95-2.85 3.6-4.96 6.72-4.96z"/>
            </svg>
          </div>
          <div>
            <div class="d-flex align-items-center gap-2">
              <strong class="fs-5 text-dark">4.8</strong>
              <div class="text-warning fs-6">★★★★★</div>
            </div>
            <small class="text-muted fw-semibold">Based on 1,250+ Google Reviews</small>
          </div>
        </div>

        <!-- CTA Buttons Row -->
        <div class="d-flex flex-wrap align-items-center gap-3">
          <a href="#" class="btn-hero-red" data-bs-toggle="modal" data-bs-target="#qteModal">
            <i class="bi bi-telephone-fill me-2"></i> Get Free Quote
          </a>
          <a href="<?= site_url('about-us') ?>" class="btn-hero-glass">
            <i class="bi bi-info-circle-fill me-2 text-gold"></i> How We Work
          </a>
        </div>

      </div>

      <!-- Right Column: Loaded Quote Form View -->
      <div class="col-12 col-lg-5">
        <?php $this->load->view('contacts/quoteform.php'); ?>
      </div>

    </div>

    <!-- Bottom Feature Strip (Ultra-Attractive Glass Banner) -->
    <div class="hero-bottom-feature-box mt-5">
      <div class="row g-3 align-items-center justify-content-between">
        
        <div class="col-6 col-lg-3">
          <div class="hero-bottom-feat-card d-flex align-items-center gap-3">
            <div class="hero-gold-badge-circle">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="#000000"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-5.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
            </div>
            <div>
              <h6 class="hero-bottom-feat-title mb-0">Safe &amp; Secure</h6>
              <small class="hero-bottom-feat-desc">Your belongings are 100% safe with us</small>
            </div>
          </div>
        </div>

        <div class="col-6 col-lg-3">
          <div class="hero-bottom-feat-card d-flex align-items-center gap-3">
            <div class="hero-gold-badge-circle">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="#000000"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
            </div>
            <div>
              <h6 class="hero-bottom-feat-title mb-0">On-Time Delivery</h6>
              <small class="hero-bottom-feat-desc">We value your time and deliver on time</small>
            </div>
          </div>
        </div>

        <div class="col-6 col-lg-3">
          <div class="hero-bottom-feat-card d-flex align-items-center gap-3">
            <div class="hero-gold-badge-circle">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="#000000"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
            </div>
            <div>
              <h6 class="hero-bottom-feat-title mb-0">Trained Professionals</h6>
              <small class="hero-bottom-feat-desc">Experienced &amp; skilled team for a hassle-free move</small>
            </div>
          </div>
        </div>

        <div class="col-6 col-lg-3">
          <div class="hero-bottom-feat-card d-flex align-items-center gap-3">
            <div class="hero-gold-badge-circle">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="#000000"><path d="M12 1a9 9 0 0 0-9 9v7c0 1.66 1.34 3 3 3h3v-8H5v-2a7 7 0 0 1 14 0v2h-4v8h3c1.66 0 3-1.34 3-3v-7a9 9 0 0 0-9-9z"/></svg>
            </div>
            <div>
              <h6 class="hero-bottom-feat-title mb-0">24/7 Support</h6>
              <small class="hero-bottom-feat-desc">We are always here to assist you</small>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>
