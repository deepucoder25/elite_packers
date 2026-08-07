<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load About Modules Scoped CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/about_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Terms & Conditions',
    'bc_desc' => 'Service agreement, transit terms, insurance policies & customer responsibilities',
    'breadcrumbs' => [
        ['name' => 'Terms & Conditions']
    ]
]);
?>

<!-- MAIN TERMS & CONDITIONS PAGE SECTION -->
<section class="about-page-section">
    <div class="container">
        
        <div class="policy-box-container">
            
            <div class="text-center mb-5">
                <span class="about-top-pill pill-gold">
                    <i class="bi bi-file-earmark-text-fill me-1"></i> Transparent Service Contract
                </span>
                <h1 class="about-heading-primary mt-2">Terms &amp; Conditions of Service</h1>
                <p class="about-text-lead mx-auto" style="max-width: 800px;">
                    Welcome to <strong><?= htmlspecialchars($company3) ?></strong>. By engaging our packing, moving, vehicle shipping, or warehousing services, you agree to comply with the following operational terms and conditions.
                </p>
            </div>

            <!-- TERM 1 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">01</div>
                    <h3 class="clause-heading">Quotation Scope &amp; Inventory Agreement</h3>
                </div>
                <p class="clause-paragraph">
                    All cost estimates provided by <?= htmlspecialchars($company3) ?> are calculated based on the physical or virtual inventory audit conducted prior to booking. If additional items not listed in the initial survey are added on move day, they will be billed as per our standardized rate list.
                </p>
            </div>

            <!-- TERM 2 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">02</div>
                    <h3 class="clause-heading">Payment Schedule &amp; Price Guarantee</h3>
                </div>
                <p class="clause-paragraph">
                    A nominal booking advance (10-20%) is required upon contract confirmation to reserve your container truck and crew. The remaining balance is payable upon completion of loading or arrival at the destination point before unloading. We guarantee zero hidden costs beyond the written agreement.
                </p>
            </div>

            <!-- TERM 3 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">03</div>
                    <h3 class="clause-heading">Goods Transit Insurance Policy</h3>
                </div>
                <p class="clause-paragraph">
                    Comprehensive transit insurance covers loss or damage caused by vehicular collision, overturn, or fire on national highways. Items packed independently by the customer without our crew's inspection are excluded from full damage liability.
                </p>
            </div>

            <!-- TERM 4 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">04</div>
                    <h3 class="clause-heading">Prohibited Items &amp; Transport Safety Regulations</h3>
                </div>
                <p class="clause-paragraph">
                    In compliance with Indian transport safety laws, <?= htmlspecialchars($company3) ?> does not transport hazardous materials, gas cylinders, liquid fuels, explosives, contraband, currency, jewelry, or illegal substances in moving container trucks. Vehicles shipped must have nearly empty fuel tanks (1-2 liters max).
                </p>
            </div>

            <!-- TERM 5 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">05</div>
                    <h3 class="clause-heading">Rescheduling, Cancellations &amp; Delivery Signoff</h3>
                </div>
                <p class="clause-paragraph">
                    Bookings may be rescheduled free of charge up to 24 hours prior to packing day. Upon delivery, a joint physical inspection of boxes and furniture is conducted against the inventory sheet prior to signing the completion certificate.
                </p>
            </div>

            <!-- CTA BANNER -->
            <div class="about-banner-cta">
                <div>
                    <h3 class="banner-cta-heading">Questions About Our Terms?</h3>
                    <p class="banner-cta-sub">Contact our support helpline for any contractual clarifications.</p>
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