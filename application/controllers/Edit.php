<?php 
	class Edit extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->database();
			$this->load->library('form_validation');
			$this->load->model('editProfileModel');
		}

		public function editProfile(){
			$id = $this->input->get();
			$get= $this->editProfileModel->get_user($id['id']);
			$this->load->view('templates/header');
			$this->load->view('editProfileView',[data=>$get]);
			$this->load->view('templates/footer');
		}

		public function changePassword(){
			$oldPass=$this->input->post('oldPass');
			$newPass=$this->input->post('newPass');
			$reType=$this->input->post('reType');
			$id=$this->input->post('id');
			if(!$oldPass || !$newPass ||!$reType){
				echo 4;
				return;
			}
			if($reType!=$newPass){
				echo 1;
				return;
			}
			$check=$this->editProfileModel->checkPassword($oldPass,$id);
			if ($check > 0){
				$this->editProfileModel->updatePassword($newPass,$id);
				die("2");
			}
			else{
				die("3");
			}
		}
	}
 ?>