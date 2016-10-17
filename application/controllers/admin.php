<?php
class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	function manage() {
		$this->_is_admin();
		$data['view_file'] = "admin/manage";
		$this->admin($data);
	}

	function index($data) 
	{	
		$this->load->view('admin/admin', $data);
	}

	function _is_admin() {
	$is_admin = TRUE;
	if ($is_admin != TRUE) {
			redirect('admin/store_items/not_allowed');
		}
	}

	function not_allowed() {
		echo "You are not allowed here.";
	}
}