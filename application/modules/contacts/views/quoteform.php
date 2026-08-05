<div class="hero-form-card" itemscope itemtype="https://schema.org/QuoteAction">
  <div class="text-center mb-3">
    <h4 class="hero-form-title">GET A <span class="text-gold">FREE QUOTE</span></h4>
    <div class="hero-form-line"></div>
    <p class="hero-form-subtext">Fill in the details and we will get back to you.</p>
  </div>

  <form id="quoteform" class="ajax-form" data-url="<?= site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">
    
    <div class="row g-2">
      <!-- 1. Your Name -->
      <div class="col-6">
        <label class="hero-form-label">Your Name <span class="text-gold">*</span></label>
        <div class="form-icon-wrap">
          <i class="bi bi-person input-icon"></i>
          <input type="text" name="name" class="hero-form-input" placeholder="Your Name" required>
        </div>
      </div>

      <!-- 2. Mobile Number -->
      <div class="col-6">
        <label class="hero-form-label">Mobile Number <span class="text-gold">*</span></label>
        <div class="form-icon-wrap">
          <i class="bi bi-telephone input-icon"></i>
          <input type="tel" name="phone" class="hero-form-input" placeholder="Mobile Number" required>
        </div>
      </div>

      <!-- 3. Email Address -->
      <div class="col-6">
        <label class="hero-form-label">Email Address</label>
        <div class="form-icon-wrap">
          <i class="bi bi-envelope input-icon"></i>
          <input type="email" name="email" class="hero-form-input" placeholder="Email Address">
        </div>
      </div>

      <!-- 4. Type of Move -->
      <div class="col-6">
        <label class="hero-form-label">Type of Move</label>
        <div class="form-icon-wrap">
          <i class="bi bi-box-seam input-icon"></i>
          <select name="mtype" class="hero-form-select">
            <option value="" disabled selected>Type of Move</option>
            <option>Household Relocation</option>
            <option>Office Relocation</option>
            <option>Car Transportation</option>
            <option>Bike Transportation</option>
            <option>Warehouse Storage</option>
          </select>
        </div>
      </div>

      <!-- 5. Moving From -->
      <div class="col-6">
        <label class="hero-form-label">Moving From <span class="text-gold">*</span></label>
        <div class="form-icon-wrap">
          <i class="bi bi-geo-alt input-icon"></i>
          <input type="text" name="mfrom" class="hero-form-input" value="<?= @$city ?>" placeholder="Moving From" required>
        </div>
      </div>

      <!-- 6. Moving To -->
      <div class="col-6">
        <label class="hero-form-label">Moving To <span class="text-gold">*</span></label>
        <div class="form-icon-wrap">
          <i class="bi bi-geo-alt input-icon"></i>
          <input type="text" name="mto" class="hero-form-input" placeholder="Moving To" required>
        </div>
      </div>

      <!-- 7. Moving Date -->
      <div class="col-12">
        <label class="hero-form-label">Moving Date</label>
        <div class="form-icon-wrap">
          <i class="bi bi-calendar3 input-icon"></i>
          <input type="date" name="mdate" class="hero-form-input" placeholder="Moving Date">
        </div>
      </div>

      <!-- Submit Button -->
      <div class="col-12 mt-3">
        <button type="submit" class="btn-submit-hero-red w-100">
          Get Free Quote &rarr;
        </button>
      </div>
    </div>

    <div class="text-center mt-2">
      <small class="hero-privacy-note"><i class="bi bi-shield-check text-success me-1"></i> 100% Privacy Guaranteed</small>
    </div>

    <div id="quoteformresults" class="mt-2"></div>
  </form>
</div>