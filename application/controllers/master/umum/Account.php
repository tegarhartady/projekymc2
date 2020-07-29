<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_account');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "ACCOUNT";
        $data['acc'] =  $this->model_account->tampilkan();
        // $data['banker'] =  $this->load->model('model_bank');
        $this->load->view("master/umum/account/V_account", $data);
    }

    public function accounttku($where)
    {
        $data['title'] = 'ACCOUNT TKU';
    }

    function tambah()
    {
        $kodeacc = $this->input->post('kodeacc');
        $namaacc = $this->input->post('namaacc');
        $deskripsi = $this->input->post('deskripsi');
        $aktif = $this->input->post('aktif');
        $this->model_account->input_data($kodeacc, $namaacc, $deskripsi, $aktif);
        redirect('master/umum/account');
    }
}
