<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin_model extends CI_Model{
	
	
	
	
   public function pubg_getview(){
	 
	 $this->db->select('*');
			$this->db->from('pubg');
			//$this->db->join('pubg','pubg.plogin_id = login.id');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function pubg_active($id){
	   
	 // echo $id;exit;
	   
		   		$this->db->update('pubg',array('pubg.status'=>'1'));
				$this->db->from('pubg');
				$this->db->where('id',$id);
				
				
				
	   $records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
	   
	}
	
	public function pubg_inactive($id){
	   
	 // echo $id;exit;
	   
		   		$this->db->update('pubg',array('pubg.status'=>'0'));
				$this->db->from('pubg');
				$this->db->where('id',$id);
				
	   $records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
	}
    
	public function pubg_delete($id){
		
		return $this->db->delete('pubg')->where('id',$id);
	}
	
	public function cricket_getview(){
	 
	 $this->db->select('*');
			$this->db->from('cricket');
			//$this->db->join('cricket','pubg.plogin_id = login.id');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function cricket_active($id){
	   
	 // echo $id;exit;
	   
		   		$this->db->update('cricket',array('cricket.status'=>'1'));
				$this->db->from('cricket');
				$this->db->where('id',$id);
				
				
				
	   $records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	  
	}
	
	public function cricket_inactive($id){
	   
	 // echo $id;exit;
	   
		   		$this->db->update('cricket',array('cricket.status'=>'0'));
				$this->db->from('cricket');
				$this->db->where('id',$id);
			
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
	}
    
	public function cricket_delete($id){
		
		return $this->db->delete('cricket')->where('id',$id);
	}
	
	
	public function ludo_getview(){
	 
	 $this->db->select('*');
			$this->db->from('ludo');
			//$this->db->join('pubg','pubg.plogin_id = login.id');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function ludo_active($id){
	   
	 // echo $id;exit;
	   
		   		$this->db->update('ludo',array('ludo.status'=>'1'));
				$this->db->from('ludo');
				$this->db->where('id',$id);
				
				
	   $records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	  
	}
	
	public function ludo_inactive($id){
	   
	 // echo $id;exit;
	   
		   		$this->db->update('ludo',array('ludo.status'=>'0'));
				$this->db->from('ludo');
				$this->db->where('id',$id);
			
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	  
	}
    
	public function ludo_delete($id){
		
		return $this->db->delete('ludo')->where('id',$id);
	}
	
	
	public function blind_date_getview(){
	 
	 $this->db->select('*');
			$this->db->from('blind_date');
			//$this->db->join('pubg','pubg.plogin_id = login.id');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function blind_date_active($id){
	   
	 // echo $id;exit;
	   
		   		$this->db->update('blind_date',array('blind_date.status'=>'1'));
				$this->db->from('blind_date');
				$this->db->where('id',$id);
				
				
				
	   $records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
	   
	}
	
	public function blind_date_inactive($id){
	   
	 // echo $id;exit;
	   
		   		$this->db->update('blind_date',array('blind_date.status'=>'0'));
				$this->db->from('blind_date');
				$this->db->where('id',$id);
			
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	  
	}
    
	public function blind_date_delete($id){
		
		return $this->db->delete('blind_date')->where('id',$id);
	}
	
	
	
//All Event list	
	
	public function c_coding_list(){
	 
	 $this->db->select('*,tech_event.id,
			tech_event.elogin_id,tech_event.event_name');
			$this->db->from('login');
			$this->db->join('tech_event','tech_event.elogin_id = login.id');
			$this->db->where('tech_event.event_name','C-Coding');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
  
   
   public function paper_presentation_list(){
	 
	 $this->db->select('*,tech_event.id,
			tech_event.elogin_id,tech_event.event_name');
			$this->db->from('login');
			$this->db->join('tech_event','tech_event.elogin_id = login.id');
			$this->db->where('tech_event.event_name','Paper Presentation');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   
   public function quants_reasoining_list(){
	 
	 $this->db->select('*,tech_event.id,
			tech_event.elogin_id,tech_event.event_name');
			$this->db->from('login');
			$this->db->join('tech_event','tech_event.elogin_id = login.id');
			$this->db->where('tech_event.event_name','Quants & Reasoning (MCQ)');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function technical_quiz_list(){
	 
	 $this->db->select('*,tech_event.id,
			tech_event.elogin_id,tech_event.event_name,tech_event.name2,tech_event.name3,tech_event.name4');
			$this->db->from('login');
			$this->db->join('tech_event','tech_event.elogin_id = login.id');
			$this->db->where('tech_event.event_name','Technical Quiz');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function general_quiz_list(){
	 
	 $this->db->select('*,tech_event.id,
			tech_event.elogin_id,tech_event.event_name,tech_event.name2,tech_event.name3,tech_event.name4');
			$this->db->from('login');
			$this->db->join('tech_event','tech_event.elogin_id = login.id');
			$this->db->where('tech_event.event_name','General Quiz');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function group_discussion_list(){
	 
	 $this->db->select('*,tech_event.id,
			tech_event.elogin_id,tech_event.event_name,tech_event.name2,tech_event.name3,tech_event.name4');
			$this->db->from('login');
			$this->db->join('tech_event','tech_event.elogin_id = login.id');
			$this->db->where('tech_event.event_name','Group Discussion');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   
   
   
   //Game Event List
   
   public function counter_strike_list(){
	 
	 $this->db->select('*,game_event.id,
			game_event.glogin_id,game_event.event_name,game_event.name2,game_event.name3,game_event.name4');
			$this->db->from('login');
			$this->db->join('game_event','game_event.glogin_id = login.id');
			$this->db->where('game_event.event_name','Counter Strike');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function nfs_list(){
	 
	 $this->db->select('*,game_event.id,
			game_event.glogin_id,game_event.event_name,game_event.name2,game_event.name3,game_event.name4');
			$this->db->from('login');
			$this->db->join('game_event','game_event.glogin_id = login.id');
			$this->db->where('game_event.event_name','NFS(MW-2005)');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function ludo_list(){
	 
	 $this->db->select('*,game_event.id,
			game_event.glogin_id,game_event.event_name,game_event.name2,game_event.name3,game_event.name4');
			$this->db->from('login');
			$this->db->join('game_event','game_event.glogin_id = login.id');
			$this->db->where('game_event.event_name','LUDO');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   //Fun Event List
   
   
   
   public function dums_e_raaj_list(){
	 
	 $this->db->select('*,fun_event.id,
			fun_event.flogin_id,fun_event.event_name,fun_event.name2,fun_event.name3,fun_event.name4');
			$this->db->from('login');
			$this->db->join('fun_event','fun_event.flogin_id = login.id');
			$this->db->where('fun_event.event_name','Dumbs-e-Raaz');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function paper_dance_list(){
	 
	 $this->db->select('*,fun_event.id,
			fun_event.flogin_id,fun_event.event_name,fun_event.name2,fun_event.name3,fun_event.name4');
			$this->db->from('login');
			$this->db->join('fun_event','fun_event.flogin_id = login.id');
			$this->db->where('fun_event.event_name','Paper Dance');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function music_chair_list(){
	 
	 $this->db->select('*,fun_event.id,
			fun_event.flogin_id,fun_event.event_name,fun_event.name2,fun_event.name3,fun_event.name4');
			$this->db->from('login');
			$this->db->join('fun_event','fun_event.flogin_id = login.id');
			$this->db->where('fun_event.event_name','Music Chair');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function drawing_list(){
	 
	 $this->db->select('*,fun_event.id,
			fun_event.flogin_id,fun_event.event_name,fun_event.name2,fun_event.name3,fun_event.name4');
			$this->db->from('login');
			$this->db->join('fun_event','fun_event.flogin_id = login.id');
			$this->db->where('fun_event.event_name','Drawing');
			$records = $this->db->get();
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   
   //Cultural Event list
   
   public function cultural_list(){
	 
	 $this->db->select('*,cultural_event.id,
			cultural_event.clogin_id,cultural_event.event_name,cultural_event.name2,cultural_event.name3,cultural_event.name4');
			$this->db->from('login');
			$this->db->join('cultural_event','cultural_event.clogin_id = login.id');
			//$this->db->where('cultural_event.event_name','Drawing');
			$this->db->order_by('cultural_event.event_name');
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