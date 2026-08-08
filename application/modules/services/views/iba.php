<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load Services Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/services_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'IBA Approved Packers and Movers',
    'bc_desc' => 'Official Indian Banks Association (IBA) approved bills, 100% genuine relocation & bank employee shifting services across India',
    'breadcrumbs' => [
        ['name' => 'IBA Approved Packers']
    ]
]);
?>

<!-- MAIN IBA APPROVED SERVICES CONTENT SECTION -->
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
                    
                    <!-- 1. FEATURED IMAGE FIRST (WITH BRANDING & THEME COLORS) -->
                    <div class="bike-normal-image-box mb-4">
                        <img src="<?= base_url('assets/images/services_modules/iba-approved.jpg') ?>" alt="IBA Approved Packers and Movers - <?= htmlspecialchars($company3) ?>" class="img-fluid rounded-4 shadow-sm w-100" loading="lazy">
                    </div>

                    <!-- 2. INTRO HEADER FOLLOWING THE IMAGE -->
                    <div class="bike-intro-header mb-4">
                        <span class="bike-sub-tag">
                            <i class="bi bi-patch-check-fill text-gold me-1"></i> Official IBA Certified Logistics
                        </span>
                        <h2 class="service-section-title mt-2">IBA Approved Packing &amp; Moving Services</h2>
                        <p class="about-service-text">
                            <strong><?= htmlspecialchars($company3) ?></strong> is a recognized and <strong>IBA Approved Packers and Movers</strong> company in India. We specialize in providing 100% valid, authentic, and official relocation bills for Bank employees, PSU officers, Defense personnel, and Government sector staff to ensure 100% claim reimbursement without rejection.
                        </p>
                        <p class="about-service-text">
                            Whether you are getting transferred to a new bank branch or relocating your household goods, vehicle, and family, our IBA certified logistics team provides official Consignment Notes (LR), Itemized Packing Lists, Bill / GST Tax Invoices, Money Receipts, and Transit Insurance documents accepted by all nationalized and private banks across India.
                        </p>
                    </div>

                    <!-- 3. FEATURE PILLARS GRID (4 LIGHT CARDS) -->
                    <div class="row g-3 mb-5">
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-file-earmark-check-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">IBA Valid Bills</span>
                                    <small class="feat-light-sub">100% Bank Accepted</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-building-check"></i></div>
                                <div>
                                    <span class="feat-light-label">Bank Transferred</span>
                                    <small class="feat-light-sub">For PSU &amp; Bank Staff</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-shield-lock-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Transit Insured</span>
                                    <small class="feat-light-sub">Full Goods Cover</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="bike-light-feature-card">
                                <div class="feat-light-icon"><i class="bi bi-truck-front-fill"></i></div>
                                <div>
                                    <span class="feat-light-label">Pan-India Network</span>
                                    <small class="feat-light-sub">All Indian States</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION 1: DOCUMENTS PROVIDED FOR REIMBURSEMENT (4-CARD GRID) -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-files me-1"></i> Claim Documentation</span>
                            <h3 class="bike-block-title">Complete Documents Provided for IBA Claim</h3>
                        </div>

                        <div class="row g-3">
                            <!-- 1. Official Consignment Note (LR) -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-file-text-fill"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Official Consignment Note (LR)</h4>
                                        <p class="cat-desc">Stamped Lorry Receipt mentioning container truck number, origin, destination, &amp; gross goods weight.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Original Stamped Copy</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 2. Original Tax Invoice / Bill -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-receipt-cutoff"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Original GST Tax Invoice</h4>
                                        <p class="cat-desc">Official GST registered bill displaying company IBA approval code, HSN codes, and itemized charges.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> GST Registered Invoice</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 3. Itemized Inventory List -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-list-check"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Itemized Packing Inventory</h4>
                                        <p class="cat-desc">Item-by-item breakdown of packed furniture, electronics, and kitchenware with declared values.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> Numbered Box Listing</span>
                                    </div>
                                </div>
                            </div>

                            <!-- 4. Official Money Receipt -->
                            <div class="col-md-6">
                                <div class="bike-category-card">
                                    <div class="cat-icon-badge">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                    <div>
                                        <h4 class="cat-title">Official Money Receipt</h4>
                                        <p class="cat-desc">Official payment receipt stamped for full moving expenses for seamless claim approval by your manager.</p>
                                        <span class="cat-pill"><i class="bi bi-check2-circle"></i> 100% Claim Verified</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 2: 3-LAYER IBA VERIFICATION & SAFETY SYSTEM -->
                    <div class="bike-armor-card">
                        <div class="bike-block-header mb-4">
                            <span class="bike-sub-tag"><i class="bi bi-shield-check me-1"></i> IBA Compliance</span>
                            <h3 class="bike-block-title">Our 3-Point IBA Authenticity Guarantee</h3>
                            <p class="text-muted fs-14 mb-0">How <?= htmlspecialchars($company3) ?> ensures hassle-free bank claim approval</p>
                        </div>

                        <div class="row g-3">
                            <!-- Point 1 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Point 01</span>
                                    <div class="armor-icon"><i class="bi bi-patch-check-fill"></i></div>
                                    <h4 class="armor-title">Official IBA Code Registration</h4>
                                    <p class="armor-desc">Active IBA approval code printed on all bills, LR copies, and consignment receipts.</p>
                                </div>
                            </div>

                            <!-- Point 2 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Point 02</span>
                                    <div class="armor-icon"><i class="bi bi-building-check"></i></div>
                                    <h4 class="armor-title">Accepted By All Nationalized Banks</h4>
                                    <p class="armor-desc">Directly accepted by SBI, PNB, BOB, Canara, Union Bank, HDFC, ICICI, &amp; RRBs.</p>
                                </div>
                            </div>

                            <!-- Point 3 -->
                            <div class="col-md-4">
                                <div class="armor-step-box">
                                    <span class="armor-badge">Point 03</span>
                                    <div class="armor-icon"><i class="bi bi-file-earmark-lock-fill"></i></div>
                                    <h4 class="armor-title">Zero Rejection Insurance Cover</h4>
                                    <p class="armor-desc">Complete transit policy document attached with bills for claim verification.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 3: 4-STEP IBA RELOCATION PROCESS -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-signpost-split-fill me-1"></i> Workflow</span>
                            <h3 class="bike-block-title">How We Handle Your IBA Bank Shifting</h3>
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
                                        <h4 class="process-card-title">Pre-Move Survey &amp; IBA Quotation</h4>
                                        <p class="process-card-desc">Our moving expert conducts an inventory survey to provide a fixed IBA compliant quotation required by your bank.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-file-earmark-check-fill"></i> Bank Standard Rates</div>
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
                                        <h4 class="process-card-title">Multi-Layer Household Packing</h4>
                                        <p class="process-card-desc">Trained crew uses 5-layer bubble wrap, heavy corrugated boxes, and waterproof stretch film for maximum safety.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-shield-lock-fill"></i> 5-Layer Cushioning</div>
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
                                        <h4 class="process-card-title">Insured Container Truck Transit</h4>
                                        <p class="process-card-desc">Your goods are loaded into enclosed container trucks with full transit insurance policy and real-time tracking.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-lock-fill"></i> Covered Truck Transit</div>
                                </div>
                            </div>

                            <!-- Step 4 -->
                            <div class="col-md-6">
                                <div class="bike-process-card">
                                    <div>
                                        <div class="process-card-top">
                                            <div class="process-icon-box"><i class="bi bi-check-circle-fill"></i></div>
                                            <span class="process-count-badge">Step 04</span>
                                        </div>
                                        <h4 class="process-card-title">Door Delivery &amp; Claim Handover</h4>
                                        <p class="process-card-desc">Unloading at your new destination followed by immediate handover of original IBA document kit for your transfer claim.</p>
                                    </div>
                                    <div class="process-chip"><i class="bi bi-patch-check-fill"></i> 100% Claim Guarantee</div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- SECTION 4: FREQUENTLY ASKED QUESTIONS -->
                    <div class="bike-section-block">
                        <div class="bike-block-header">
                            <span class="bike-sub-tag"><i class="bi bi-question-circle-fill me-1"></i> Clear Answers</span>
                            <h3 class="bike-block-title">Frequently Asked Questions (IBA Shifting)</h3>
                        </div>

                        <div class="bike-faq-list">
                            <!-- FAQ 1 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header" data-bs-toggle="collapse" data-bs-target="#ibafaq1" aria-expanded="true">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-patch-check-fill"></i></div>
                                        <h4 class="faq-q-text">What are IBA Approved Packers and Movers?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="ibafaq1" class="collapse show bike-faq-body">
                                    IBA Approved Packers and Movers are logistics operators registered with the Indian Banks' Association (IBA). They adhere to strict safety norms, transparent billing, and standardized transportation practices required by nationalized banks for employee transfer bills.
                                </div>
                            </div>

                            <!-- FAQ 2 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#ibafaq2" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-file-earmark-check-fill"></i></div>
                                        <h4 class="faq-q-text">Can I claim 100% relocation allowance using your IBA bills?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="ibafaq2" class="collapse bike-faq-body">
                                    Yes, absolutely. We provide a complete set of original documents including GST Invoice, Lorry Receipt (LR), Itemized Packing List, and Official Money Receipt stamped with our IBA approval code for 100% claim approval.
                                </div>
                            </div>

                            <!-- FAQ 3 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#ibafaq3" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-car-front-fill"></i></div>
                                        <h4 class="faq-q-text">Do you provide IBA bills for vehicle and car transport as well?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="ibafaq3" class="collapse bike-faq-body">
                                    Yes, we provide official IBA bills and car carrier consignment notes for car and two-wheeler transportation alongside household shifting.
                                </div>
                            </div>

                            <!-- FAQ 4 -->
                            <div class="bike-faq-item">
                                <div class="bike-faq-header collapsed" data-bs-toggle="collapse" data-bs-target="#ibafaq4" aria-expanded="false">
                                    <div class="faq-header-left">
                                        <div class="faq-q-icon"><i class="bi bi-building-check"></i></div>
                                        <h4 class="faq-q-text">Which banks accept <?= htmlspecialchars($company3) ?> IBA bills?</h4>
                                    </div>
                                    <div class="bike-faq-toggle-pill"><i class="bi bi-chevron-down"></i></div>
                                </div>
                                <div id="ibafaq4" class="collapse bike-faq-body">
                                    Our IBA bills are accepted by all major nationalized and private sector banks in India, including State Bank of India (SBI), Punjab National Bank (PNB), Bank of Baroda (BOB), Canara Bank, Union Bank, HDFC, ICICI, Axis Bank, and all Regional Rural Banks (RRBs).
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- RIGHT COLUMN: SIDEBAR (4 COLS) -->
            <div class="col-lg-4">
                <?php $this->load->view('services/service_sidebar', ['active_service' => 'iba-approved-packers-and-movers']); ?>
            </div>

        </div>
    </div>
</section>
