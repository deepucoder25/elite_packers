<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

foreach ($cities as $ct) {
    if (@$ct['nm'] == $city) {
        $lat = $ct['lat'];
        $lon = $ct['lon'];
        $state_code = $ct['sc'];
        break;
    }
} 
?>

<!-- City Location Map Section (Col-6 Map Box Card + Col-6 Heading & Content Only) -->
<section class="pm-map-section">
  <div class="container">
    <div class="row g-4 align-items-center">

      <!-- LEFT COLUMN: COL-6 GOOGLE MAP BOX CARD -->
      <div class="col-lg-6">
        <div class="pm-map-box-card">
          <div class="pm-map-box-header">
            <h3 class="pm-map-box-title">
              <i class="bi bi-geo-alt-fill text-danger"></i>
              <span>Live Office &amp; Hub Location Map</span>
            </h3>
            <span class="badge bg-danger-subtle text-danger border border-danger-subtle rounded-pill fs-11 px-2.5 py-1">
              <i class="bi bi-broadcast me-1"></i> GPS Active
            </span>
          </div>

          <?php if (!empty($lat) && !empty($lon)) { ?>
            <iframe
                width="100%"
                height="380"
                class="pm-city-map-iframe"
                loading="lazy"
                allowfullscreen
                src="https://www.google.com/maps?q=<?php echo $lat; ?>,<?php echo $lon; ?>&hl=en&z=12&output=embed">
            </iframe>
          <?php } else { ?>
            <iframe
                width="100%"
                height="380"
                class="pm-city-map-iframe"
                loading="lazy"
                allowfullscreen
                src="https://www.google.com/maps?q=Packers+and+Movers+<?php echo urlencode($city); ?>+<?php echo urlencode($state); ?>&hl=en&z=12&output=embed">
            </iframe>
          <?php } ?>
        </div>
      </div>

      <!-- RIGHT COLUMN: COL-6 HEADING & CONTENT ONLY -->
      <div class="col-lg-6">
        <div class="pm-map-content-card d-flex flex-column justify-content-center h-100 ps-lg-3">
          
          <?= $htmlcontent3 ?>

        </div>
      </div>

    </div>
  </div>
</section>