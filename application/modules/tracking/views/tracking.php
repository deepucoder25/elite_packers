<?php
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Track Your Consignment',
    'breadcrumbs' => [
        ['name' => 'Track Your Consignment', 'url' => 'javascript:void(0)']
    ]
]);
?>
<div class="container py-5">
    <div class="row">
        <!-- Center Column for Premium Tracking View -->
        <div class="col-lg-10 col-xl-9 mx-auto">
            
            <!-- TOP HERO SEARCH BOX -->
            <div class="tracking-hero-card text-center mb-4">
                <div class="tracking-hero-header-line"></div>
                
                <h2 class="tracking-hero-title mb-2">Track Your Shipment Live</h2>
                <p class="text-muted mb-4 px-md-4 fs-14">
                    Enter your LR Number or Tracking ID below to get real-time location updates, milestone progress, and estimated delivery schedule.
                </p>
                
                <form action="" id="tracking_form" class="tracking-search-box">
                    <div class="tracking-input-group">
                        <div class="tracking-input-icon-wrap">
                            <i class="bi bi-box-seam-fill"></i>
                            <input type="text" class="form-control tracking-input-field" id="trackingNumber" name="trackingNumber" placeholder="Enter LR Number or Tracking ID (e.g. 123456)" required>
                        </div>
                        <button type="submit" class="btn btn-tracking-submit" id="tracking_submit">
                            <i class="bi bi-search"></i> Track Status
                        </button>
                        <button type="reset" class="btn-tracking-reset d-none d-md-inline-flex" title="Clear Search">
                            <i class="bi bi-x-lg"></i>
                        </button>
                    </div>
                    
                    <!-- Quick Sample Pills for Demonstration -->
                    <div class="tracking-sample-pills">
                        <span class="text-muted fs-12 fw-bold me-1">Try Sample:</span>
                        <span class="sample-lr-pill" onclick="document.getElementById('trackingNumber').value='123456'; $('#tracking_submit').click();">LR: 123456</span>
                    </div>

                    <div id="statusMessage" class="mt-3 text-start"></div>
                </form>
            </div>

            <!-- DASHBOARD CONTAINER (Hidden until search is executed) -->
            <div class="contact-tracking-details-card" style="display: none;">
                <div class="tracking-dashboard-card">
                    
                    <!-- Header Bar -->
                    <div class="tracking-dash-header">
                        <h3 class="tracking-dash-title">
                            <i class="bi bi-geo-alt-fill"></i> Shipment Tracking Summary
                        </h3>
                        <div class="tracking-live-status-pill">
                            <span class="pulse-dot-live"></span> Live Status Active
                        </div>
                    </div>

                    <!-- 6 Stats Summary Grid -->
                    <div class="tracking-info-grid">
                        <div class="tracking-info-box">
                            <div class="tracking-box-icon"><i class="bi bi-person-fill"></i></div>
                            <div>
                                <div class="tracking-box-label">Customer Name</div>
                                <h5 class="tracking-box-val" id="customerName">-</h5>
                            </div>
                        </div>

                        <div class="tracking-info-box">
                            <div class="tracking-box-icon"><i class="bi bi-qr-code-scan"></i></div>
                            <div>
                                <div class="tracking-box-label">LR Number</div>
                                <h5 class="tracking-box-val" id="lrNumber">-</h5>
                            </div>
                        </div>

                        <div class="tracking-info-box">
                            <div class="tracking-box-icon"><i class="bi bi-truck"></i></div>
                            <div>
                                <div class="tracking-box-label">Shipment Type</div>
                                <h5 class="tracking-box-val" id="shipmentType">-</h5>
                            </div>
                        </div>

                        <div class="tracking-info-box">
                            <div class="tracking-box-icon"><i class="bi bi-geo-fill"></i></div>
                            <div>
                                <div class="tracking-box-label">Origin</div>
                                <h5 class="tracking-box-val" id="origin">-</h5>
                            </div>
                        </div>

                        <div class="tracking-info-box">
                            <div class="tracking-box-icon"><i class="bi bi-pin-map-fill"></i></div>
                            <div>
                                <div class="tracking-box-label">Destination</div>
                                <h5 class="tracking-box-val" id="destination">-</h5>
                            </div>
                        </div>

                        <div class="tracking-info-box">
                            <div class="tracking-box-icon"><i class="bi bi-calendar-check-fill"></i></div>
                            <div>
                                <div class="tracking-box-label">Expected Delivery</div>
                                <h5 class="tracking-box-val text-success" id="ex_del_date">-</h5>
                            </div>
                        </div>
                    </div>

                    <!-- Milestone Stepper Track -->
                    <div class="tracking-stepper-wrap">
                        <h4 class="tracking-stepper-title">
                            <i class="bi bi-arrow-right-circle-fill"></i> Shipment Journey Progress
                        </h4>
                        
                        <div class="tracking-stepper-line-container">
                            <div class="tracking-progress-track">
                                <div class="contact-progress-bar tracking-progress-fill"></div>
                            </div>

                            <div class="tracking-steps-grid">
                                <div class="tracking-step-node contact-step step-processing">
                                    <div class="tracking-node-icon"><i class="bi bi-gear-fill"></i></div>
                                    <div class="tracking-step-name">Process</div>
                                    <div class="tracking-step-time" id="processing-date">-</div>
                                </div>
                                <div class="tracking-step-node contact-step step-picked">
                                    <div class="tracking-node-icon"><i class="bi bi-box-seam-fill"></i></div>
                                    <div class="tracking-step-name">Picked</div>
                                    <div class="tracking-step-time" id="picked-date">-</div>
                                </div>
                                <div class="tracking-step-node contact-step step-transit">
                                    <div class="tracking-node-icon"><i class="bi bi-truck"></i></div>
                                    <div class="tracking-step-name">In Transit</div>
                                    <div class="tracking-step-time" id="transit-date">-</div>
                                </div>
                                <div class="tracking-step-node contact-step step-delivered">
                                    <div class="tracking-node-icon"><i class="bi bi-house-check-fill"></i></div>
                                    <div class="tracking-step-name">Delivered</div>
                                    <div class="tracking-step-time" id="delivered-date">-</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tracking History Table -->
                    <div class="tracking-history-wrap">
                        <h4 class="tracking-history-title">
                            <i class="bi bi-clock-history"></i> Detailed Activity Timeline
                        </h4>
                        <div class="tracking-table-custom table-responsive">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Status Step</th>
                                        <th>Date / Time</th>
                                        <th>Event Details</th>
                                    </tr>
                                </thead>
                                <tbody id="trackingTableBody">
                                    <!-- Dynamic Rows -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Support Assistance Banner -->
                    <div class="tracking-support-banner">
                        <div class="tracking-support-text">
                            <h5>Need Additional Assistance?</h5>
                            <p>For urgent queries, live driver updates, or dispatch support, contact our 24/7 helpline.</p>
                        </div>
                        <div class="tracking-support-btns">
                            <a href="<?= $phonehtml ?>" class="btn-track-call">
                                <i class="bi bi-telephone-fill"></i> Call <?= $phone ?>
                            </a>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener" class="btn-track-wa">
                                <i class="bi bi-whatsapp"></i> WhatsApp Support
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(function () {
        const steps = {
            '1': '<span class="badge bg-primary bg-opacity-10 text-primary fw-bold px-3 py-2 rounded-pill"><i class="bi bi-gear-fill me-1"></i> Processing</span>',
            '2': '<span class="badge bg-warning bg-opacity-10 text-warning text-dark fw-bold px-3 py-2 rounded-pill"><i class="bi bi-box-seam-fill me-1"></i> Picked Up</span>',
            '3': '<span class="badge bg-info bg-opacity-10 text-info fw-bold px-3 py-2 rounded-pill"><i class="bi bi-truck me-1"></i> In Transit</span>',
            '4': '<span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2 rounded-pill"><i class="bi bi-check-circle-fill me-1"></i> Delivered</span>',
        };

        $('#tracking_submit').click(function (e) {
            e.preventDefault();
            $('#statusMessage').html('<div class="alert alert-info border-0 rounded-4 shadow-sm py-2 px-3 fw-bold"><i class="bi bi-arrow-repeat spin me-2"></i> Searching consignment details...</div>');
            $(this).prop('disabled', true);
            $('.contact-tracking-details-card').hide();

            $.post("<?php echo site_url('tracking/track') ?>", $("#tracking_form").serialize(), function (
                response) {
                $('#tracking_submit').prop('disabled', false);
                $('#trackingTableBody').empty();

                if (response.status === 'success') {
                    // Show details section
                    $('.contact-tracking-details-card').slideDown(400);

                    // Populate details
                    $('#customerName').text(response.main.c_name || 'N/A');
                    $('#lrNumber').text(response.main.tracking_id || 'N/A');
                    $('#shipmentType').text(response.main.ship_type || 'General Cargo');
                    $('#origin').text(response.main.ship_from || 'N/A');
                    $('#destination').text(response.main.ship_to || 'N/A');
                    $('#ex_del_date').text(response.main.ex_del_date || 'In Transit');

                    // Reset steps state
                    $('.tracking-step-node').removeClass('active completed');

                    // Build map of fetched steps
                    const received = {};
                    if (Array.isArray(response.timeline)) {
                        response.timeline.forEach(item => {
                            received[item.type.toString()] = item;
                        });
                    }

                    // Update progress bar and steps
                    let progress = 0;
                    let activeStep = 0;

                    if (received['1']) {
                        progress = 25;
                        activeStep = 1;
                        $('.step-processing').addClass('completed');
                        $('#processing-date').text(received['1'].date);
                    }

                    if (received['2']) {
                        progress = 50;
                        activeStep = 2;
                        $('.step-picked').addClass('completed');
                        $('#picked-date').text(received['2'].date);
                    }

                    if (received['3']) {
                        progress = 75;
                        activeStep = 3;
                        $('.step-transit').addClass('completed');
                        $('#transit-date').text(received['3'].date);
                    }

                    if (received['4']) {
                        progress = 100;
                        activeStep = 4;
                        $('.step-delivered').addClass('completed');
                        $('#delivered-date').text(received['4'].date);
                    }

                    // Set active step
                    if (activeStep > 0) {
                        $(`.tracking-step-node:nth-child(${activeStep})`).addClass('active');
                    }

                    // Update progress bar width
                    $('.contact-progress-bar').css('width', progress + '%');

                    // Build tracking table
                    if (Array.isArray(response.timeline) && response.timeline.length > 0) {
                        response.timeline.forEach(item => {
                            const stepBadge = steps[item.type] || item.type;
                            $('#trackingTableBody').append(`
                                <tr>
                                    <td>${stepBadge}</td>
                                    <td class="fw-bold text-dark">${item.date} ${item.time || ''}</td>
                                    <td>${item.remarks || item.place || 'Status Updated'}</td>
                                </tr>
                            `);
                        });
                    } else {
                        $('#trackingTableBody').append(`
                            <tr>
                                <td colspan="3" class="text-center text-muted py-3">No activity log recorded yet.</td>
                            </tr>
                        `);
                    }

                    $('#statusMessage').empty();
                } else {
                    // Error: hide details, show message
                    $('.contact-tracking-details-card').hide();
                    $('#statusMessage').html(
                        `<div class="alert alert-danger border-0 rounded-4 shadow-sm py-2 px-3 fw-bold"><i class="bi bi-exclamation-triangle-fill me-2"></i> ${response.message}</div>`);
                }
            }, 'json').fail(function(jqXHR, textStatus, errorThrown) {
                $('#tracking_submit').prop('disabled', false);
                $('#statusMessage').html('<div class="alert alert-danger border-0 rounded-4 shadow-sm py-2 px-3 fw-bold"><i class="bi bi-exclamation-octagon-fill me-2"></i> Error: ' + textStatus + ' - ' + errorThrown + '</div>');
            });
        });

        // Clear resets everything
        $('button[type="reset"]').click(function () {
            $('#statusMessage').empty();
            $('.contact-tracking-details-card').slideUp(300);
            $('.tracking-step-node').removeClass('active completed');
            $('.contact-progress-bar').css('width', '0%');
            $('#customerName, #lrNumber, #shipmentType, #origin, #destination, #ex_del_date, #processing-date, #picked-date, #transit-date, #delivered-date')
                .text('-');
            $('#trackingTableBody').empty();
        });
    });
</script>
