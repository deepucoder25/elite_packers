<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$faqs = [
    [
        'question' => '1. What services do Packers & Movers provide?',
        'answer' => 'We offer complete relocation solutions including household shifting, office relocation, car & bike transportation, multi-layer packing, loading/unloading, warehousing, and transit insurance.',
        'icon' => 'bi-box-seam'
    ],
    [
        'question' => '2. How are the relocation charges calculated?',
        'answer' => 'Relocation charges depend on the distance, volume of goods, type of packing material used, floor level, availability of elevators, and optional transit insurance.',
        'icon' => 'bi-calculator'
    ],
    [
        'question' => '3. How far in advance should I book my move?',
        'answer' => 'We recommend booking 3 to 7 days in advance for local shifting, and 7 to 10 days ahead for inter-city relocation to ensure slot availability and smooth planning.',
        'icon' => 'bi-calendar-check'
    ],
    [
        'question' => '4. Are my goods and vehicles insured during transit?',
        'answer' => 'Yes! We provide comprehensive transit insurance coverage for all your household goods, cars, and bikes to protect against any unforeseen damages during transit.',
        'icon' => 'bi-shield-check'
    ],
    [
        'question' => '5. Do you provide door-to-door relocation service?',
        'answer' => 'Yes, we provide 100% door-to-door service where our expert team handles packing at your current home and safe unloading/unpacking at your new address.',
        'icon' => 'bi-geo-alt-fill'
    ],
    [
        'question' => '6. Can I track my shipment in real-time?',
        'answer' => 'Yes! Once your consignment is dispatched, you receive live GPS tracking updates and a direct line to your dedicated movement coordinator.',
        'icon' => 'bi-headset'
    ],
    [
        'question' => '7. What payment methods do you accept?',
        'answer' => 'We accept multiple convenient payment options including UPI, Credit/Debit cards, Net Banking, and Bank Transfers. Clear GST invoices are provided.',
        'icon' => 'bi-credit-card'
    ],
    [
        'question' => '8. What happens if any item is damaged during moving?',
        'answer' => 'In the rare event of damage, our customer claims team conducts an immediate assessment and processes insurance claims quickly for full hassle-free resolution.',
        'icon' => 'bi-chat-left-dots'
    ]
];
?>

<section class="faq-section py-5 position-relative overflow-hidden">
    <!-- Ambient Background Artwork -->
    <div class="faq-bg-decor decor-top-left"></div>
    <div class="faq-bg-decor decor-bottom-right"></div>

    <div class="container position-relative z-2">
        
        <!-- Section Header (Reusing Process Section Heading Classes) -->
        <div class="process-header text-center mb-4 mb-md-5">
            <div class="process-subtitle-wrap d-flex align-items-center justify-content-center mb-2">
                <span class="sub-line"></span>
                <span class="sub-text">FAQS</span>
                <span class="sub-line"></span>
            </div>
            <h2 class="process-main-title mb-2">
                Frequently Asked <span class="title-highlight-red">Questions</span>
            </h2>
            <div class="process-title-underline-red mb-3"></div>
            <p class="process-header-desc mx-auto">
                Find answers to common questions about our moving and transportation services.
            </p>
        </div>

        <!-- Accordion Grid -->
        <div class="row g-3 g-lg-4">
            <?php foreach ($faqs as $index => $faq): ?>
                <div class="col-lg-6 col-12 d-flex">
                    <div class="faq-card w-100 flex-fill">
                        <div class="faq-card-header d-flex align-items-center collapsed" 
                             data-bs-toggle="collapse" 
                             data-bs-target="#faq-collapse-<?= $index ?>" 
                             aria-expanded="false" 
                             role="button">
                            
                            <div class="faq-icon-wrap d-flex align-items-center justify-content-center">
                                <i class="bi <?= $faq['icon'] ?> faq-card-icon"></i>
                            </div>
                            
                            <div class="faq-question-wrap flex-grow-1 ps-2">
                                <h3 class="faq-question m-0"><?= htmlspecialchars($faq['question']) ?></h3>
                            </div>
                            
                            <div class="faq-toggle-btn d-flex align-items-center justify-content-center">
                                <i class="bi bi-plus-lg faq-toggle-icon"></i>
                            </div>
                        </div>
                        
                        <div id="faq-collapse-<?= $index ?>" class="collapse" data-bs-parent="">
                            <div class="faq-card-body">
                                <p class="faq-answer m-0">
                                    <?= htmlspecialchars($faq['answer']) ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Still Have Questions / Help Banner -->
        <div class="faq-footer-banner-wrap mt-4 pt-3 position-relative">
            <div class="faq-help-banner mx-auto">
                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 text-center text-md-start">
                    <div class="d-flex align-items-center gap-3">
                        <div class="help-icon-wrap d-flex align-items-center justify-content-center">
                            <i class="bi bi-headset help-icon"></i>
                        </div>
                        <div class="help-text-wrap text-white">
                            <h4 class="help-title mb-1 fw-bold">Still have questions? We're here to help!</h4>
                            <p class="help-desc mb-0">Our dedicated support team is available to assist you 24/7.</p>
                        </div>
                    </div>
                    <div class="help-actions-wrap d-flex flex-wrap align-items-center justify-content-center gap-2">
                        <?php if (isset($phone) && !empty($phone)): ?>
                            <a href="<?= isset($phonehtml) ? $phonehtml : '#' ?>" class="help-pill-btn">
                                <i class="bi bi-telephone-fill me-1"></i> <?= $phone ?>
                            </a>
                        <?php endif; ?>
                        <?php if (isset($mail) && !empty($mail)): ?>
                            <a href="mailto:<?= $mail ?>" class="help-pill-btn">
                                <i class="bi bi-envelope-fill me-1"></i> <?= $mail ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
