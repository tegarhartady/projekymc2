<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_bank');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "BANK";
        $data['banker'] =  $this->model_bank->tampilkan();
        // $data['banker'] =  $this->load->model('model_bank');
        $this->load->view("master/umum/bank/V_bank", $data);
    }

    function tambah()
    {
        $kodebank = $this->input->post('kodebank');
        $namabank = $this->input->post('namabank');
        $aktif = $this->input->post('aktif');
        $this->model_bank->input_data($kodebank, $namabank, $aktif);
        redirect('master/umum/bank/index');
    }
    function edit()
    {
        $bankid = $this->input->post('bankid');
        $kodebank = $this->input->post('kodebank');
        $namabank = $this->input->post('namabank');
        $aktif = $this->input->post('aktif');

        $data['editbank'] = array(
            'kodebank' => $kodebank,
            'namabank' =>  $namabank,
            'aktif' => $aktif
        );
        $this->model_bank->edit_data($kodebank, $namabank, $aktif);
        redirect('master/umum/bank/index');
    }
}
