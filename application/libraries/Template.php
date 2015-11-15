<?php

// Check Import from CodeIgniter
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * CodeIgniter 3 template extension compatible with HMVC
 * @author Fayaz K <allshore.php44@gmail.com>
 * @package CodeIgniter
 * @version 1.0
 * @license https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html GPL v2
 * @copyright (c) 2015
 */
class Template {

    /**
     *  CodeIgniter Object
     * @var object 
     */
    private $CI;
    /**
     * Constructor
     */
    function __construct() {
        $this->CI = & get_instance();
    }

    /**
     * 
     * @param type $tpl_name
     * @param type $body_view
     * @param type $data
     */
    public function load($tpl_name, $body_view = null, $data = null) {
        $parts = (is_null($data))?array():$data;
        if (!is_null($body_view) && is_array($body_view)) {
            foreach ($body_view as $key => $view) {
                $parts[$key] = $this->CI->load->view($view,$data,TRUE);
            }
        }else if($body_view !== NULL && is_string($body_view)){
            $parts['body'] = $this->CI->load->view($body_view,$data,TRUE);
        }
        $this->CI->load->view('tpls/' . $tpl_name, $parts);
    }
}