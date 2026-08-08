<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Services extends MX_Controller
{
    function index()
    {
        redirect('', 'location', 301);
    }

    function homeShifting()
    {
        $data['title'] = "House Shifting & Household Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Professional home shifting services by " . $this->comp['company3'] . ". Complete packing, safe transportation, unpacking, & door-to-door household relocation across India.";
        $data['keywords'] = "home shifting services, house moving, household relocation, domestic shifting, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office()
    {
        $data['title'] = "Corporate & Office Relocation Services | " . $this->comp['company3'];
        $data['description'] = "Seamless office relocation & commercial shifting services by " . $this->comp['company3'] . ". Efficient IT equipment handling, minimal business downtime, & safe delivery.";
        $data['keywords'] = "office relocation, commercial shifting, corporate movers, office moving company, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "office";
        echo Modules::run('template/layout2', $data);
    }

    function bike()
    {
        $data['title'] = "Two Wheeler & Bike Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Safe bike transportation & two-wheeler shipping services by " . $this->comp['company3'] . ". Specialized scratch-proof packing and insured nationwide transit.";
        $data['keywords'] = "bike transportation, two wheeler shifting, motorcycle carrier, bike shipping India, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "bike";
        echo Modules::run('template/layout2', $data);
    }

    function car()
    {
        $data['title'] = "Car Carrier & Vehicle Transportation Services | " . $this->comp['company3'];
        $data['description'] = "Enclosed car carrier & vehicle transportation services by " . $this->comp['company3'] . ". Door-to-door auto transport with real-time tracking and full insurance coverage.";
        $data['keywords'] = "car transportation, car carrier services, vehicle transport, auto shipping company, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "car";
        echo Modules::run('template/layout2', $data);
    }

    function packingMoving()
    {
        $data['title'] = "Professional Packing and Moving Services | " . $this->comp['company3'];
        $data['description'] = "High-quality packing and moving services by " . $this->comp['company3'] . ". Premium materials, bubble wrap, sturdy boxes, and expert handlers for safe transit.";
        $data['keywords'] = "packing and moving, professional packing, relocation services, shifting company, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "packing_moving";
        echo Modules::run('template/layout2', $data);
    }

    function loadingUnloading()
    {
        $data['title'] = "Safe Loading and Unloading Services | " . $this->comp['company3'];
        $data['description'] = "Reliable loading and unloading services by " . $this->comp['company3'] . ". Trained labor force ensuring heavy household goods and delicate items are handled damage-free.";
        $data['keywords'] = "loading unloading services, heavy lifting movers, goods loading staff, labor for moving, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "loading_unloading";
        echo Modules::run('template/layout2', $data);
    }

    function storage()
    {
        $data['title'] = "Secure Warehouse & Goods Storage Services | " . $this->comp['company3'];
        $data['description'] = "Safe, spacious, and climate-controlled warehousing & household storage solutions by " . $this->comp['company3'] . ". Short-term & long-term storage with 24/7 CCTV surveillance.";
        $data['keywords'] = "storage services, warehouse storage, household goods storage, luggage storage, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "storage";
        echo Modules::run('template/layout2', $data);
    }

    function customRelocation()
    {
        $data['title'] = "Custom Shifting & Special Relocation Solutions | " . $this->comp['company3'];
        $data['description'] = "Tailored relocation services designed for unique moving needs by " . $this->comp['company3'] . ". Specialized heavy machinery moving, pet relocation, fragile item handling & custom logistics.";
        $data['keywords'] = "custom relocation, tailored shifting, special moving services, customized logistics, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "custom_relocation";
        echo Modules::run('template/layout2', $data);
    }

    function ibaApproved()
    {
        $data['title'] = "IBA Approved Packers and Movers | " . $this->comp['company3'];
        $data['description'] = "IBA Approved Packers and Movers by " . $this->comp['company3'] . ". Official Indian Banks' Association approved bills, 100% genuine relocation & bank employee shifting services across India.";
        $data['keywords'] = "IBA approved packers and movers, IBA approved bills, bank employee shifting, IBA movers India, " . $this->comp['company3'];
        $data['module'] = "services";
        $data['view_file'] = "iba";
        echo Modules::run('template/layout2', $data);
    }
}
