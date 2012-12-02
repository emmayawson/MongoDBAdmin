<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Query extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        $data["path_view"] = "query/index";
        $this->load->view($this->layout,$data);
    }
}