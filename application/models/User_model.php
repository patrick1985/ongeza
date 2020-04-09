<?php
class User_model extends MY_Model{
	    public $username;
        public $password;
        public $date;
		
		public function __construct(){
			
			parent::__construct();
			$this->load->database();
		    $this->table='customer';
			
		}
	
	
	
	public function  view_member (){
	$query=$this->db->get('member');
	 return $query->result_array();
     }
	
	
	
		
	
		
	
		public function can_login($username,$password){
			
			$this->load->database();
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query= $this->db->get('user');
				if($query->num_rows() > 0){
				     return true;}
				           else{ 
		            return false; } }
						
	function return_users(){
		//$this->load->database();
		$query=$this->db->get("member");
		$query->result_array();
		return $query->result_array();}
		
	function search_users(){
		//$this->load->database();
		$query=$this->db->get_where('member',array('mem_id'=>'6'));
		$query->result_array();
		return $query->result_array();}
		
	function search_name($name){
		
		$query=$this->db->query("select * from member where firstname='".$name."'");
	return $query->result_array();}
	
	
	
        public function get_last10(){
			$this->load->database();
                $query = $this->db->get('member', 10);
                return $query->result(); }
		
		
	function insert_users(){
		$this->load->database();
		$data = array(
        'title' => $title,
        'name' => $name,
        'date' => $date); 		}
		
		
			
	
   
 function getstafflist(){
			$this->db->select('staff.pfno,firstname,midname,surname,priv_id,blockedid')
             ->from('staff')
             ->join('security','staff.pfno = security.pfno')
             ->group_by('pfno');
    $query = $this->db->get();
    return $query;}
	
	  public function update_entry()
        {
			$this->load->database();
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));}
		
		
		public function insert_member2(){
        $this->load->database();
		
							//$id=$_POST['mem_id'];
							$data = array(
							'firstname' => $_POST['firstname'],
							'lastname'=>$_POST['lastname'],
							'address' => $_POST['address']
							);
							
							$this->firstname  =$_POST['firstname'];
							$this->lastname   =$_POST['lastname'];
							$this->address    =$_POST['address'];
		//echo $data->firstname;
			//$this->db->set($data);
			//$this->db->where('mem_id',$id );
			$this->db->insert('member',$data); 	          }
			
			
		
}

?>