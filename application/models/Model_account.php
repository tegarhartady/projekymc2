<?php
defined('BASEPATH')  or exit('No direct script access allowed');

class Model_account extends CI_Model
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
        accountrowid as rowidakun,
        accountcode as kodeakun,
        accountname as namaakun,
        description as deksripsi,
        usrupd as userupdate,
            case
            when isactive = '1' THEN 'Ya'
            else 'Tidak'
        END AS aktif
        FROM account");
        return $data->result();
    }
    public function tampilkanacctku($id)
    {
        $dataupt = $this->db->query("SELECT 
        a.accountrowid as akunrowid, 
        b.tkuname as namatku,   
        case
            when a.isactive = '1' THEN 'Ya'
            else 'Tidak'
         END AS aktif,
         a.usrupd as updateuser
        from account_tku a
        inner join tku b on b.tkurowid = a.tkurowid
        where a.accountrowid = '" . $id . "'");
    }
    function input_data($kodeacc, $namaacc, $deskripsi, $aktif)
    {
        $tambah = $this->db->query("INSERT INTO account (accountcode, accountname, description, isactive) VALUES ('$kodeacc','$namaacc','$deskripsi','$aktif' )");
        return $tambah;
    }
}
