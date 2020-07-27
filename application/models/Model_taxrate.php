<?php
defined('BASEPATH')  or exit('No direct script access allowed');

class Model_taxrate extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    // public function get_all()
    // {
    //     $query = $this->db->select("*")
    //         ->from('dbo.bank')
    //         ->order_by('bankrowid', 'DESC')
    //         ->get();
    //     return  $query->result();
    // }

    public function tampilkan()
    {
        // return $this->db->get('bank');
        $data = $this->db->query("SELECT 
                                    taxratecode AS kodetax, 
                                    taxratename AS namatax, 
                                    taxpercent AS persentax, 
                                    taxacct AS acct, 
                                    description as deksripsi,
                                    case
                                    when isactive = '1' THEN 'Ya'
                                    Else 'Tidak'
                                    END AS aktif
                                FROM taxrate");
        return $data->result();
    }
}
