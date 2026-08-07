<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load Services Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Home Relocation & Household Shifting',
    'bc_desc' => 'Safe, reliable & stress-free door-to-door household shifting across India with multi-layer packing',
    'breadcrumbs' => [
        ['name' => 'Home Relocation']
    ]
]);
?>

<!-- MAIN HOME RELOCATION CONTENT SECTION -->
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
                        <img src="<?= base_url('assets/images/services_modules/home-relocation.jpg') ?>" alt="Home Relocation Services - <?= htmlspecialchars($company3) ?>" class="img-fluid rounded-4 shadow-sm w-100" loading="lazy">
                    </div>

                    <!-- 2. CONTENT FOLLOWING THE IMAGE -->
                    <div class="bike-intro-header mb-4">
                        <span class="bike-sub-tag">
                            <i class="bi bi-shield-fill-check text-gold me-1"></i> ISO Certified Household Relocation
                        </span>
                        <h2 class="service-section-title mt-2">Comprehensive Household Shifting Services</h2>
                        <p class="about-service-text">
                            Moving your home can be overwhelming, but with <strong><?= htmlspecialchars($company3) ?></strong>, your household relocation becomes smooth, organized, and completely hassle-free. From delicate kitchenware and expensive electronics to heavy wooden furniture and wardrobes, our trained moving specialists manage every item with extreme care.
                        </p>
                    </div>

                    <!-- 3. FEATURE PILLARS GRID (4 LIGHT CARDS) -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-box-seam-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">5-Layer Packing</span>
                                    <small class="feat-light-sub">Bubble &amp; Box Shield</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Transit Insurance</span>
                                    <small class="feat-light-sub">Full Goods Cover</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-house-heart-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Door-to-Door</span>
                                    <small class="feat-light-sub">Complete Setup</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-clock-history"></i></div>
                                <div>
                                    <span class="feat-light-label">On-Time Shifting</span>
                                    <small class="feat-light-sub">Guaranteed Timeline</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 1: HOUSEHOLD ITEMS WE RELOCATE (4-CARD GRID) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Full Scope</span>
                            <h3 class="bike-block-title">What We Move In Your Home Shifting</h3>
                        </div>

                        <div class="row g-3">
                            <!-- 1. Heavy Furniture & Wardrobes -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-dpad-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Heavy Wooden Furniture</h4>
                                        <p class="cat-desc">Professional dismantling, corrugated sheet wrapping &amp; expert reassembly of double beds, sofas &amp; wardrobes.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Dismantle &amp; Assemble</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Home Appliances & Electronics -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-tv-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Appliances &amp; Electronics</h4>
                                        <p class="cat-desc">Shock-proof double bubble wrap for OLED TVs, refrigerators, washing machines &amp; air conditioners.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Anti-Static Cushioning</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Delicate Crockery & Glassware -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-cup-hot-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Fragile Crockery &amp; Glassware</h4>
                                        <p class="cat-desc">Individual paper foam wrapping &amp; heavy-duty wooden crate boxing for expensive kitchenware &amp; mirrors.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Custom Wooden Crating</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Clothing & Personal Belongings -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-bag-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Wardrobes &amp; Personal Goods</h4>
                                        <p class="cat-desc">Clean wardrobe carton boxes for hanging clothes wrinkle-free along with sealed waterproof trunks.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Dust-Free Wardrobe Boxes</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: THE 5-LAYER SAFETY SYSTEM -->
                    <div class="bike-armor-card">
                        <div class="bike-block-header mb-4">
                            <span class="bike-sub-tag"><i class="bi bi-shield-check me-1"></i> Damage-Proof Guarantee</span>
                            <h3 class="bike-block-title">Our 5-Layer Household Protection System</h3>
                            <p class="text-muted fs-14 mb-0">How <?= htmlspecialchars($company3) ?> protects your valuables during home shifting</p>
                        </div>

                        <div class="row g-3">
                            <!-- Layer 1 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 01</span>
                                    <div class="armor-icon"><i class="bi bi-layers-fill"></i></div>
                                    <h4 class="armor-title">High-Density Bubble Wrap</h4>
                                    <p class="armor-desc">First defensive layer wrapped over polished wooden, glass, and electronic surfaces.</p>
                                </div>
                            </div>

                            <!-- Layer 2 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 02</span>
                                    <div class="armor-icon"><i class="bi bi-box-seam-fill"></i></div>
                                    <h4 class="armor-title">Corrugated Carton Boxes</h4>
                                    <p class="armor-desc">Heavy 7-ply cardboard boxes customized for heavy kitchenware and books.</p>
                                </div>
                            </div>

                            <!-- Layer 3 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 03</span>
                                    <div class="armor-icon"><i class="bi bi-shield-shaded"></i></div>
                                    <h4 class="armor-title">Waterproof Stretch Film</h4>
                                    <p class="armor-desc">Outer thermal film sealing every box against moisture, dust, and rain.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 3: 4-STAGE HOME SHIFTING PROCESS -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-signpost-split-fill me-1"></i> Workflow</span>
                            <h3 class="bike-block-title">How We Move Your Home in 4 Easy Steps</h3>
                        </div>

                        <div class="row g-3">
                            <!-- Step 1 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-clipboard-data-fill"></i></div>
                                            <span class="process-count-badge">Step 01</span>
                                        </div>
                                        <h4 class="process-card-title">Pre-Move Survey &amp; Quotation</h4>
                                        <p class="process-card-desc">Our moving expert conducts an in-person or video inventory survey to provide a transparent, fixed-price quote.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-file-earmark-check-fill"></i> Zero Hidden Costs</div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-box-seam-fill"></i></div>
                                            <span class="process-count-badge">Step 02</span>
                                        </div>
                                        <h4 class="process-card-title">Professional On-Site Packing</h4>
                                        <p class="process-card-desc">Our trained crew arrives with premium packing materials to systematically dismantle, pack, and label all items room by room.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-shield-lock-fill"></i> Color Coded Labels</div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-truck"></i></div>
                                            <span class="process-count-badge">Step 03</span>
                                        </div>
                                        <h4 class="process-card-title">Safe Loading &amp; Enclosed Transit</h4>
                                        <p class="process-card-desc">Items are safely loaded into padded enclosed moving trucks, tied down, and driven by experienced highway drivers.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-lock-fill"></i> Covered Truck Transit</div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-house-door-fill"></i></div>
                                            <span class="process-count-badge">Step 04</span>
                                        </div>
                                        <h4 class="process-card-title">Unloading &amp; Home Re-assembly</h4>
                                        <p class="process-card-desc">At your new home, we unload, unpack, reassemble furniture, and place items exactly where you want them.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-patch-check-fill"></i> Full Setup Support</div>
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
                                <div class="bike-faq-header" data-bs-toggle="collapse" data-bs-target="#hfaq1" aria-expanded="true">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-clock-fill"></i></div>
                                        <h4 class="faq-q-text">How far in advance should I book my home shifting?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="hfaq1" class="collapse show bike-faq-body">
                                    We recommend booking at least 3 to 7 days in advance for local shifting, and 7 to 10 days in advance for intercity relocation to secure your preferred date.
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#hfaq2" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-tools"></i></div>
                                        <h4 class="faq-q-text">Do you dismantle and reassemble furniture like beds and wardrobes?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="hfaq2" class="collapse bike-faq-body">
                                    Yes! Our trained carpenters safely dismantle double beds, modular wardrobes, and dining tables prior to packing, and reassemble them at your new home.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#hfaq3" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-shield-fill-check"></i></div>
                                        <h4 class="faq-q-text">Is transit insurance mandatory for household shifting?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="hfaq3" class="collapse bike-faq-body">
                                    While optional, we strongly recommend transit insurance for full value protection against unforeseen accidents, weather damage, or theft during highway transit.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR (4 COLS) -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'home-relocation']); ?>
            </div>

        </div>
    </div>
</section>
