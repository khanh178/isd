<?php
class Login_model extends CI_Model
{
    function get_user($usr, $pwd)
    {
        $sql = "select * from user where username = '" . $usr . "' and password = '" . $pwd . "'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }   
}
