<?php
$st = strtolower(str_replace(" ", "-", $state));
include "data/$st.php";
$state = ucwords($state);
?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Packers and Movers in ' . ucwords($state),
    'bc_desc' => 'Verified local Packers and Movers hubs across ' . ucwords($state) . ' with 100% insured transit',
    'breadcrumbs' => [
        ['name' => 'Our Branches', 'url' => site_url('our-branches')],
        ['name' => ucwords($state)],
    ]
]);
?>

<div class="pm-city-list-section">
    <div class="container">
        
        <!-- Header Title Box -->
        <div class="pm-city-header-box">
            <span class="pm-city-badge-tag">
                <i class="bi bi-geo-alt-fill text-gold me-1"></i> Verified Local Hubs
            </span>
            <h1 class="pm-city-main-heading">
                Packers &amp; Movers Branches in <span class="pm-city-highlight-state"><?= htmlspecialchars($state) ?></span>
            </h1>
            <p class="pm-city-subtitle">
                Select your nearest location below to get instant estimates, verified crew, and door-to-door relocation services.
            </p>
        </div>

        <!-- City Cards Grid -->
        <div class="row g-3">
            <?php
            $st = str_replace(" ", "-", $state);
            foreach ($cities as $ct):
                $link = urlencode(strtolower(str_replace(" ", "-", $ct['nm'])));
                $statename = urlencode(strtolower(str_replace(" ", "-", $st)));
                ?>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 mb-2">
                    <a href="<?= site_url("$link-packers-movers-$statename") ?>"
                        class="pm-list-city-card-link d-block h-100 text-decoration-none">
                        
                        <!-- Modern City Capsule Box Card -->
                        <div class="pm-city-box-card">
                            <div class="pm-city-left-wrap">
                                <!-- Location Pin Badge Icon -->
                                <div class="pm-city-icon-badge">
                                    <i class="bi bi-geo-fill"></i>
                                </div>
                                <!-- City Title -->
                                <div class="pm-city-text-block">
                                    <span class="pm-city-sub-label">Packers &amp; Movers</span>
                                    <h3 class="pm-city-title-name">
                                        <?= htmlspecialchars($ct['nm']) ?>
                                    </h3>
                                </div>
                            </div>
                            <!-- Right Arrow Circle Badge -->
                            <div class="pm-city-arrow-circle">
                                <i class="bi bi-arrow-right-short"></i>
                            </div>
                        </div>

                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>