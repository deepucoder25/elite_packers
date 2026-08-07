<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

?>

<section class="about-section position-relative py-5">
    <!-- Ambient Radial Glows in Background -->
    <div class="about-glow-orb glow-orb-1"></div>
    <div class="about-glow-orb glow-orb-2"></div>

    <!-- Background Logistics GPS Curved Dotted Route Graphic -->
    <div class="about-bg-route-line pointer-events-none">
        <svg viewBox="0 0 1400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-50 200 C 300 50, 600 350, 1000 120 C 1200 30, 1350 220, 1450 180" 
                  stroke="var(--primary-color)" stroke-width="2.5" stroke-dasharray="8 8" opacity="0.18" />
            <!-- Location Pin Nodes on Route -->
            <circle cx="280" cy="115" r="5" fill="var(--primary-color)" opacity="0.25"/>
            <circle cx="850" cy="180" r="5" fill="var(--primary-color)" opacity="0.25"/>
        </svg>
    </div>

    <!-- Floating Background Micro Shapes -->
    <div class="about-float-shape shape-1 d-none d-md-block">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="1.5" opacity="0.15">
            <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/>
            <circle cx="12" cy="10" r="3"/>
        </svg>
    </div>
    <div class="about-float-shape shape-2 d-none d-md-block">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="var(--accent-gold)" stroke-width="1.5" opacity="0.25">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
        </svg>
    </div>

    <!-- Top-Right Red Accent Banner -->
    <div class="about-bg-accent accent-top-right">
        <svg viewBox="0 0 320 260" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- Multi-layer Gradient Shape -->
            <path d="M100 0L320 0V260L100 0Z" fill="url(#redGradTop1)" />
            <path d="M0 0L320 0V160L0 0Z" fill="var(--primary-color)" opacity="0.88" />
            <!-- Accent Gold Border Stroke -->
            <path d="M0 0L320 160" stroke="var(--accent-gold)" stroke-width="2.5" opacity="0.6" />
            <!-- Dot Matrix Overlay -->
            <pattern id="dotPatternTop" x="0" y="0" width="14" height="14" patternUnits="userSpaceOnUse">
                <circle cx="3" cy="3" r="1.8" fill="#ffffff" opacity="0.28"/>
            </pattern>
            <rect width="320" height="260" fill="url(#dotPatternTop)" />
            <defs>
                <linearGradient id="redGradTop1" x1="100" y1="0" x2="320" y2="260" gradientUnits="userSpaceOnUse">
                    <stop stop-color="var(--primary-color)"/>
                    <stop offset="1" stop-color="#6e0000"/>
                </linearGradient>
            </defs>
        </svg>
    </div>

    <!-- Bottom-Right Red Accent Shape -->
    <div class="about-bg-accent accent-bottom-right">
        <svg viewBox="0 0 420 320" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 320L420 100V320H0Z" fill="url(#redGradBot1)" />
            <path d="M0 320L420 100" stroke="var(--accent-gold)" stroke-width="2" opacity="0.4" />
            <pattern id="dotPatternBot" x="0" y="0" width="14" height="14" patternUnits="userSpaceOnUse">
                <circle cx="3" cy="3" r="1.8" fill="#ffffff" opacity="0.22"/>
            </pattern>
            <rect width="420" height="320" fill="url(#dotPatternBot)" />
            <defs>
                <linearGradient id="redGradBot1" x1="0" y1="320" x2="420" y2="100" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#800000"/>
                    <stop offset="1" stop-color="var(--primary-color)"/>
                </linearGradient>
            </defs>
        </svg>
    </div>

    <div class="container position-relative z-2">
        <div class="about-main-card shadow-lg">
            <div class="row g-0 align-items-stretch">
                
                <!-- Left Content Column -->
                <div class="col-lg-7 col-12 about-content-col position-relative">
                    <div class="about-content-inner">
                        
                        <!-- Subtitle -->
                        <div class="about-subtitle-wrap d-flex align-items-center mb-2">
                            <span class="sub-dash"></span>
                            <span class="sub-dash"></span>
                            <span class="about-subtitle">ABOUT US</span>
                            <span class="sub-dash"></span>
                            <span class="sub-dash"></span>
                        </div>

                        <!-- Main Heading -->
                        <h2 class="about-main-title">
                            Your Trusted Partner in<br>
                            <span class="text-highlight">Safe &amp; Hassle-Free Moving</span>
                        </h2>
                        <div class="title-underline-red"></div>

                        <!-- Description Paragraphs -->
                        <p class="about-desc-text">
                            At <strong class="text-primary-red"><?= htmlspecialchars($company3) ?></strong>, we understand that moving is more than just shifting — it's about moving your life with care and trust.
                        </p>
                        <p class="about-desc-text mb-4">
                            With years of experience and a dedicated team of professionals, we provide end-to-end moving solutions that are safe, reliable, and tailored to your needs.
                        </p>

                        <!-- 4 Features Horizontal Row -->
                        <div class="about-features-row mb-4">
                            <div class="feature-box">
                                <div class="feature-icon-circle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                        <path d="m9 12 2 2 4-4"/>
                                    </svg>
                                </div>
                                <span class="feature-label">Safe &amp; Secure<br>Transportation</span>
                            </div>

                            <div class="feature-box">
                                <div class="feature-icon-circle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m7.5 4.27 9 5.15"/>
                                        <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/>
                                        <path d="m3.3 7 8.7 5 8.7-5"/>
                                        <path d="M12 22V12"/>
                                    </svg>
                                </div>
                                <span class="feature-label">Quality Packing<br>Materials</span>
                            </div>

                            <div class="feature-box">
                                <div class="feature-icon-circle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                                        <circle cx="9" cy="7" r="4"/>
                                        <path d="M22 11l-3 3-1.5-1.5"/>
                                    </svg>
                                </div>
                                <span class="feature-label">Trained &amp; Verified<br>Professionals</span>
                            </div>

                            <div class="feature-box">
                                <div class="feature-icon-circle">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M10 17h4V5H2v12h3"/>
                                        <path d="M20 17h2v-5l-3-4h-5v9h2"/>
                                        <circle cx="7.5" cy="17.5" r="2.5"/>
                                        <circle cx="17.5" cy="17.5" r="2.5"/>
                                    </svg>
                                </div>
                                <span class="feature-label">On-Time<br>Delivery</span>
                            </div>
                        </div>

                        <!-- CTA Button -->
                        <div class="about-cta-wrap">
                            <a href="<?= site_url('about-us') ?>" class="btn-about-cta">
                                <span>More About Us</span>
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- Faint Indian Monuments Vector Line Watermark at Bottom -->
                    <div class="about-monument-watermark">
                        <svg viewBox="0 0 800 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 85H800M40 85V65H60V85M50 65V50M50 50L45 55M50 50L55 55M100 85V45L115 30L130 45V85M115 30V15M160 85V70H180V85M220 85V25C220 25 240 10 260 25V85M240 25V85M230 40H250M230 60H250M320 85V35C320 20 360 20 360 35V85M330 45H350M330 65H350M340 20V10M400 85V55L410 40L420 55V85M460 85V30H500V85M480 30V15M540 85V50C540 50 560 35 580 50V85M620 85V60H640V85M680 85V40L695 25L710 40V85M740 85V65H760V85" stroke="var(--primary-color)" stroke-width="1.2" opacity="0.13" stroke-linecap="round"/>
                        </svg>
                    </div>

                    <!-- Organic Curved Divider (Visible on Desktop) -->
                    <div class="about-divider-curve d-none d-lg-block">
                        <svg viewBox="0 0 100 550" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0 L85 0 C40 130 18 190 18 275 C18 360 40 420 95 550 L0 550 Z" fill="var(--white)" />
                            <path d="M85 0 C40 130 18 190 18 275 C18 360 40 420 95 550" stroke="var(--primary-color)" stroke-width="3" stroke-linecap="round" />
                        </svg>
                    </div>

                </div>

                <!-- Right Image Showcase Column -->
                <div class="col-lg-5 col-12 about-image-col position-relative">
                    <div class="about-image-inner position-relative">
                        <!-- Floating Experience Circular Badge -->
                        <div class="about-experience-badge">
                            <div class="badge-icon-wrap">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="8" r="6"/>
                                    <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"/>
                                    <path d="m9 8 2 2 4-4"/>
                                </svg>
                            </div>
                            <div class="badge-exp-number">
                                <?= $yearsExperience ?> Years
                            </div>
                            <div class="badge-exp-label">
                                of Trust &amp;<br>Excellence
                            </div>
                        </div>

                        <!-- Clean Fallback Card Graphic when Image is Pending -->
                        <div class="about-img-placeholder d-flex flex-column align-items-center justify-content-center text-center p-4">
                            <div class="placeholder-icon-ring mb-3">
                                <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="var(--primary-color)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10 17h4V5H2v12h3"/>
                                    <path d="M20 17h2v-5l-3-4h-5v9h2"/>
                                    <circle cx="7.5" cy="17.5" r="2.5"/>
                                    <circle cx="17.5" cy="17.5" r="2.5"/>
                                </svg>
                            </div>
                            <span class="placeholder-title font-weight-bold text-dark mb-1"><?= htmlspecialchars($company3) ?></span>
                            <span class="placeholder-sub text-muted small">Professional Relocation Showcase</span>
                        </div>

                        <!-- Real Image Tag (Hides broken alt string if image not uploaded yet) -->
                        <img src="<?= base_url('assets/images/home_modules/about.jpg') ?>" 
                             alt="Packers and Movers Service - <?= htmlspecialchars($company3) ?>" 
                             class="about-img-showcase" 
                             loading="lazy">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


