<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Aboutus extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('live_m','lm');
	}
	
	public function index()
	{
		
		$data_[''] = '';
		$content = $this->load->view('aboutus', $data_, true);
		$data_['content'] = $content;
		$data_['activemenu'] =  "aboutus";
		$this->load->view('template', $data_);   
	}
}
