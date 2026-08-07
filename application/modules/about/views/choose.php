<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load About Modules Scoped CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/about_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Why Choose ' . htmlspecialchars($company3),
    'bc_desc' => 'Discover the 6 key reasons why 50,000+ households trust us for safe, scratch-free shifting',
    'breadcrumbs' => [
        ['name' => 'Why Choose Us']
    ]
]);
?>

<!-- MAIN WHY CHOOSE US PAGE SECTION -->
<section class="about-page-section">
    <div class="container">
        
        <!-- 1. HERO INTRO BOX CARD -->
        <div class="about-hero-box text-center">
            <span class="about-top-pill pill-gold">
                <i class="bi bi-star-fill me-1"></i> 6 Pillars of Relocation Trust
            </span>
            <h1 class="about-heading-primary mt-2">Why <?= htmlspecialchars($company3) ?> is the #1 Preferred Mover</h1>
            <p class="about-text-lead mx-auto" style="max-width: 820px;">
                Relocation isn't just about hauling boxes—it's about protecting your valuable memories and home assets. Here is why thousands of households and top businesses trust <strong><?= htmlspecialchars($company3) ?></strong> for scratch-free relocation.
            </p>
        </div>

        <!-- 2. 6 FEATURE CARDS GRID -->
        <div class="feature-box-grid">
            
            <!-- Box 1 -->
            <div class="feature-card-box">
                <div>
                    <div class="feature-box-top">
                        <div class="feat-icon-badge"><i class="bi bi-box-seam-fill"></i></div>
                        <span class="feat-step-tag">Pillar 01</span>
                    </div>
                    <h3 class="feat-box-title">5-Layer Export Cushioning</h3>
                    <p class="feat-box-desc">Air-bubble rolls, 7-ply corrugated cartons, foam edge protectors, and stretch films shield furniture against shocks &amp; scratches.</p>
                </div>
                <div class="feat-box-chip"><i class="bi bi-shield-check"></i> Scratch-Proof Guarantee</div>
            </div>

            <!-- Box 2 -->
            <div class="feature-card-box">
                <div>
                    <div class="feature-box-top">
                        <div class="feat-icon-badge"><i class="bi bi-shield-lock-fill"></i></div>
                        <span class="feat-step-tag">Pillar 02</span>
                    </div>
                    <h3 class="feat-box-title">100% Comprehensive Insurance</h3>
                    <p class="feat-box-desc">Full-value transit coverage protecting your goods against unforeseen road hazards, weather damage, or accident risks.</p>
                </div>
                <div class="feat-box-chip"><i class="bi bi-shield-lock"></i> Financial Peace of Mind</div>
            </div>

            <!-- Box 3 -->
            <div class="feature-card-box">
                <div>
                    <div class="feature-box-top">
                        <div class="feat-icon-badge"><i class="bi bi-cash-stack"></i></div>
                        <span class="feat-step-tag">Pillar 03</span>
                    </div>
                    <h3 class="feat-box-title">Zero Hidden Costs Guarantee</h3>
                    <p class="feat-box-desc">Transparent written quotation upfront. The price estimated before packing is exact—no unexpected fees at delivery.</p>
                </div>
                <div class="feat-box-chip"><i class="bi bi-file-earmark-check"></i> Fixed Quote Contract</div>
            </div>

            <!-- Box 4 -->
            <div class="feature-card-box">
                <div>
                    <div class="feature-box-top">
                        <div class="feat-icon-badge"><i class="bi bi-truck"></i></div>
                        <span class="feat-step-tag">Pillar 04</span>
                    </div>
                    <h3 class="feat-box-title">Sealed GPS-Tracked Fleets</h3>
                    <p class="feat-box-desc">Weatherproof container trucks equipped with real-time GPS tracking and cargo tie-down ratchets for highway safety.</p>
                </div>
                <div class="feat-box-chip"><i class="bi bi-geo-alt-fill"></i> Live GPS Monitored</div>
            </div>

            <!-- Box 5 -->
            <div class="feature-card-box">
                <div>
                    <div class="feature-box-top">
                        <div class="feat-icon-badge"><i class="bi bi-person-check-fill"></i></div>
                        <span class="feat-step-tag">Pillar 05</span>
                    </div>
                    <h3 class="feat-box-title">Trained In-House Packers</h3>
                    <p class="feat-box-desc">Uniformed, background-verified packers, carpenters, and logistics managers trained in surgical packing precision.</p>
                </div>
                <div class="feat-box-chip"><i class="bi bi-patch-check-fill"></i> Certified Professionals</div>
            </div>

            <!-- Box 6 -->
            <div class="feature-card-box">
                <div>
                    <div class="feature-box-top">
                        <div class="feat-icon-badge"><i class="bi bi-house-door-fill"></i></div>
                        <span class="feat-step-tag">Pillar 06</span>
                    </div>
                    <h3 class="feat-box-title">Doorstep Setup &amp; Reassembly</h3>
                    <p class="feat-box-desc">Complete door-to-door unpacking, room placement, and furniture reassembly at your new destination with 24/7 helpline.</p>
                </div>
                <div class="feat-box-chip"><i class="bi bi-check-circle-fill"></i> Complete Home Setup</div>
            </div>

        </div>

        <!-- 3. COMPARISON CARDS DECK -->
        <div class="comparison-cards-wrapper">
            <div class="text-center mb-4">
                <span class="about-top-pill"><i class="bi bi-check-all me-1"></i> Clear Comparison</span>
                <h2 class="fw-bold text-dark fs-24 mb-0">How <?= htmlspecialchars($company3) ?> Outperforms Local Movers</h2>
            </div>

            <div class="comp-box-grid">
                <!-- Elite Packers Card -->
                <div class="comp-card-elite">
                    <div class="comp-card-header text-danger">
                        <i class="bi bi-shield-fill-check fs-22"></i>
                        <span><?= htmlspecialchars($company3) ?> Standard</span>
                    </div>
                    <ul class="comp-item-list">
                        <li class="comp-item-row">
                            <i class="bi bi-check-circle-fill text-success fs-16 me-2"></i>
                            <div><strong>5-Layer Export Packing:</strong> High-density bubble wrap, foam corner guards, and 7-ply cartons.</div>
                        </li>
                        <li class="comp-item-row">
                            <i class="bi bi-check-circle-fill text-success fs-16 me-2"></i>
                            <div><strong>Fixed Written Quotation:</strong> 100% transparent pricing with zero surprise charges at delivery.</div>
                        </li>
                        <li class="comp-item-row">
                            <i class="bi bi-check-circle-fill text-success fs-16 me-2"></i>
                            <div><strong>Full Goods Insurance:</strong> Comprehensive transit risk policy with fast claim desk assistance.</div>
                        </li>
                        <li class="comp-item-row">
                            <i class="bi bi-check-circle-fill text-success fs-16 me-2"></i>
                            <div><strong>Enclosed GPS Containers:</strong> Sealed weatherproof trucks with live tracking updates.</div>
                        </li>
                    </ul>
                </div>

                <!-- Local Unregistered Movers Card -->
                <div class="comp-card-local">
                    <div class="comp-card-header text-muted">
                        <i class="bi bi-x-circle-fill fs-22 text-secondary"></i>
                        <span>Unregistered Local Movers</span>
                    </div>
                    <ul class="comp-item-list">
                        <li class="comp-item-row">
                            <i class="bi bi-x-circle-fill text-danger fs-16 me-2"></i>
                            <div><strong>Cheap Single Wrapping:</strong> Used cardboard boxes and thin tape leading to scratched furniture.</div>
                        </li>
                        <li class="comp-item-row">
                            <i class="bi bi-x-circle-fill text-danger fs-16 me-2"></i>
                            <div><strong>Hidden Costs Added:</strong> Demand extra fees for labor, stairs, or tolls at destination point.</div>
                        </li>
                        <li class="comp-item-row">
                            <i class="bi bi-x-circle-fill text-danger fs-16 me-2"></i>
                            <div><strong>Zero Transit Protection:</strong> No insurance policy provided; client bears 100% damage risk.</div>
                        </li>
                        <li class="comp-item-row">
                            <i class="bi bi-x-circle-fill text-danger fs-16 me-2"></i>
                            <div><strong>Open Uncovered Trucks:</strong> Cargo exposed to rain, highway dust, and theft during transit.</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- 4. HIGH IMPACT CTA BANNER -->
        <div class="about-banner-cta">
            <div>
                <h3 class="banner-cta-heading">Ready for a Scratch-Free Relocation?</h3>
                <p class="banner-cta-sub">Speak with our relocation experts and claim your personalized quote now.</p>
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