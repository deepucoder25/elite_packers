<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
include 'city_content.php';
?>

<!-- City About Section (50/50 Split + 2 Full-Width col-12 Light SEO Boxes + Full-Width Counter Bar) -->
<section class="pm-city-about-section">
  <div class="container">
    
    <!-- TOP ROW: 50/50 SPLIT (col-lg-6 Content & col-lg-6 3-Box Collage) -->
    <div class="row align-items-center g-4 g-lg-5">

      <!-- ============ LEFT COLUMN: SEO CONTENT & FEATURES (col-lg-6) ============ -->
      <div class="col-lg-6">
        <span class="pm-states-subtag">
          <i class="bi bi-shield-fill-check text-gold me-1"></i> ISO 9001:2015 Certified Relocation Partner
        </span>
        
        <?= $htmlcontent ?>

        <!-- Transparent Glass Feature Box Grid -->
        <div class="row g-2 g-sm-3 my-3">
          <div class="col-6">
            <div class="pm-feat-trans-box">
              <div class="pm-feat-trans-icon"><i class="bi bi-shield-check"></i></div>
              <span class="pm-feat-trans-text">5-Layer Export Packing</span>
            </div>
          </div>

          <div class="col-6">
            <div class="pm-feat-trans-box">
              <div class="pm-feat-trans-icon"><i class="bi bi-patch-check-fill"></i></div>
              <span class="pm-feat-trans-text">100% Transit Insured</span>
            </div>
          </div>

          <div class="col-6">
            <div class="pm-feat-trans-box">
              <div class="pm-feat-trans-icon"><i class="bi bi-geo-alt-fill"></i></div>
              <span class="pm-feat-trans-text">Live GPS Fleet Tracking</span>
            </div>
          </div>

          <div class="col-6">
            <div class="pm-feat-trans-box">
              <div class="pm-feat-trans-icon"><i class="bi bi-tag-fill"></i></div>
              <span class="pm-feat-trans-text">Zero Hidden Charges</span>
            </div>
          </div>
        </div>

        <!-- Action CTA Buttons (2 Buttons in 1 Row on Mobile) -->
        <div class="d-flex align-items-center gap-2 gap-sm-3 mt-4">
          <a href="<?= $phonehtml ?>" class="btn btn-danger rounded-pill px-3 px-sm-4 py-2 font-weight-bold text-nowrap flex-fill text-center fs-14">
            <i class="bi bi-telephone-fill me-1 me-sm-2"></i> Call <span class="d-none d-md-inline"><?= htmlspecialchars($phone) ?></span><span class="d-inline d-md-none">Now</span>
          </a>
          <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn btn-outline-success rounded-pill px-3 px-sm-4 py-2 font-weight-bold text-nowrap flex-fill text-center fs-14">
            <i class="bi bi-whatsapp me-1 me-sm-2"></i> WhatsApp <span class="d-none d-sm-inline">Quote</span>
          </a>
        </div>
      </div>

      <!-- ============ RIGHT COLUMN: 3 DIFFERENT-SIZED IMAGE BOXES COLLAGE (col-lg-6) ============ -->
      <div class="col-lg-6">
        <div class="pm-city-collage-grid">
          
          <!-- Box 1: Large Main Image (Tall Box on Left) -->
          <div class="pm-collage-box-1">
            <img src="<?= base_url('assets/images/services_modules/loading-unloading.jpg') ?>" alt="Household Relocation in <?= htmlspecialchars($city) ?>" loading="lazy">
            <span class="pm-box-img-tag"><i class="bi bi-house-door-fill text-gold me-1"></i> Household Shifting</span>
          </div>

          <!-- Box 2: Medium Image (Top Right Box) -->
          <div class="pm-collage-box-2">
            <img src="<?= base_url('assets/images/services_modules/bike-transportation.jpg') ?>" alt="Vehicle Shipping in <?= htmlspecialchars($city) ?>" loading="lazy">
            <span class="pm-box-img-tag"><i class="bi bi-truck text-gold me-1"></i> Auto Carrier</span>
          </div>

          <!-- Box 3: Small/Wide Image (Bottom Right Box) -->
          <div class="pm-collage-box-3">
            <img src="<?= base_url('assets/images/services_modules/custom-relocation.jpg') ?>" alt="Packing Services in <?= htmlspecialchars($city) ?>" loading="lazy">
            <span class="pm-box-img-tag"><i class="bi bi-box-seam-fill text-gold me-1"></i> 5-Layer Wrapping</span>
          </div>

          <!-- Floating Center Experience Badge -->
          <div class="pm-collage-center-badge">
            <span class="badge-num"><?= isset($yearsExperience) ? $yearsExperience : (isset($experience) ? $experience : '') ?></span>
            <span class="badge-label">Years Moving<br>Excellence</span>
          </div>

        </div>
      </div>

    </div>

    <!-- ============ FULL-WIDTH SEO BOX 1 (col-12 Enhanced Light Crimson Card) ============ -->
    <div class="row mt-4 mt-lg-5">
      <div class="col-12">
        <div class="pm-city-seo-card-light">
          <!-- Background Watermark -->
          <i class="bi bi-geo-alt-fill pm-seo-watermark"></i>

          <span class="badge bg-danger mb-2 px-3 py-2 rounded-pill fs-12">Local Relocation Insights</span>
          <?= $htmlcontent1 ?>

          <!-- Mini Glass SEO Pills -->
          <div class="row g-2 g-sm-3">
            <div class="col-6 col-md-3">
              <div class="pm-mini-seo-pill">
                <div class="pm-mini-icon"><i class="bi bi-check-lg"></i></div>
                <span class="fw-bold text-dark fs-13">Household Shifting</span>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="pm-mini-seo-pill">
                <div class="pm-mini-icon"><i class="bi bi-check-lg"></i></div>
                <span class="fw-bold text-dark fs-13">Corporate &amp; Office</span>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="pm-mini-seo-pill">
                <div class="pm-mini-icon"><i class="bi bi-check-lg"></i></div>
                <span class="fw-bold text-dark fs-13">Auto Carrier Transport</span>
              </div>
            </div>
            <div class="col-6 col-md-3">
              <div class="pm-mini-seo-pill">
                <div class="pm-mini-icon"><i class="bi bi-check-lg"></i></div>
                <span class="fw-bold text-dark fs-13">Insured Warehousing</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ============ FULL-WIDTH SEO BOX 2 (col-12 Enhanced Light Gold Accent Card) ============ -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="pm-city-seo-card-dark">
          <!-- Background Gold Watermark -->
          <i class="bi bi-shield-check pm-seo-watermark-gold"></i>

          <span class="badge bg-warning text-dark mb-2 px-3 py-2 rounded-pill fs-12 font-weight-bold">Guaranteed Safety &amp; Pricing</span>
          <?= $htmlcontent2 ?>

          <!-- 2 Light Feature Highlight Cards -->
          <div class="row g-3">
            <div class="col-12 col-md-6">
              <div class="pm-dark-feat-box">
                <i class="bi bi-cash-stack feat-icon"></i>
                <div>
                  <strong class="d-block text-dark fs-14">Fixed Upfront Quotation</strong>
                  <small class="text-muted">No hidden loading fees at destination</small>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="pm-dark-feat-box">
                <i class="bi bi-shield-shaded feat-icon"></i>
                <div>
                  <strong class="d-block text-dark fs-14">Transit Appliance Anchoring</strong>
                  <small class="text-muted">Washing machines &amp; fridge transit locked</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ============ FULL-WIDTH ANIMATED COUNTER SECTION (DIRECT CONTROLLER VARIABLES ONLY) ============ -->
<section class="pm-counter-fullwidth-section">
  <div class="container">
    <div class="row g-3 g-lg-4">
      
      <!-- Counter Box 1: Years Experience -->
      <div class="col-6 col-lg-3">
        <div class="pm-counter-card">
          <div class="pm-counter-icon-wrap">
            <i class="bi bi-award-fill"></i>
          </div>
          <div class="pm-counter-number">
            <span class="pm-counter-val"><?= isset($yearsExperience) ? $yearsExperience : (isset($experience) ? $experience : '') ?></span>
          </div>
          <h4 class="pm-counter-title">Years Experience</h4>
          <p class="pm-counter-sub">In <?= htmlspecialchars($city) ?> &amp; Pan-India</p>
        </div>
      </div>

      <!-- Counter Box 2: Happy Clients -->
      <div class="col-6 col-lg-3">
        <div class="pm-counter-card">
          <div class="pm-counter-icon-wrap">
            <i class="bi bi-emoji-smile-fill"></i>
          </div>
          <div class="pm-counter-number">
            <span class="pm-counter-val"><?= isset($happyClients) ? $happyClients : '' ?></span>
          </div>
          <h4 class="pm-counter-title">Happy Clients</h4>
          <p class="pm-counter-sub">Scratch-Free Moves</p>
        </div>
      </div>

      <!-- Counter Box 3: Goods Safety -->
      <div class="col-6 col-lg-3">
        <div class="pm-counter-card">
          <div class="pm-counter-icon-wrap">
            <i class="bi bi-shield-check"></i>
          </div>
          <div class="pm-counter-number">
            <span class="pm-counter-val"><?= isset($secureShifting) ? $secureShifting : '' ?></span>
          </div>
          <h4 class="pm-counter-title">Goods Safety</h4>
          <p class="pm-counter-sub">Fully Insured Transit</p>
        </div>
      </div>

      <!-- Counter Box 4: Branch Nodes -->
      <div class="col-6 col-lg-3">
        <div class="pm-counter-card">
          <div class="pm-counter-icon-wrap">
            <i class="bi bi-truck-front-fill"></i>
          </div>
          <div class="pm-counter-number">
            <span class="pm-counter-val"><?= isset($statesCovered) ? $statesCovered : '' ?></span>
          </div>
          <h4 class="pm-counter-title">Branch Nodes</h4>
          <p class="pm-counter-sub">Pan-India Network</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Scroll-Triggered Counter Animation Script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    let observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                let el = entry.target;
                let raw = el.getAttribute('data-val') || el.textContent;
                let target = parseInt(raw.replace(/\D/g, '')), suffix = raw.includes('%') ? '%' : '+', count = 0;
                if (!target) return;
                let timer = setInterval(() => {
                    count += Math.ceil(target / 35);
                    if (count >= target) { el.textContent = target.toLocaleString() + suffix; clearInterval(timer); }
                    else { el.textContent = count.toLocaleString() + suffix; }
                }, 30);
                obs.unobserve(el);
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.pm-counter-val').forEach(el => {
        el.setAttribute('data-val', el.textContent);
        el.textContent = '0' + (el.textContent.includes('%') ? '%' : '+');
        observer.observe(el);
    });
});
</script>

<?php include 'city_map.php'; ?>
<?php $this->load->view('home/badges_widget'); ?>
<?php include 'city_reviews.php'; ?>
<?php include 'city_faq.php'; ?>
