<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        try {
            @$this->load->database();
        } catch (\Throwable $e) {
            // DB connection failure or driver issue, fail gracefully
        } catch (\Exception $e) {
            // DB connection failure or driver issue, fail gracefully
        }
    }

    function photo_gallery()
    {
        $company_name = isset($this->comp['company3']) ? $this->comp['company3'] : 'Elite Packers and Movers';
        $data['company3'] = $company_name;
        $data['title'] = "Photo Gallery - Packing & Moving in Action | " . $company_name;
        $data['description'] = "Explore our photo gallery featuring safe container loading, high-grade packing materials, household shifting, and fleet trucks at " . $company_name . ".";
        $data['keywords'] = "packers movers gallery, shifting photos, packing process pictures, relocation fleet images";
        
        $photos = [];
        try {
            if (isset($this->db) && is_object($this->db) && @$this->db->conn_id && @$this->db->table_exists('gallery')) {
                $this->db->where('status', 1);
                $this->db->order_by('auto_id', 'DESC');
                $query = @$this->db->get('gallery');
                if ($query) {
                    $photos = $query->result();
                }
            }
        } catch (\Throwable $e) {
            // Fail gracefully
        } catch (\Exception $e) {
            // Fail gracefully
        }
        $data['photos'] = $photos;
        
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Video Gallery - Relocation & Transport Videos | " . $this->comp['company3'];
        $data['description'] = "Watch videos of our expert packing techniques, vehicle loading, container transport, and customer testimonials at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers videos, house shifting video, vehicle transport video, packing demonstration";
        
        $videos = [];
        try {
            if (isset($this->db) && is_object($this->db) && @$this->db->conn_id && @$this->db->table_exists('video_gallery')) {
                $this->db->where('status', 1);
                $this->db->order_by('auto_id', 'DESC');
                $query = @$this->db->get('video_gallery');
                if ($query) {
                    $videos = $query->result();
                }
            }
        } catch (\Throwable $e) {
            // Fail gracefully
        } catch (\Exception $e) {
            // Fail gracefully
        }
        $data['videos'] = $videos;
        
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}