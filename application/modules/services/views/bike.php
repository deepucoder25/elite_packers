<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load Services Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Two Wheeler & Bike Transportation',
    'bc_desc' => 'Scratch-free motorcycle, superbike & scooter shipping across India with multi-layer wrapping & custom crating',
    'breadcrumbs' => [
        ['name' => 'Bike Transportation']
    ]
]);
?>

<!-- MAIN BIKE TRANSPORTATION CONTENT SECTION -->
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
            
            <!-- LEFT COLUMN: MAIN ATTRACTIVE BIKE CONTENT (8 COLS) -->
            <div class="col-lg-8">
                <div class="bike-main-card">
                    
                    <!-- 1. FEATURED IMAGE FIRST (NORMAL CLEAN PRESENTATION) -->
                    <div class="bike-normal-image-box mb-4">
                        <img src="<?= base_url('assets/images/services_modules/bike-transportation.jpg') ?>" alt="Bike Transportation Services - <?= htmlspecialchars($company3) ?>" class="img-fluid rounded-4 shadow-sm w-100" loading="lazy">
                    </div>

                    <!-- 2. CONTENT FOLLOWING THE IMAGE -->
                    <div class="bike-intro-header mb-4">
                        <span class="bike-sub-tag">
                            <i class="bi bi-shield-fill-check text-gold me-1"></i> ISO Certified Scratch-Proof Transit
                        </span>
                        <h2 class="service-section-title mt-2">Bike Shifting &amp; Motorcycle Logistics</h2>
                        <p class="about-service-text">
                            Moving your beloved motorcycle, scooter, or superbike requires specialized care, multi-layered padding, and secure transit anchoring. At <strong><?= htmlspecialchars($company3) ?></strong>, we treat your two-wheeler like our own, ensuring 100% scratch-free, zero-mileage, and insured doorstep delivery across India.
                        </p>
                    </div>

                    <!-- 3. FEATURE PILLARS GRID (4 LIGHT CARDS) -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-box-seam-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">3-Layer Packing</span>
                                    <small class="feat-light-sub">Bubble &amp; Foam Wrap</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Transit Insurance</span>
                                    <small class="feat-light-sub">Full Value Coverage</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Doorstep Service</span>
                                    <small class="feat-light-sub">Pickup &amp; Delivery</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-speedometer2"></i></div>
                                <div>
                                    <span class="feat-light-label">Zero Extra Km</span>
                                    <small class="feat-light-sub">Strict Carrier Transit</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 1: BIKE CATEGORIES WE TRANSPORT (4-CARD GRID) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Vehicle Coverage</span>
                            <h3 class="bike-block-title">Two-Wheelers We Safely Relocate</h3>
                        </div>

                        <div class="row g-3">
                            <!-- 1. Superbikes & Sports Bikes -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-lightning-charge-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Superbikes &amp; Sports Bikes</h4>
                                        <p class="cat-desc">Specialized shock-proof wooden crating &amp; plush foam blanket protection for high-value sports motorcycles.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Custom Wooden Cage</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Cruisers & Royal Enfields -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-compass-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Cruiser &amp; Touring Bikes</h4>
                                        <p class="cat-desc">Heavy-chassis tie-down straps &amp; custom wheel anchors to transport heavy cruiser motorcycles safely.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Heavy-Duty Anchoring</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Scooters & Mopeds -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-scooter"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Scooters &amp; Mopeds</h4>
                                        <p class="cat-desc">Multi-layer stretch wrap &amp; bubble padding for fiber body panels to prevent scratches and chips.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Fiber Body Protection</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Electric Two-Wheelers -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-battery-charging"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Electric &amp; EV Bikes</h4>
                                        <p class="cat-desc">Battery-safe temperature-controlled packing &amp; moisture-proof sealing for modern electric two-wheelers.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> EV Battery Safe</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: THE 3-LAYER ARMOR PACKING SYSTEM (CLEAN LIGHT REDESIGN) -->
                    <div class="bike-armor-card">
                        <div class="bike-block-header mb-4">
                            <span class="bike-sub-tag"><i class="bi bi-shield-check me-1"></i> Multi-Layer Protection</span>
                            <h3 class="bike-block-title">Our 3-Layer Scratch-Proof Packing System</h3>
                            <p class="text-muted fs-14 mb-0">How <?= htmlspecialchars($company3) ?> guarantees 100% scratch-free delivery for your bike</p>
                        </div>

                        <div class="row g-3">
                            <!-- Layer 1 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 01</span>
                                    <div class="armor-icon"><i class="bi bi-layers-fill"></i></div>
                                    <h4 class="armor-title">Bubble &amp; Foam Wrap</h4>
                                    <p class="armor-desc">First protective layer applied directly over tank, indicators, headlights, and chrome parts.</p>
                                </div>
                            </div>

                            <!-- Layer 2 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 02</span>
                                    <div class="armor-icon"><i class="bi bi-box-seam-fill"></i></div>
                                    <h4 class="armor-title">Corrugated Sheets</h4>
                                    <p class="armor-desc">Heavy-duty corrugated sheets wrapped to absorb road vibration and impact shocks.</p>
                                </div>
                            </div>

                            <!-- Layer 3 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 03</span>
                                    <div class="armor-icon"><i class="bi bi-shield-shaded"></i></div>
                                    <h4 class="armor-title">Waterproof Film &amp; Cage</h4>
                                    <p class="armor-desc">Final stretch film sealing against rain, dust, plus optional wooden crate framing.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 3: 4-STAGE EXPRESS SHIFTING JOURNEY (2x2 MODERN GRID REDESIGN) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-signpost-split-fill me-1"></i> Simple Process</span>
                            <h3 class="bike-block-title">How We Move Your Bike in 4 Easy Steps</h3>
                        </div>

                        <div class="row g-3">
                            <!-- Step 1 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-geo-alt-fill"></i></div>
                                            <span class="process-count-badge">Step 01</span>
                                        </div>
                                        <h4 class="process-card-title">Doorstep Pickup &amp; Condition Audit</h4>
                                        <p class="process-card-desc">Our expert inspector visits your location, conducts a joint inspection of bike body &amp; fuel level, and generates a digital Condition Inspection Receipt.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-file-earmark-check-fill"></i> Digital Audit Report</div>
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
                                        <h4 class="process-card-title">3-Layer On-Site Protective Packing</h4>
                                        <p class="process-card-desc">Using high-density bubble sheets, foam blocks, corrugated sheets, and heavy-duty tape, your bike is completely wrapped and prepared for transport.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-shield-lock-fill"></i> 3-Layer Foam &amp; Bubble Shield</div>
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
                                        <h4 class="process-card-title">Container Loading &amp; Transit Anchoring</h4>
                                        <p class="process-card-desc">Bike is loaded into enclosed container trucks and locked in place using wheel clamps and industrial nylon tie-down belts to avoid any movement.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-lock-fill"></i> Locked Wheel Clamps &amp; Belts</div>
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
                                        <h4 class="process-card-title">Destination Unpacking &amp; Delivery</h4>
                                        <p class="process-card-desc">Your bike is delivered right to your doorstep at destination city, unwrapped carefully, and verified together before final signoff.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-patch-check-fill"></i> Doorstep Verification</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 4: FREQUENTLY ASKED QUESTIONS (DEDICATED REDESIGN) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-question-circle-fill me-1"></i> Clear Answers</span>
                            <h3 class="bike-block-title">Frequently Asked Questions</h3>
                        </div>

                        <div class="bike-faq-list">
                            <!-- FAQ 1 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header" data-bs-toggle="collapse" data-bs-target="#bfaq1" aria-expanded="true">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                                        <h4 class="faq-q-text">What documents are mandatory for bike transportation?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="bfaq1" class="collapse show bike-faq-body">
                                    You need to submit a clear photocopy of your Bike Registration Certificate (RC), valid Bike Insurance Policy, and a Government Photo ID proof (Aadhaar / Driving License).
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#bfaq2" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-fuel-pump-fill"></i></div>
                                        <h4 class="faq-q-text">How much petrol should be kept in the fuel tank?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="bfaq2" class="collapse bike-faq-body">
                                    As per transport safety regulations, the petrol tank should be nearly empty (maximum 1 to 1.5 liters) to eliminate fire hazards during transit.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#bfaq3" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-shield-fill-check"></i></div>
                                        <h4 class="faq-q-text">Is transit insurance included for bike shipping?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="bfaq3" class="collapse bike-faq-body">
                                    Yes! <?= htmlspecialchars($company3) ?> provides comprehensive transit insurance covering your bike against unforeseen accidental damage, fire, or theft during road transit.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR (4 COLS) -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'bike-transportation']); ?>
            </div>

        </div>
    </div>
</section>