<?php 
	class Display extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('load_product');
		}

		public function index(){
			$getall=$this->load_product->index();
			$this->load->view('templates/header');
			$this->load->view('index',[data=>$getall]);
			$this->load->view('templates/footer');
		}

		public function category(){
			$this->load->view('templates/header');
			$this->load->view('category');
			$this->load->view('templates/footer');
		}
		/*public function view($slug=NULL){
			$data['get_new']=$this->new_model->get_news($slug);
			 if (empty($data['news_item']))
		        {
		                show_404();
		        }
		        $data['title'] = $data['news_item']['title'];
		        $this->load->view('templates/header',$data);
				$this->load->view('new/view',$data);
				$this->load->view('templates/footer');
		}*/
	}
 ?>