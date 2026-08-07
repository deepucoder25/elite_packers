<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Branches Across India',
    'bc_desc' => 'Reliable packing and moving services available in major states and tech hubs across India',
    'breadcrumbs' => [
        ['name' => 'Our Branches']
    ]
]);
?>

<?php
$state = [
    [
        "image" => "maharashtra.jpg",
        "category" => "Maharashtra",
        "link" => "maharashtra"
    ],
    [
        "image" => "bangalore.jpg",
        "category" => "Bangalore",
        "link" => "bangalore"
    ],
    [
        "image" => "west-bengal.jpg",
        "category" => "West Bengal",
        "link" => "west-bengal"
    ],
    [
        "image" => "uttar-pradesh.jpg",
        "category" => "Uttar Pradesh",
        "link" => "uttar-pradesh"
    ],
    [
        "image" => "delhi.jpg",
        "category" => "Delhi",
        "link" => "delhi"
    ]
];
?>

<!-- Branch Section -->
<section class="pm-states-section">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <span class="pm-states-subtag">
                <i class="bi bi-geo-alt-fill text-gold me-1"></i> Pan-India Network
            </span>
            <h2 class="pm-states-heading">
                Our Presence Across <span class="pm-states-title-span">India</span>
            </h2>
            <p class="pm-states-subtitle">
                Reliable packing and moving services available in major states and key metropolitan cities.
            </p>
        </div>

        <!-- 5 Boxes in One Row Grid -->
        <div class="pm-states-5-grid">

            <?php foreach ($state as $item): ?>

                <!-- Entire Card Made Fully Clickable -->
                <a href="<?= site_url($item['link']) ?>" class="pm-states-card text-decoration-none">

                    <!-- Image Container with Hover Overlay -->
                    <div class="pm-states-img-box">
                        <img class="img-fluid" src="<?= base_url('assets/images/state/' . $item['image']) ?>"
                            alt="<?= htmlspecialchars($item['category']) ?>" loading="lazy">
                        <span class="pm-states-badge">Branch Node</span>

                        <div class="pm-states-overlay">
                            <div class="pm-hover-icon-circle">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <span class="pm-states-btn-text">
                                Explore Cities <i class="bi bi-arrow-right-short fs-16"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Footer Label Bar -->
                    <div class="pm-states-footer">
                        <div class="pm-states-footer-left">
                            <span class="pm-states-yellow-dash"></span>
                            <h3 class="pm-states-name text-dark">
                                <?= htmlspecialchars($item['category']) ?>
                            </h3>
                        </div>
                        <i class="bi bi-arrow-right pm-states-arrow"></i>
                    </div>

                </a>

            <?php endforeach; ?>

        </div>
    </div>
</section>