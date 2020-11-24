<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data_['data'] = '';
		$content = $this->load->view('index', $data_, true);
		$data_['content'] = $content;
		$data_['activemenu'] =  "";
		$this->load->view('template', $data_);   
	}
}
