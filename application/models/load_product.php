<?php 
	class Load_product extends CI_Model{
		public function __construct(){ 
	        parent::__construct();
	        $this->load->database();
	    }

		public function index(){
			$query=$this->db->query('SELECT * FROM product');
			return $query->result_array();
		}
	}
 ?>