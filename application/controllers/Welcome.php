<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('');
		$this->load->helper('string');
		$this->load->helper('date');
		
		
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function about()
	{
		$this->load->view('about_view');
	}
	
	public function committee()
	{
		$this->load->view('committee_view');
	}
	
	public function contact()
	{
		$this->load->view('contact_view');
	}
}
?>