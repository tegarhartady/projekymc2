<?php
defined('BASEPATH')  or exit('No direct script access allowed');

class Model_bank extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    public function get_all()
    {
        $query = $this->db->select("*")
            ->from('dbo.bank')
            ->order_by('bankrowid', 'DESC')
            ->get();
        return  $query->result();
    }

    public function tampilkan()
    {
        // return $this->db->get('bank');
        $data = $this->db->query("SELECT 
                bankrowid as bankid, 
                bankcode as kodebank, 
                bankname as namabank,
                case
                    when isactive = 'Y' THEN 'Ya'
                    else 'Tidak'
                END AS aktif
                FROM bank");
        return $data->result();
    }
    function input_data($kodebank, $namabank, $aktif)
    {
        $tambah = $this->db->query("INSERT INTO bank (bankcode, bankname, isactive) VALUES ('$kodebank','$namabank','$aktif' )");
        return $tambah;
    }
    function edit_data($bankid, $kodebank, $namabank, $aktif)
    {
        $tambah = $this->db->query("UPDATE bank SET bankcode = '$kodebank', bankname = '$namabank', isactive = '$aktif'  WHERE bankrowid = '$bankid' )");
        return $tambah;
    }
}
