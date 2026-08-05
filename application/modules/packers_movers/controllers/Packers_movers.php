<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $data['title'] = "All India Packers & Movers Services | " . $this->comp['company3'];
        $data['description'] = "Nationwide packing and moving services by " . $this->comp['company3'] . ". Safe house shifting, vehicle shipping, and storage solutions across all Indian states.";
        $data['keywords'] = "all India packers movers, intercity shifting, nationwide relocation, state to state moving, " . $this->comp['company3'];
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "All India Packers & Movers Services | " . $this->comp['company3'];
        $data['description'] = "Nationwide packing and moving services by " . $this->comp['company3'] . ". Safe house shifting, vehicle shipping, and storage solutions across all Indian states.";
        $data['keywords'] = "all India packers movers, intercity shifting, nationwide relocation, state to state moving, " . $this->comp['company3'];
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $data = array(
            "state" => $state,
            "title" => "Top Packers & Movers in $state | " . $this->comp['company3'],
            "description" => "Best packers and movers in $state by " . $this->comp['company3'] . ". Reliable local & long-distance household shifting, office moving, and car transport services.",
            "keywords" => "packers and movers in $state, movers packers $state, shifting services in $state, best movers $state, " . $this->comp['company3'],
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    { 
        $seo = array(
            // "Siliguri" => array(
            //     "title" => "",
            //     "desc" => ""
            // ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        //edit by Arshad 15-11-2024
        return array(
            'title' => "Best Packers and Movers in $city, $state | " . $this->comp['company3'],
            "desc" => "Hire top-rated packers and movers in $city, $state. " . $this->comp['company3'] . " offers reliable household shifting and vehicle transport services at affordable rates."
        );
    }
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink=strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            'img' => base_url('assets') . "/images/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "movers and packers in $city, Movers Packers $city, Movers near me $city, Packers and movers in $city, Moving companies near me $city, Movers $city, Packers and movers near me $city, Removal companies in $city, Moving services in $city, Cheap movers in $city, Local movers in $city, Local moving companies in $city, $city best moving companies, House movers $city, Packers movers $city, Moving services near $city, House removals $city, Cheap moving companies in $city, Professional movers in $city, House movers near $city, Cheap movers $city, Best packers and movers in $city, Affordable movers $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
   
}
