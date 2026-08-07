<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load Services Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packing & Moving Services',
    'bc_desc' => 'Multi-layer export-grade packing & systematic moving solutions across India',
    'breadcrumbs' => [
        ['name' => 'Packing & Moving']
    ]
]);
?>

<!-- MAIN PACKING & MOVING CONTENT SECTION -->
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
                        <img src="<?= base_url('assets/images/services_modules/packing-and-moving.jpg') ?>" alt="Packing and Moving Services - <?= htmlspecialchars($company3) ?>" class="img-fluid rounded-4 shadow-sm w-100" loading="lazy">
                    </div>

                    <!-- 2. CONTENT FOLLOWING THE IMAGE -->
                    <div class="bike-intro-header mb-4">
                        <span class="bike-sub-tag">
                            <i class="bi bi-box-seam-fill text-gold me-1"></i> Multi-Layer Export Quality Packing
                        </span>
                        <h2 class="service-section-title mt-2">Professional Packing &amp; Moving Services</h2>
                        <p class="about-service-text">
                            Proper packing is the foundation of a 100% damage-free relocation. At <strong><?= htmlspecialchars($company3) ?></strong>, we utilize export-grade packaging materials including heavy-duty corrugated cartons, bubble wrap rolls, foam sheets, edge protectors, and waterproof stretch film. Every item is packed with surgical precision to withstand long-distance road vibration and weather hazards.
                        </p>
                    </div>

                    <!-- 3. FEATURE PILLARS GRID (4 LIGHT CARDS) -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-layers-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">5-Layer Protection</span>
                                    <small class="feat-light-sub">Bubble &amp; Foam</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-box2-heart-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Custom Crating</span>
                                    <small class="feat-light-sub">Wooden Frames</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-tags-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Smart Labeling</span>
                                    <small class="feat-light-sub">Inventory Tagging</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-shield-check"></i></div>
                                <div>
                                    <span class="feat-light-label">Zero Breakage</span>
                                    <small class="feat-light-sub">Insured Packing</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 1: PACKING MATERIAL STANDARDS (4-CARD GRID) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Quality Material</span>
                            <h3 class="bike-block-title">Export-Grade Packing Materials Used</h3>
                        </div>

                        <div class="row g-3">
                            <!-- 1. Heavy Corrugated Cartons -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-box-seam-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">7-Ply Corrugated Cartons</h4>
                                        <p class="cat-desc">Heavy-duty double-wall corrugated cardboard boxes designed to carry heavy books, kitchenware &amp; appliances safely.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> High Crush Strength</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. High Density Bubble Wrap -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-layers-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">High-Density Bubble Sheets</h4>
                                        <p class="cat-desc">Air-cushioned bubble wraps applied around TV screens, mirrors, glassware, and polished wooden furniture surfaces.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Shock Absorbent</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Stretch & Moisture Film -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-shield-shaded"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Waterproof Stretch Film</h4>
                                        <p class="cat-desc">Tightly wrapped thermal stretch film to lock boxes, block rainwater, dust, and prevent moisture accumulation.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Rain &amp; Dust Seal</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Custom Wooden Crating -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-box2-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Custom Wooden Crate Frames</h4>
                                        <p class="cat-desc">Tailor-made wooden crates for marble statues, chandeliers, large TV screens &amp; antique artwork.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Rigid Outer Armor</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: THE 3-LAYER PACKING SAFETY SYSTEM -->
                    <div class="bike-armor-card">
                        <div class="bike-block-header mb-4">
                            <span class="bike-sub-tag"><i class="bi bi-shield-check me-1"></i> Packaging Standards</span>
                            <h3 class="bike-block-title">Our 3-Layer Packing Methodology</h3>
                            <p class="text-muted fs-14 mb-0">How <?= htmlspecialchars($company3) ?> guarantees 100% scratch-free and zero-damage packing</p>
                        </div>

                        <div class="row g-3">
                            <!-- Layer 1 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 01</span>
                                    <div class="armor-icon"><i class="bi bi-layers-fill"></i></div>
                                    <h4 class="armor-title">Inner Soft Cushioning</h4>
                                    <p class="armor-desc">Foam sheets &amp; tissue wrap applied over polished surfaces and sensitive glass edges.</p>
                                </div>
                            </div>

                            <!-- Layer 2 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 02</span>
                                    <div class="armor-icon"><i class="bi bi-box-seam-fill"></i></div>
                                    <h4 class="armor-title">Corrugated Board Shield</h4>
                                    <p class="armor-desc">Heavy cardboard sheets wrapped around furniture legs, table tops &amp; sofa sides.</p>
                                </div>
                            </div>

                            <!-- Layer 3 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 03</span>
                                    <div class="armor-icon"><i class="bi bi-shield-shaded"></i></div>
                                    <h4 class="armor-title">Waterproof Outer Binding</h4>
                                    <p class="armor-desc">Stretch film sealing + heavy plastic strapping tape to bind boxes into solid units.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 3: 4-STAGE PACKING & MOVING PROCESS -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-signpost-split-fill me-1"></i> Workflow</span>
                            <h3 class="bike-block-title">Our 4-Step Packing &amp; Moving Workflow</h3>
                        </div>

                        <div class="row g-3">
                            <!-- Step 1 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-tags-fill"></i></div>
                                            <span class="process-count-badge">Step 01</span>
                                        </div>
                                        <h4 class="process-card-title">Item Sorting &amp; Inventory Audit</h4>
                                        <p class="process-card-desc">Our team categorizes items by fragility, assigns room tags, and compiles a comprehensive Packing Inventory Sheet.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-file-earmark-check-fill"></i> Digital Inventory List</div>
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
                                        <h4 class="process-card-title">Multi-Layer Specialized Packing</h4>
                                        <p class="process-card-desc">Using high-density bubble rolls, corrugated sheets, and stretch film, every item is wrapped and boxed systematically.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-shield-lock-fill"></i> Multi-Layer Wrapping</div>
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
                                        <h4 class="process-card-title">Systematic Loading &amp; Transportation</h4>
                                        <p class="process-card-desc">Packed boxes are stacked logically inside covered moving trucks (heavy items at bottom, fragile boxes on top).</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-lock-fill"></i> Padded Truck Stacking</div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-house-check-fill"></i></div>
                                            <span class="process-count-badge">Step 04</span>
                                        </div>
                                        <h4 class="process-card-title">Unpacking &amp; Material Removal</h4>
                                        <p class="process-card-desc">At destination, our crew unboxes items, reassembles furniture, and clears away all used packing debris clean.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-patch-check-fill"></i> Clean Debris Clearance</div>
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
                                <div class="bike-faq-header" data-bs-toggle="collapse" data-bs-target="#pfaq1" aria-expanded="true">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-box-seam-fill"></i></div>
                                        <h4 class="faq-q-text">Do I need to arrange packing materials myself?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="pfaq1" class="collapse show bike-faq-body">
                                    Not at all! <?= htmlspecialchars($company3) ?> brings all required packing materials including bubble wrap, boxes, tape, and wooden crates as part of our package.
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#pfaq2" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-gem"></i></div>
                                        <h4 class="faq-q-text">How do you protect fragile items like glass dining tables and mirrors?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="pfaq2" class="collapse bike-faq-body">
                                    Fragile items are wrapped in double-layer bubble wrap, foam corner guards, heavy corrugated sheets, and framed inside custom wooden crates.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#pfaq3" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-arrow-counterclockwise"></i></div>
                                        <h4 class="faq-q-text">Does your team assist with unpacking at destination?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="pfaq3" class="collapse bike-faq-body">
                                    Yes! We provide complete unpacking services, place items at designated rooms, reassemble furniture, and take back empty packing waste.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR (4 COLS) -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'packing-and-moving']); ?>
            </div>

        </div>
    </div>
</section>
