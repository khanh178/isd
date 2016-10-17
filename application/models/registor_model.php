<?php 
	class Registor_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		public function index($fullname,$username,$password,$email,$number,$day,$month,$year){
			$dob=$day."-".$month."-".$year;
			/*$data = array(
               'name'     => $username,
               'email'    => $email,
               'password' => $password ,
               'phone'    => $number,
               'dob'  => $dob
            );*/
			$query = $this->db->query("INSERT INTO user (fullname,username,password,level,email,phone,dob) VALUES ('$fullname','$username','$password','1','$email','$number','$dob')");
			if($query){
				return "ok";
			}
		}

		public function checkRegistor($name){
			$sql="SELECT * FROM user WHERE `username`= '".$name."'";
			$query1=$this->db->query($sql);
			return $query1->num_rows();
		}

	}
 ?>