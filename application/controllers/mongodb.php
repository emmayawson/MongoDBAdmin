<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mongodb extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data["path_view"] = "mongodb/index";
        
        $this->no_db_list = true;
        $this->load->view($this->layout,$data);
    }
}