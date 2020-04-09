<?php
defined('BASEPATH') or exit('not allowed');

class User_detail extends CI_Controller{
	
	public function index(){
		$this->load->model('user_model');
	       $data['userArray']=$this->user_model->return_users();
	$this->load->view('user_view',$data);}
	
		public function logout(){
							$this->session->unset_userdata('username');
							redirect('login');}
							
	public function search(){
		$this->load->model('user_model');
	$data['userArray']=$this->user_model->search_users();
	$this->load->view('user_view',$data);}
	
	public function edit_user(){
		$this->load->model('user_model');
		$data['userArray']=$this->user_model->edit_user();
		$this->load->view('user_view',$data);}
	
	public function search2(){
		
		$this->load->model('user_model');
		$data['userArray']=$this->user_model->search_name();
	$this->load->view('user_view',$data);}
	
	
	public function get_last10(){
		
		$this->load->model('user_model');
		$data['userArray']=$this->user_model->get_last10();
	$this->load->view('user_view',$data);}


 public function add_user(){
	 
	 $this->load->model('user_model');
	 $this->user_model->insert_entry();
	 	$this->load->view('user_view');}
	 
	 
 }


?>