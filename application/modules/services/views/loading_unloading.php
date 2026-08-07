<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load Services Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Loading & Unloading Services',
    'bc_desc' => 'Trained labor & heavy lifting gear for zero-damage cargo handling across India',
    'breadcrumbs' => [
        ['name' => 'Loading & Unloading']
    ]
]);
?>

<!-- MAIN LOADING & UNLOADING CONTENT SECTION -->
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
                        <img src="<?= base_url('assets/images/services_modules/loading-unloading.jpg') ?>" alt="Loading and Unloading Services - <?= htmlspecialchars($company3) ?>" class="img-fluid rounded-4 shadow-sm w-100" loading="lazy">
                    </div>

                    <!-- 2. CONTENT FOLLOWING THE IMAGE -->
                    <div class="bike-intro-header mb-4">
                        <span class="bike-sub-tag">
                            <i class="bi bi-people-fill text-gold me-1"></i> Expert Moving Crew &amp; Lifting Gear
                        </span>
                        <h2 class="service-section-title mt-2">Professional Loading &amp; Unloading Services</h2>
                        <p class="about-service-text">
                            Heavy lifting requires skill, proper posture, and specialized equipment to prevent injury and damage to goods. At <strong><?= htmlspecialchars($company3) ?></strong>, our physically trained loaders utilize hydraulic lifters, hand trolleys, moving straps, and sliding ramps. We ensure your furniture, machinery, and boxes are safely loaded into trucks and placed at your target destination without scratches or dents.
                        </p>
                    </div>

                    <!-- 3. FEATURE PILLARS GRID (4 LIGHT CARDS) -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-person-arms-up"></i></div>
                                <div>
                                    <span class="feat-light-label">Trained Labor</span>
                                    <small class="feat-light-sub">Certified Movers</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-truck-flatbed"></i></div>
                                <div>
                                    <span class="feat-light-label">Lifting Gear</span>
                                    <small class="feat-light-sub">Trolleys &amp; Belts</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-building"></i></div>
                                <div>
                                    <span class="feat-light-label">Stair &amp; Elevator</span>
                                    <small class="feat-light-sub">High-Rise Expertise</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-shield-check"></i></div>
                                <div>
                                    <span class="feat-light-label">Zero Injury</span>
                                    <small class="feat-light-sub">Safe Handling</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 1: LOADING SERVICES OFFERED (4-CARD GRID) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Capabilities</span>
                            <h3 class="bike-block-title">Our Loading &amp; Unloading Specializations</h3>
                        </div>

                        <div class="row g-3">
                            <!-- 1. Heavy Furniture Lifting -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-box-seam"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Heavy Furniture &amp; Safes</h4>
                                        <p class="cat-desc">Specialized shoulder harness straps &amp; dollies for moving heavy wooden wardrobes, king beds &amp; iron safes.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Harness Strap Lifting</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. High-Rise Staircase Handling -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-building-fill-up"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">High-Rise &amp; Narrow Stairs</h4>
                                        <p class="cat-desc">Skilled maneuvers through tight stairwells and lifts using protective corner padding to avoid wall marks.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Wall Protection Padding</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Truck Space Optimization -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-truck"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Truck Stacking &amp; Anchoring</h4>
                                        <p class="cat-desc">Smart weight distribution inside trucks to prevent cargo shift during sharp turns and bumpy highways.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Nylon Cargo Anchors</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Unloading & Room Placement -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-house-check-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Unloading &amp; Room Positioning</h4>
                                        <p class="cat-desc">Careful unloading at target floor with direct item placement into bedrooms, kitchen &amp; living space.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Direct Room Setup</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: THE 3-LAYER HANDLING SAFETY SYSTEM -->
                    <div class="bike-armor-card">
                        <div class="bike-block-header mb-4">
                            <span class="bike-sub-tag"><i class="bi bi-shield-check me-1"></i> Safety Protocols</span>
                            <h3 class="bike-block-title">Our 3-Point Handling Safety System</h3>
                            <p class="text-muted fs-14 mb-0">How <?= htmlspecialchars($company3) ?> eliminates drops and scrapes during loading</p>
                        </div>

                        <div class="row g-3">
                            <!-- Layer 1 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 01</span>
                                    <div class="armor-icon"><i class="bi bi-gear-wide-connected"></i></div>
                                    <h4 class="armor-title">Hand Trolleys &amp; Skids</h4>
                                    <p class="armor-desc">Wheeled hand trucks to transport heavy stacks without dragging on floors.</p>
                                </div>
                            </div>

                            <!-- Layer 2 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 02</span>
                                    <div class="armor-icon"><i class="bi bi-link-45deg"></i></div>
                                    <h4 class="armor-title">Shoulder Lifting Straps</h4>
                                    <p class="armor-desc">Ergonomic lifting harnesses that distribute heavy appliance weight evenly.</p>
                                </div>
                            </div>

                            <!-- Layer 3 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 03</span>
                                    <div class="armor-icon"><i class="bi bi-bounding-box"></i></div>
                                    <h4 class="armor-title">Truck Loading Ramps</h4>
                                    <p class="armor-desc">Non-slip aluminum ramps for smooth wheeling into truck container beds.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 3: 4-STAGE LOADING WORKFLOW -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-signpost-split-fill me-1"></i> Execution</span>
                            <h3 class="bike-block-title">How We Handle Loading &amp; Unloading in 4 Steps</h3>
                        </div>

                        <div class="row g-3">
                            <!-- Step 1 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-door-open-fill"></i></div>
                                            <span class="process-count-badge">Step 01</span>
                                        </div>
                                        <h4 class="process-card-title">Pathway Inspection &amp; Prep</h4>
                                        <p class="process-card-desc">Our crew inspects doorways, elevators &amp; staircases, applying corner pads to shield walls from accidental scrapes.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-file-earmark-check-fill"></i> Pathway Wall Shield</div>
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
                                        <h4 class="process-card-title">Systematic Heavy-First Loading</h4>
                                        <p class="process-card-desc">Heavy items like refrigerators and wardrobes are loaded first against truck walls and anchored firmly.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-shield-lock-fill"></i> Heavy Base Placement</div>
                                </div>
                            </div>

                            <!-- Step 3 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-layers-half"></i></div>
                                            <span class="process-count-badge">Step 03</span>
                                        </div>
                                        <h4 class="process-card-title">Fragile Stacking &amp; Belting</h4>
                                        <p class="process-card-desc">Lightweight and fragile boxes are stacked on top and tied down using soft nylon ratchets.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-lock-fill"></i> Top Stacking Protection</div>
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
                                        <h4 class="process-card-title">Controlled Destination Unloading</h4>
                                        <p class="process-card-desc">At arrival, items are unloaded step-by-step and carried directly to designated rooms for instant access.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-patch-check-fill"></i> Room-by-Room Placement</div>
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
                                <div class="bike-faq-header" data-bs-toggle="collapse" data-bs-target="#lfaq1" aria-expanded="true">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-people-fill"></i></div>
                                        <h4 class="faq-q-text">Can I hire only loading and unloading labor without a truck?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="lfaq1" class="collapse show bike-faq-body">
                                    Yes! <?= htmlspecialchars($company3) ?> provides standalone labor services for loading/unloading your own personal or commercial vehicles.
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#lfaq2" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-building"></i></div>
                                        <h4 class="faq-q-text">Do your loaders handle non-elevator high-rise buildings?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="lfaq2" class="collapse bike-faq-body">
                                    Yes! Our physically trained crew handles staircase carrying for 2nd, 3rd, 4th floors and above safely using lifting belts.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#lfaq3" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-shield-check"></i></div>
                                        <h4 class="faq-q-text">How do you prevent floor tiles from scratching during heavy moving?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="lfaq3" class="collapse bike-faq-body">
                                    We use rubber-wheeled trolleys and floor mats under heavy items so floors remain 100% scratch-free.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR (4 COLS) -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'loading-unloading']); ?>
            </div>

        </div>
    </div>
</section>
