<?php

class MY_Controller extends CI_Controller{
	
	public $layout;
	
	public function __construct(){
		
		parent:: __construct();
		$this->layout='layout/master_view';
	}
	
	
		public function view_single_user(){
						$id=$_GET['id'];
						$this->load->model('city');
						$query=$this->customer->search_single_name($id);
						$data['userArray']=$query->result_array();
						$data['content']='member_view';
						$data['title']=$query->row('firstname');
						$this->load->view($this->layout,$data);
		                }
	function delete_member(){
		   $id=$_GET['id'];
		   $this->load->model('user_model');
	       $this->user_model->delete_user($id);
		   
           redirect($_SERVER['HTTP_REFERER']);
		  } 
		   
	 public function update_member(){
			$this->load->model('user_model');
			$this->user_model->update_member();
			redirect($_SERVER['HTTP_REFERER']);
            }
			
	public function insert_member(){
		   $this->load->model('user_model');
		   $this->user_model->insert_member();
		   redirect($_SERVER['HTTP_REFERER']);
		   
           }
	
}


?>