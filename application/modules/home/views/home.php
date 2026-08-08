<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the About Us widget
$this->load->view('about_widget');

// Load the Services grid widget
$this->load->view('service_widget');

// Load the Process widget
$this->load->view('process_widget');

// Load the Branches widget
$this->load->view('branches_widget');

// Load the Reviews widget
$this->load->view('review_widget');

// Load the Badges widget
$this->load->view('badges_widget');

//$this->load->view('city_list');
// Load the FAQs widget
$this->load->view('faqs_widget');
?>
