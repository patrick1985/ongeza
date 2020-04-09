<?php 
defined('BASEPATH') or exit ('not alowed');

class Login extends  MY_Controller{
		public $username;
        public $password;
        public $date;
		public $id;

	public function index(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		 $this->load->model('customer');
	                 $data['userArray']=$this->customer->view_member();
					 $data['userArray2']=$this->customer->get_gender();
					 $data['content']='member_view';
					 $data['title']='Ongeza Customers';			 
	                 $this->load->view($this->layout,$data);}
					 
		}
?>