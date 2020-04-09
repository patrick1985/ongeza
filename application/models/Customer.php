<?php 

class Customer extends MY_Model{
   
   public function __construct (){
   
   parent::__construct();
 
   $this->table='customer';
   }


	 public function search_single_name($id){
		 $this->db->where('mem_id',$id);
		 $this->db->limit(3);
		 $query=$this->db->get($this->table);
		 return $query;
		 }	
	
		
}
?>