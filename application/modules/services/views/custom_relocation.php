<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load Services Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Custom Relocation & Specialized Moving',
    'bc_desc' => 'Tailormade moving solutions for luxury villas, industrial machinery, pet shifting & artwork',
    'breadcrumbs' => [
        ['name' => 'Custom Relocation']
    ]
]);
?>

<!-- MAIN CUSTOM RELOCATION CONTENT SECTION -->
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
                        <img src="<?= base_url('assets/images/services_modules/custom-relocation.jpg') ?>" alt="Custom Relocation Services - <?= htmlspecialchars($company3) ?>" class="img-fluid rounded-4 shadow-sm w-100" loading="lazy">
                    </div>

                    <!-- 2. CONTENT FOLLOWING THE IMAGE -->
                    <div class="bike-intro-header mb-4">
                        <span class="bike-sub-tag">
                            <i class="bi bi-star-fill text-gold me-1"></i> Tailormade VIP &amp; Commercial Shifting
                        </span>
                        <h2 class="service-section-title mt-2">Customized Moving &amp; Specialty Logistics</h2>
                        <p class="about-service-text">
                            Unique relocation challenges require bespoke solutions. At <strong><?= htmlspecialchars($company3) ?></strong>, our Custom Relocation team designs personalized moving blueprints for luxury villas, industrial plant machinery, delicate fine art galleries, pianos, and pet relocation. We assign dedicated project managers to handle complex, multi-city, or high-value shifting projects seamlessly.
                        </p>
                    </div>

                    <!-- 3. FEATURE PILLARS GRID (4 LIGHT CARDS) -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-person-badge-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Move Manager</span>
                                    <small class="feat-light-sub">Single Point Contact</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-box2-heart-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Custom Crating</span>
                                    <small class="feat-light-sub">Precision Framing</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-airplane-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Express Transit</span>
                                    <small class="feat-light-sub">Air &amp; Direct Road</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">VIP Privacy</span>
                                    <small class="feat-light-sub">NDA &amp; Full Insurance</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 1: CUSTOM MOVING CATEGORIES (4-CARD GRID) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Specialty Scope</span>
                            <h3 class="bike-block-title">Specialty Relocation Services We Handle</h3>
                        </div>

                        <div class="row g-3">
                            <!-- 1. Luxury Villa Shifting -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-house-heart-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Luxury Villa &amp; Penthouse Shifting</h4>
                                        <p class="cat-desc">White-glove moving protocols for high-value antiques, Italian marble furniture &amp; grand chandeliers.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> White Glove Precision</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Industrial Machinery & Plant Move -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-gear-wide-connected"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Industrial Machinery &amp; Plants</h4>
                                        <p class="cat-desc">Heavy crane lifting, hydraulic jack skidding &amp; oversized flatbed trailer transport for factory equipment.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Heavy Crane Rigging</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Fine Art & Antique Transport -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-palette-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Fine Art &amp; Museum Exhibits</h4>
                                        <p class="cat-desc">Climate-controlled wooden casing &amp; acid-free glassine paper wrapping for valuable paintings &amp; sculptures.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Climate Controlled Casing</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Pet Relocation & Live Animal Care -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-heart-pulse-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Pet Shifting &amp; Live Animal Transit</h4>
                                        <p class="cat-desc">IATA-approved pet crates, vet-accompanied transport &amp; doorstep pickup for dogs, cats &amp; birds.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Vet-Accompanied Care</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: THE 3-LAYER CUSTOM SAFETY SYSTEM -->
                    <div class="bike-armor-card">
                        <div class="bike-block-header mb-4">
                            <span class="bike-sub-tag"><i class="bi bi-shield-check me-1"></i> Tailormade Security</span>
                            <h3 class="bike-block-title">Our 3-Point Custom Protection Standard</h3>
                            <p class="text-muted fs-14 mb-0">How <?= htmlspecialchars($company3) ?> delivers zero-risk execution for specialized cargo</p>
                        </div>

                        <div class="row g-3">
                            <!-- Layer 1 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 01</span>
                                    <div class="armor-icon"><i class="bi bi-person-badge-fill"></i></div>
                                    <h4 class="armor-title">Dedicated Move Manager</h4>
                                    <p class="armor-desc">Experienced project manager supervising your entire move end-to-end.</p>
                                </div>
                            </div>

                            <!-- Layer 2 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 02</span>
                                    <div class="armor-icon"><i class="bi bi-box2-fill"></i></div>
                                    <h4 class="armor-title">Custom Wooden Blueprint</h4>
                                    <p class="armor-desc">Precision-built wooden cages tailored to exact dimensions of your odd-sized cargo.</p>
                                </div>
                            </div>

                            <!-- Layer 3 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 03</span>
                                    <div class="armor-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                    <h4 class="armor-title">Comprehensive VIP Insurance</h4>
                                    <p class="armor-desc">Specialized high-value cargo insurance policy covering transit &amp; handling risks.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 3: 4-STAGE CUSTOM RELOCATION PROCESS -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-signpost-split-fill me-1"></i> Tailored Steps</span>
                            <h3 class="bike-block-title">How We Execute Custom Moves in 4 Steps</h3>
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
                                        <h4 class="process-card-title">Engineering Survey &amp; Blueprint</h4>
                                        <p class="process-card-desc">Our technical team assesses cargo weight, dimensions &amp; access routes to map an individualized moving plan.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-file-earmark-check-fill"></i> Tailored Technical Blueprint</div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-box2-fill"></i></div>
                                            <span class="process-count-badge">Step 02</span>
                                        </div>
                                        <h4 class="process-card-title">Bespoke Crating &amp; Packaging</h4>
                                        <p class="process-card-desc">On-site carpenters build custom-measured wooden crates with shock-absorbent foam padding.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-shield-lock-fill"></i> Tailor-Made Crating</div>
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
                                        <h4 class="process-card-title">Dedicated Special Cargo Transit</h4>
                                        <p class="process-card-desc">Transported inside air-suspension or climate-controlled trucks with dedicated escort monitoring.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-lock-fill"></i> Air Suspension &amp; Escort</div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-patch-check-fill"></i></div>
                                            <span class="process-count-badge">Step 04</span>
                                        </div>
                                        <h4 class="process-card-title">Precision Installation &amp; Handover</h4>
                                        <p class="process-card-desc">Uncrated, mounted, or positioned precisely according to client instructions with final sign-off.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-patch-check-fill"></i> Complete Installation Sign-off</div>
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
                                <div class="bike-faq-header" data-bs-toggle="collapse" data-bs-target="#curfaq1" aria-expanded="true">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-star-fill"></i></div>
                                        <h4 class="faq-q-text">What makes custom relocation different from standard moving?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="curfaq1" class="collapse show bike-faq-body">
                                    Custom relocation involves dedicated project managers, tailor-made wooden crating, specialized machinery gear, and individual handling blueprints for unique cargo.
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#curfaq2" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                        <h4 class="faq-q-text">Can you handle high-value fine art and museum sculptures?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="curfaq2" class="collapse bike-faq-body">
                                    Yes! We use museum-grade acid-free paper, custom-built shockproof wooden crates, and climate-controlled vehicles for valuable artwork.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#curfaq3" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-file-earmark-lock-fill"></i></div>
                                        <h4 class="faq-q-text">Do you sign Non-Disclosure Agreements (NDAs) for VIP client moves?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="curfaq3" class="collapse bike-faq-body">
                                    Yes! We maintain strict privacy and routinely execute Non-Disclosure Agreements for VIP, corporate executive, and sensitive industrial relocations.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR (4 COLS) -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'custom-relocation']); ?>
            </div>

        </div>
    </div>
</section>
