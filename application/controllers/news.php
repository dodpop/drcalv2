<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('live_m','lm');
	}
	
	public function index()
	{
		$news =  $this->lm->get_news();
		$data_['news'] = $news;
		$content = $this->load->view('news', $data_, true);
		$data_['content'] = $content;
		$data_['activemenu'] =  "news";
		$this->load->view('template', $data_);   
	}

	public function detail()
	{
		$news_id = $this->uri->segment(3, TRUE);
		$news = $this->lm->get_news_by_id($news_id);
		$data_['news'] = $news;
		$content = $this->load->view('news_detail', $data_, true);
		$data_['content'] = $content;
		$data_['activemenu'] =  "news";
		$this->load->view('template', $data_);   
	}
	
}
