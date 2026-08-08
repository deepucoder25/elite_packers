<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 9773950025';
        $this->comp['phonehtml'] = 'tel:+919773950025';
        $this->comp['phone1'] = '+91 8796338791';
        $this->comp['phonehtml1'] = 'tel:+918796338791';
        $this->comp['supportmail'] = 'support@mycompany.com';
        $this->comp['replyToMail'] = 'support@mycompany.com';
        $this->comp['mail'] = 'Info@elitepackersandmovers.com';    
        $this->comp['mailhtml'] = "mailto:Info@elitepackersandmovers.com";
        $this->comp['company3'] = 'Elite Packers and Movers';
        $this->comp['companydomain'] = 'mycompany.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['pinteresthtml'] = "";
        $this->comp['whatsapphtml'] = "https://wa.me/919773950025";
        $this->comp['whatsapphtml1'] = "https://wa.me/918796338791";

        $this->comp['address'] = "F-10/101, Sector 15, Pocket 10, Sector 15F, Rohini, New Delhi, Delhi, 110089";
        $this->comp['address1'] = "F-10/101, Sector 15, Pocket 10";
        $this->comp['address2'] = "Sector 15F, Rohini, New Delhi, Delhi, 110089";
        $this->comp['addressRegion'] = "New Delhi";
        $this->comp['postalCode'] = "110089";
        $this->comp['companystate'] = "Delhi";

        $this->comp['branch_address'] = "G/F FRONT SIDE ,HOUSE NUMBER 452 , KH NO ,376 ,VILLAGE BHARTAL DWARKA SECTOR 26,NEW DELHI-110077";
        $this->comp['branch_address1'] = "G/F FRONT SIDE ,HOUSE NUMBER 452 , KH NO ,376";
        $this->comp['branch_address2'] = "VILLAGE BHARTAL DWARKA SECTOR 26, NEW DELHI-110077";
        $this->comp['branch_postalCode'] = "110077";
        $this->comp['branch_companystate'] = "Delhi";

        $this->comp['themeColor'] = "#E21B22";

        $this->comp['experience'] = "40+";
        $this->comp['startYear'] = "1986";

        $this->comp['happyClients'] = "39,850+";
        $this->comp['yearsExperience'] = "40+";
        $this->comp['secureShifting'] = "100%";
        $this->comp['statesCovered'] = "20+";
        $this->comp['residentialMoving'] = "225";
        $this->comp['corporateMoving'] = "70";

        $this->comp['sku'] = "PM28957";
        $this->comp['mpn'] = "SPM28957";
        // Review
        $this->comp['ratingValue'] = "4.9";
        $this->comp['ratingCount'] = "3,950";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
