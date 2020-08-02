<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('masuk') != FALSE) {
            $url = base_url();
            redirect($url);
        }
    }
    public function index()
    {
        $this->load->view('master/dashboard');
    }
    function administrator()
    {
        // function ini hanya boleh diakses oleh admin dan dosen
        if ($this->session->userdata('akses') == '1' || $this->session->userdata('akses') == '2') {
            $this->load->view('master/v_dashboard');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    function salesforce()
    {
        // function ini hanya boleh diakses oleh admin dan dosen
        if ($this->session->userdata('akses') == '1' || $this->session->userdata('akses') == '7') {
            $this->load->view('master/v_dashboard');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    function krs()
    {
        // function ini hanya boleh diakses oleh admin dan mahasiswa
        if ($this->session->userdata('akses') == '1' || $this->session->userdata('akses') == '4') {
            $this->load->view('master/v_dashboard');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }
    function lhs()
    {
        // function ini hanya boleh diakses oleh admin dan mahasiswa
        if ($this->session->userdata('akses') == '1' || $this->session->userdata('akses') == '5') {
            $this->load->view('master/v_dashboard');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }
}
