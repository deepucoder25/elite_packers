<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load About Modules Scoped CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/about_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'About ' . htmlspecialchars($company3),
    'bc_desc' => 'India\'s premier ISO certified packing & moving company with 15+ years of trusted relocation experience',
    'breadcrumbs' => [
        ['name' => 'About Us']
    ]
]);
?>

<!-- MAIN ABOUT PAGE SECTION -->
<section class="about-page-section">
    <div class="container">
        
        <!-- 1. HERO BOX CARD -->
        <div class="about-hero-box">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <span class="about-top-pill">
                        <i class="bi bi-shield-fill-check text-gold me-1"></i> ISO 9001:2015 Certified Movers
                    </span>
                    <h1 class="about-heading-primary">Reshaping India's Relocation &amp; Logistics Standards</h1>
                    <p class="about-text-lead">
                        Established with a commitment to reliability, <strong><?= htmlspecialchars($company3) ?></strong> has grown into one of India’s most trusted multi-city relocation &amp; logistics enterprises. We specialize in household shifting, corporate office relocation, car &amp; motorcycle carrier transit, and secure short/long term warehousing.
                    </p>
                    <p class="about-text-lead">
                        Our trained packing specialists, custom-built container trucks, and 5-layer wrapping technology ensure your household goods and luxury automobiles arrive at your new destination 100% scratch-free, zero-mileage, and fully insured.
                    </p>
                </div>

                <div class="col-lg-5">
                    <div class="about-hero-frame">
                        <img src="<?= base_url('assets/images/home_modules/about.jpg') ?>" alt="About <?= htmlspecialchars($company3) ?>" loading="lazy">
                        <div class="hero-overlay-tag">
                            <div class="tag-icon"><i class="bi bi-award-fill"></i></div>
                            <div>
                                <h4 class="tag-title">Top Rated Relocation Brand</h4>
                                <small class="text-muted fs-12">50,000+ Successful Moves</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. MODERN STAT COUNTER BOXES -->
        <div class="about-stat-row">
            <div class="stat-box-modern">
                <div class="stat-glow-dot"></div>
                <div class="stat-num-giant"><?= $yearsExperience ?></div>
                <div class="stat-txt-label">Years Operating Experience</div>
            </div>

            <div class="stat-box-modern">
                <div class="stat-glow-dot"></div>
                <div class="stat-num-giant"><?= $happyClients ?></div>
                <div class="stat-txt-label">Happy Families Relocated</div>
            </div>

            <div class="stat-box-modern">
                <div class="stat-glow-dot"></div>
                <div class="stat-num-giant"><?= $statesCovered ?></div>
                <div class="stat-txt-label">States Covered</div>
            </div>

            <div class="stat-box-modern">
                <div class="stat-glow-dot"></div>
                <div class="stat-num-giant"><?= $secureShifting ?></div>
                <div class="stat-txt-label">Comprehensive Transit Cover</div>
            </div>
        </div>

        <!-- 3. TRIO CARDS (MISSION, VISION, QUALITY POLICY) -->
        <div class="trio-cards-grid">
            <!-- Mission Card -->
            <div class="trio-card-box">
                <div class="trio-badge-icon"><i class="bi bi-bullseye"></i></div>
                <h3 class="trio-title">Our Mission</h3>
                <p class="trio-desc">To deliver 100% scratch-free, damage-free, and punctual door-to-door relocation solutions using multi-layer export-grade packing and trained crew.</p>
            </div>

            <!-- Vision Card -->
            <div class="trio-card-box trio-gold">
                <div class="trio-badge-icon"><i class="bi bi-eye-fill"></i></div>
                <h3 class="trio-title">Our Vision</h3>
                <p class="trio-desc">To set the gold benchmark for logistics reliability across India, empowering households and business enterprises with seamless, stress-free moving.</p>
            </div>

            <!-- Quality Policy Card -->
            <div class="trio-card-box trio-dark">
                <div class="trio-badge-icon"><i class="bi bi-shield-check"></i></div>
                <h3 class="trio-title">Quality Assurance</h3>
                <p class="trio-desc">From inventory audit to doorstep reassembly, every stage is executed by uniformed, background-verified personnel following strict safety protocols.</p>
            </div>
        </div>

        <!-- 4. HIGH IMPACT CTA BANNER -->
        <div class="about-banner-cta">
            <div>
                <h3 class="banner-cta-heading">Planning a Relocation Soon?</h3>
                <p class="banner-cta-sub">Speak directly with our relocation specialists for a free fixed-rate written estimate.</p>
            </div>
            <div class="banner-cta-group">
                <a href="<?= $phonehtml ?>" class="btn-cta-red">
                    <i class="bi bi-telephone-fill me-1"></i> Call <?= htmlspecialchars($phone) ?>
                </a>
                <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-green">
                    <i class="bi bi-whatsapp me-1"></i> WhatsApp Quote
                </a>
            </div>
        </div>

    </div>
</section>