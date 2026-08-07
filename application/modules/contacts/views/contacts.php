<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed'); ?>

<!-- Load Contact Scoped CSS Module -->
<link rel="stylesheet" href="<?= base_url('assets/css/contact_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Contact Us',
    'bc_desc' => 'Connect directly with our 24/7 relocation specialists & get free shifting estimates',
    'breadcrumbs' => [
        ['name' => 'Contact Us']
    ]
]);
?>

<!-- MAIN CONTACT CONTENT WRAPPER WITH DYNAMIC SVG WAVES -->
<section class="contact-main-wrapper">
    
    <!-- Top SVG Wavy Vector Shape -->
    <div class="contact-wavy-top-bg">
        <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
            <path d="M0,0 C320,100 420,0 740,60 C1060,120 1180,20 1440,70 L1440,0 L0,0 Z" fill="rgba(186, 6, 6, 0.03)"></path>
            <path d="M0,0 C450,70 600,10 900,80 C1200,30 1350,70 1440,40 L1440,0 L0,0 Z" fill="rgba(255, 179, 0, 0.04)"></path>
        </svg>
    </div>

    <!-- Bottom SVG Wavy Vector Shape -->
    <div class="contact-wavy-bottom-bg">
        <svg viewBox="0 0 1440 130" preserveAspectRatio="none">
            <path d="M0,40 C320,110 500,20 800,90 C1100,30 1300,100 1440,50 L1440,130 L0,130 Z" fill="rgba(186, 6, 6, 0.03)"></path>
            <path d="M0,70 C400,20 700,110 1000,40 C1250,90 1380,30 1440,80 L1440,130 L0,130 Z" fill="rgba(15, 23, 42, 0.03)"></path>
        </svg>
    </div>

    <div class="container contact-relative-z">
        
        <!-- SECTION 1: QUICK CONTACT ACTION DECK (3 HELPLINE CARDS) -->
        <div class="row g-4 mb-5">
            <!-- 1. Phone Helpline -->
            <div class="col-md-4">
                <a href="<?= $phonehtml ?>" class="contact-deck-card">
                    <div class="contact-deck-icon">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <div>
                        <span class="contact-deck-title">Primary Helpline</span>
                        <span class="contact-deck-value"><?= htmlspecialchars($phone) ?></span>
                    </div>
                </a>
            </div>

            <!-- 2. Email Support -->
            <div class="col-md-4">
                <a href="<?= $mailhtml ?>" class="contact-deck-card">
                    <div class="contact-deck-icon">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div>
                        <span class="contact-deck-title">Official Email</span>
                        <span class="contact-deck-value"><?= htmlspecialchars($mail) ?></span>
                    </div>
                </a>
            </div>

            <!-- 3. WhatsApp Support -->
            <div class="col-md-4">
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="contact-deck-card whatsapp-deck">
                    <div class="contact-deck-icon">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                    <div>
                        <span class="contact-deck-title">WhatsApp Support</span>
                        <span class="contact-deck-value">Chat Instant Quote</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- SECTION 2: OFFICIAL REGISTERED OFFICES & BOTH ADDRESS BOXES -->
        <div class="section-head-center">
            <span class="sub-tag">
                <i class="bi bi-shield-check-fill text-gold me-1"></i> Government Registered Facilities
            </span>
            <h2 class="main-title">Official Registered Offices &amp; Booth Numbers</h2>
        </div>

        <div class="row g-4 align-items-stretch mb-5">
            
            <!-- TOWER 1: HEADQUARTERS ADDRESS CARD -->
            <div class="col-lg-6">
                <div class="office-booth-tower-card">
                    <div class="office-tower-ribbon ribbon-gold"></div>
                    
                    <div>
                        <span class="office-tower-type type-head-office">
                            <i class="bi bi-building-fill-check me-1"></i> Official Headquarters
                        </span>

                        <h3 class="office-tower-name"><?= htmlspecialchars($company3) ?> - Head Office</h3>
                        <p class="office-tower-address">
                            <?= htmlspecialchars($address) ?>
                        </p>

                        <div class="booth-badges-row mb-4">
                            <span class="badge-booth-highlight">
                                <i class="bi bi-hash"></i> Booth No: F-10/101 (Sector 15)
                            </span>
                            <span class="badge-location-info">
                                <i class="bi bi-pin-map-fill text-danger"></i> <?= htmlspecialchars($addressRegion) ?> - PIN: <?= htmlspecialchars($postalCode) ?>
                            </span>
                        </div>
                    </div>

                    <div class="office-tower-actions">
                        <a href="<?= $phonehtml ?>" class="btn-tower-call w-100">
                            <i class="bi bi-telephone-fill"></i> Call Head Office (<?= htmlspecialchars($phone) ?>)
                        </a>
                    </div>

                </div>
            </div>

            <!-- TOWER 2: BRANCH OFFICE ADDRESS CARD -->
            <?php if (!empty($branch_address)): ?>
            <div class="col-lg-6">
                <div class="office-booth-tower-card">
                    <div class="office-tower-ribbon"></div>
                    
                    <div>
                        <span class="office-tower-type type-branch-office">
                            <i class="bi bi-box-seam-fill me-1"></i> Regional Branch &amp; Logistics Hub
                        </span>

                        <h3 class="office-tower-name"><?= htmlspecialchars($company3) ?> - Branch Office</h3>
                        <p class="office-tower-address">
                            <?= htmlspecialchars($branch_address) ?>
                        </p>

                        <div class="booth-badges-row mb-4">
                            <span class="badge-booth-highlight">
                                <i class="bi bi-hash"></i> Booth / KH No: 376 (Plot 452)
                            </span>
                            <span class="badge-location-info">
                                <i class="bi bi-pin-map-fill text-danger"></i> Dwarka Sector 26 - PIN: <?= htmlspecialchars($branch_postalCode) ?>
                            </span>
                        </div>
                    </div>

                    <div class="office-tower-actions">
                        <a href="<?= isset($phonehtml1) && !empty($phonehtml1) ? $phonehtml1 : $phonehtml ?>" class="btn-tower-call w-100">
                            <i class="bi bi-telephone-fill"></i> Call Branch Office (<?= !empty($phone1) ? htmlspecialchars($phone1) : htmlspecialchars($phone) ?>)
                        </a>
                    </div>

                </div>
            </div>
            <?php endif; ?>

        </div>


        <!-- SECTION 3: NEXT-GEN QUOTATION & MAP PORTAL -->
        <div class="contact-portal-card">
            <div class="row g-4 align-items-center">
                
                <!-- Left Column: Interactive Ultra-Attractive Quotation Form -->
                <div class="col-lg-6">
                    
                    <!-- Wavy Top Heading Header -->
                    <div class="portal-form-wavy-header">
                        <span class="portal-header-badge">
                            <i class="bi bi-lightning-charge-fill me-1"></i> 100% Free Instant Quote
                        </span>
                        <h3 class="portal-header-title">Get Free Moving Price Quote</h3>
                        <p class="portal-header-subtitle">Fill in your shifting details below for an immediate tariff estimate &amp; instant callback.</p>

                        <!-- Bottom Wavy SVG Curve -->
                        <div class="portal-header-wave">
                            <svg viewBox="0 0 600 24" preserveAspectRatio="none">
                                <path d="M0,0 C180,22 420,0 600,18 L600,24 L0,24 Z" fill="#ffffff"></path>
                            </svg>
                        </div>
                    </div>

                    <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        
                        <!-- Service Choice Pills Grid (2x2) -->
                        <div class="portal-service-grid">
                            <div>
                                <input type="radio" name="service_type" id="srv_home" value="Household Shifting" class="portal-service-radio" checked>
                                <label for="srv_home" class="portal-service-label"><i class="bi bi-house-door-fill"></i> House Move</label>
                            </div>
                            <div>
                                <input type="radio" name="service_type" id="srv_office" value="Office Relocation" class="portal-service-radio">
                                <label for="srv_office" class="portal-service-label"><i class="bi bi-building-fill"></i> Office Move</label>
                            </div>
                            <div>
                                <input type="radio" name="service_type" id="srv_vehicle" value="Vehicle Transport" class="portal-service-radio">
                                <label for="srv_vehicle" class="portal-service-label"><i class="bi bi-truck-flatbed"></i> Car / Bike</label>
                            </div>
                            <div>
                                <input type="radio" name="service_type" id="srv_storage" value="Warehouse Storage" class="portal-service-radio">
                                <label for="srv_storage" class="portal-service-label"><i class="bi bi-box-seam-fill"></i> Storage</label>
                            </div>
                        </div>

                        <!-- 2-Column Responsive Input Grid -->
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <div class="portal-input-group">
                                    <label for="contact_name">Your Full Name *</label>
                                    <div class="input-icon-circle"><i class="bi bi-person-fill"></i></div>
                                    <input type="text" name="name" id="contact_name" class="form-control" placeholder="Enter your full name" required>
                                </div>
                            </div>

                            <!-- Mobile Number -->
                            <div class="col-md-6">
                                <div class="portal-input-group">
                                    <label for="contact_phone">Mobile Phone *</label>
                                    <div class="input-icon-circle"><i class="bi bi-telephone-fill"></i></div>
                                    <input type="tel" name="phone" id="contact_phone" class="form-control" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-12">
                                <div class="portal-input-group">
                                    <label for="contact_email">Email Address</label>
                                    <div class="input-icon-circle"><i class="bi bi-envelope-fill"></i></div>
                                    <input type="email" name="email" id="contact_email" class="form-control" placeholder="name@example.com">
                                </div>
                            </div>

                            <!-- Shifting Details -->
                            <div class="col-md-12">
                                <div class="portal-input-group">
                                    <label for="contact_message">Shifting Details &amp; Date</label>
                                    <div class="input-icon-circle"><i class="bi bi-chat-left-text-fill"></i></div>
                                    <textarea name="message" id="contact_message" class="form-control" placeholder="Mention moving items, date, pickup &amp; delivery location..."></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Submit CTA Button -->
                        <button type="submit" class="btn-portal-submit mt-3">
                            <i class="bi bi-send-fill"></i>
                            <span>Calculate &amp; Get Free Quote</span>
                        </button>

                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>

                <!-- Right Column: Map Frame Box dynamically embedded using $address -->
                <div class="col-lg-6">
                    <div class="portal-map-frame-box">
                        <span class="portal-map-overlay-badge">
                            <i class="bi bi-geo-alt-fill text-gold"></i> Live Head Office Map Location
                        </span>

                        <iframe
                            src="https://maps.google.com/maps?q=<?= urlencode($address) ?>&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <a href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($address) ?>" target="_blank" rel="noopener" class="portal-map-direct-btn">
                            <i class="bi bi-geo-alt-fill"></i> Open Google Maps Direction
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>