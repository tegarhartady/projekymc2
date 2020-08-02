<?php
class M_login extends CI_Model
{
    function pengguna($username, $password)
    {
        $query = $this->db->query("SELECT
                                    b.group_id AS sessid,
                                    a.login as login,
                                    a.pswd as pass,
                                    a.name as nama, 
                                    a.lastlogin as lastlogin
                                FROM
                                    sec_users a
                                    INNER JOIN sec_users_groups b ON b.login = a.login
                                WHERE a.login = '$username' AND a.pswd = '$password'");
        return $query;
        // $jamupdate = $this->db->query("UPDATE sec_users SET lastlogin ");

    }
    function jamlogin($username)
    {
        $jamupdate = $this->db->query("UPDATE sec_users SET lastlogin = GETDATE() WHERE login = '$username'");
    }
}
