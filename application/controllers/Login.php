<?php 
class Login extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('login_model');
	}
 
	public function index()
	{
		$username = $this->input->post("name");
		$password = $this->input->post("pass");
		 
		$this->form_validation->set_rules("name", "Username", "trim|required");
		$this->form_validation->set_rules("pass", "Password", "trim|required");
		 
		if ($this->form_validation->run() == FALSE){
			echo 1;
		}
		else{
			if ($this->input->post('id') == "login"){
				$usr_result = $this->login_model->get_user($username, $password);
			if (!empty($usr_result)){

				$sessiondata = array(
				'username' => $username,
				'loginuser' => TRUE,
				'id'=>$usr_result[0]['id']
				);
				$this->session->set_userdata($sessiondata);		
				echo json_encode($sessiondata);
			}
			else{
				echo 3;
			}
		}
		else{
			redirect('login/index');
			}
		}
	}

	public function logout(){
		if(session_destroy()){
			echo 1 ;
		}
	}
	public function check(){
		echo json_encode($this->session->userdata());
	}
}	
?>