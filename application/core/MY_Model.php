<?php 
class MY_Model extends CI_Model{
   
   public function __construct (){ 
   parent::__construct();
   $this->load->database();
   $this->table='customer';
   }
function delete_user($id){
    $this->db->delete('customer',array('id'=>$id));}
	
	
	
	

public function  view_member (){
	$this->db->select('*');
	$this->db->from('customer');
		$this->db->join('gender', 'customer.gender_id=gender.gender_id');
	
	 $query=$this->db->get();
	 return $query->result_array();
     }
	 
	 public function get_gender(){
		 
		$query=$this->db->get('gender');
		return $query->result_array();
		 }

		public function insert_member(){
		
		$data-> first_name=$_POST['first_name'];
		$data-> last_name=$_POST['last_name'];
		$data-> town_name=$_POST['town_name'];
		$data-> gender_id=$_POST['gender_id'];
        $this->db->insert('customer',$data);
		
		}
		
		
			
		public function update_member(){
      						$id=$_POST['id'];
	    $data-> first_name=$_POST['first_name'];
		$data-> last_name=$_POST['last_name'];
		$data-> town_name=$_POST['town_name'];
		$data-> gender_id=$_POST['gender_id'];
		
			$this->db->set($data);
			$this->db->where('id',$id );
			$this->db->update('customer');           }

}
?>