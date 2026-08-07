<!-- FOOTER SECTION (SAME TO SAME REFERENCE DESIGN) -->
<?php
?>
<footer class="footer-section">

  <!-- Top Curved Yellow/Gold Wave Divider -->
  <div class="footer-top-wave-wrap">
    <svg class="footer-top-wave" viewBox="0 0 1440 50" preserveAspectRatio="none">
      <path d="M0,0 Q720,50 1440,0 L1440,50 L0,50 Z" fill="var(--primary-color)"></path>
    </svg>
  </div>

  <!-- Main Crimson Red Footer Content -->
  <div class="footer-main-body py-5">
    <div class="footer-bg-silhouettes" aria-hidden="true">
      <svg class="silhouette-city" viewBox="0 0 500 120" fill="rgba(255,255,255,0.04)">
        <path d="M0 120 V80 H20 V60 H40 V80 H60 V30 H90 V80 H110 V50 H140 V80 H160 V20 H200 V80 H230 V40 H260 V80 H280 V10 H330 V80 H350 V45 H390 V80 H420 V35 H460 V80 H500 V120 Z"/>
      </svg>
      <svg class="silhouette-truck" viewBox="0 0 400 200" fill="rgba(255,255,255,0.05)">
        <path d="M20 140 H60 C60 125 75 110 90 110 C105 110 120 125 120 140 H240 C240 125 255 110 270 110 C285 110 300 125 300 140 H360 V80 H260 V40 H160 V140 H20 Z M260 80 H330 L350 100 V140 H330 C330 125 315 110 300 110 C285 110 270 125 270 140 H120 C120 125 105 110 90 110 C75 110 60 125 60 140 H20 V60 H160 V80 H260 Z"/>
      </svg>
    </div>

    <div class="container relative-z">
      <div class="row g-4 justify-content-between mb-4">
        
        <!-- Column 1: Logo & Company Description & Social Links -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-brand-wrap">
            <a href="<?= site_url() ?>" class="d-inline-block mb-3">
              <img src="<?= base_url() ?>assets/images/logo/logo.png" alt="<?= $company3 ?> Logo" class="footer-logo-img" loading="lazy">
            </a>
            <p class="footer-desc-text">
              <?= $company3 ?> Packers and Movers is your trusted relocation partner, delivering safe, reliable and hassle-free moving services across India.
            </p>
            <div class="footer-social-circle-wrap d-flex align-items-center gap-2 pt-2">
              <a href="<?= $facebookhtml ?>" class="footer-social-btn social-facebook" aria-label="Facebook">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
              </a>
              <a href="<?= $instagramhtml ?>" class="footer-social-btn social-instagram" aria-label="Instagram">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
              </a>
              <a href="<?= $twitterhtml ?>" class="footer-social-btn social-twitter" aria-label="Twitter">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.936 9.936 0 0024 4.59z"/></svg>
              </a>
              <a href="<?= $youtubehtml ?>" class="footer-social-btn social-youtube" aria-label="YouTube">
                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
              </a>
            </div>
          </div>
        </div>

        <!-- Column 2: QUICK LINKS -->
        <div class="col-6 col-md-6 col-lg-3">
          <div class="footer-col-box ps-lg-3">
            <h5 class="footer-column-title">QUICK LINKS</h5>
            <div class="footer-title-line"></div>
            <ul class="footer-links-list list-unstyled m-0">
              <li><a href="<?= site_url() ?>"><i class="bi bi-house-door item-icon"></i> Home</a></li>
              <li><a href="<?= site_url('about-us') ?>"><i class="bi bi-info-circle item-icon"></i> About Us</a></li>
              <li><a href="<?= site_url('why-choose-us') ?>"><i class="bi bi-patch-check item-icon"></i> Why Choose Us</a></li>
              <li><a href="<?= site_url('our-branches') ?>"><i class="bi bi-geo-alt item-icon"></i> Our Branches</a></li>
              <li><a href="<?= site_url('testimonials') ?>"><i class="bi bi-chat-square-quote item-icon"></i> Testimonials</a></li>
              <li><a href="<?= site_url('faqs') ?>"><i class="bi bi-question-circle item-icon"></i> FAQ's</a></li>
              <li><a href="<?= site_url('contact-us') ?>"><i class="bi bi-envelope item-icon"></i> Contact Us</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 3: OUR SERVICES -->
        <div class="col-6 col-md-6 col-lg-3">
          <div class="footer-col-box">
            <h5 class="footer-column-title">OUR SERVICES</h5>
            <div class="footer-title-line"></div>
            <ul class="footer-links-list list-unstyled m-0">
              <li><a href="<?= site_url('home-relocation') ?>"><i class="bi bi-house-gear item-icon"></i> Home Shifting</a></li>
              <li><a href="<?= site_url('office-relocation') ?>"><i class="bi bi-building item-icon"></i> Office Shifting</a></li>
              <li><a href="<?= site_url('car-transportation') ?>"><i class="bi bi-car-front item-icon"></i> Car Transportation</a></li>
              <li><a href="<?= site_url('packing-and-moving') ?>"><i class="bi bi-box-seam item-icon"></i> Packing &amp; Unpacking</a></li>
              <li><a href="<?= site_url('loading-unloading') ?>"><i class="bi bi-truck item-icon"></i> Loading &amp; Unloading</a></li>
              <li><a href="<?= site_url('bike-transportation') ?>"><i class="bi bi-bicycle item-icon"></i> Bike Transportation</a></li>
              <li><a href="<?= site_url('storage-services') ?>"><i class="bi bi-archive item-icon"></i> Warehouse Storage</a></li>
              <li><a href="<?= site_url('custom-relocation') ?>"><i class="bi bi-shield-check item-icon"></i> Custom Relocation</a></li>
            </ul>
          </div>
        </div>

        <!-- Column 4: CONTACT US -->
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-col-box">
            <h5 class="footer-column-title">CONTACT US</h5>
            <div class="footer-title-line"></div>
            <div class="footer-contact-list d-flex flex-column gap-3">
              
              <!-- Addresses Card (Head + Branch Office) -->
              <div class="footer-contact-row d-flex align-items-start gap-3">
                <div class="footer-contact-gold-icon mt-1"><i class="bi bi-geo-alt-fill"></i></div>
                <div class="footer-contact-text w-100">
                  <div class="contact-addr-block pb-2 mb-2 contact-addr-border">
                    <strong class="d-block text-gold mb-1 footer-office-heading">HEAD OFFICE:</strong>
                    <span class="footer-office-address"><?= $address ?></span>
                  </div>
                  <?php if (!empty($branch_address)): ?>
                  <div class="contact-addr-block">
                    <strong class="d-block text-gold mb-1 footer-office-heading">BRANCH OFFICE:</strong>
                    <span class="footer-office-address"><?= $branch_address ?></span>
                  </div>
                  <?php endif; ?>
                </div>
              </div>

              <!-- Phone Numbers Card (Primary + Secondary) -->
              <div class="footer-contact-row d-flex align-items-center gap-3">
                <div class="footer-contact-gold-icon"><i class="bi bi-telephone-fill"></i></div>
                <div class="footer-contact-text d-flex flex-wrap align-items-center gap-2">
                  <a href="<?= $phonehtml ?>" class="text-white text-decoration-none font-weight-bold footer-phone-link"><?= $phone ?></a>
                  <?php if ($phone1): ?>
                  <span class="text-gold opacity-75">•</span>
                  <a href="<?= $phonehtml1 ?>" class="text-white text-decoration-none font-weight-bold footer-phone-link"><?= $phone1 ?></a>
                  <?php endif; ?>
                </div>
              </div>

              <!-- Email Card -->
              <a href="<?= $mailhtml ?>" class="footer-contact-row d-flex align-items-center gap-3 text-white text-decoration-none">
                <div class="footer-contact-gold-icon"><i class="bi bi-envelope-fill"></i></div>
                <div class="footer-contact-text">
                  <span class="footer-mail-text"><?= $mail ?></span>
                </div>
              </a>

            </div>
          </div>
        </div>

      </div>

      <!-- Feature Badges Glass Banner Box (Matching Reference Screenshot) -->
      <div class="footer-feature-glass-box mt-4 mb-2">
        <div class="row g-3 align-items-center justify-content-between text-center text-md-start">
          
          <div class="col-6 col-lg-2-4 feature-col">
            <div class="d-flex align-items-center justify-content-start gap-2 gap-sm-3">
              <div class="feature-gold-badge-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="var(--accent-gold)"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-5.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
              </div>
              <div>
                <h6 class="feature-title mb-0">SAFE &amp; SECURE</h6>
                <small class="feature-desc">Your Goods, Our Responsibility</small>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-2-4 feature-col">
            <div class="d-flex align-items-center justify-content-start gap-2 gap-sm-3">
              <div class="feature-gold-badge-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="var(--accent-gold)"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
              </div>
              <div>
                <h6 class="feature-title mb-0">EXPERIENCED TEAM</h6>
                <small class="feature-desc">Skilled Professionals You Can Trust</small>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-2-4 feature-col">
            <div class="d-flex align-items-center justify-content-start gap-2 gap-sm-3">
              <div class="feature-gold-badge-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="var(--accent-gold)"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
              </div>
              <div>
                <h6 class="feature-title mb-0">ON TIME DELIVERY</h6>
                <small class="feature-desc">We Value Your Time</small>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-2-4 feature-col">
            <div class="d-flex align-items-center justify-content-start gap-2 gap-sm-3">
              <div class="feature-gold-badge-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="var(--accent-gold)"><path d="M20 8h-3V4H3c-1.1 0-2 .9-2 2v11h2c0 1.66 1.34 3 3 3s3-1.34 3-3h6c0 1.66 1.34 3 3 3s3-1.34 3-3h2v-5l-3-4zM6 18.5c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9c-.83 0-1.5-.67-1.5-1.5s.67-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/></svg>
              </div>
              <div>
                <h6 class="feature-title mb-0">DOOR TO DOOR SERVICE</h6>
                <small class="feature-desc">Hassle-Free Moving Assurance</small>
              </div>
            </div>
          </div>

          <div class="col-6 col-lg-2-4 feature-col border-0">
            <div class="d-flex align-items-center justify-content-start gap-2 gap-sm-3">
              <div class="feature-gold-badge-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="var(--accent-gold)"><path d="M12 1a9 9 0 0 0-9 9v7c0 1.66 1.34 3 3 3h3v-8H5v-2a7 7 0 0 1 14 0v2h-4v8h3c1.66 0 3-1.34 3-3v-7a9 9 0 0 0-9-9z"/></svg>
              </div>
              <div>
                <h6 class="feature-title mb-0">24/7 SUPPORT</h6>
                <small class="feature-desc">We're Always Here to Help</small>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Yellow/Gold Copyright Bar (Matching Reference Screenshot) -->
  <div class="footer-gold-bottom">
    <div class="container">
      <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-2 py-3 text-center text-md-start">
        <div class="copyright-text">
          &copy; <?= date('Y') ?> <?= $company3 ?>. All Rights Reserved. &nbsp;|&nbsp;
          <a href="<?= site_url('privacy-policy') ?>" class="footer-bottom-link">Privacy Policy</a> &nbsp;|&nbsp;
          <a href="<?= site_url('terms-and-conditions') ?>" class="footer-bottom-link">Terms &amp; Conditions</a>
        </div>
        <div class="care-tagline fw-bold d-flex align-items-center justify-content-center gap-1">
          <i class="bi bi-heart-fill text-danger me-1"></i> We Move You With Care
        </div>
      </div>
    </div>
  </div>

</footer>

<!-- Right Side Floating "Get Quote" Button -->
<div class="floating-quote-right">
  <button type="button" class="btn-float-quote-gold" data-bs-toggle="modal" data-bs-target="#qteModal">
    <i class="bi bi-lightning-charge-fill me-1"></i> Get Quote
  </button>
</div>

<!-- Left Side Speed-Dial Floating Hamburger Button (Call & WhatsApp on Click) -->
<div class="floating-contact-left" id="floatSpeedDial">
  <div class="float-popout-actions">
    
    <!-- Phone 1 (Primary Call) -->
    <a href="<?= $phonehtml ?>" class="float-popout-btn float-popout-call" title="Call <?= $phone ?>" aria-label="Call <?= $company3 ?> <?= $phone ?>">
      <i class="bi bi-telephone-fill"></i>
      <span class="float-label">Call <?= $phone ?></span>
    </a>

    <!-- Phone 2 (Alternate Call) -->
    <?php if (!empty($phone1)): ?>
    <a href="<?= isset($phonehtml1) && !empty($phonehtml1) ? $phonehtml1 : 'tel:' . preg_replace('/\D+/', '', $phone1) ?>" class="float-popout-btn float-popout-call" title="Call <?= $phone1 ?>" aria-label="Call <?= $company3 ?> <?= $phone1 ?>">
      <i class="bi bi-telephone-fill"></i>
      <span class="float-label">Call <?= $phone1 ?></span>
    </a>
    <?php endif; ?>
    
    <!-- WhatsApp 1 (Primary WhatsApp) -->
    <a href="<?= $whatsapphtml ?>" class="float-popout-btn float-popout-whatsapp" target="_blank" rel="noopener" title="WhatsApp <?= $phone ?>" aria-label="Message <?= $company3 ?> <?= $phone ?> on WhatsApp">
      <i class="bi bi-whatsapp"></i>
      <span class="float-label">WhatsApp <?= $phone ?></span>
    </a>

    <!-- WhatsApp 2 (Alternate WhatsApp) -->
    <?php if (!empty($phone1)): ?>
    <a href="<?= $whatsapphtml1 ?>" class="float-popout-btn float-popout-whatsapp" target="_blank" rel="noopener" title="WhatsApp <?= $phone1 ?>" aria-label="Message <?= $company3 ?> <?= $phone1 ?> on WhatsApp">
      <i class="bi bi-whatsapp"></i>
      <span class="float-label">WhatsApp <?= $phone1 ?></span>
    </a>
    <?php endif; ?>

  </div>

  <!-- Main Floating Hamburger Button Trigger -->
  <button type="button" class="float-hamburger-trigger" id="floatSpeedDialTrigger" aria-label="Quick Contact Actions">
    <i class="bi bi-list icon-hamburger"></i>
    <i class="bi bi-x-lg icon-close"></i>
  </button>
</div>

<?php $this->load->view('contacts/quotemodal'); ?>
<?php $this->load->view('contacts/review_modal'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/form.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const speedDial = document.getElementById('floatSpeedDial');
  const speedDialTrigger = document.getElementById('floatSpeedDialTrigger');

  if (speedDial && speedDialTrigger) {
    speedDialTrigger.addEventListener('click', function(e) {
      e.stopPropagation();
      speedDial.classList.toggle('active');
    });

    document.addEventListener('click', function(e) {
      if (!speedDial.contains(e.target)) {
        speedDial.classList.remove('active');
      }
    });
  }

  // Centralized Global Scroll Entrance Observer for All Sections
  const revealElements = document.querySelectorAll('.services-section, .process-section, .about-section, .review-widget, .faq-section, .footer-col-box, .footer-contact-row, .footer-feature-glass-box, .hero-bottom-feat-card, .service-card, .city-card');
  if ('IntersectionObserver' in window && revealElements.length > 0) {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          entry.target.classList.add('scroll-revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.05, rootMargin: '0px 0px 0px 0px' });

    revealElements.forEach(el => {
      el.classList.add('scroll-reveal-item');
      revealObserver.observe(el);
    });
  } else {
    revealElements.forEach(el => {
      el.classList.add('in-view');
      el.classList.add('scroll-revealed');
    });
  }
});
</script>
</body>

</html>