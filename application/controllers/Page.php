<?php
class Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url();
            redirect($url);
        }
    }

    function index()
    {
        $this->load->view('master/dashboard');
    }
}
