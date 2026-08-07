<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

$navbar_services = [
    [
        'title' => 'Home Relocation',
        'desc'  => 'Safe and secure home shifting with door-to-door delivery service.',
        'link'  => 'home-relocation',
        'icon'  => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 3L3 13H6V27C6 27.5523 6.44772 28 7 28H25C25.5523 28 26 27.5523 26 27V13H29L16 3Z" fill="url(#homeGrad)" stroke="var(--primary-color)" stroke-width="1.8" stroke-linejoin="round"/><path d="M12 28V17C12 16.4477 12.4477 16 13 16H19C19.5523 16 20 16.4477 20 17V28" stroke="var(--primary-color)" stroke-width="1.8"/><circle cx="16" cy="11" r="2.5" fill="var(--accent-gold)"/><defs><linearGradient id="homeGrad" x1="16" y1="3" x2="16" y2="28" gradientUnits="userSpaceOnUse"><stop stop-color="#fff5f5"/><stop offset="1" stop-color="#fee2e2"/></linearGradient></defs></svg>'
    ],
    [
        'title' => 'Office Relocation',
        'desc'  => 'Relocate your office quickly with minimal downtime and maximum care.',
        'link'  => 'office-relocation',
        'icon'  => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="5" y="4" width="14" height="24" rx="2" fill="url(#offGrad)" stroke="var(--primary-color)" stroke-width="1.8"/><rect x="19" y="10" width="8" height="18" rx="1.5" fill="url(#offGrad2)" stroke="var(--primary-color)" stroke-width="1.8"/><path d="M9 8H11M14 8H16M9 12H11M14 12H16M9 16H11M14 16H16M9 20H11M14 20H16" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round"/><path d="M22 14H24M22 18H24M22 22H24" stroke="var(--accent-gold)" stroke-width="1.8" stroke-linecap="round"/><path d="M10 28V24H14V28" fill="var(--primary-color)"/><defs><linearGradient id="offGrad" x1="12" y1="4" x2="12" y2="28" gradientUnits="userSpaceOnUse"><stop stop-color="#fff5f5"/><stop offset="1" stop-color="#fee2e2"/></linearGradient><linearGradient id="offGrad2" x1="23" y1="10" x2="23" y2="28" gradientUnits="userSpaceOnUse"><stop stop-color="#ffffff"/><stop offset="1" stop-color="#fef08a"/></linearGradient></defs></svg>'
    ],
    [
        'title' => 'Car Transportation',
        'desc'  => 'Safe and reliable car transportation across India.',
        'link'  => 'car-transportation',
        'icon'  => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 18L7.2 10.8C7.5 10.3 8 10 8.6 10H23.4C24 10 24.5 10.3 24.8 10.8L28 18M4 18V24C4 24.6 4.4 25 5 25H6C6.6 25 7 24.6 7 24V23H25V24C25 24.6 25.4 25 26 25H27C27.6 25 28 24.6 28 24V18M4 18H28" stroke="var(--primary-color)" stroke-width="1.8" stroke-linejoin="round"/><circle cx="8.5" cy="18.5" r="2.5" fill="var(--accent-gold)" stroke="var(--primary-color)" stroke-width="1.5"/><circle cx="23.5" cy="18.5" r="2.5" fill="var(--accent-gold)" stroke="var(--primary-color)" stroke-width="1.5"/><path d="M10 13H22" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round"/><path d="M1 21H3M29 21H31" stroke="var(--primary-color)" stroke-width="1.5" stroke-linecap="round"/></svg>'
    ],
    [
        'title' => 'Bike Transportation',
        'desc'  => 'Efficient bike transportation services tailored to ensure safe and timely delivery.',
        'link'  => 'bike-transportation',
        'icon'  => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="7.5" cy="22.5" r="4.5" fill="#fff5f5" stroke="var(--primary-color)" stroke-width="1.8"/><circle cx="24.5" cy="22.5" r="4.5" fill="#fff5f5" stroke="var(--primary-color)" stroke-width="1.8"/><circle cx="7.5" cy="22.5" r="1.8" fill="var(--accent-gold)"/><circle cx="24.5" cy="22.5" r="1.8" fill="var(--accent-gold)"/><path d="M7.5 22.5L13 14H19L24.5 22.5M13 14L16 8H21M19 14L16 22.5" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M10 10H14" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round"/></svg>'
    ],
    [
        'title' => 'Packing & Moving Service',
        'desc'  => 'Professional packing and unpacking using high-quality materials.',
        'link'  => 'packing-and-moving',
        'icon'  => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 3L3 9.5V22.5L16 29L29 22.5V9.5L16 3Z" fill="url(#boxGrad)" stroke="var(--primary-color)" stroke-width="1.8" stroke-linejoin="round"/><path d="M16 3V29M3 9.5L16 16L29 9.5" stroke="var(--primary-color)" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 7L21 12" stroke="var(--accent-gold)" stroke-width="2" stroke-linecap="round"/><path d="M8 18.5L12 20.5" stroke="var(--primary-color)" stroke-width="1.5" stroke-linecap="round"/><defs><linearGradient id="boxGrad" x1="16" y1="3" x2="16" y2="29" gradientUnits="userSpaceOnUse"><stop stop-color="#fff5f5"/><stop offset="1" stop-color="#fee2e2"/></linearGradient></defs></svg>'
    ],
    [
        'title' => 'Loading & Unloading',
        'desc'  => 'Trained professionals for safe loading and unloading of your goods.',
        'link'  => 'loading-unloading',
        'icon'  => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="27" r="2.5" fill="var(--accent-gold)" stroke="var(--primary-color)" stroke-width="1.5"/><circle cx="23" cy="27" r="2.5" fill="var(--accent-gold)" stroke="var(--primary-color)" stroke-width="1.5"/><path d="M4 6H7L10 21H25L28 11H9" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><rect x="12" y="7" width="10" height="8" rx="1.5" fill="#fee2e2" stroke="var(--primary-color)" stroke-width="1.5"/><path d="M14 11H20" stroke="var(--accent-gold)" stroke-width="1.5"/></svg>'
    ],
    [
        'title' => 'Storage Services',
        'desc'  => 'Secure and spacious warehousing solutions for short and long term.',
        'link'  => 'storage-services',
        'icon'  => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 12L16 5L29 12V26C29 26.5 28.5 27 28 27H4C3.5 27 3 26.5 3 26V12Z" fill="url(#storeGrad)" stroke="var(--primary-color)" stroke-width="1.8" stroke-linejoin="round"/><path d="M8 27V15H24V27" stroke="var(--primary-color)" stroke-width="1.8"/><path d="M8 18H24M8 21H24M8 24H24" stroke="var(--primary-color)" stroke-width="1.2"/><circle cx="16" cy="11" r="2" fill="var(--accent-gold)"/><defs><linearGradient id="storeGrad" x1="16" y1="5" x2="16" y2="27" gradientUnits="userSpaceOnUse"><stop stop-color="#fff5f5"/><stop offset="1" stop-color="#fee2e2"/></linearGradient></defs></svg>'
    ],
    [
        'title' => 'Custom Relocation',
        'desc'  => 'Tailored moving and logistics solutions designed for your specific shifting needs.',
        'link'  => 'custom-relocation',
        'icon'  => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 3L27 7V16C27 22.5 22 27.5 16 29C10 27.5 5 22.5 5 16V7L16 3Z" fill="url(#shieldGrad)" stroke="var(--primary-color)" stroke-width="1.8" stroke-linejoin="round"/><path d="M11 15.5L14.5 19L21 11.5" stroke="var(--primary-color)" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="16" cy="16" r="8" stroke="var(--accent-gold)" stroke-width="1.5" stroke-dasharray="3 3"/><defs><linearGradient id="shieldGrad" x1="16" y1="3" x2="16" y2="29" gradientUnits="userSpaceOnUse"><stop stop-color="#fff5f5"/><stop offset="1" stop-color="#fee2e2"/></linearGradient></defs></svg>'
    ]
];
?>

<section class="services-section position-relative py-5">
    <!-- Ambient Background Animations -->
    <div class="services-bg-glow orb-1"></div>
    <div class="services-bg-glow orb-2"></div>

    <!-- Animated Dotted GPS Route Line -->
    <div class="services-bg-route-line pointer-events-none">
        <svg viewBox="0 0 1400 300" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="animated-dash-route" d="M-100 150 Q350 -40 700 180 T1500 80" stroke="var(--primary-color)" stroke-width="2" opacity="0.16" />
        </svg>
    </div>

    <!-- Animated Driving Mini Delivery Truck on Background -->
    <div class="services-bg-truck-drive">
        <div class="truck-graphic-wrap">
            <svg width="36" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                <polygon points="1 3 1 14 13 14 13 3 1 3"/>
                <polyline points="13 8 18 8 21 11 21 14 13 14"/>
                <circle cx="5.5" cy="17.5" r="2.5" fill="var(--accent-gold)"/>
                <circle cx="16.5" cy="17.5" r="2.5" fill="var(--accent-gold)"/>
            </svg>
            <span class="truck-wind-lines"></span>
        </div>
    </div>

    <!-- Floating Background Micro-Shapes -->
    <div class="services-bg-floating-shapes pointer-events-none">
        <div class="shape shape-location-pin">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="1.8">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/>
            </svg>
        </div>
        <div class="shape shape-box">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent-gold)" stroke-width="1.8">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
            </svg>
        </div>
        <div class="shape shape-compass">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="1.8">
                <circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/>
            </svg>
        </div>
    </div>

    <div class="container position-relative z-2">
        <!-- Section Header -->
        <div class="services-section-header text-center mb-4">
            <div class="services-subtitle-wrap d-flex align-items-center justify-content-center mb-2">
                <span class="sub-line"></span>
                <span class="sub-text">OUR SERVICES</span>
                <span class="sub-line"></span>
            </div>
            <h2 class="services-main-title mb-2">Our Best Moving Services</h2>
            <p class="services-header-desc mx-auto mb-3">
                We provide a wide range of moving and relocation services to make your move safe, smooth, and stress-free.
            </p>
            <div class="services-title-underline-red"></div>
        </div>

        <!-- Main Services Grid Container Card -->
        <div class="services-main-card shadow-sm">
            <div class="services-grid-wrapper">
                <?php foreach ($navbar_services as $srv): ?>
                    <a href="<?= site_url($srv['link']) ?>" class="service-grid-cell text-decoration-none" aria-label="Read more about <?= htmlspecialchars($srv['title']) ?>">
                        <div class="srv-cell-inner d-flex flex-column align-items-center text-center h-100">
                            <!-- Circular Icon Container -->
                            <div class="srv-circle-icon-wrap">
                                <?= $srv['icon'] ?>
                            </div>
                            <!-- Service Title -->
                            <h3 class="srv-cell-title"><?= htmlspecialchars($srv['title']) ?></h3>
                            <!-- Red Accent Underline -->
                            <div class="srv-cell-red-line"></div>
                            <!-- Short Description -->
                            <p class="srv-cell-desc flex-grow-1 mb-0"><?= htmlspecialchars($srv['desc']) ?></p>
                            <!-- Hover Action Link Indicator -->
                            <div class="srv-hover-action">
                                <span>Read More <span class="visually-hidden">know more about <?= htmlspecialchars($srv['title']) ?></span></span>
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
