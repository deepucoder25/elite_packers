<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<div class="container">
<div class="row g-4 mt-5 mb-4">
    <!-- Home Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 d-flex flex-column">
            <div class="pm-city-srv-icon-wrap">
                <img src="<?= base_url('assets/images/services_modules/home-shifting-services.webp') ?>" alt="Home Shifting in <?= htmlspecialchars($city) ?>" loading="lazy" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
            </div>
            <div class="pm-city-srv-title">Home Shifting<br>in <?= htmlspecialchars($city) ?></div>
            <div class="pm-city-srv-desc flex-grow-1">A hassle-free solution for relocating your home in <?= htmlspecialchars($city) ?>, ensuring safe packing, loading, and transport of your belongings to your new location from <?= htmlspecialchars($city) ?>, while minimizing stress and effort.</div>
            <a href="<?= site_url('home-shifting-in-'.$ctlink) ?>" class="pm-city-srv-link mt-auto">Read more home shifting <span class="visually-hidden">in <?= htmlspecialchars($city) ?></span>..</a>
        </div>
    </div>
    
    <!-- Office Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 d-flex flex-column">
            <div class="pm-city-srv-icon-wrap">
                <img src="<?= base_url('assets/images/services_modules/office-relocation-services.webp') ?>" alt="Office Shifting in <?= htmlspecialchars($city) ?>" loading="lazy" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
            </div>
            <div class="pm-city-srv-title">Office Shifting<br>in <?= htmlspecialchars($city) ?></div>
            <div class="pm-city-srv-desc flex-grow-1">A comprehensive service for relocating offices, ensuring the safe and efficient transport of office equipment, furniture, and documents.</div>
            <a href="<?= site_url('office-shifting-in-'.$ctlink) ?>" class="pm-city-srv-link mt-auto">Read more office shifting <span class="visually-hidden">in <?= htmlspecialchars($city) ?></span>..</a>
        </div>
    </div>
    
    <!-- Car Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 d-flex flex-column">
            <div class="pm-city-srv-icon-wrap">
                <img src="<?= base_url('assets/images/services_modules/car-transportation-services.webp') ?>" alt="Car Shifting in <?= htmlspecialchars($city) ?>" loading="lazy" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
            </div>
            <div class="pm-city-srv-title">Car Shifting<br>in <?= htmlspecialchars($city) ?></div>
            <div class="pm-city-srv-desc flex-grow-1"><?= htmlspecialchars($city) ?> <?= isset($company3) ? htmlspecialchars($company3) : 'MyCompany' ?> Professional car relocation service offering secure transport of vehicles, either through dedicated car carriers or enclosed trailers, ensuring your car is safely delivered from <?= htmlspecialchars($city) ?> to the new location.</div>
            <a href="<?= site_url('car-transport-in-'.$ctlink) ?>" class="pm-city-srv-link mt-auto">Read more car transport <span class="visually-hidden">in <?= htmlspecialchars($city) ?></span>..</a>
        </div>
    </div>
    
    <!-- Bike Shifting -->
    <div class="col-md-6 col-lg-3 d-flex">
        <div class="pm-city-srv-card w-100 d-flex flex-column">
            <div class="pm-city-srv-icon-wrap">
                <img src="<?= base_url('assets/images/services_modules/bike-transportation-services.webp') ?>" alt="Bike Shifting in <?= htmlspecialchars($city) ?>" loading="lazy" onerror="this.src='<?= base_url('assets/images/about/packers_movers.jpg') ?>'">
            </div>
            <div class="pm-city-srv-title">Bike Shifting<br>in <?= htmlspecialchars($city) ?></div>
            <div class="pm-city-srv-desc flex-grow-1">Specialized service designed for safe and secure transport of bikes, using protective packaging and experienced handling to ensure your two-wheeler reaches its destination without damage from <?= htmlspecialchars($city) ?>.</div>
            <a href="<?= site_url('bike-transport-in-'.$ctlink) ?>" class="pm-city-srv-link mt-auto">Read more bike transport <span class="visually-hidden">in <?= htmlspecialchars($city) ?></span>..</a>
        </div>
    </div>
</div>
</div>