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

        $cek_login = $this->m_login->pengguna($username, $password);
        // $cek_sesi = $this->m_login->group_id($login);
        if ($cek_login->num_rows() > 0) {
            $data = $cek_login->row_array();
            $this->session->set_userdata('Masuk', TRUE);
            if ($data['group_id'] == '1') {
                $this->session->set_userdata('akses', '1');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '2') {
                $this->session->set_userdata('akses', '2');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '3') {
                $this->session->set_userdata('akses', '3');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '4') {
                $this->session->set_userdata('akses', '4');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '5') {
                $this->session->set_userdata('akses', '5');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '6') {
                $this->session->set_userdata('akses', '6');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '7') {
                $this->session->set_userdata('akses', '7');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '8') {
                $this->session->set_userdata('akses', '8');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '9') {
                $this->session->set_userdata('akses', '9');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '12') {
                $this->session->set_userdata('akses', '12');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else if ($data['group_id'] == '16') {
                $this->session->set_userdata('akses', '16');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            } else {
                $this->session->set_userdata('akses', '17');
                $this->session->set_userdata('ses_id', $data['name']);
                redirect('page');
            }
        }
    }

    function logout()
    {
        $this->session->session_destroy();
        $url = base_url('');
        redirect($url);
    }
}
