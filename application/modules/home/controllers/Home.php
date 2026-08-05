<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php
class Home extends MX_Controller
{
    function error()
    {
        $this->oldurl_to_newurl();
        $data['title'] = "404 Page Not Found | " . $this->comp['company3'];
        $data['description'] = "The page you are looking for does not exist or has been moved. Return to " . $this->comp['company3'] . " homepage for reliable relocation services.";
        $data['keywords'] = "404 page, page not found, " . $this->comp['company3'];
        $data['module'] = "home";
        $data['view_file'] = "error";
        echo Modules::run('template/layout2', $data);
    }
    function index()
    {
        $data['title'] = "Best Packers and Movers in India | " . $this->comp['company3'];
        $data['description'] = "Top-rated packers and movers offering safe home shifting, office relocation, car carrier, & warehousing across India. Get a free instant quote from " . $this->comp['company3'] . "!";
        $data['keywords'] = "packers and movers, best movers in India, home shifting services, car transport, office relocation, " . $this->comp['company3'];

        $data['module'] = "home";
        $data['view_file'] = "home";
        echo Modules::run('template/layout1', $data);
    }

    public function oldurl_to_newurl()

    {

        // if (@$this->uri->segment(1) == "packers-movers-bihar-india") {
        //     redirect("bihar", 'location', 301);
        // }
    }
}
