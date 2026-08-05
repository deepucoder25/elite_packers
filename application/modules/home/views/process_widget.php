<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$process_steps = [
    [
        'step'  => '01',
        'title' => 'Inquiry',
        'desc'  => 'You contact us with your moving requirements and get a free quote.',
        'icon'  => '<svg width="34" height="34" viewBox="0 0 24 24" fill="currentColor"><path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/></svg>'
    ],
    [
        'step'  => '02',
        'title' => 'Survey & Plan',
        'desc'  => 'We understand your needs and create a customized moving plan.',
        'icon'  => '<svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/><path d="M9 12l2 2 4-4"/><path d="M9 17h6"/></svg>'
    ],
    [
        'step'  => '03',
        'title' => 'Packing',
        'desc'  => 'Our experts pack your belongings securely using high-quality materials.',
        'icon'  => '<svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7.5 4.27 9 5.15"/><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>'
    ],
    [
        'step'  => '04',
        'title' => 'Loading & Transport',
        'desc'  => 'We load your goods safely and transport them to your new location.',
        'icon'  => '<svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>'
    ],
    [
        'step'  => '05',
        'title' => 'Unloading & Unpacking',
        'desc'  => 'We unload and unpack your items with care at your new home or office.',
        'icon'  => '<svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>'
    ],
    [
        'step'  => '06',
        'title' => 'Safe Delivery',
        'desc'  => 'We ensure safe delivery and complete customer satisfaction.',
        'icon'  => '<svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>'
    ]
];
?>

<section class="process-section position-relative py-5">
    <!-- Ambient Background Artwork (Matching Screenshot) -->
    <!-- Top-Left Isometric Truck & Winding Road Graphic -->
    <div class="process-bg-truck-road pointer-events-none d-none d-md-block">
        <svg width="220" height="180" viewBox="0 0 200 160" fill="none" xmlns="http://www.w3.org/2000/svg" opacity="0.18">
            <path d="M-20 120 C40 100, 80 140, 140 60 C170 20, 210 10, 250 30" stroke="var(--primary-color)" stroke-width="1.8" stroke-dasharray="4 4"/>
            <circle cx="30" cy="115" r="10" stroke="var(--primary-color)" stroke-width="1.2"/>
            <circle cx="30" cy="115" r="4" fill="var(--primary-color)"/>
            <circle cx="140" cy="60" r="10" stroke="var(--primary-color)" stroke-width="1.2"/>
            <circle cx="140" cy="60" r="4" fill="var(--primary-color)"/>
            <!-- 3D Truck Contour -->
            <g transform="translate(60, 40) scale(0.7)">
                <polygon points="30 10 80 35 80 75 30 50" fill="url(#truckGrad1)" stroke="var(--primary-color)" stroke-width="1.5"/>
                <polygon points="80 35 120 15 120 55 80 75" fill="url(#truckGrad2)" stroke="var(--primary-color)" stroke-width="1.5"/>
                <polygon points="30 10 70 -10 120 15 80 35" fill="#fee2e2" stroke="var(--primary-color)" stroke-width="1.5"/>
            </g>
            <defs>
                <linearGradient id="truckGrad1" x1="30" y1="10" x2="80" y2="75" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#fee2e2"/><stop offset="1" stop-color="#fca5a5"/>
                </linearGradient>
                <linearGradient id="truckGrad2" x1="80" y1="35" x2="120" y2="75" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#fecaca"/><stop offset="1" stop-color="#f87171"/>
                </linearGradient>
            </defs>
        </svg>
    </div>

    <!-- Top-Right World Map Dot Matrix & Red Location Pin -->
    <div class="process-bg-world-map pointer-events-none d-none d-md-block">
        <svg width="280" height="200" viewBox="0 0 280 200" fill="none" xmlns="http://www.w3.org/2000/svg" opacity="0.12">
            <pattern id="worldMapDots" x="0" y="0" width="12" height="12" patternUnits="userSpaceOnUse">
                <circle cx="2" cy="2" r="1.5" fill="var(--primary-color)"/>
            </pattern>
            <rect width="280" height="200" fill="url(#worldMapDots)"/>
        </svg>
    </div>
    <div class="process-bg-right-pin pointer-events-none d-none d-md-block">
        <svg width="48" height="60" viewBox="0 0 24 30" fill="none" opacity="0.25">
            <path d="M12 0C5.37 0 0 5.37 0 12c0 9 12 18 12 18s12-9 12-18c0-6.63-5.37-12-12-12zm0 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" fill="var(--primary-color)"/>
        </svg>
    </div>

    <div class="container position-relative z-2">
        <!-- Section Header -->
        <div class="process-header text-center mb-5">
            <div class="process-subtitle-wrap d-flex align-items-center justify-content-center mb-2">
                <span class="sub-line"></span>
                <span class="sub-text">OUR PROCESS</span>
                <span class="sub-line"></span>
            </div>
            <h2 class="process-main-title mb-2">
                Moving Made Simple, <br class="d-none d-sm-inline"><span class="title-highlight-red">Handled with Care</span>
            </h2>
            <div class="process-title-underline-red mb-3"></div>
            <p class="process-header-desc mx-auto">
                From planning to safe delivery, we follow a streamlined process to ensure a smooth and stress-free moving experience.
            </p>
        </div>

        <!-- 6 Process Cards Row with Connected Red Dotted Line -->
        <div class="process-flow-container">
            <!-- Connecting Wavy Red Dotted Line across Desktop -->
            <div class="process-dotted-line-svg d-none d-lg-block">
                <svg viewBox="0 0 1200 65" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 60 18 C 140 18, 160 42, 200 42 C 240 42, 260 18, 300 18 C 340 18, 360 42, 400 42 C 440 42, 460 18, 500 18 C 540 18, 560 42, 600 42 C 640 42, 660 18, 700 18 C 740 18, 760 42, 800 42 C 840 42, 860 18, 900 18 C 940 18, 960 42, 1000 42 C 1040 42, 1060 18, 1100 18 L 1140 18" stroke="var(--primary-color)" stroke-width="2" stroke-dasharray="5 5" opacity="0.9"/>
                </svg>
            </div>

            <div class="row g-4 justify-content-center position-relative z-2">
                <?php foreach ($process_steps as $index => $step): ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2 d-flex">
                        <div class="process-card-wrap w-100 d-flex flex-column align-items-center text-center">
                            <!-- Step Badge Circle (01, 02, etc.) -->
                            <div class="process-step-badge">
                                <span><?= $step['step'] ?></span>
                            </div>

                            <!-- Small Connecting Arrow Indicator (between steps) -->
                            <?php if ($index < 5): ?>
                                <div class="process-arrow-indicator d-none d-lg-flex">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M5 12h14M12 5l7 7-7 7" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            <?php endif; ?>

                            <!-- Process Card Body with Banner Crest Top & Bottom Arc -->
                            <div class="process-card-body w-100 d-flex flex-column align-items-center shadow-sm">
                                <!-- Top Red Circle Icon -->
                                <div class="process-icon-circle">
                                    <?= $step['icon'] ?>
                                </div>
                                <!-- Title -->
                                <h3 class="process-card-title"><?= htmlspecialchars($step['title']) ?></h3>
                                <!-- Short Red Line -->
                                <div class="process-card-red-line"></div>
                                <!-- Description -->
                                <p class="process-card-desc flex-grow-1 mb-0"><?= htmlspecialchars($step['desc']) ?></p>
                                <!-- Bottom Red Arc Banner -->
                                <div class="process-card-red-bottom-arc"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Bottom Safety Guarantee & CTA Bar -->
        <div class="process-cta-bar shadow-sm mt-5">
            <div class="row align-items-center g-3 text-center text-md-start">
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center justify-content-md-start gap-3">
                    <div class="safety-shield-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <path d="m9 12 2 2 4-4"/>
                        </svg>
                    </div>
                    <h4 class="safety-title m-0">Your Safety is Our Priority</h4>
                </div>
                <div class="col-12 col-md-5">
                    <p class="safety-desc m-0">
                        We ensure complete safety of your belongings at every step of the moving process.
                    </p>
                </div>
                <div class="col-12 col-md-3 text-center text-md-end pe-lg-5">
                    <a href="#" class="btn-process-cta d-inline-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#qteModal">
                        <span>Get a Free Quote</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Floating Paper Plane Graphic (Positioned cleanly to the right of the button) -->
            <div class="process-paper-plane d-none d-lg-block">
                <svg width="60" height="48" viewBox="0 0 65 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M 5 40 Q 22 48 30 35 T 45 22" stroke="var(--primary-color)" stroke-width="1.5" stroke-dasharray="3 3" opacity="0.45"/>
                    <g transform="translate(38, 5) rotate(-12)">
                        <path d="m20 2-6 18-3-8-8-3z" fill="var(--white)" stroke="var(--primary-color)" stroke-width="1.8"/>
                        <path d="M20 2 11 12" stroke="var(--primary-color)" stroke-width="1.8"/>
                    </g>
                </svg>
            </div>
        </div>

    </div>
</section>
