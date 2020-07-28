<?php
defined('BASEPATH')  or exit('No direct script access allowed');

class Model_npwpgroup extends CI_Model
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
        npwpgroupcode as kodenpwp, 
        npwpgroupname as namanpwp, 
        npwp as nppwp,
        address as alamat,
        city as kota,
        description as deskripsi,
        case
            when isactive = '1' THEN 'Ya'
            else 'Tidak'
        END AS aktif
        FROM npwpgroup");
        return $data->result();
    }

    function input_data($kodenpwp, $namanpwp, $nppwp, $alamat, $kota, $deskripsi, $aktif)
    {
        $tambah = $this->db->query("INSERT INTO npwpgroup (npwpgroupcode, npwpgroupname,npwp,address,city,description, isactive) VALUES ('$kodenpwp', '$namanpwp', '$nppwp', '$alamat', '$kota', '$deskripsi', '$aktif')");
        return $tambah;
    }
}
