<?php
class EditProfileModel extends CI_Model
{
    public function get_user($id)
    {
        $sql = "select * from user where id =".$id;
        $query = $this->db->query($sql);
        return $query->result_array();
    }   

    public function checkPassword($old,$id){
    	$sql1="SELECT * FROM user WHERE `id`='".$id."'AND password='".$old."'";
    	$query1 = $this->db->query($sql1);
        return $query1->num_rows();
    }

    public function updatePassword($new,$id){
    	$sql2= "UPDATE user SET `password` ='".$new."' WHERE id='".$id."'";
    	$query2 = $this->db->query($sql2);
    	return $sql2;
    }
}
