<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Load About Modules Scoped CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/about_modules.css') ?>">

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Privacy Policy & Data Security',
    'bc_desc' => 'Our commitment to protecting your personal information, contact details & inventory records',
    'breadcrumbs' => [
        ['name' => 'Privacy Policy']
    ]
]);
?>

<!-- MAIN PRIVACY POLICY PAGE SECTION -->
<section class="about-page-section">
    <div class="container">
        
        <div class="policy-box-container">
            
            <div class="text-center mb-5">
                <span class="about-top-pill">
                    <i class="bi bi-shield-lock-fill text-gold me-1"></i> Data Protection &amp; Confidentiality
                </span>
                <h1 class="about-heading-primary mt-2">Privacy Policy</h1>
                <p class="about-text-lead mx-auto" style="max-width: 800px;">
                    At <strong><?= htmlspecialchars($company3) ?></strong>, we are deeply committed to protecting your personal information and maintaining complete privacy across all our booking channels and online inquiries.
                </p>
            </div>

            <!-- CLAUSE 1 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">01</div>
                    <h3 class="clause-heading">Information We Collect</h3>
                </div>
                <p class="clause-paragraph">
                    When you request a quotation or book a relocation service with <?= htmlspecialchars($company3) ?>, we collect relevant details including your full name, contact numbers, email address, pickup and destination addresses, and inventory item list. This data is strictly used to process accurate price quotes, arrange moving logistics, and issue transit insurance policies.
                </p>
            </div>

            <!-- CLAUSE 2 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">02</div>
                    <h3 class="clause-heading">How We Use Your Personal Data</h3>
                </div>
                <p class="clause-paragraph">
                    Your personal information is used exclusively to facilitate your relocation service, communicate driver dispatch details, provide live GPS tracking links, and issue official GST invoices. We do not sell, trade, rent, or transfer your contact information to third-party telemarketers or advertising networks.
                </p>
            </div>

            <!-- CLAUSE 3 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">03</div>
                    <h3 class="clause-heading">Data Security &amp; Encryption Protocols</h3>
                </div>
                <p class="clause-paragraph">
                    We employ 256-bit SSL encryption across our online forms and maintain firewalled database systems to safeguard your personal data against unauthorized access, disclosure, or alteration. Access to customer contact records is strictly restricted to authorized move dispatch personnel.
                </p>
            </div>

            <!-- CLAUSE 4 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">04</div>
                    <h3 class="clause-heading">Cookies &amp; Website Analytics</h3>
                </div>
                <p class="clause-paragraph">
                    Our website uses standard HTTP cookies to enhance user experience, remember your preferences, and gather aggregate site traffic analytics. You may choose to disable cookies in your browser settings, though certain interactive features may be limited.
                </p>
            </div>

            <!-- CLAUSE 5 -->
            <div class="policy-clause-card">
                <div class="policy-clause-top">
                    <div class="clause-badge-num">05</div>
                    <h3 class="clause-heading">Your Data Rights &amp; Contact</h3>
                </div>
                <p class="clause-paragraph">
                    You retain the right to review, update, or request complete deletion of your personal records from our database once your relocation contract and billing are completed. For any data privacy inquiries, please contact our helpline.
                </p>
            </div>

            <!-- CTA BANNER -->
            <div class="about-banner-cta">
                <div>
                    <h3 class="banner-cta-heading">Have Privacy Questions?</h3>
                    <p class="banner-cta-sub">Reach out to our customer support desk for any data-related queries.</p>
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