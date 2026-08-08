<?php
$htmlcontent = '';
$htmlcontent1 = '';
$htmlcontent2 = '';
// bihar 
if (strtolower($city) == "") {
   $htmlcontent = "
        
   ";
   $htmlcontent1 = "
   
   ";
   $htmlcontent2 = "
   
   ";
} else {
  $htmlcontent = "
        <h2 class='pm-city-about-title mt-2'>
          Top Rated Packers and Movers in <span class='text-danger'>$city</span>
        </h2>

        <p class='pm-city-about-lead mb-3'>
          Planning a move in <strong>$city</strong>? <strong>$company3</strong> is your trusted local and domestic relocation specialist in $city, $state. Whether you are shifting your 1/2/3 BHK apartment locally or relocating your commercial office across India, our trained moving crew handles end-to-end packing, loading, transport, and door-to-door placement with zero stress.
        </p>

        <p class='text-muted fs-14 mb-3'>
          Navigating residential society permissions, elevator restrictions, and traffic timings in <strong>$city</strong> requires experienced movers. We use 5-layer corrugated sheets, heavy-duty bubble wraps, furniture edge guards, and waterproof stretch films to guarantee 100% scratch-free protection for your valuable furniture, fragile kitchenware, and electronics.
        </p>
        
   ";
   $htmlcontent1 = "
          <h3 class='pm-city-seo-title'>
            <span class='pm-seo-title-icon'><i class='bi bi-geo-alt-fill'></i></span>
            What Makes Shifting Services in $city Unique?
          </h3>

          <p class='text-muted fs-15 mb-3'>
            Every city presents its own set of moving challenges. In <strong>$city</strong>, seasonal weather changes necessitate multi-layer waterproof stretch wrapping for wooden furniture and home electronics. Furthermore, residential high-rise apartments often require coordinated elevator booking and specific loading slot clearances.
          </p>
          <p class='text-muted fs-15 mb-4'>
            Families and working professionals looking for <strong>Best Packers and Movers in $city</strong> choose <strong>$company3</strong> because we provide dedicated container vehicles, experienced supervisors, and organized carton labeling to prevent any end-destination confusion.
          </p>
   
   ";
   $htmlcontent2 = "
          <h3 class='pm-city-seo-title-gold'>
            <span class='pm-seo-title-icon-gold'><i class='bi bi-shield-lock-fill'></i></span>
            Why Professional Movers in $city Guarantee Complete Peace of Mind
          </h3>

          <p class='text-muted fs-15 mb-3'>
            Hiring random transport vendors often leads to unmentioned loading fees, damaged goods, or delayed delivery schedules. Professional relocation with <strong>$company3</strong> ensures systematic handling: fragile glassware is packed in heavy bubble wrap, furniture corners are cushioned with foam pads, and washing machines are secured with transit bolts.
          </p>
          <p class='text-muted fs-15 mb-4'>
            Our pricing for <strong>Packers and Movers in $city</strong> remains 100% transparent with zero hidden costs. You receive an itemized quotation up front covering labor, packing material, toll taxes, and transit insurance.
          </p>
   
   ";
   $htmlcontent3 = "
          <h2 class='pm-city-main-heading text-start mb-3'>
            Our Operational Network &amp; Hubs in <span class='text-danger'>$city</span>
          </h2>

          <p class='pm-city-subtitle text-start mx-0 mb-3 fs-16'>
            <strong>$company3</strong> operates fully equipped warehouse hubs and fast dispatch centers across all major sectors and neighborhoods of <strong>$city</strong>, $state.
          </p>

          <p class='pm-city-subtitle text-start mx-0 mb-0 fs-15 text-muted'>
            With our strategically located branch hubs in $city, we ensure rapid response times, 24/7 fleet availability, zero-delay loading, and seamless door-to-door packing and moving services for residential homes, corporate offices, and vehicle transport across the region.
          </p>

   ";
  
} 