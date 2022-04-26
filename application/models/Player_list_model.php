<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Player_list_model extends CI_Model{
	

public function pubg_player_list(){
	 
	 $this->db->select('*');
			$this->db->from('pubg');
			$this->db->where('status','1');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function cricket_player_list(){
	 
	 $this->db->select('*');
			$this->db->from('cricket');
			$this->db->where('status','1');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function ludo_player_list(){
	 
	 $this->db->select('*');
			$this->db->from('ludo');
			$this->db->where('status','1');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function blind_date_player_list(){
	 
	 $this->db->select('*');
			$this->db->from('blind_date');
			$this->db->where('status','1');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
  
 

}