<?php
defined('BASEPATH') OR  exit('direct access not allowed');

class Test extends CI_controller{

public function pt(){
 $this->load->helper('url');
 $this->load->view('welcome_test');

}
public function index(){
	$this->load->helper('url');
	$this->load->view('welcome_test');
			}
		}



?>