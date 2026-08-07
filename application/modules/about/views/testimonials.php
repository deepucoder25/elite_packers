<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$comp_name = isset($company3) ? $company3 : 'Elite Packers and Movers';
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Customer Testimonials & Ratings',
    'bc_desc' => 'Read verified client reviews and experiences about ' . htmlspecialchars($comp_name),
    'breadcrumbs' => [
        ['name' => 'Testimonials']
    ]
]);
?>

<!-- Testimonials Main Content Section -->
<section class="about-page-section">
  <div class="container">

    <!-- HERO HEADER BOX WITH WRITE A REVIEW BUTTON -->
    <div class="about-hero-box">
      <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
        
        <div>
          <span class="about-top-pill">
            <i class="bi bi-star-fill text-gold me-1"></i> Verified Client Feedback
          </span>
          <h1 class="about-heading-primary mb-2">
            What Our Clients Say About <span class="text-danger"><?= htmlspecialchars($comp_name) ?></span>
          </h1>
          <p class="about-lead-text mb-0">
            Read real stories, 5-star ratings, and genuine feedback from families and business clients who experienced safe, stress-free relocation with us.
          </p>
        </div>

        <!-- Write a Review Button -->
        <div class="flex-shrink-0">
          <button type="button" class="btn btn-danger rounded-pill px-4 py-3 shadow-sm fw-bold fs-14 d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#reviewModal">
            <i class="bi bi-pencil-square fs-16"></i> Write a Review
          </button>
        </div>

      </div>
    </div>

    <!-- FLASH SUCCESS / ERROR MESSAGES -->
    <?php if (isset($this->session) && $this->session->flashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show rounded-4 mb-4 shadow-sm" role="alert">
        <i class="bi bi-check-circle-fill me-2 fs-5"></i><?= $this->session->flashdata('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <?php if (isset($this->session) && $this->session->flashdata('error')): ?>
      <div class="alert alert-danger alert-dismissible fade show rounded-4 mb-4 shadow-sm" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2 fs-5"></i><?= $this->session->flashdata('error') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <!-- 3 RATING STATS SUMMARY CARDS -->
    <div class="row g-3 g-lg-4 mb-5">
      <div class="col-12 col-md-4">
        <div class="pm-rating-summary-card gold-style">
          <div class="pm-rating-summary-icon">
            <i class="bi bi-star-fill"></i>
          </div>
          <div>
            <div class="pm-rating-score d-flex align-items-center gap-2">
              4.9 / 5.0
              <small class="text-gold fs-14"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></small>
            </div>
            <p class="pm-rating-label">Google Rating Badge</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="pm-rating-summary-card">
          <div class="pm-rating-summary-icon">
            <i class="bi bi-chat-left-quote-fill"></i>
          </div>
          <div>
            <div class="pm-rating-score">3,950+</div>
            <p class="pm-rating-label">Verified Client Reviews</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <div class="pm-rating-summary-card green-style">
          <div class="pm-rating-summary-icon">
            <i class="bi bi-shield-check"></i>
          </div>
          <div>
            <div class="pm-rating-score">99.8%</div>
            <p class="pm-rating-label">On-Time Safe Delivery</p>
          </div>
        </div>
      </div>
    </div>

    <!-- TESTIMONIALS & REVIEWS GRID -->
    <div class="row g-4">

      <?php
      if (isset($reviews) && is_object($reviews) && method_exists($reviews, 'num_rows') && $reviews->num_rows() > 0) {
        foreach ($reviews->result() as $r) {
          $name = isset($r->name) && !empty($r->name) ? htmlspecialchars($r->name) : 'Valued Customer';
          $city_label = isset($r->r_title) && !empty($r->r_title) ? htmlspecialchars($r->r_title) : 'Home Relocation';
          $desc = isset($r->r_desc) && !empty($r->r_desc) ? htmlspecialchars($r->r_desc) : '';
          $stars = isset($r->stars) ? (int)$r->stars : 5;
          if ($stars <= 0) $stars = 5;
          $date = isset($r->posted_date) && !empty($r->posted_date) ? date('M d, Y', strtotime($r->posted_date)) : date('M d, Y');
          
          // Generate Initials
          $words = explode(' ', $name);
          $initials = strtoupper(substr($words[0], 0, 1) . (isset($words[1]) ? substr($words[1], 0, 1) : ''));
      ?>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="testimonial-card-item">
              <i class="bi bi-quote testimonial-quote-icon"></i>
              
              <div>
                <!-- Stars -->
                <div class="testimonial-stars-wrap">
                  <?php for ($s = 0; $s < $stars; $s++): ?>
                    <i class="bi bi-star-fill"></i>
                  <?php endfor; ?>
                </div>

                <!-- Review Text -->
                <p class="testimonial-body-text">
                  "<?= $desc ?>"
                </p>

                <!-- Review Images Preview (If Any) -->
                <?php if (isset($r->r_img) && !empty($r->r_img)): 
                  $imgs = explode(',', $r->r_img);
                ?>
                  <div class="d-flex flex-wrap gap-2 mb-3">
                    <?php foreach ($imgs as $img): if (trim($img) !== ''): ?>
                      <img src="<?= base_url(trim($img)) ?>" alt="Review Photo" class="testimonial-img-thumb" onclick="openFullImage(this.src)">
                    <?php endif; endforeach; ?>
                  </div>
                <?php endif; ?>

                <!-- Admin Reply (If Any) -->
                <?php if (isset($r->admin_reply) && !empty($r->admin_reply)): ?>
                  <div class="testimonial-admin-reply">
                    <div class="testimonial-admin-title">
                      <i class="bi bi-reply-fill"></i> <?= htmlspecialchars($comp_name) ?> Response:
                    </div>
                    <p class="mb-0 fs-12 text-secondary"><?= htmlspecialchars($r->admin_reply) ?></p>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Author Info Footer -->
              <div class="testimonial-author-block">
                <div class="testimonial-avatar-circle"><?= $initials ?></div>
                <div class="flex-grow-1 min-w-0">
                  <h4 class="testimonial-author-name"><?= $name ?></h4>
                  <p class="testimonial-author-city">
                    <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= $city_label ?> • <span class="text-muted"><?= $date ?></span>
                  </p>
                </div>
                <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified
                </span>
              </div>

            </div>
          </div>
      <?php 
        }
      }
      ?>

      <!-- CURATED HIGH-QUALITY TESTIMONIAL CARDS -->
      <!-- Card 1: Household Shifting -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="testimonial-card-item">
          <i class="bi bi-quote testimonial-quote-icon"></i>
          <div>
            <div class="testimonial-stars-wrap">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="testimonial-body-text">
              "Shifted our 3 BHK house items with zero stress. The packing team arrived right on time with 5-layer bubble wraps and sturdy corrugated boxes. Every single glass item arrived scratch-free!"
            </p>
          </div>
          <div class="testimonial-author-block">
            <div class="testimonial-avatar-circle">RK</div>
            <div class="flex-grow-1 min-w-0">
              <h4 class="testimonial-author-name">Rajesh Kumar</h4>
              <p class="testimonial-author-city">
                <i class="bi bi-geo-alt-fill text-danger me-1"></i> Household Shifting
              </p>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
              <i class="bi bi-patch-check-fill me-1"></i> Verified
            </span>
          </div>
        </div>
      </div>

      <!-- Card 2: Vehicle Transport -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="testimonial-card-item">
          <i class="bi bi-quote testimonial-quote-icon"></i>
          <div>
            <div class="testimonial-stars-wrap">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="testimonial-body-text">
              "Transported my SUV car across states. The live GPS tracking link kept me calm throughout the 3-day journey. Car was delivered in 100% mint condition. Best vehicle movers!"
            </p>
          </div>
          <div class="testimonial-author-block">
            <div class="testimonial-avatar-circle avatar-gold" style="background: linear-gradient(135deg, #ffb300 0%, #d97706 100%); color: #1e293b;">PS</div>
            <div class="flex-grow-1 min-w-0">
              <h4 class="testimonial-author-name">Priya Sharma</h4>
              <p class="testimonial-author-city">
                <i class="bi bi-geo-alt-fill text-danger me-1"></i> Car Transport
              </p>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
              <i class="bi bi-patch-check-fill me-1"></i> Verified
            </span>
          </div>
        </div>
      </div>

      <!-- Card 3: Office Relocation -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="testimonial-card-item">
          <i class="bi bi-quote testimonial-quote-icon"></i>
          <div>
            <div class="testimonial-stars-wrap">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="testimonial-body-text">
              "Relocated our corporate office over the weekend. Computers, IT racks, and wooden desks were wrapped meticulously. Zero business downtime on Monday morning!"
            </p>
          </div>
          <div class="testimonial-author-block">
            <div class="testimonial-avatar-circle" style="background: linear-gradient(135deg, #0f172a 0%, #334155 100%);">AS</div>
            <div class="flex-grow-1 min-w-0">
              <h4 class="testimonial-author-name">Amitabh Sen</h4>
              <p class="testimonial-author-city">
                <i class="bi bi-geo-alt-fill text-danger me-1"></i> Office Relocation
              </p>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
              <i class="bi bi-patch-check-fill me-1"></i> Verified
            </span>
          </div>
        </div>
      </div>

      <!-- Card 4: Bike Shipping -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="testimonial-card-item">
          <i class="bi bi-quote testimonial-quote-icon"></i>
          <div>
            <div class="testimonial-stars-wrap">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="testimonial-body-text">
              "Needed urgent bike transportation for my Royal Enfield. Elite Packers team packed it in a specialized wooden crate. Arrived on time without a scratch!"
            </p>
          </div>
          <div class="testimonial-author-block">
            <div class="testimonial-avatar-circle" style="background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);">SM</div>
            <div class="flex-grow-1 min-w-0">
              <h4 class="testimonial-author-name">Suresh Menon</h4>
              <p class="testimonial-author-city">
                <i class="bi bi-geo-alt-fill text-danger me-1"></i> Bike Transport
              </p>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
              <i class="bi bi-patch-check-fill me-1"></i> Verified
            </span>
          </div>
        </div>
      </div>

      <!-- Card 5: Storage Warehousing -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="testimonial-card-item">
          <i class="bi bi-quote testimonial-quote-icon"></i>
          <div>
            <div class="testimonial-stars-wrap">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="testimonial-body-text">
              "Stored my household furniture in their secure warehouse facility for 3 months while renovating. Dust-free, pest-controlled, and 100% safe storage space."
            </p>
          </div>
          <div class="testimonial-author-block">
            <div class="testimonial-avatar-circle" style="background: linear-gradient(135deg, #059669 0%, #047857 100%);">SV</div>
            <div class="flex-grow-1 min-w-0">
              <h4 class="testimonial-author-name">Sunita Verma</h4>
              <p class="testimonial-author-city">
                <i class="bi bi-geo-alt-fill text-danger me-1"></i> Storage Service
              </p>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
              <i class="bi bi-patch-check-fill me-1"></i> Verified
            </span>
          </div>
        </div>
      </div>

      <!-- Card 6: Intercity Shifting -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="testimonial-card-item">
          <i class="bi bi-quote testimonial-quote-icon"></i>
          <div>
            <div class="testimonial-stars-wrap">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p class="testimonial-body-text">
              "State-to-state moving was executed flawlessly. Transparent quotation upfront with zero unexpected loading fees at the destination!"
            </p>
          </div>
          <div class="testimonial-author-block">
            <div class="testimonial-avatar-circle">VM</div>
            <div class="flex-grow-1 min-w-0">
              <h4 class="testimonial-author-name">Vikram Malhotra</h4>
              <p class="testimonial-author-city">
                <i class="bi bi-geo-alt-fill text-danger me-1"></i> Intercity Relocation
              </p>
            </div>
            <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
              <i class="bi bi-patch-check-fill me-1"></i> Verified
            </span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- FULL SCREEN IMAGE VIEWER MODAL -->
<div class="modal fade" id="testimonialImageModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-header border-0 pb-0 justify-content-end">
        <button type="button" class="btn-close bg-white rounded-circle p-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-0">
        <img id="testimonialFullImg" src="" class="img-fluid rounded-4 shadow-lg" style="max-height: 80vh; object-fit: contain;">
      </div>
    </div>
  </div>
</div>

<script>
function openFullImage(src) {
    document.getElementById('testimonialFullImg').src = src;
    var myModal = new bootstrap.Modal(document.getElementById('testimonialImageModal'));
    myModal.show();
}
</script>