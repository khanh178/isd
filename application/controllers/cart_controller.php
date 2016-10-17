<?php 
	class Cart_controller extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('form');
			$this->load->helper('url');
			$this->load->helper('html');
			$this->load->database();
			$this->load->library('form_validation');
			$this->load->model('cart_model');
			$this->load->library("cart");
		}

		public function index(){
			$id= $_GET['id'];
			$get_info= $this->cart_model->getProduct($id);

			$this->load->view('templates/header');
			$this->load->view('cart_view',[data=>$get_info]);
			$this->load->view('templates/footer');
		}

		public function addCart(){
			$user_id=$this->input->post('user_id');
			$id=$this->input->post('id');
            $qty=$this->input->post('quantity');
			$add=$this->cart_model->addToCart($user_id,$id,$qty);

			if($add=='1'){
				echo 1;
			}
			else{
				echo 2;
			}
		}
		public function viewCart(){
			$id=$this->input->post('id');
			$view=$this->cart_model->getCart($id);
			echo json_encode($view);
		}
		public function deleteCart(){
			$id=$this->input->post('data');
			$delete=$this->cart_model->delete($id);
			echo $delete;
		}
	}
 ?>