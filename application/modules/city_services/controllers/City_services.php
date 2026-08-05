<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class City_services extends MX_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }

    private function format_city($city_slug) {
        $city = str_replace("_", " ", $city_slug);
        return urldecode(ucwords(str_replace("-", " ", $city)));
    }

    function home_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Best Home Shifting Services in $city | " . $this->comp['company3'];
        $data['description'] = "Get reliable, safe, and professional home shifting services in $city from " . $this->comp['company3'] . ". Smooth door-to-door household relocation at affordable rates.";
        $data['keywords'] = "home shifting in $city, household movers $city, house relocation $city, cheap house shifting $city, packers movers $city";
        $data['module'] = "city_services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Professional Office Relocation Services in $city | " . $this->comp['company3'];
        $data['description'] = "Smooth and secure office shifting services in $city by " . $this->comp['company3'] . ". Minimize downtime with our experienced commercial relocation experts.";
        $data['keywords'] = "office shifting in $city, commercial relocation $city, corporate movers $city, office moving services $city";
        $data['module'] = "city_services";
        $data['view_file'] = "office_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function car_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Safe Car Transportation Services in $city | " . $this->comp['company3'];
        $data['description'] = "Secure car carrier and vehicle transportation services in $city by " . $this->comp['company3'] . ". On-time, insured, and damage-free vehicle delivery across India.";
        $data['keywords'] = "car transportation in $city, car carrier $city, vehicle shipping $city, car transport charges $city";
        $data['module'] = "city_services";
        $data['view_file'] = "car_transport";
        echo Modules::run('template/layout2', $data);
    }

    function bike_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Reliable Bike Transportation Services in $city | " . $this->comp['company3'];
        $data['description'] = "Hire trusted two-wheeler and bike shifting services in $city from " . $this->comp['company3'] . ". We ensure multi-layer protective packaging and timely delivery.";
        $data['keywords'] = "bike transportation in $city, two wheeler courier $city, bike shifting services $city, motorcycle shipping $city";
        $data['module'] = "city_services";
        $data['view_file'] = "bike_transport";
        echo Modules::run('template/layout2', $data);
    }
}
