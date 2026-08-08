<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Our Photo Gallery',
    'bc_desc' => 'Explore visual highlights of our live relocation operations, 5-layer packing standards, vehicle carriers, and warehouse hubs across India.',
    'breadcrumbs' => [
        ['name' => 'Photo Gallery']
    ]
]); 
?>

<!-- Main Photo Gallery Section (Full Width Layout) -->
<section class="about-page-section">
  <div class="container">
    
    <!-- HERO HEADER BOX (FULL WIDTH) -->
    <div class="about-hero-box mb-4 p-4 p-lg-5">
      <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-4">
        <div>
          <span class="about-top-pill">
            <i class="bi bi-images text-gold me-1"></i> Live Project Highlights
          </span>
          <h1 class="about-heading-primary mb-3 fs-28">
            Visual Showcase of Our <span class="text-danger">Relocation &amp; Moving Services</span>
          </h1>
          <p class="about-lead-text mb-0 fs-15">
            Take an exclusive look behind the scenes of <strong><?= htmlspecialchars(isset($company3) ? $company3 : 'Elite Packers and Movers') ?></strong>. From heavy-duty 5-layer bubble packing to specialized vehicle container loading and climate-controlled warehouse storage, our gallery demonstrates our commitment to safety and quality.
          </p>
        </div>

        <!-- Quick Stats Pills Stack -->
        <div class="d-flex flex-wrap flex-lg-column gap-2 flex-shrink-0">
          <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-sm fs-12 fw-bold text-start">
            <i class="bi bi-check-circle-fill text-success me-1"></i> 15,000+ Relocations
          </span>
          <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-sm fs-12 fw-bold text-start">
            <i class="bi bi-shield-lock-fill text-danger me-1"></i> 5-Layer Export Packing
          </span>
          <span class="badge bg-white text-dark border px-3 py-2 rounded-pill shadow-sm fs-12 fw-bold text-start">
            <i class="bi bi-truck text-primary me-1"></i> GPS Active Container Fleets
          </span>
        </div>
      </div>
    </div>

    <!-- CATEGORY FILTER BUTTONS (FULL WIDTH) -->
    <div class="gallery-filter-wrap mb-4">
      <button type="button" class="gallery-filter-btn active" onclick="filterGallery('all', this)"><i class="bi bi-grid-fill me-1"></i> All Photos</button>
      <button type="button" class="gallery-filter-btn" onclick="filterGallery('home', this)"><i class="bi bi-house-door-fill me-1"></i> Home Shifting</button>
      <button type="button" class="gallery-filter-btn" onclick="filterGallery('office', this)"><i class="bi bi-building-fill me-1"></i> Office Moving</button>
      <button type="button" class="gallery-filter-btn" onclick="filterGallery('vehicle', this)"><i class="bi bi-car-front-fill me-1"></i> Vehicle Transport</button>
      <button type="button" class="gallery-filter-btn" onclick="filterGallery('packing', this)"><i class="bi bi-box-seam-fill me-1"></i> Packing &amp; Unpacking</button>
      <button type="button" class="gallery-filter-btn" onclick="filterGallery('storage', this)"><i class="bi bi-archive-fill me-1"></i> Warehousing</button>
    </div>

    <!-- FULL-WIDTH PHOTO GALLERY GRID (4 COLUMNS PER ROW) -->
    <div class="row g-4" id="photoGalleryGrid">

      <!-- Database Photos (If Any) -->
      <?php if (!empty($photos)): ?>
        <?php foreach ($photos as $photo): 
          $img_url = base_url('assets/uploads/gallery/' . $photo->image);
          $p_title = !empty($photo->title) ? htmlspecialchars($photo->title) : 'Relocation Operations in Action';
          $p_album = !empty($photo->album_name) ? htmlspecialchars($photo->album_name) : 'General';
        ?>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item-col" data-category="all">
            <div class="gallery-photo-card" onclick="openLightbox('<?= $img_url ?>', '<?= addslashes($p_title) ?>')">
              <div class="gallery-img-wrapper">
                <img loading="lazy" src="<?= $img_url ?>" class="gallery-img" alt="<?= $p_title ?>">
                <div class="gallery-hover-overlay">
                  <div class="gallery-zoom-icon"><i class="bi bi-arrows-fullscreen"></i></div>
                </div>
              </div>
              <div class="gallery-card-body">
                <span class="gallery-badge"><i class="bi bi-tag-fill me-1"></i> <?= $p_album ?></span>
                <h3 class="gallery-card-title"><?= $p_title ?></h3>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>

      <!-- CURATED HIGH QUALITY SERVICE GALLERY CARDS -->
      
      <!-- Item 1: Home Relocation -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item-col" data-category="home packing">
        <div class="gallery-photo-card" onclick="openLightbox('<?= base_url('assets/images/services_modules/home-relocation.jpg') ?>', 'Premium Household Furniture &amp; Appliance Packing')">
          <div class="gallery-img-wrapper">
            <img loading="lazy" src="<?= base_url('assets/images/services_modules/home-relocation.jpg') ?>" class="gallery-img" alt="Household Furniture Relocation">
            <div class="gallery-hover-overlay">
              <div class="gallery-zoom-icon"><i class="bi bi-arrows-fullscreen"></i></div>
            </div>
          </div>
          <div class="gallery-card-body">
            <span class="gallery-badge"><i class="bi bi-house-door-fill me-1"></i> Home Shifting</span>
            <h3 class="gallery-card-title">Premium Household Furniture &amp; Appliance Packing</h3>
          </div>
        </div>
      </div>

      <!-- Item 2: Office Relocation -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item-col" data-category="office">
        <div class="gallery-photo-card" onclick="openLightbox('<?= base_url('assets/images/services_modules/office-relocation.jpg') ?>', 'Corporate Office Desk &amp; IT Equipment Relocation')">
          <div class="gallery-img-wrapper">
            <img loading="lazy" src="<?= base_url('assets/images/services_modules/office-relocation.jpg') ?>" class="gallery-img" alt="Office Furniture Moving">
            <div class="gallery-hover-overlay">
              <div class="gallery-zoom-icon"><i class="bi bi-arrows-fullscreen"></i></div>
            </div>
          </div>
          <div class="gallery-card-body">
            <span class="gallery-badge"><i class="bi bi-building-fill me-1"></i> Office Relocation</span>
            <h3 class="gallery-card-title">Corporate Office Desk &amp; IT Equipment Relocation</h3>
          </div>
        </div>
      </div>

      <!-- Item 3: Car Carrier Transport -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item-col" data-category="vehicle">
        <div class="gallery-photo-card" onclick="openLightbox('<?= base_url('assets/images/services_modules/car-transportation.jpg') ?>', 'Closed Double-Deck Car Carrier Container Trailer')">
          <div class="gallery-img-wrapper">
            <img loading="lazy" src="<?= base_url('assets/images/services_modules/car-transportation.jpg') ?>" class="gallery-img" alt="Car Transport Carrier">
            <div class="gallery-hover-overlay">
              <div class="gallery-zoom-icon"><i class="bi bi-arrows-fullscreen"></i></div>
            </div>
          </div>
          <div class="gallery-card-body">
            <span class="gallery-badge"><i class="bi bi-car-front-fill me-1"></i> Vehicle Transport</span>
            <h3 class="gallery-card-title">Closed Double-Deck Car Carrier Container Trailer</h3>
          </div>
        </div>
      </div>

      <!-- Item 4: Bike Shipping Crate -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item-col" data-category="vehicle packing">
        <div class="gallery-photo-card" onclick="openLightbox('<?= base_url('assets/images/services_modules/bike-transportation.jpg') ?>', 'Wooden Crate Packing for Two-Wheeler Bike Transport')">
          <div class="gallery-img-wrapper">
            <img loading="lazy" src="<?= base_url('assets/images/services_modules/bike-transportation.jpg') ?>" class="gallery-img" alt="Bike Transport Crate">
            <div class="gallery-hover-overlay">
              <div class="gallery-zoom-icon"><i class="bi bi-arrows-fullscreen"></i></div>
            </div>
          </div>
          <div class="gallery-card-body">
            <span class="gallery-badge"><i class="bi bi-bicycle me-1"></i> Bike Transport</span>
            <h3 class="gallery-card-title">Wooden Crate Packing for Two-Wheeler Bike Transport</h3>
          </div>
        </div>
      </div>

      <!-- Item 5: 5-Layer Bubble Packing -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item-col" data-category="packing">
        <div class="gallery-photo-card" onclick="openLightbox('<?= base_url('assets/images/services_modules/packing-and-moving.jpg') ?>', '5-Layer Bubble &amp; Corrugated Sheet Packing Process')">
          <div class="gallery-img-wrapper">
            <img loading="lazy" src="<?= base_url('assets/images/services_modules/packing-and-moving.jpg') ?>" class="gallery-img" alt="5 Layer Packing Material">
            <div class="gallery-hover-overlay">
              <div class="gallery-zoom-icon"><i class="bi bi-arrows-fullscreen"></i></div>
            </div>
          </div>
          <div class="gallery-card-body">
            <span class="gallery-badge"><i class="bi bi-box-seam-fill me-1"></i> Packing Material</span>
            <h3 class="gallery-card-title">5-Layer Bubble &amp; Corrugated Sheet Packing Process</h3>
          </div>
        </div>
      </div>

      <!-- Item 6: Safe Fleet Loading -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item-col" data-category="packing home">
        <div class="gallery-photo-card" onclick="openLightbox('<?= base_url('assets/images/services_modules/loading-unloading.jpg') ?>', 'Heavy-Duty Hydraulic Ramp Fleet Container Loading')">
          <div class="gallery-img-wrapper">
            <img loading="lazy" src="<?= base_url('assets/images/services_modules/loading-unloading.jpg') ?>" class="gallery-img" alt="Fleet Loading Unloading">
            <div class="gallery-hover-overlay">
              <div class="gallery-zoom-icon"><i class="bi bi-arrows-fullscreen"></i></div>
            </div>
          </div>
          <div class="gallery-card-body">
            <span class="gallery-badge"><i class="bi bi-truck me-1"></i> Fleet Loading</span>
            <h3 class="gallery-card-title">Heavy-Duty Hydraulic Ramp Fleet Container Loading</h3>
          </div>
        </div>
      </div>

      <!-- Item 7: Warehouse Storage -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item-col" data-category="storage">
        <div class="gallery-photo-card" onclick="openLightbox('<?= base_url('assets/images/services_modules/storage-services.jpg') ?>', 'Secure Climate-Controlled Storage &amp; Warehousing Facility')">
          <div class="gallery-img-wrapper">
            <img loading="lazy" src="<?= base_url('assets/images/services_modules/storage-services.jpg') ?>" class="gallery-img" alt="Warehouse Storage">
            <div class="gallery-hover-overlay">
              <div class="gallery-zoom-icon"><i class="bi bi-arrows-fullscreen"></i></div>
            </div>
          </div>
          <div class="gallery-card-body">
            <span class="gallery-badge"><i class="bi bi-archive-fill me-1"></i> Warehousing</span>
            <h3 class="gallery-card-title">Secure Climate-Controlled Storage &amp; Warehousing Facility</h3>
          </div>
        </div>
      </div>

      <!-- Item 8: Custom Relocation -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 gallery-item-col" data-category="custom home">
        <div class="gallery-photo-card" onclick="openLightbox('<?= base_url('assets/images/services_modules/custom-relocation.jpg') ?>', 'Custom Tailored Intercity Cargo Transport &amp; Delivery')">
          <div class="gallery-img-wrapper">
            <img loading="lazy" src="<?= base_url('assets/images/services_modules/custom-relocation.jpg') ?>" class="gallery-img" alt="Custom Relocation Cargo">
            <div class="gallery-hover-overlay">
              <div class="gallery-zoom-icon"><i class="bi bi-arrows-fullscreen"></i></div>
            </div>
          </div>
          <div class="gallery-card-body">
            <span class="gallery-badge"><i class="bi bi-shield-check me-1"></i> Custom Cargo</span>
            <h3 class="gallery-card-title">Custom Tailored Intercity Cargo Transport &amp; Delivery</h3>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- LIGHTBOX FULLSCREEN IMAGE VIEWER MODAL -->
<div class="modal fade" id="galleryLightboxModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content bg-dark border-0 rounded-4 overflow-hidden shadow-lg">
      <div class="modal-header border-0 bg-dark text-white p-3 justify-content-between">
        <h5 id="lightboxTitle" class="modal-title fw-bold text-white fs-15 m-0"></h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-0 bg-black position-relative">
        <img id="lightboxImg" src="" class="img-fluid" style="max-height: 82vh; object-fit: contain; width: 100%;">
      </div>
    </div>
  </div>
</div>

<!-- GALLERY FILTER & LIGHTBOX JAVASCRIPT -->
<script>
function filterGallery(category, btnElement) {
    // Toggle active state on buttons
    document.querySelectorAll('.gallery-filter-btn').forEach(btn => btn.classList.remove('active'));
    if (btnElement) {
        btnElement.classList.add('active');
    }

    // Filter gallery items
    const items = document.querySelectorAll('.gallery-item-col');
    items.forEach(item => {
        const itemCat = item.getAttribute('data-category');
        if (category === 'all' || itemCat.includes(category)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

function openLightbox(imgUrl, titleText) {
    document.getElementById('lightboxImg').src = imgUrl;
    document.getElementById('lightboxTitle').textContent = titleText;
    var myModal = new bootstrap.Modal(document.getElementById('galleryLightboxModal'));
    myModal.show();
}
</script>
