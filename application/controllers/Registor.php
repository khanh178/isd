<?php
	class Registor extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url_helper');
		}
		public function regist(){
			$this->load->view('templates/header');
			$this->load->view('registor');
			$this->load->view('templates/footer');
		}
	}

 ?>