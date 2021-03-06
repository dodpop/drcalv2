<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('live_m','lm');
	}
	
	public function index()
	{
		$client =  $this->lm->get_client();
		$data_['client'] = $client;
		$services =  $this->lm->get_services();
		$data_['services'] = $services;
		$content = $this->load->view('index', $data_, true);
		$data_['content'] = $content;
		$data_['activemenu'] =  "home";
		$this->load->view('template', $data_);   
	}
}
