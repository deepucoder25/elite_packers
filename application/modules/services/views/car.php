<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load Services Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Car Transportation & Vehicle Shipping',
    'bc_desc' => 'Enclosed car carrier transit across India with doorstep pickup & zero-mileage guarantee',
    'breadcrumbs' => [
        ['name' => 'Car Transportation']
    ]
]);
?>

<!-- MAIN CAR TRANSPORTATION CONTENT SECTION -->
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
                        <img src="<?= base_url('assets/images/services_modules/car-transportation.jpg') ?>" alt="Car Transportation Services - <?= htmlspecialchars($company3) ?>" class="img-fluid rounded-4 shadow-sm w-100" loading="lazy">
                    </div>

                    <!-- 2. CONTENT FOLLOWING THE IMAGE -->
                    <div class="bike-intro-header mb-4">
                        <span class="bike-sub-tag">
                            <i class="bi bi-shield-fill-check text-gold me-1"></i> Covered Car Carrier Logistics
                        </span>
                        <h2 class="service-section-title mt-2">Car Shifting &amp; Auto Carrier Services</h2>
                        <p class="about-service-text">
                            Shipping your car safely to another city requires specialized hydraulic car carriers and expert loading ramps. At <strong><?= htmlspecialchars($company3) ?></strong>, we provide door-to-door car carrier services using enclosed double-decker auto trailers. Your vehicle is safely locked with wheel stopper clamps and nylon safety belts, ensuring zero mileage and 100% damage-free delivery.
                        </p>
                    </div>

                    <!-- 3. FEATURE PILLARS GRID (4 LIGHT CARDS) -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-truck-front-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Covered Carriers</span>
                                    <small class="feat-light-sub">Weather Proof</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Transit Insurance</span>
                                    <small class="feat-light-sub">Full Car Value</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-speedometer2"></i></div>
                                <div>
                                    <span class="feat-light-label">Zero Km Driven</span>
                                    <small class="feat-light-sub">Trailer Transport</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-geo-alt-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Doorstep Service</span>
                                    <small class="feat-light-sub">Pickup &amp; Drop</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 1: CAR TYPES WE TRANSPORT (4-CARD GRID) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Fleet Coverage</span>
                            <h3 class="bike-block-title">Car Segments We Safely Transport</h3>
                        </div>

                        <div class="row g-3">
                            <!-- 1. Luxury & Exotic Cars -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Luxury &amp; Sports Cars</h4>
                                        <p class="cat-desc">Dedicated single-car enclosed hydraulic container trucks for high-ground clearance luxury sedans &amp; sports cars.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Single Car Enclosed Trailer</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. SUVs & MUVs -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-truck-flatbed"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">SUVs, MUVs &amp; 4x4 Off-Roaders</h4>
                                        <p class="cat-desc">Custom heavy-duty wheel anchors and wide ramp loading for large SUVs, Fortuners &amp; Thar off-roaders.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Heavy Chassis Support</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Sedans & Hatchbacks -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-car-front-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Sedans &amp; Hatchbacks</h4>
                                        <p class="cat-desc">Economical covered multi-car auto carrier trailers with soft bumper covers &amp; wheel lock clamps.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Multi-Car Carrier Trailer</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Vintage & Collector Cars -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-gem"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Vintage &amp; Collector Vehicles</h4>
                                        <p class="cat-desc">Climate-controlled enclosed shipping &amp; white-glove loading protocols for rare vintage collector automobiles.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> White Glove Protection</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: THE 3-LAYER CAR PROTECTION SYSTEM -->
                    <div class="bike-armor-card">
                        <div class="bike-block-header mb-4">
                            <span class="bike-sub-tag"><i class="bi bi-shield-check me-1"></i> Multi-Layer Auto Security</span>
                            <h3 class="bike-block-title">Our 3-Layer Car Safety System</h3>
                            <p class="text-muted fs-14 mb-0">How <?= htmlspecialchars($company3) ?> guarantees scratch-free auto delivery across India</p>
                        </div>

                        <div class="row g-3">
                            <!-- Layer 1 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 01</span>
                                    <div class="armor-icon"><i class="bi bi-layers-fill"></i></div>
                                    <h4 class="armor-title">Bumper &amp; Mirror Guards</h4>
                                    <p class="armor-desc">Protective foam padding applied to front bumpers, side mirrors &amp; door handles.</p>
                                </div>
                            </div>

                            <!-- Layer 2 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 02</span>
                                    <div class="armor-icon"><i class="bi bi-disc-fill"></i></div>
                                    <h4 class="armor-title">Wheel Lock Stopper Clamps</h4>
                                    <p class="armor-desc">Industrial steel wheel stoppers locked onto trailer floor to prevent any vehicle roll.</p>
                                </div>
                            </div>

                            <!-- Layer 3 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 03</span>
                                    <div class="armor-icon"><i class="bi bi-shield-shaded"></i></div>
                                    <h4 class="armor-title">Nylon Harness Tie-Downs</h4>
                                    <p class="armor-desc">Heavy-duty nylon safety belts strapped over tires to absorb transit vibration.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 3: 4-STAGE CAR TRANSPORTATION PROCESS -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-signpost-split-fill me-1"></i> Workflow</span>
                            <h3 class="bike-block-title">How We Move Your Car in 4 Easy Steps</h3>
                        </div>

                        <div class="row g-3">
                            <!-- Step 1 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-clipboard-check-fill"></i></div>
                                            <span class="process-count-badge">Step 01</span>
                                        </div>
                                        <h4 class="process-card-title">Doorstep Car Inspection &amp; Audit</h4>
                                        <p class="process-card-desc">Our auto engineer conducts a 20-point body check, records odometer reading, and issues a signed Inspection Sheet.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-file-earmark-check-fill"></i> Signed Vehicle Condition Sheet</div>
                                </div>
                            </div>

                            <!-- Step 2 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-truck-flatbed"></i></div>
                                            <span class="process-count-badge">Step 02</span>
                                        </div>
                                        <h4 class="process-card-title">Hydraulic Ramp Loading</h4>
                                        <p class="process-card-desc">Car is driven carefully onto the covered hydraulic carrier ramp by certified drivers without scraping chassis bottom.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-shield-lock-fill"></i> Hydraulic Ramp Loading</div>
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
                                        <h4 class="process-card-title">GPS Tracked Enclosed Transit</h4>
                                        <p class="process-card-desc">Car carrier travels via direct highways with live GPS tracking updates provided to you throughout the journey.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-lock-fill"></i> Live GPS Vehicle Tracking</div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-geo-alt-fill"></i></div>
                                            <span class="process-count-badge">Step 04</span>
                                        </div>
                                        <h4 class="process-card-title">Destination Unloading &amp; Delivery</h4>
                                        <p class="process-card-desc">Car is safely unloaded at destination address, inspected together against the condition report, and handed over.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-patch-check-fill"></i> Joint Delivery Audit</div>
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
                                <div class="bike-faq-header" data-bs-toggle="collapse" data-bs-target="#cfaq1" aria-expanded="true">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
                                        <h4 class="faq-q-text">What documents are mandatory for car transportation?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="cfaq1" class="collapse show bike-faq-body">
                                    You need a photocopy of the Car Registration Certificate (RC), valid Car Insurance Policy, Pollution Certificate (PUC), and Owner ID proof.
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#cfaq2" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-car-front-fill"></i></div>
                                        <h4 class="faq-q-text">Can I keep personal luggage inside the car during transit?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="cfaq2" class="collapse bike-faq-body">
                                    Small personal items (up to 30-50 kg in trunk) are permissible, but valuables, cash, jewelry, or hazardous liquids must never be kept inside.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#cfaq3" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-truck-front-fill"></i></div>
                                        <h4 class="faq-q-text">Is my car driven by road during transportation?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="cfaq3" class="collapse bike-faq-body">
                                    No! Your car is driven only for loading/unloading onto the carrier trailer (less than 2-3 km). The entire highway distance is covered on the carrier truck.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR (4 COLS) -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'car-transportation']); ?>
            </div>

        </div>
    </div>
</section>
