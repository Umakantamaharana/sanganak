<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Player_list_controller extends CI_Controller {

	function __construct() {
        parent::__construct();
		$this->load->library("Pdf");
        $this->load->library('form_validation');
        $this->load->model('Player_list_model');
		
    }
	
	public function pubg_player_list(){
       // $data = array();
        
            $data['user'] = $this->Player_list_model->pubg_player_list();
			//print_r( $data);exit;
			$obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('');
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
			$html = $this->load->view('pubg_player_list_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			if(ob_get_length() > 0) {
			ob_clean();
			}
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			
			//print_r( $data);exit;
            //load the view

       
    }
	
	public function cricket_player_list(){
       // $data = array();
        
            $data['user'] = $this->Player_list_model->cricket_player_list();
			//print_r( $data);exit;
			$obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('');
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
			$html = $this->load->view('cricket_player_list_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			if(ob_get_length() > 0) {
			ob_clean();
			}
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			
			//print_r( $data);exit;
            //load the view

       
    }
	
	
	public function ludo_player_list(){
       // $data = array();
        
            $data['user'] = $this->Player_list_model->ludo_player_list();
			//print_r( $data);exit;
			$obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('');
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
			$html = $this->load->view('ludo_player_list_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			if(ob_get_length() > 0) {
			ob_clean();
			}
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			
			//print_r( $data);exit;
            //load the view

       
    }
	
	
	public function blind_date_player_list(){
       // $data = array();
        
            $data['user'] = $this->Player_list_model->blind_date_player_list();
			//print_r( $data);exit;
			$obj_pdf = new TCPDF('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
			$obj_pdf->SetCreator(PDF_CREATOR);
			$obj_pdf->SetTitle('');
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
			$html = $this->load->view('blind_date_player_list_pdf',$data,true);
			$obj_pdf->writeHTML($html, true, true, true, true, '');
			$pdf_out=uniqid('SANGANAK',true);
			if(ob_get_length() > 0) {
			ob_clean();
			}
			$obj_pdf->Output(site_url().'pdf/'.$pdf_out.'.pdf', 'I'); 
			
			//print_r( $data);exit;
            //load the view

       
    }
	
}
?>