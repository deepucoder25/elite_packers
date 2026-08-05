<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function photo_gallery()
    {
        $data['title'] = "Photo Gallery - Packing & Moving in Action | " . $this->comp['company3'];
        $data['description'] = "Explore our photo gallery featuring safe container loading, high-grade packing materials, household shifting, and fleet trucks at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers gallery, shifting photos, packing process pictures, relocation fleet images";
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['photos'] = $this->db->get('gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Video Gallery - Relocation & Transport Videos | " . $this->comp['company3'];
        $data['description'] = "Watch videos of our expert packing techniques, vehicle loading, container transport, and customer testimonials at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers videos, house shifting video, vehicle transport video, packing demonstration";
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['videos'] = $this->db->get('video_gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}