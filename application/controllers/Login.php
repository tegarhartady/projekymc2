<?php
class login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }
    function index()
    {
        $this->load->view('v_login');
    }
    function aksi()
    {
        $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
        $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);

        $cek_login = $this->m_login->pengguna($username, md5($password));
        // $cek_sesi = $this->m_login->group_id($login);
        // var_dump($cek_login);
        if ($cek_login->num_rows() > 0) {
            $this->m_login->jamlogin($username);
            $data = $cek_login->row_array();
            $this->session->set_userdata('Masuk', TRUE);
            if ($data['sessid'] == '1') {
                $this->session->set_userdata('akses', '1');
                $this->session->set_userdata('ses_nama', $data['nama']);
                // $this->db->query("UPDATE sec_users SET lastlogin WHERE username = '$username'");
                redirect('dashboard');
            } else if ($data['sessid'] == '2') {
                $this->session->set_userdata('akses', '2');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else if ($data['sessid'] == '3') {
                $this->session->set_userdata('akses', '3');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else if ($data['sessid'] == '4') {
                $this->session->set_userdata('akses', '4');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else if ($data['sessid'] == '5') {
                $this->session->set_userdata('akses', '5');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else if ($data['sessid'] == '6') {
                $this->session->set_userdata('akses', '6');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else if ($data['sessid'] == '7') {
                $this->session->set_userdata('akses', '7');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else if ($data['sessid'] == '8') {
                $this->session->set_userdata('akses', '8');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else if ($data['sessid'] == '9') {
                $this->session->set_userdata('akses', '9');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else if ($data['sessid'] == '12') {
                $this->session->set_userdata('akses', '12');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else if ($data['sessid'] == '16') {
                $this->session->set_userdata('akses', '16');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            } else {
                $this->session->set_userdata('akses', '17');
                $this->session->set_userdata('ses_nama', $data['nama']);
                redirect('dashboard');
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        $url = site_url('login');
        redirect($url);
    }
}
