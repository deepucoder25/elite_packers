<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load Services Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Office Relocation & Corporate Shifting',
    'bc_desc' => 'Seamless, zero-downtime office relocation & IT infrastructure shifting across India',
    'breadcrumbs' => [
        ['name' => 'Office Relocation']
    ]
]);
?>

<!-- MAIN OFFICE RELOCATION CONTENT SECTION -->
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
                        <img src="<?= base_url('assets/images/services_modules/office-relocation.jpg') ?>" alt="Office Relocation Services - <?= htmlspecialchars($company3) ?>" class="img-fluid rounded-4 shadow-sm w-100" loading="lazy">
                    </div>

                    <!-- 2. CONTENT FOLLOWING THE IMAGE -->
                    <div class="bike-intro-header mb-4">
                        <span class="bike-sub-tag">
                            <i class="bi bi-briefcase-fill text-gold me-1"></i> Zero Downtime Commercial Shifting
                        </span>
                        <h2 class="service-section-title mt-2">Corporate Office &amp; Business Relocation</h2>
                        <p class="about-service-text">
                            Minimizing business downtime is critical during corporate office relocation. At <strong><?= htmlspecialchars($company3) ?></strong>, we execute weekend and after-hours office moves to ensure your business operations suffer zero workflow disruption. From IT servers and workstations to confidential files and executive furniture, we handle all commercial assets systematically.
                        </p>
                    </div>

                    <!-- 3. FEATURE PILLARS GRID (4 LIGHT CARDS) -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-clock-history"></i></div>
                                <div>
                                    <span class="feat-light-label">Zero Downtime</span>
                                    <small class="feat-light-sub">Weekend Move</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-cpu-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">IT Infrastructure</span>
                                    <small class="feat-light-sub">Server Protection</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-file-lock-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Document Security</span>
                                    <small class="feat-light-sub">Sealed File Trunks</small>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-building-fill-check"></i></div>
                                <div>
                                    <span class="feat-light-label">Corporate SLA</span>
                                    <small class="feat-light-sub">Insured Shifting</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 1: COMMERCIAL ASSETS WE RELOCATE (4-CARD GRID) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-grid-3x3-gap-fill me-1"></i> Asset Coverage</span>
                            <h3 class="bike-block-title">Office Assets We Relocate</h3>
                        </div>

                        <div class="row g-3">
                            <!-- 1. IT Hardware & Servers -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-cpu-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">IT Hardware &amp; Server Racks</h4>
                                        <p class="cat-desc">Anti-static bubble wrap, padded wooden cases &amp; numbered labeling for servers, monitors, UPS &amp; network switches.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Anti-Static Shield</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Workstations & Cubicles -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-display"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Modular Workstations &amp; Desks</h4>
                                        <p class="cat-desc">Disassembly &amp; reassembly of modular office cubicles, executive desks, ergonomic chairs &amp; conference tables.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Complete Carpentry Setup</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Confidential Records & Files -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-folder-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Files &amp; Confidential Records</h4>
                                        <p class="cat-desc">Sealed, color-coded file storage crates to ensure strict data privacy and systematic record organization.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Sealed Security Crates</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Pantry & Machinery -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-printer-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Printers &amp; Commercial Equipment</h4>
                                        <p class="cat-desc">Heavy-duty transport for heavy photocopiers, coffee machines, water dispensers &amp; reception lounge furniture.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Heavy Rigging Equipment</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: THE 3-LAYER CORPORATE PROTECTION SYSTEM -->
                    <div class="bike-armor-card">
                        <div class="bike-block-header mb-4">
                            <span class="bike-sub-tag"><i class="bi bi-shield-check me-1"></i> Data &amp; Equipment Safety</span>
                            <h3 class="bike-block-title">Our 3-Layer Corporate Security System</h3>
                            <p class="text-muted fs-14 mb-0">How <?= htmlspecialchars($company3) ?> secures expensive IT infrastructure during office moves</p>
                        </div>

                        <div class="row g-3">
                            <!-- Layer 1 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 01</span>
                                    <div class="armor-icon"><i class="bi bi-layers-fill"></i></div>
                                    <h4 class="armor-title">Anti-Static Bubble Packing</h4>
                                    <p class="armor-desc">Special anti-static pink bubble sheets to protect sensitive PCB boards &amp; IT chips.</p>
                                </div>
                            </div>

                            <!-- Layer 2 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 02</span>
                                    <div class="armor-icon"><i class="bi bi-box-seam-fill"></i></div>
                                    <h4 class="armor-title">Heavy Cardboard &amp; Foam</h4>
                                    <p class="armor-desc">Thick foam corner guards and heavy corrugated boxes for monitors and glass partitions.</p>
                                </div>
                            </div>

                            <!-- Layer 3 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Layer 03</span>
                                    <div class="armor-icon"><i class="bi bi-shield-shaded"></i></div>
                                    <h4 class="armor-title">Numbered Lock Tags</h4>
                                    <p class="armor-desc">Tamper-evident security seals applied to all high-value server crates &amp; document trunks.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 3: 4-STAGE OFFICE RELOCATION PROCESS -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-signpost-split-fill me-1"></i> Project Execution</span>
                            <h3 class="bike-block-title">How We Move Your Office in 4 Easy Steps</h3>
                        </div>

                        <div class="row g-3">
                            <!-- Step 1 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-kanban-fill"></i></div>
                                            <span class="process-count-badge">Step 01</span>
                                        </div>
                                        <h4 class="process-card-title">Project Planning &amp; Floor Mapping</h4>
                                        <p class="process-card-desc">Our project manager visits your office, creates a layout floor map, and assigns floor-wise color labels to all departments.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-file-earmark-check-fill"></i> Color-Coded Floor Plan</div>
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
                                        <h4 class="process-card-title">After-Hours / Weekend Packing</h4>
                                        <p class="process-card-desc">Our crew packs IT equipment, files, and workstations after office hours or over the weekend to eliminate work disruption.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-moon-stars-fill"></i> Weekend &amp; Night Shift</div>
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
                                        <h4 class="process-card-title">Dedicated Fleet Transit</h4>
                                        <p class="process-card-desc">Assets are loaded into dedicated GPS-tracked container vehicles and safely moved directly to the new facility.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-lock-fill"></i> GPS Monitored Fleet</div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-building-check"></i></div>
                                            <span class="process-count-badge">Step 04</span>
                                        </div>
                                        <h4 class="process-card-title">Unpacking &amp; Desk Setup</h4>
                                        <p class="process-card-desc">Items are placed at designated employee desks as per floor map, cubicles are reassembled, and IT cables routed.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-patch-check-fill"></i> Ready-to-Work Monday</div>
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
                                <div class="bike-faq-header" data-bs-toggle="collapse" data-bs-target="#ofaq1" aria-expanded="true">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-clock-history"></i></div>
                                        <h4 class="faq-q-text">Can office relocation be executed during weekends or nights?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="ofaq1" class="collapse show bike-faq-body">
                                    Yes! <?= htmlspecialchars($company3) ?> specializes in weekend and overnight office shifting so your staff can resume work seamlessly on Monday morning.
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#ofaq2" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-cpu-fill"></i></div>
                                        <h4 class="faq-q-text">How do you ensure IT servers and electronics remain safe?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="ofaq2" class="collapse bike-faq-body">
                                    We use specialized anti-static bubble wrap, cushioned server crates, and shock-absorbent padding during transport.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#ofaq3" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-file-earmark-lock-fill"></i></div>
                                        <h4 class="faq-q-text">Is confidentiality maintained for office documents?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="ofaq3" class="collapse bike-faq-body">
                                    Absolutely. Files are stored in numbered security trunks sealed in your presence and opened only at the destination floor.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR (4 COLS) -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'office-relocation']); ?>
            </div>

        </div>
    </div>
</section>
