<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data["path_view"] = "home/index";
        
        $this->no_db_list = true;
        $this->load->view($this->layout,$data);
    }
}