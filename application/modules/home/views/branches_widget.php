<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php
$states_list = [
    [
        "image" => "maharashtra.jpg",
        "name" => "Maharashtra",
        "link" => "maharashtra"
    ],
    [
        "image" => "bangalore.jpg",
        "name" => "Bangalore",
        "link" => "bangalore"
    ],
    [
        "image" => "west-bengal.jpg",
        "name" => "West Bengal",
        "link" => "west-bengal"
    ],
    [
        "image" => "uttar-pradesh.jpg",
        "name" => "Uttar Pradesh",
        "link" => "uttar-pradesh"
    ],
    [
        "image" => "delhi.jpg",
        "name" => "Delhi",
        "link" => "delhi"
    ]
];
?>

<!-- Home Page State / Branch Network Section (Exact Match to Reference Card Design) -->
<section class="home-state-section py-5">
    <div class="container">
        
        <!-- Section Heading -->
        <div class="text-center mb-5">
            <span class="about-top-pill mb-2">
                <i class="bi bi-geo-alt-fill text-gold me-1"></i> Pan-India Network
            </span>
            <h2 class="fw-bold fs-2 text-dark mt-1">
                Our Presence Across <span style="color: #ba0606;">India</span>
            </h2>
            <p class="text-muted mx-auto" style="max-width: 650px;">
                Reliable packing and moving services available in major states and key metropolitan cities.
            </p>
        </div>

        <!-- 4-Column Grid Layout (2 Rows of 4 Cards) -->
        <div class="row g-4">
            <?php foreach ($states_list as $item): ?>
                <div class="col-6 col-sm-4 col-lg-3">
                    <a href="<?= site_url($item['link']) ?>" class="state-card-box text-decoration-none d-block">
                        
                        <!-- Image Container -->
                        <div class="state-card-img-wrap">
                            <img src="<?= base_url('assets/images/state/' . $item['image']) ?>" 
                                 alt="<?= htmlspecialchars($item['name']) ?> Packers and Movers" 
                                 class="state-card-img" 
                                 loading="lazy">
                        </div>

                        <!-- Google Maps Circular Pin Badge (Overlaps Image & Footer) -->
                        <div class="state-gmap-badge">
                            <img src="<?= base_url('assets/images/home_modules/map.png') ?>" alt="Google Maps Location Pin" class="img-fluid rounded-circle">
                        </div>

                        <!-- Card Footer Label -->
                        <div class="state-card-footer">
                            <h3 class="state-card-title"><?= htmlspecialchars($item['name']) ?></h3>
                        </div>

                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
