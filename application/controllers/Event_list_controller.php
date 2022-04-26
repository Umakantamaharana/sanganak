<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_list_controller extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->library("pdf");
        $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Register_model');
		$this->load->model('Admin_model');
    }
	
	
	public function c_coding_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->c_coding_list();
		//print_r($data);exit;
		
            $this->load->view('c_coding_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_c_coding($id){
		
		$this->db->where('id', $id);
        $this->db->delete('tech_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/c_coding_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}

    public function paper_presentation_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->paper_presentation_list();
		//print_r($data);exit;
		
            $this->load->view('paper_presentation_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }	

	public function delete_paper_presentation($id){
		
		$this->db->where('id', $id);
        $this->db->delete('tech_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/paper_presentation_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function quants_reasoining_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->quants_reasoining_list();
		//print_r($data);exit;
		
            $this->load->view('quants_reasoining_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_quants_reasoining($id){
		
		$this->db->where('id', $id);
        $this->db->delete('tech_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/quants_reasoining_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function technical_quiz_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->technical_quiz_list();
		//print_r($data);exit;
		
            $this->load->view('technical_quiz_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_technical_quiz($id){
		
		$this->db->where('id', $id);
        $this->db->delete('tech_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/technical_quiz_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function general_quiz_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->general_quiz_list();
		//print_r($data);exit;
		
            $this->load->view('general_quiz_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_general_quiz($id){
		
		$this->db->where('id', $id);
        $this->db->delete('tech_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/general_quiz_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function group_discussion_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->group_discussion_list();
		//print_r($data);exit;
		
            $this->load->view('group_discussion_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_group_discussion($id){
		
		$this->db->where('id', $id);
        $this->db->delete('tech_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/group_discussion_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
    
	
	
	// Game Event Lists
	
	
	public function counter_strike_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->counter_strike_list();
		//print_r($data);exit;
		
            $this->load->view('counter_strike_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_counter_strike($id){
		
		$this->db->where('id', $id);
        $this->db->delete('game_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/counter_strike_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function nfs_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->nfs_list();
		//print_r($data);exit;
		
            $this->load->view('nfs_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_nfs($id){
		
		$this->db->where('id', $id);
        $this->db->delete('game_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/nfs_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function ludo_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->ludo_list();
		//print_r($data);exit;
		
            $this->load->view('ludo_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_ludo($id){
		
		$this->db->where('id', $id);
        $this->db->delete('game_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/ludo_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	
	//Fun Event List
	
	
	public function dums_e_raaj_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->dums_e_raaj_list();
		//print_r($data);exit;
		
            $this->load->view('dums_e_raaj_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_dums_e_raaj($id){
		
		$this->db->where('id', $id);
        $this->db->delete('fun_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/dums_e_raaj_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function paper_dance_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->paper_dance_list();
		//print_r($data);exit;
		
            $this->load->view('paper_dance_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_paper_dance($id){
		
		$this->db->where('id', $id);
        $this->db->delete('fun_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/paper_dance_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function music_chair_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->music_chair_list();
		//print_r($data);exit;
		
            $this->load->view('music_chair_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_music_chair($id){
		
		$this->db->where('id', $id);
        $this->db->delete('fun_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/music_chair_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function drawing_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->drawing_list();
		//print_r($data);exit;
		
            $this->load->view('drawing_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_drawing($id){
		
		$this->db->where('id', $id);
        $this->db->delete('fun_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/drawing_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	
	
	
	//Cultural event list
	
	public function cultural_list(){
       $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           // $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
		$data['list']=$this->Admin_model->cultural_list();
		//print_r($data);exit;
		
            $this->load->view('cultural_list_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function delete_cultural($id){
		
		$this->db->where('id', $id);
        $this->db->delete('cultural_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'Event_list_controller/cultural_list';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	
	
	
	//GENERATE ALL EVENT PDF LIST
	
	
	public function c_coding_pdf(){
		    
			$data = array();
        
            $data['list']=$this->Admin_model->c_coding_list();
			//print_r( $data);exit;
			$obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('C-CODING PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('c_coding_list_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
	}
	
	public function paper_presentation_pdf(){
       $data = array();
       
		$data['list']=$this->Admin_model->paper_presentation_list();
		//print_r($data);exit;
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('PAPER PRESENTATION PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('paper_presentation_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
		ob_end_clean();
		
		
	}	
	
	public function quants_reasoining_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->quants_reasoining_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('QUANTS REASOINING PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('quants_reasoining_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
		ob_end_clean();
    }
	
	public function technical_quiz_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->technical_quiz_list();
		//print_r($data);exit;
		
		 $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('TECHNICAL QUIZ PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('technical_quiz_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
    }
	
	public function general_quiz_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->general_quiz_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('GENERAL QUIZ PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('general_quiz_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
    }
	
	public function group_discussion_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->group_discussion_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('GROUP DISCUSSION PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('group_discussion_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
		
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
				ob_end_clean();
		
    }
	
	public function counter_strike_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->counter_strike_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('COUNTER STRIKE PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('counter_strike_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
    }
	
	public function nfs_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->nfs_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('NFS PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('nfs_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
    }
	
	public function ludo_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->ludo_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('LUDO PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('ludo_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
    }
	
	public function dums_e_raaj_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->dums_e_raaj_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('DUMS-e-RAAJ PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('dums_e_raaj_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
    }
	
	public function paper_dance_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->paper_dance_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('PAPER DANCE PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('paper_dance_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
    }
	
	public function music_chair_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->music_chair_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('MUSIC CHAIR PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('music_chair_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
    }
	
	public function drawing_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->drawing_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('DRAWING PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('drawing_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
		
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
				ob_end_clean();
		
    }
	
	public function cultural_pdf(){
       $data = array();
        
		$data['list']=$this->Admin_model->cultural_list();
		
		
		    $obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('CULTURAL PARTICIPANTS LIST');
			$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH,PDF_HEADER_STRING);
			$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', 10));
			$obj_pdf->setHeaderTemplateAutoreset(true);
			$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
			$obj_pdf->SetDefaultMonospacedFont('helvetica');
			$obj_pdf->SetHeaderMargin(10,20,30);
			$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
			$obj_pdf->SetMargins(15, 30,16);
			$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			$obj_pdf->SetFont('courier', 'b', 10, '', 'false');
			$obj_pdf->setFontSubsetting(false);
			$obj_pdf->AddPage();
			$html = $this->load->view('cultural_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			ob_end_clean();
		
    }
        
	
	
}
?>