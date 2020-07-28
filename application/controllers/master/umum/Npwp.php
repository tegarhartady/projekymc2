<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Npwp extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_npwpgroup');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['title'] = "NPWP";
        $data['npwp'] =  $this->model_npwpgroup->tampilkan();
        // $data['banker'] =  $this->load->model('model_bank');
        $this->load->view("master/umum/npwpgroup/V_npwpgroup", $data);
    }
    function tambah()
    {
        $kodenpwp = $this->input->post('kodenpwp');
        $namanpwp = $this->input->post('namanpwp');
        $nppwp = $this->input->post('nppwp');
        $alamat = $this->input->post('alamat');
        $kota = $this->input->post('kota');
        $deskripsi = $this->input->post('deskripsi');
        $aktif = $this->input->post('aktif');
        $this->model_npwpgroup->input_data($kodenpwp, $namanpwp, $nppwp, $alamat, $kota, $deskripsi, $aktif);
        redirect('master/umum/npwp');
    }
}
