<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load Services Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Storage Services & Warehousing Solutions',
    'bc_desc' => 'Secure, climate-controlled & CCTV monitored household & commercial warehousing',
    'breadcrumbs' => [
        ['name' => 'Storage Services']
    ]
]);
?>

<!-- MAIN STORAGE SERVICES CONTENT SECTION -->
<section class="bike-service-section mb-5 pb-5">
    
    <!-- Top SVG Wavy Vector Shape -->
    <div class="bike-wavy-top-bg">
        <svg viewBox="0 0 1440 100" preserveAspectRatio="none">
            <path d="M0,0 C320,80 420,0 740,50 C1060,100 1180,10 1440,50 L1440,0 L0,0 Z" fill="rgba(186, 6, 6, 0.03)"></path>
            <path d="M0,0 C450,60 600,10 900,70 C1200,20 1350,60 1440,30 L1440,0 L0,0 Z" fill="rgba(255, 179, 0, 0.04)"></path>
        </svg>
    </div>

    <div class="container position-relative z-2">
        <div class="row g-4">
            
            <!-- LEFT COLUMN: MAIN CONTENT (8 COLS) -->
            <div class="col-lg-8">
                <div class="bike-main-card">
                    
                    <!-- 1. FEATURED IMAGE FIRST -->
                    <div class="bike-normal-image-box mb-4">
                        <img src="<?= base_url('assets/images/services_modules/storage-services.jpg') ?>" alt="Storage and Warehousing Services - <?= htmlspecialchars($company3) ?>" class="img-fluid rounded-4 shadow-sm w-100" loading="lazy">
                    </div>

                    <!-- 2. CONTENT FOLLOWING THE IMAGE -->
                    <div class="bike-intro-header mb-4">
                        <span class="bike-sub-tag">
                            <i class="bi bi-building-lock text-gold me-1"></i> 24/7 Monitored Warehousing
                        </span>
                        <h2 class="service-section-title mt-2">Secure Household &amp; Commercial Warehousing</h2>
                        <p class="about-service-text">
                            Whether you need temporary storage during home renovation, long-term warehousing for overseas assignments, or commercial inventory space, <strong><?= htmlspecialchars($company3) ?></strong> offers state-of-the-art secure storage units. Our facilities are equipped with 24/7 CCTV surveillance, biometric access control, fire protection systems, and regular pest control treatments.
                        </p>
                    </div>

                    <!-- 3. FEATURE PILLARS GRID (4 LIGHT CARDS) -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-camera-video-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">24/7 CCTV</span>
                                    <small class="feat-light-sub">Live Security</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-bug-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Pest Treated</span>
                                    <small class="feat-light-sub">Clean Units</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-moisture"></i></div>
                                <div>
                                    <span class="feat-light-label">Climate Control</span>
                                    <small class="feat-light-sub">Moisture Free</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-calendar-check-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Flexible Rental</span>
                                    <small class="feat-light-sub">Short &amp; Long Term</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 1: STORAGE TYPES OFFERED (4-CARD GRID) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Storage Options</span>
                            <h3 class="bike-block-title">Warehousing Solutions We Offer</h3>
                        </div>

                        <div class="row g-3">
                            <!-- 1. Household Goods Storage -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-house-heart-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Household Furniture Storage</h4>
                                        <p class="cat-desc">Private palletized storage bays for furniture, beds, appliances, and personal items wrapped in moisture-proof film.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Private Storage Bay</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Corporate Document Archiving -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-file-earmark-lock-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Corporate Document Archiving</h4>
                                        <p class="cat-desc">Fireproof, barcode-indexed filing vaults for storing legal, tax, and corporate audit records securely.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Barcode Retrieval</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Commercial Inventory Storage -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-boxes"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Commercial Inventory &amp; Stock</h4>
                                        <p class="cat-desc">Flexible square-foot warehouse space for e-commerce sellers, retail stock &amp; event exhibition material.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Scalable Warehouse Space</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Vehicle & Automobile Storage -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-car-front-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Vehicle &amp; Bike Storage</h4>
                                        <p class="cat-desc">Covered, indoor parking bays for cars and motorcycles during long overseas work assignments.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Covered Vehicle Bays</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: THE 3-LAYER WAREHOUSE SECURITY SYSTEM -->
                    <div class="bike-armor-card">
                        <div class="bike-block-header mb-4">
                            <span class="bike-sub-tag"><i class="bi bi-shield-check me-1"></i> Warehouse Security</span>
                            <h3 class="bike-block-title">Our 3-Layer Storage Protection Standard</h3>
                            <p class="text-muted fs-14 mb-0">How <?= htmlspecialchars($company3) ?> guarantees 100% safety for stored items</p>
                        </div>

                        <div class="row g-3">
                            <!-- Layer 1 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 01</span>
                                    <div class="armor-icon"><i class="bi bi-camera-video-fill"></i></div>
                                    <h4 class="armor-title">24/7 CCTV &amp; Guarded Access</h4>
                                    <p class="armor-desc">Continuous HD video recording and round-the-clock security personnel guarding perimeter.</p>
                                </div>
                            </div>

                            <!-- Layer 2 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 02</span>
                                    <div class="armor-icon"><i class="bi bi-bug-fill"></i></div>
                                    <h4 class="armor-title">Monthly Pest Control</h4>
                                    <p class="armor-desc">Regular anti-termite and pest fumigation treatments to keep stored goods pristine.</p>
                                </div>
                            </div>

                            <!-- Layer 3 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 03</span>
                                    <div class="armor-icon"><i class="bi bi-fire"></i></div>
                                    <h4 class="armor-title">Fire Protection &amp; Insurance</h4>
                                    <p class="armor-desc">Automatic smoke detectors, fire extinguishers, and comprehensive storage insurance policy.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 3: 4-STAGE STORAGE PROCESS -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-signpost-split-fill me-1"></i> Simple Process</span>
                            <h3 class="bike-block-title">How Our Storage Service Works in 4 Steps</h3>
                        </div>

                        <div class="row g-3">
                            <!-- Step 1 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-house-door-fill"></i></div>
                                            <span class="process-count-badge">Step 01</span>
                                        </div>
                                        <h4 class="process-card-title">Doorstep Pickup &amp; Packing</h4>
                                        <p class="process-card-desc">Our team arrives at your home, packs your items in storage-grade waterproof film, and lists every box.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-file-earmark-check-fill"></i> Barcoded Inventory List</div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-building-lock"></i></div>
                                            <span class="process-count-badge">Step 02</span>
                                        </div>
                                        <h4 class="process-card-title">Warehouse Pallet Stacking</h4>
                                        <p class="process-card-desc">Items are transported to our facility and placed on wooden pallets above floor level in your dedicated bay.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-shield-lock-fill"></i> Elevated Pallet Storage</div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-shield-check"></i></div>
                                            <span class="process-count-badge">Step 03</span>
                                        </div>
                                        <h4 class="process-card-title">24/7 Security &amp; Maintenance</h4>
                                        <p class="process-card-desc">Your unit undergoes regular pest inspections and remains under 24/7 CCTV surveillance.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-lock-fill"></i> 24/7 Live Monitoring</div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-truck"></i></div>
                                            <span class="process-count-badge">Step 04</span>
                                        </div>
                                        <h4 class="process-card-title">Doorstep Redelivery On Demand</h4>
                                        <p class="process-card-desc">When you are ready, simply request redelivery and we deliver and unpack your items at your new address.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-patch-check-fill"></i> On-Demand Redelivery</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 4: FREQUENTLY ASKED QUESTIONS -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-question-circle-fill me-1"></i> Clear Answers</span>
                            <h3 class="bike-block-title">Frequently Asked Questions</h3>
                        </div>

                        <div class="bike-faq-list">
                            <!-- FAQ 1 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header" data-bs-toggle="collapse" data-bs-target="#sfaq1" aria-expanded="true">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-calendar-check-fill"></i></div>
                                        <h4 class="faq-q-text">What is the minimum storage rental duration available?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="sfaq1" class="collapse show bike-faq-body">
                                    We offer flexible rental plans starting from just 1 month up to several years based on your personal or business requirements.
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#sfaq2" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-eye-fill"></i></div>
                                        <h4 class="faq-q-text">Can I visit the warehouse to inspect my stored goods?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="sfaq2" class="collapse bike-faq-body">
                                    Yes! You can visit your designated storage bay during warehouse operating hours by giving a prior 24-hour notification.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#sfaq3" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-shield-fill-check"></i></div>
                                        <h4 class="faq-q-text">Are my stored belongings insured during storage?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="sfaq3" class="collapse bike-faq-body">
                                    Yes! <?= htmlspecialchars($company3) ?> provides comprehensive fire and burglary insurance options for all stored items.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR (4 COLS) -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'storage-services']); ?>
            </div>

        </div>
    </div>
</section>
