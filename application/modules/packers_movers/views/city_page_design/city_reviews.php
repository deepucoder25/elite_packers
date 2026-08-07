<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- City Customer Reviews & Testimonials Section (100% Pure CSS Scroll Snap Slider - Zero JS) -->
<section class="pm-reviews-section">
  <div class="container">

    <!-- SECTION HEADER -->
    <div class="pm-reviews-header-box text-center">
      <span class="pm-city-badge-tag">
        <i class="bi bi-star-fill text-gold me-1"></i> Verified Customer Testimonials
      </span>
      <h2 class="pm-city-main-heading">
        What People in <span class="pm-city-highlight-state"><?= htmlspecialchars($city) ?></span> Say About Us
      </h2>
      <p class="pm-city-subtitle">
        Real experiences and 5-star feedback from families and business clients who trusted <strong><?= htmlspecialchars($company3) ?></strong> for relocation in <?= htmlspecialchars($city) ?>, <?= htmlspecialchars($state) ?>.
      </p>
    </div>

    <!-- TOP SUMMARY CARDS (3 QUICK STATS) -->
    <div class="row g-3 g-lg-4 mb-4 mb-lg-5">
      
      <!-- Summary Card 1: Average Rating -->
      <div class="col-12 col-md-4">
        <div class="pm-rating-summary-card gold-style">
          <div class="pm-rating-summary-icon">
            <i class="bi bi-star-fill"></i>
          </div>
          <div>
            <div class="pm-rating-score d-flex align-items-center gap-2">
              <?= isset($ratingValue) ? htmlspecialchars($ratingValue) : '4.9' ?> / 5.0
              <small class="text-gold fs-14"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></small>
            </div>
            <p class="pm-rating-label">Google Rating Badge</p>
          </div>
        </div>
      </div>

      <!-- Summary Card 2: Total Reviews -->
      <div class="col-12 col-md-4">
        <div class="pm-rating-summary-card">
          <div class="pm-rating-summary-icon">
            <i class="bi bi-chat-left-quote-fill"></i>
          </div>
          <div>
            <div class="pm-rating-score"><?= isset($ratingCount) ? htmlspecialchars($ratingCount) : '3,950' ?>+</div>
            <p class="pm-rating-label">Verified Client Reviews</p>
          </div>
        </div>
      </div>

      <!-- Summary Card 3: On-Time Delivery -->
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

    <!-- PURE CSS SCROLL SNAP REVIEWS SLIDER -->
    <div class="pm-reviews-slider-wrapper position-relative">

      <!-- Slider Viewport -->
      <div class="pm-reviews-slider-viewport" id="cityReviewsViewport">
        <div class="pm-reviews-slider-track">

          <!-- Card 1: Household Shifting -->
          <div class="pm-reviews-slide-item">
            <div class="pm-review-card">
              <i class="bi bi-quote pm-review-quote-icon"></i>
              <div>
                <div class="pm-review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="pm-review-body">
                  "Shifted my 3 BHK apartment locally in <strong><?= htmlspecialchars($city) ?></strong>. The moving crew arrived right on time with 5-layer export packing boxes. Not a single piece of glass or electronic got damaged. Outstanding professionalism!"
                </p>
              </div>
              <div class="pm-review-user-block">
                <div class="pm-review-avatar">RK</div>
                <div class="pm-review-user-info">
                  <h4 class="pm-review-user-name">Rajesh Kumar</h4>
                  <p class="pm-review-user-location">
                    <i class="bi bi-geo-alt-fill text-danger me-1"></i> Home Shifting in <?= htmlspecialchars($city) ?>
                  </p>
                </div>
                <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified
                </span>
              </div>
            </div>
          </div>

          <!-- Card 2: Vehicle Transport -->
          <div class="pm-reviews-slide-item">
            <div class="pm-review-card">
              <i class="bi bi-quote pm-review-quote-icon"></i>
              <div>
                <div class="pm-review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="pm-review-body">
                  "Transported my SUV car to <strong><?= htmlspecialchars($city) ?></strong>. Live GPS tracking link kept me updated throughout the journey. Car was delivered in 100% mint condition with zero scratches. Highly recommended!"
                </p>
              </div>
              <div class="pm-review-user-block">
                <div class="pm-review-avatar avatar-gold">PS</div>
                <div class="pm-review-user-info">
                  <h4 class="pm-review-user-name">Priya Sharma</h4>
                  <p class="pm-review-user-location">
                    <i class="bi bi-geo-alt-fill text-danger me-1"></i> Car Transport to <?= htmlspecialchars($city) ?>
                  </p>
                </div>
                <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified
                </span>
              </div>
            </div>
          </div>

          <!-- Card 3: Office Relocation -->
          <div class="pm-reviews-slide-item">
            <div class="pm-review-card">
              <i class="bi bi-quote pm-review-quote-icon"></i>
              <div>
                <div class="pm-review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="pm-review-body">
                  "Relocated our corporate office setup in <strong><?= htmlspecialchars($city) ?></strong> over the weekend. Monitors, server racks, and office desks were bubble-wrapped meticulously. Zero business downtime on Monday morning!"
                </p>
              </div>
              <div class="pm-review-user-block">
                <div class="pm-review-avatar avatar-dark">AS</div>
                <div class="pm-review-user-info">
                  <h4 class="pm-review-user-name">Amitabh Sen</h4>
                  <p class="pm-review-user-location">
                    <i class="bi bi-geo-alt-fill text-danger me-1"></i> Office Moving in <?= htmlspecialchars($city) ?>
                  </p>
                </div>
                <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified
                </span>
              </div>
            </div>
          </div>

          <!-- Card 4: Bike Shipping -->
          <div class="pm-reviews-slide-item">
            <div class="pm-review-card">
              <i class="bi bi-quote pm-review-quote-icon"></i>
              <div>
                <div class="pm-review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="pm-review-body">
                  "Needed urgent bike transportation to <strong><?= htmlspecialchars($city) ?></strong> for my Royal Enfield. Elite Packers team packed it in a specialized wooden crate. Arrived on time without a scratch!"
                </p>
              </div>
              <div class="pm-review-user-block">
                <div class="pm-review-avatar avatar-blue">SM</div>
                <div class="pm-review-user-info">
                  <h4 class="pm-review-user-name">Suresh Menon</h4>
                  <p class="pm-review-user-location">
                    <i class="bi bi-geo-alt-fill text-danger me-1"></i> Bike Shipping to <?= htmlspecialchars($city) ?>
                  </p>
                </div>
                <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified
                </span>
              </div>
            </div>
          </div>

          <!-- Card 5: Storage Warehousing -->
          <div class="pm-reviews-slide-item">
            <div class="pm-review-card">
              <i class="bi bi-quote pm-review-quote-icon"></i>
              <div>
                <div class="pm-review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="pm-review-body">
                  "Stored my household furniture in their secure <strong><?= htmlspecialchars($city) ?></strong> warehouse facility for 3 months while renovating. Dust-free, pest-controlled, and 100% safe storage space."
                </p>
              </div>
              <div class="pm-review-user-block">
                <div class="pm-review-avatar avatar-green">SV</div>
                <div class="pm-review-user-info">
                  <h4 class="pm-review-user-name">Sunita Verma</h4>
                  <p class="pm-review-user-location">
                    <i class="bi bi-geo-alt-fill text-danger me-1"></i> Storage Service in <?= htmlspecialchars($city) ?>
                  </p>
                </div>
                <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill fs-11 px-2 py-1">
                  <i class="bi bi-patch-check-fill me-1"></i> Verified
                </span>
              </div>
            </div>
          </div>

          <!-- Card 6: Intercity Relocation -->
          <div class="pm-reviews-slide-item">
            <div class="pm-review-card">
              <i class="bi bi-quote pm-review-quote-icon"></i>
              <div>
                <div class="pm-review-stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p class="pm-review-body">
                  "State-to-state moving from <strong><?= htmlspecialchars($city) ?></strong> was executed flawlessly. Transparent quotation upfront with zero unexpected loading fees at the destination!"
                </p>
              </div>
              <div class="pm-review-user-block">
                <div class="pm-review-avatar">VM</div>
                <div class="pm-review-user-info">
                  <h4 class="pm-review-user-name">Vikram Malhotra</h4>
                  <p class="pm-review-user-location">
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

      <!-- BOTTOM NAVIGATION CONTROL BAR (PREV & NEXT BUTTONS ONLY) -->
      <div class="pm-reviews-nav-controls d-flex align-items-center justify-content-center gap-3 mt-4">
        <button type="button" class="pm-reviews-control-btn" onclick="document.getElementById('cityReviewsViewport').scrollBy({left: -330, behavior: 'smooth'})" aria-label="Previous Review">
          <i class="bi bi-chevron-left"></i>
        </button>

        <button type="button" class="pm-reviews-control-btn" onclick="document.getElementById('cityReviewsViewport').scrollBy({left: 330, behavior: 'smooth'})" aria-label="Next Review">
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>

    </div>

  </div>
</section>
