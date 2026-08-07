<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- City FAQ Accordion Section (Bootstrap 5 Native Accordion - Zero JS Script Block) -->
<section class="pm-faq-section">
  <div class="container">

    <!-- SECTION HEADER -->
    <div class="pm-faq-header-box text-center">
      <span class="pm-city-badge-tag">
        <i class="bi bi-question-circle-fill text-gold me-1"></i> Frequently Asked Questions
      </span>
      <h2 class="pm-city-main-heading">
        Got Questions About Moving in <span class="pm-city-highlight-state"><?= htmlspecialchars($city) ?></span>?
      </h2>
      <p class="pm-city-subtitle">
        Find quick answers regarding packing materials, shifting charges, insurance coverage, and moving timelines in <strong><?= htmlspecialchars($city) ?></strong>.
      </p>
    </div>

    <!-- 2-COLUMN LAYOUT (COL-LG-4 SUPPORT CARD + COL-LG-8 ACCORDION) -->
    <div class="row g-4 align-items-stretch">

      <!-- LEFT COLUMN: 24/7 SUPPORT & ASSISTANCE CARD -->
      <div class="col-lg-4">
        <div class="pm-faq-support-card">
          <div class="pm-faq-support-icon">
            <i class="bi bi-headset"></i>
          </div>
          <h3 class="pm-faq-support-title">Need Instant Moving Assistance?</h3>
          <p class="pm-faq-support-desc">
            Have a custom query regarding your household or office relocation in <strong><?= htmlspecialchars($city) ?></strong>? Our moving experts are ready to assist you 24/7.
          </p>

          <!-- Quick Support Advantage List -->
          <div class="pm-faq-pill-list">
            <div class="pm-faq-pill-item">
              <i class="bi bi-clock-history"></i> 24/7 Dedicated Support
            </div>
            <div class="pm-faq-pill-item">
              <i class="bi bi-file-earmark-check"></i> Free On-Site Inspection
            </div>
            <div class="pm-faq-pill-item">
              <i class="bi bi-shield-check"></i> 100% Damage Protection
            </div>
            <div class="pm-faq-pill-item">
              <i class="bi bi-tag"></i> Transparent Upfront Quote
            </div>
          </div>

          <!-- Quick Action Buttons -->
          <div class="d-flex flex-column gap-2 mt-auto">
            <a href="<?= $phonehtml ?>" class="btn btn-danger rounded-pill px-4 py-2.5 font-weight-bold text-center fs-14 w-100 shadow-sm">
              <i class="bi bi-telephone-fill me-2"></i> Call <?= htmlspecialchars($phone) ?>
            </a>
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn btn-outline-success rounded-pill px-4 py-2.5 font-weight-bold text-center fs-14 w-100">
              <i class="bi bi-whatsapp me-2"></i> WhatsApp Instant Quote
            </a>
          </div>
        </div>
      </div>

      <!-- RIGHT COLUMN: BOOTSTRAP 5 ACCORDION -->
      <div class="col-lg-8">
        <div class="accordion pm-faq-accordion" id="cityFaqAccordion">

          <!-- FAQ Item 1 -->
          <div class="accordion-item pm-faq-item active-faq">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button pm-faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <span class="d-flex align-items-center gap-3">
                  <span class="pm-faq-num-badge">01</span>
                  <span>How are packers and movers charges calculated in <?= htmlspecialchars($city) ?>?</span>
                </span>
                <span class="pm-faq-chevron"><i class="bi bi-chevron-down"></i></span>
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#cityFaqAccordion">
              <div class="pm-faq-body">
                Relocation costs in <strong><?= htmlspecialchars($city) ?></strong> depend on total volume of goods (1/2/3 BHK), distance to destination, floor numbers (elevator vs stairs accessibility), and required packing quality. We provide itemized upfront quotations with zero hidden destination fees.
              </div>
            </div>
          </div>

          <!-- FAQ Item 2 -->
          <div class="accordion-item pm-faq-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button pm-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <span class="d-flex align-items-center gap-3">
                  <span class="pm-faq-num-badge">02</span>
                  <span>What packing materials are used for fragile items and electronics?</span>
                </span>
                <span class="pm-faq-chevron"><i class="bi bi-chevron-down"></i></span>
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#cityFaqAccordion">
              <div class="pm-faq-body">
                We use 5-layer export-grade corrugated boxes, heavy-duty bubble wraps, foam edge protectors, waterproof stretch films, and customized wooden crates for glass tabletops, TVs, refrigerators, and delicate artwork.
              </div>
            </div>
          </div>

          <!-- FAQ Item 3 -->
          <div class="accordion-item pm-faq-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button pm-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <span class="d-flex align-items-center gap-3">
                  <span class="pm-faq-num-badge">03</span>
                  <span>Do you provide live GPS tracking for intercity vehicle &amp; goods transport?</span>
                </span>
                <span class="pm-faq-chevron"><i class="bi bi-chevron-down"></i></span>
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#cityFaqAccordion">
              <div class="pm-faq-body">
                Yes! All our closed container trucks and car carriers operating in <strong><?= htmlspecialchars($city) ?></strong> are fitted with active GPS tracking systems. You receive real-time location tracking updates until safe unloading at your new doorstep.
              </div>
            </div>
          </div>

          <!-- FAQ Item 4 -->
          <div class="accordion-item pm-faq-item">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button pm-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <span class="d-flex align-items-center gap-3">
                  <span class="pm-faq-num-badge">04</span>
                  <span>Is transit insurance included during household relocation?</span>
                </span>
                <span class="pm-faq-chevron"><i class="bi bi-chevron-down"></i></span>
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#cityFaqAccordion">
              <div class="pm-faq-body">
                Yes, <strong><?= htmlspecialchars($company3) ?></strong> provides comprehensive transit insurance covering unforeseen road hazards or accidental damage. Our team assists with immediate claim processing if required.
              </div>
            </div>
          </div>

          <!-- FAQ Item 5 -->
          <div class="accordion-item pm-faq-item">
            <h2 class="accordion-header" id="headingFive">
              <button class="accordion-button pm-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <span class="d-flex align-items-center gap-3">
                  <span class="pm-faq-num-badge">05</span>
                  <span>How many days in advance should I book my move in <?= htmlspecialchars($city) ?>?</span>
                </span>
                <span class="pm-faq-chevron"><i class="bi bi-chevron-down"></i></span>
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#cityFaqAccordion">
              <div class="pm-faq-body">
                We recommend booking 2 to 4 days in advance to reserve your preferred moving slot and crew. However, for urgent relocations in <strong><?= htmlspecialchars($city) ?></strong>, we also offer same-day express shifting services subject to vehicle availability.
              </div>
            </div>
          </div>

          <!-- FAQ Item 6 -->
          <div class="accordion-item pm-faq-item">
            <h2 class="accordion-header" id="headingSix">
              <button class="accordion-button pm-faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <span class="d-flex align-items-center gap-3">
                  <span class="pm-faq-num-badge">06</span>
                  <span>Do you un-pack and reassemble furniture at the new home?</span>
                </span>
                <span class="pm-faq-chevron"><i class="bi bi-chevron-down"></i></span>
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#cityFaqAccordion">
              <div class="pm-faq-body">
                Absolutely! Our full-service relocation package includes complete unloading, unpacking, furniture re-assembly (beds, dining tables, wardrobes), and placing major appliances in your specified rooms before departure.
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>
</section>
