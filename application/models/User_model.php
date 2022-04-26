<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model{
	

public function getvalue($id){
	 
	 $this->db->select('login.name,login.email,login.college_name,login.department,login.status');
			$this->db->from('login');
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
 
//technical start
 
public function insert($userevent) {
	//print_r( '$userevent');exit;
//$userevent['elogin_id']=$login_id;	
$this->db->insert('tech_event',$userevent);
return $insert_id =$this->db->insert_id();
}
	

function event_check($event_name,$id)
{
	//echo $id;exit;
    	
	
	$query = $this->db->query("SELECT * FROM tech_event where event_name= '$event_name' and elogin_id='$id' ");
	
	if($query->num_rows() > 0)
	return false;
	else
	return true;
}

//game start

public function game_insert($userevent) {
	//print_r( '$userevent');exit;
//$userevent['elogin_id']=$login_id;	
$this->db->insert('game_event',$userevent);
return $insert_id =$this->db->insert_id();
}
	

function game_event_check($event_name,$id)
{
	//echo $id;exit;
    	
	
	$query = $this->db->query("SELECT * FROM game_event where event_name= '$event_name' and glogin_id='$id' ");
	
	if($query->num_rows() > 0)
	return false;
	else
	return true;
}


//fun start

public function fun_insert($userevent) {
	//print_r( '$userevent');exit;
//$userevent['elogin_id']=$login_id;	
$this->db->insert('fun_event',$userevent);
return $insert_id =$this->db->insert_id();
}
	

function fun_event_check($event_name,$id)
{
	//echo $id;exit;
    	
	
	$query = $this->db->query("SELECT * FROM fun_event where event_name= '$event_name' and flogin_id='$id' ");
	
	if($query->num_rows() > 0)
	return false;
	else
	return true;
}


//cultural start


public function cultural_insert($userevent) {
	//print_r( '$userevent');exit;
//$userevent['elogin_id']=$login_id;	
$this->db->insert('cultural_event',$userevent);
return $insert_id =$this->db->insert_id();
}
	

function cultural_event_check($event_name,$id)
{
	//echo $id;exit;
    	
	
	$query = $this->db->query("SELECT * FROM cultural_event where event_name= '$event_name' and clogin_id='$id' ");
	
	if($query->num_rows() > 0)
	return false;
	else
	return true;
}

public function get_cultural_event_name($id){
	// echo $id;exit;
			//$this->db->distinct();
	        $this->db->select('*');
			$this->db->from('cultural_event');
			$this->db->where('cultural_event.clogin_id',$id);
			//$this->db->where('id',$id);
			$records = $this->db->get();
			//echo $records;exit;
			
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function get_fun_event_name($id){
	// echo $id;exit;
			
	        $this->db->select('*');
			$this->db->from('fun_event');
			$this->db->where('fun_event.flogin_id',$id);
		
			//$this->db->where('id',$id);
			$records = $this->db->get();
			//echo $records;exit;
			
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function get_game_event_name($id){
	// echo $id;exit;
			
	        $this->db->select('*');
			$this->db->from('game_event');
			$this->db->where('game_event.glogin_id',$id);
			
			//$this->db->where('id',$id);
			$records = $this->db->get();
			//echo $records;exit;
			
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }
   
   public function get_technical_event_name($id){
	// echo $id;exit;
			
	        $this->db->select('*');
			$this->db->from('tech_event');
			$this->db->where('tech_event.elogin_id',$id);

			//$this->db->where('id',$id);
			$records = $this->db->get();
			//echo $records;exit;
			
			if($this->db->affected_rows() > 0)
			{
				return $records->result_array();
			}
			else{
				return 0;
			}
	   
   }


}