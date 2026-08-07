<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load About Modules Scoped CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/about_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Frequently Asked Questions',
    'bc_desc' => 'Clear answers to common questions regarding home shifting, vehicle shipping, rates & insurance',
    'breadcrumbs' => [
        ['name' => 'Frequently Asked Questions']
    ]
]);
?>

<!-- MAIN FAQS PAGE SECTION -->
<section class="about-page-section">
    <div class="container">
        
        <div class="faq-box-container">
            <div class="text-center mb-5">
                <span class="about-top-pill pill-gold">
                    <i class="bi bi-question-circle-fill me-1"></i> Knowledge Base &amp; Help Desk
                </span>
                <h1 class="about-heading-primary mt-2">Frequently Asked Questions</h1>
                <p class="about-text-lead mx-auto" style="max-width: 800px;">
                    Have questions about your upcoming relocation? Here are transparent answers regarding our 5-layer packing standards, fixed quotations, vehicle transport procedures, transit insurance coverage, and doorstep delivery protocols at <strong><?= htmlspecialchars($company3) ?></strong>.
                </p>
            </div>

            <!-- FAQ BOX LIST -->
            <div class="faq-card-modern">
                <div class="faq-card-header" data-bs-toggle="collapse" data-bs-target="#boxfaq1" aria-expanded="true">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-calendar-event-fill text-danger fs-18"></i>
                        <h3 class="faq-card-question">How far in advance should I book my relocation service?</h3>
                    </div>
                    <i class="bi bi-chevron-down text-muted"></i>
                </div>
                <div id="boxfaq1" class="collapse show faq-card-body">
                    We recommend booking at least 3 to 7 days in advance for local household shifting, and 7 to 10 days in advance for long-distance intercity relocation to reserve your preferred move date and container vehicle.
                </div>
            </div>

            <div class="faq-card-modern">
                <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#boxfaq2" aria-expanded="false">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-box-seam-fill text-danger fs-18"></i>
                        <h3 class="faq-card-question">Do I need to arrange packing materials myself?</h3>
                    </div>
                    <i class="bi bi-chevron-down text-muted"></i>
                </div>
                <div id="boxfaq2" class="collapse faq-card-body">
                    Not at all! <strong><?= htmlspecialchars($company3) ?></strong> brings all required high-grade packing materials including bubble wrap rolls, 7-ply corrugated cartons, foam sheets, stretch film, and custom wooden crating as part of our all-inclusive service.
                </div>
            </div>

            <div class="faq-card-modern">
                <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#boxfaq3" aria-expanded="false">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-cash-stack text-danger fs-18"></i>
                        <h3 class="faq-card-question">Are there any hidden costs added at the time of delivery?</h3>
                    </div>
                    <i class="bi bi-chevron-down text-muted"></i>
                </div>
                <div id="boxfaq3" class="collapse faq-card-body">
                    Absolutely not. We provide a transparent written estimate after assessing your inventory. The agreed quote includes packing, labor, loading, transportation, and unloading—there are zero hidden charges.
                </div>
            </div>

            <div class="faq-card-modern">
                <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#boxfaq4" aria-expanded="false">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-shield-check text-danger fs-18"></i>
                        <h3 class="faq-card-question">How does transit insurance work for my household goods?</h3>
                    </div>
                    <i class="bi bi-chevron-down text-muted"></i>
                </div>
                <div id="boxfaq4" class="collapse faq-card-body">
                    We offer full-value transit insurance covering your items against unforeseen road accidents, fire, or theft during highway transit. In the rare event of damage, our claims department assists you with fast insurance settlement.
                </div>
            </div>

            <div class="faq-card-modern">
                <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#boxfaq5" aria-expanded="false">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-car-front-fill text-danger fs-18"></i>
                        <h3 class="faq-card-question">How are cars and bikes transported to another city?</h3>
                    </div>
                    <i class="bi bi-chevron-down text-muted"></i>
                </div>
                <div id="boxfaq5" class="collapse faq-card-body">
                    Vehicles are transported inside specialized covered auto carrier trailers equipped with hydraulic ramps, wheel stopper clamps, and heavy nylon tie-down belts to guarantee 100% scratch-free and zero-mileage delivery.
                </div>
            </div>

            <div class="faq-card-modern">
                <div class="faq-card-header collapsed" data-bs-toggle="collapse" data-bs-target="#boxfaq6" aria-expanded="false">
                    <div class="d-flex align-items-center gap-3">
                        <i class="bi bi-building-lock text-danger fs-18"></i>
                        <h3 class="faq-card-question">Do you offer temporary warehouse storage options?</h3>
                    </div>
                    <i class="bi bi-chevron-down text-muted"></i>
                </div>
                <div id="boxfaq6" class="collapse faq-card-body">
                    Yes! We operate 24/7 CCTV-monitored, pest-treated warehousing facilities where you can store household furniture or commercial inventory for short or long term with flexible monthly plans.
                </div>
            </div>

            <!-- STILL HAVE QUESTIONS CTA BANNER -->
            <div class="about-banner-cta">
                <div>
                    <h3 class="banner-cta-heading">Still Have Questions?</h3>
                    <p class="banner-cta-sub">Speak directly with our 24/7 relocation helpdesk for immediate assistance.</p>
                </div>
                <div class="banner-cta-group">
                    <a href="<?= $phonehtml ?>" class="btn-cta-red">
                        <i class="bi bi-telephone-fill me-1"></i> Call <?= htmlspecialchars($phone) ?>
                    </a>
                    <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-green">
                        <i class="bi bi-whatsapp me-1"></i> WhatsApp Support
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>