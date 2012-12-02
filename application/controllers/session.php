<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function login()
    {
        $this->load->view("session/login");
    }
}