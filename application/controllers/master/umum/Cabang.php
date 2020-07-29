<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cabang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_cabang');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "CABANG";
        $data['cabang'] =  $this->model_cabang->tampilkan();
        // $data['banker'] =  $this->load->model('model_bank');
        $this->load->view("master/umum/cabang/V_cabang", $data);
    }
}
