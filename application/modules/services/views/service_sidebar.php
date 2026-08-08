<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$active_service = isset($active_service) ? $active_service : '';
$all_services = [
    'home-relocation' => ['name' => 'Home Relocation', 'icon' => 'bi-house-heart-fill'],
    'office-relocation' => ['name' => 'Office Relocation', 'icon' => 'bi-building-fill'],
    'car-transportation' => ['name' => 'Car Transportation', 'icon' => 'bi-car-front-fill'],
    'bike-transportation' => ['name' => 'Bike Transportation', 'icon' => 'bi-scooter'],
    'packing-and-moving' => ['name' => 'Packing & Moving', 'icon' => 'bi-box-seam-fill'],
    'loading-unloading' => ['name' => 'Loading & Unloading', 'icon' => 'bi-truck-flatbed'],
    'storage-services' => ['name' => 'Storage Services', 'icon' => 'bi-building-lock'],
    'custom-relocation' => ['name' => 'Custom Relocation', 'icon' => 'bi-star-fill'],
    'iba-approved-packers-and-movers' => ['name' => 'IBA Approved Packers', 'icon' => 'bi-patch-check-fill'],
];
?>

<div class="modern-sidebar">
    <!-- 1. All Services Navigation Card (2-in-a-row Grid) -->
    <div class="modern-sidebar-widget">
        <div class="sidebar-widget-header">
            <h4 class="sidebar-widget-title">Relocation Services</h4>
            <span class="bike-sub-tag mb-0 fs-11">8 Solutions</span>
        </div>
        <ul class="sidebar-nav-list">
            <?php foreach ($all_services as $key => $srv): ?>
                <li>
                    <a href="<?= site_url($key) ?>" class="sidebar-nav-link <?= $active_service === $key ? 'active' : '' ?>">
                        <div class="nav-link-left">
                            <div class="nav-link-icon">
                                <i class="bi <?= $srv['icon'] ?>"></i>
                            </div>
                            <span class="nav-link-title"><?= htmlspecialchars($srv['name']) ?></span>
                        </div>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- 2. Modern 24/7 Helpline & Contact CTA Box (Showing Both Phone Numbers) -->
    <div class="modern-sidebar-cta">
        <div class="cta-live-badge">
            <span class="badge-pulse-dot"></span> 24/7 Support Live
        </div>
        <h3 class="cta-main-heading">Need Urgent Relocation?</h3>
        <p class="cta-sub-desc">Talk directly with our senior moving expert for customized pricing &amp; quick dispatch.</p>
        <div class="cta-action-buttons">
            <a href="<?= $phonehtml ?>" class="btn-cta-action btn-cta-phone">
                <i class="bi bi-telephone-fill me-1"></i> Call <?= htmlspecialchars($phone) ?>
            </a>
            <?php if (!empty($phone1)): ?>
                <a href="<?= isset($phonehtml1) && !empty($phonehtml1) ? $phonehtml1 : 'tel:' . preg_replace('/\D+/', '', $phone1) ?>" class="btn-cta-action btn-cta-phone-alt">
                    <i class="bi bi-telephone-fill me-1"></i> Call <?= htmlspecialchars($phone1) ?>
                </a>
            <?php endif; ?>
            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-cta-action btn-cta-whatsapp">
                <i class="bi bi-whatsapp me-1"></i> WhatsApp Instant Estimate
            </a>
        </div>
    </div>

    <!-- 3. Why Choose Us Guarantee Card -->
    <div class="modern-sidebar-trust">
        <div class="trust-card-header">
            <span class="bike-sub-tag tag-gold mb-0"><i class="bi bi-shield-fill-check me-1"></i> Elite Guarantee</span>
        </div>
        <ul class="trust-item-list mt-3">
            <li class="trust-item-row">
                <div class="trust-check-icon"><i class="bi bi-shield-check"></i></div>
                <span class="trust-item-text">100% Insured Transit</span>
            </li>
            <li class="trust-item-row">
                <div class="trust-check-icon"><i class="bi bi-check-circle-fill"></i></div>
                <span class="trust-item-text">Zero Hidden Charges</span>
            </li>
            <li class="trust-item-row">
                <div class="trust-check-icon"><i class="bi bi-people-fill"></i></div>
                <span class="trust-item-text">Trained Packing Crew</span>
            </li>
            <li class="trust-item-row">
                <div class="trust-check-icon"><i class="bi bi-house-door-fill"></i></div>
                <span class="trust-item-text">Door-to-Door Delivery</span>
            </li>
        </ul>
    </div>
</div>
