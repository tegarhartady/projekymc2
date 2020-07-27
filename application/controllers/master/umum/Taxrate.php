<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Taxrate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_taxrate');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "Taxrate";
        $data['tax'] =  $this->model_taxrate->tampilkan();
        // $data['banker'] =  $this->load->model('model_bank');
        $this->load->view("master/umum/taxrate/V_taxrate", $data);
    }
}
