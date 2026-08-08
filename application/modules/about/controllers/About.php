<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    function index()
    {
        $data['title'] = "About Us - Reliable Packers & Movers | " . $this->comp['company3'];
        $data['description'] = "Learn about " . $this->comp['company3'] . ", India's trusted packing and moving company. Discover our journey, experienced team, mission, and safe relocation solutions.";
        $data['keywords'] = "about packers movers, reliable shifting company, trusted relocation services, " . $this->comp['company3'];
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }

    function choose()
    {
        $data['title'] = "Why Choose Us - Trusted Shifting Services | " . $this->comp['company3'];
        $data['description'] = "Discover why thousands trust " . $this->comp['company3'] . " for home shifting, vehicle transport, and office relocation with transparent pricing and top safety standards.";
        $data['keywords'] = "why choose us, trusted movers, best packing moving benefits, secure relocation services";
        $data['module'] = "about";
        $data['view_file'] = "choose";
        echo Modules::run('template/layout2', $data);
    }

    function faqs()
    {
        $data['title'] = "Frequently Asked Questions (FAQs) | " . $this->comp['company3'];
        $data['description'] = "Get answers to common queries about house shifting charges, transit insurance, packing material, delivery timelines, and tracking at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers FAQ, house shifting charges questions, relocation insurance FAQ, moving tips";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $reviews = null;
        try {
            @$this->load->database();
            if (isset($this->db) && is_object($this->db) && @$this->db->conn_id && @$this->db->table_exists('reviews')) {
                $this->db->order_by('r_id', 'desc');
                $this->db->where('status', 1);
                $reviews = @$this->db->get('reviews');
            }
        } catch (\Throwable $e) {
            $reviews = null;
        } catch (\Exception $e) {
            $reviews = null;
        }

        $company_name = isset($this->comp['company3']) ? $this->comp['company3'] : 'Elite Packers and Movers';
        $data['reviews'] = $reviews;
        $data['company3'] = $company_name;

        $data['title'] = "Customer Testimonials & Ratings | " . $data['company3'];
        $data['description'] = "Read genuine client testimonials and feedback about " . $data['company3'] . ". See how we deliver hassle-free home, vehicle, and office relocations across India.";
        $data['keywords'] = "packers movers reviews, customer testimonials, shifting service feedback, client ratings";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'];
        $data['description'] = "Read the Privacy Policy of " . $this->comp['company3'] . ". We are committed to protecting your personal information and ensuring secure data handling during relocation.";
        $data['keywords'] = "privacy policy, data protection, " . $this->comp['company3'] . " policy";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms and Conditions | " . $this->comp['company3'];
        $data['description'] = "Review the terms and conditions for booking household, office, and vehicle relocation services with " . $this->comp['company3'] . ".";
        $data['keywords'] = "terms and conditions, service agreement, moving guidelines, shifting policy";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}

