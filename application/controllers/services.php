<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Services extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('live_m','lm');
	}
	
	public function index()
	{
		$services =  $this->lm->get_services();
		$data_['services'] = $services;
		$content = $this->load->view('services', $data_, true);
		$data_['content'] = $content;
		$data_['activemenu'] =  "services";
		$this->load->view('template', $data_);   
	}
}
