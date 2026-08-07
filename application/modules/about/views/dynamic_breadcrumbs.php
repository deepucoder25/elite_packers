<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Build Schema for Breadcrumbs
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    foreach ($breadcrumbs as $crumb) {
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            // Need absolute URL for schema if it's relative, but site_url() or base_url() is often used in $crumb['url']
            // If it's just a fragment, we assume it's correctly formatted by the controller/view.
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Breadcrumbs Section -->
<section class="dynamic-bc-section">
    <!-- Ambient Background Light Orbs & Diamond Particles -->
    <div class="bc-orb orb-1"></div>
    <div class="bc-orb orb-2"></div>
    <div class="bc-orb orb-3"></div>
    <div class="bc-diamond diamond-1"></div>

    <div class="container">
        <div class="dyn-bc-header-wrap">
            <!-- Left Side Content -->
            <div class="dyn-bc-left-content">
                <nav class="dyn-bc-nav" aria-label="breadcrumb">
                    <a href="<?= site_url() ?>"><i class="bi bi-house-door-fill me-1"></i>Home</a>
                    <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
                        <?php foreach ($breadcrumbs as $crumb): ?>
                            <span class="dyn-bc-sep">&gt;</span>
                            <?php if (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)'): ?>
                                <a href="<?= $crumb['url'] ?>"><i class="bi bi-box-seam me-1"></i><?= isset($crumb['name']) ? $crumb['name'] : $crumb['title'] ?></a>
                            <?php else: ?>
                                <span class="dyn-bc-current"><?= isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '') ?></span>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <span class="dyn-bc-sep">&gt;</span>
                        <span class="dyn-bc-current"><?= isset($bc_current) ? $bc_current : '' ?></span>
                    <?php endif; ?>
                </nav>
                <h1><?= isset($bc_h1) ? $bc_h1 : '' ?></h1>
                <div class="dyn-bc-glow-bar"></div>
            </div>

            <!-- Right Side Glassmorphism Cards Stack -->
            <div class="dyn-bc-trust-badges">
                <div class="dyn-bc-trust-card">
                    <div class="dyn-bc-card-icon">
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="dyn-bc-card-info">
                        <h4 class="dyn-bc-card-title"><?= $ratingValue ?>/5 Rating</h4>
                        <span class="dyn-bc-card-sub">based on <?= $ratingCount ?>+ reviews</span>
                    </div>
                </div>
                <div class="dyn-bc-trust-card">
                    <div class="dyn-bc-card-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="dyn-bc-card-info">
                        <h4 class="dyn-bc-card-title"><?= $secureShifting ?> Safe Move</h4>
                        <span class="dyn-bc-card-sub">Trusted and Insured</span>
                    </div>
                </div>
                <div class="dyn-bc-trust-card">
                    <div class="dyn-bc-card-icon">
                        <i class="bi bi-truck"></i>
                    </div>
                    <div class="dyn-bc-card-info">
                        <h4 class="dyn-bc-card-title">Pan-India Service</h4>
                        <span class="dyn-bc-card-sub">Network across <?= $statesCovered ?> cities</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>