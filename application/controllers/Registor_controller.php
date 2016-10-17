<?php
	class Registor_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->database();
			$this->load->library('form_validation');	
			$this->load->model('registor_model');
		}

		public function regist(){
			$this->load->view('templates/header');
			$this->load->view('registor');
			$this->load->view('templates/footer');
		}

		public function index(){
			$fullname = $this->input->post("name");
			$username = $this->input->post("user");
			$password = $this->input->post("pass");
			$retype = $this->input->post("re-type");
			$email = $this->input->post("email");
			$number = $this->input->post("number");
			$day = $this->input->post("DOBDay");
			$month = $this->input->post("DOBMonth");
			$year = $this->input->post("DOBYear");

			$this->form_validation->set_rules("user", "Username", "trim|required");
			$this->form_validation->set_rules("pass", "Password", "trim|required");
			$this->form_validation->set_rules('email', 'email', 'required|valid_email|trim');

			$check=$this->registor_model->checkRegistor($username);

			if($check >0){
				echo 4;
				return;
			}
			else if(!$this->form_validation->run())
	        {
	            echo 1;
	            return;
	        }
	        else if($password != $retype){
	        	echo 2;
	        	return;
	        }
	        else{
	        	$registor_result= $this->registor_model->index($fullname,$username,$password,$email,$number,$day,$month,$year);
	        	if($registor_result=='ok'){
	        		echo 3;
	        		return;
	        	}
	        }
		}
	}

 ?>