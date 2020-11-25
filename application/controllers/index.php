<?php

class Index extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('live_m','lm');
		$this->load->model('Documentation_model');
		$this->load->library('session');
		// date_default_timezone_set("Asia/Bangkok");

		$language = ($this->session->userdata('user_lang') != "") ? $this->session->userdata('user_lang') : "thai";
		$this->session->set_userdata('user_lang', $language);

	}

	public function index()
	{

		if(get_cookie('member_is_loggedin')) {

		      $data['is_loggedin'] = get_cookie('member_is_loggedin');
		      $data['username'] = json_decode(get_cookie('member'))->Cus_Name;
		      if(get_cookie('display'))
		      $data['display'] = get_cookie('display');

		      $newdata = array(
		        'display'  => get_cookie('display'),
		        'member'   => json_decode(get_cookie('member')),
		        'member_is_loggedin'   => true
		      );

		      $this->session->set_userdata($newdata);
		      $_SESSION['is_loggedin']   = true;


		    }

		$data['pagename'] = "home";
		if (isset($this->session->userdata('member')->MemberID)){
			$MemberID = $this->session->userdata('member')->MemberID;
			$all_data = $this->Documentation_model->get_by_MemberID($MemberID,'');
			$data_['all_data'] = $all_data;
		}else{
				$data_['all_data'] = NULL;
		}

		$data_['DocumentType'] = $this->Documentation_model->get_doctype();
		$articles_highlight =  $this->lm->get_articles_highlight();
		$data_['articles_highlight'] = $articles_highlight;

		$services =  $this->lm->get_services();
		$data_['services'] = $services;

		$articles =  $this->lm->get_articles();
		$data_['articles'] = $articles;

		$promotion =  $this->lm->get_promotion();
		$data_['promotion'] = $promotion;

		$landing =  $this->lm->get_landing();
		$data_['landing'] = $landing;

		$banner =  $this->lm->get_banner();
		$data_['banner'] = $banner;

		$galllery =  $this->lm->get_galllery();
		$data_['galllery'] = $galllery;

		$articlesdetail = array();
		foreach ($articles as $key_data => $value_data){
				$id = $value_data['intProductNewID'];
				$articlesdetail[$id] = $this->lm->get_articles_by_id($id);
		}
		$data_['articlesdetail'] = $articlesdetail;

		$content = $this->load->view('index', $data_, true);
		$data_['activemenu'] =  "home";
    $data_['content'] = $content;
    $this->load->view('template', $data_);

		// $this->load->view('index',$data_);
	}

	public function MemberDocuments()
	{
		$DocumentType = $_POST['DocumentsType'];
		$MemberID = $this->session->userdata('member')->MemberID;
		$all_data = $this->Documentation_model->get_by_MemberID($MemberID,$DocumentType);
		foreach ($all_data as $key_data => $value_data)
		{
      echo "<tr><td>".$value_data->DocumentUpdated."</td>";
			echo "<td>".$value_data->DocumentName."</td>";
			echo "<td align=\"center\" width=\"137\"".$value_data->DocumentURL."</td>";
			echo "<td width=\"142\"".$value_data->DocumentNumber."</td>";
			echo "<td><a href=\"". $value_data->DocumentFile ."\" target=\"_blank\"><img src=\"". base_url() ."assets/img/Filetype-Docs-icon.png\" border=\"0\" /></a></td>>/tr>";
    }

	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
