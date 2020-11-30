<?php

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->model('live_m','lm');
		$this->load->model('User_model');

		// date_default_timezone_set("Asia/Bangkok");
	}

	public function index()
	{

		$data_['activemenu'] = "home";

	 			 if($this->session->userdata('is_loggedin') == '' || $this->session->userdata('is_loggedin') == false){
					 redirect(base_url().'admin/login', 'refresh');
				 }else{
					 redirect(base_url().'customer/all', 'refresh');
				 }
		// $data['banners'] = $this->lm->get_banners(0);
		// $data['youtubelink'] = $this->lm->get_youtube();
		// $data['blogs'] = $this->lm->get_blog_limit(3);
		$content = $this->load->view('admin/index', '', true);
    $data_['content'] = $content;
    $this->load->view('admin/template', $data_);

	}

	public function login()
	{

		$data_['activemenu'] = "login";
		$content = $this->load->view('admin/login', '', true);
    $data_['content'] = $content;
    $this->load->view('admin/template', $data_);
		// $data['banners'] = $this->lm->get_banners(0);
		// $data['youtubelink'] = $this->lm->get_youtube();
		// $data['blogs'] = $this->lm->get_blog_limit(3);
	}

	function login_user(){
		$data_['activemenu'] =  "user";
		$user_login=array(

		'Username'=>$this->input->post('user_email'),
		'user_password'=>$this->input->post('user_password')

			);

				$data=$this->User_model->login_user($user_login['Username'],$user_login['user_password']);

				if($data && !empty($user_login['Username']) && !empty($user_login['user_password']))
				{
					$this->session->set_userdata('AdminID',$data['AdminID']);
					$this->session->set_userdata('Username',$data['Username']);
					$this->session->set_userdata('Password',$data['Password']);
					$this->session->set_userdata('bitAdmin',$data['bitAdmin']);
					$this->session->set_userdata('Email',$data['Email']);
					$this->session->set_userdata('is_loggedin',TRUE);


					$keeploggedin = $_POST['keepmeloggedin_'];

					if ($keeploggedin=='1'){
										$cookie= array(
											'name'   => 'member',
											'value'  => json_encode($data),
											'expire' => '315360000',
											'secure' => false
										);
										set_cookie($cookie);
										$cookie= array(
											'name'   => 'is_loggedin',
											'value'  => true,
											'expire' => '315360000'
										);
										set_cookie($cookie);
						}else{
										$cookie= array(
											'name'   => 'member',
											'value'  => json_encode($data),
											'expire' => '0'
										);
										set_cookie($cookie);
										$cookie= array(
											'name'   => 'is_loggedin',
											'value'  => '',
											'expire' => '0'
										);
										set_cookie($cookie);
						}



					// redirect(base_url(), 'refresh');
					if ($this->session->userdata('referrer')){
						redirect($this->session->userdata('referrer'));
					}else{
						redirect(base_url()."customer/all");
					}



				}
				else{
					$this->session->set_flashdata('error_msg', 'Error, Try again.');
					// $this->load->view("login.php");
					$content = $this->load->view('admin/login', '', true);
					$data_['content'] = $content;
					$this->load->view('admin/template', $data_);
				}


	}

	function user_profile(){
		$data_['admindata'] = $this->User_model->get_admin_by_id($this->session->userdata('AdminID'));
		// $data_['customer_address'] = $this->Customer_model->getcustomeraddress($id);
		$content = $this->load->view('admin/user_profile', $data_, true);

		$data_['content'] = $content;
		$data_['activemenu'] =  "";
		$this->load->view('admin/template', $data_);
	}


	public function data_save(){

		 $data_to_store = array(
			 'Username' => $this->input->post('Username'),
				'Password' => $this->input->post('Password'),
				'Email' => $this->input->post('Email')
		 );

			if (!isset($_POST['AdminID']) || $_POST['AdminID'] < 1 ){
						 if($this->User_model->store_admin($data_to_store) == TRUE){
								 $this->session->set_flashdata('flash_message', 'updated');
								 echo "TRUE";
						 }else{
								 $this->session->set_flashdata('flash_message', 'not_updated');
								 echo "FALSE";
						 }
			}else{
						$id = $_POST['AdminID'];
						if($this->User_model->update_admin($id, $data_to_store) == TRUE){
								$this->session->set_flashdata('flash_message', 'updated');
								echo "TRUE";
						}else{
								$this->session->set_flashdata('flash_message', 'not_updated');
								echo "FALSE";
						}
			}
			 // redirect('customer/all?q='.$this->input->post('Email').'');
			 // redirect('customer/all');


	}


	public function logout()
	{
		$this->load->library('session');
		$this->session->sess_destroy();
		$newdata = array(
				'is_loggedin'   => false
		);
		$this->session->set_userdata($newdata);
		$_SESSION['is_loggedin']  = false;
		$_SESSION['member']  = '';

		$cookie = array(
		'name' => 'is_loggedin',
		'value' => '',
		'expire' => '0',
		);
		delete_cookie($cookie);

		redirect(base_url(), 'refresh');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
