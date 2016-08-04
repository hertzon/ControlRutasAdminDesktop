<?php

class Home_controller extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    function index(){
        $this->load->view('form_view');
    }
}
