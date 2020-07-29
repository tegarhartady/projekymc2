<?php
defined('BASEPATH')  or exit('No direct script access allowed');

class Model_cabang extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function tampilkan()
    {
        // return $this->db->get('bank');
        $data = $this->db->query("SELECT  
                branchrowid AS branchid, 
                regionrowid AS regionid, 
                branchcode AS branchkode, 
                branchname AS namabranch, 
                branchaddress AS alamatbranch, 
                branchkelurahanname AS branchnamakelurahan, 
                branchkecamatanname AS branchnamakecamatan, 
                branchcityname AS branchnamakota, 
                branchzipcode AS branchkodekota, 
                branchprovincename AS branchnamaprovinsi, 
                branchphoneno AS branchnomorhp, 
                branchfaxno AS branchnomorfax, 
                branchemail AS emailbranch, 
                case
                    when isactive = '1' THEN 'Ya'
                    else 'Tidak'
                END AS aktif  FROM  dbo.branch  ORDER BY regionrowid, branchcode");
        return $data->result();
    }
}
