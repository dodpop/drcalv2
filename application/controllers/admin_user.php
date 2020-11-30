<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_user extends MY_AdminLogin_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_users_model');
 
        if(!$this->session->userdata('is_logged_in')){
          //  redirect('admin/login');
        }
    }



	function index()
	{
		if($this->session->userdata('is_logged_in')){

								  redirect(base_url('admin/welcome'));

    }else{
      $data_['activemenu'] = "Login";
      $content = $this->load->view('admin/login', $data_, true);
      $data_['content'] = $content;
      $this->load->view('admin/template', $data_);
            // $this->load->view('admin/login');

    }
	}

  function welcome(){
     $data_['activemenu'] = "";
    $content = $this->load->view('admin/welcome', $data_, true);
    $data_['content'] = $content;
    $this->load->view('admin/template', $data_);
           // $this->load->view('admin/login');
  }

	function signin(){
    $data_['activemenu'] = "";
    $content = $this->load->view('admin/login', $data_, true);
    $data_['content'] = $content;
    $this->load->view('admin/template', $data_);
           // $this->load->view('admin/login');
  }

	function validate_credentials()
	{

		$this->load->model('admin_users_model');

		$user_name = $this->input->post('user_name');
		$password = $this->input->post('user_password');

		$is_valid = $this->admin_users_model->validate($user_name, $password);
    // print_r($is_valid);
    // exit();
		if($is_valid[0]['User'])
		{
			$data = array(
				'User' => $is_valid[0]['User'],
				'is_logged_in' => true,
        'is_loggedin_admin' => true
			);
			$this->session->set_userdata($data);
      redirect(base_url('admin/welcome'));


		}
		else // incorrect username or password
		{
			$this->session->set_flashdata('error_msg', 'Error, Try again.');

      redirect(base_url('admin/login'));
			// $this->load->view('admin/login', $data);
		}
	}



	function logout()
	{
    $data = array(
      'User' => '',
      'bitAdmin' => '',
      'Email' => '',
      'is_logged_in' => false,
      'is_loggedin_admin' => false
    );
    $this->session->set_userdata($data);
  	redirect(base_url('admin/login'));
	}



  function userslist()
    {



      $all_data = $this->user_model->get_all();

      $data_['segment4'] = $this->uri->segment(4);
      // print_r($all_data);
     $data_['all_data'] = $all_data;
     $content = $this->load->view('admin/users/index', $data_, true);
     $data_['content'] = $content;
     $data_['activemenu'] = "users";
     $this->load->view('admin/template', $data_);


    }


	function add()
	{

    //if save button was clicked, get the data sent via post
    if ($this->input->server('REQUEST_METHOD') === 'POST')
    {

      $last_id = $this->input->post('UserID');
      $data_to_store = array(
          'User' => $this->input->post('User'),
          'Pws' => $this->input->post('Pws'),
          'bitAdmin' => $this->input->post('bitAdmin'),
          'Email' => $this->input->post('Email'),
          'Active' => $this->input->post('Active')
      );

      if ($last_id > 0){

          $return = $this->user_model->update_admin($last_id, $data_to_store);
          if($return){
              echo 'TRUE';
          }else{
              echo 'FALSE';
          }
      }else{

        $last_id = $this->user_model->store_admin($data_to_store);

        if($last_id>0){
            echo 'TRUE';
        }else{
            echo 'FALSE';
        }
      }

            if($last_id){
                $data['flash_message'] = TRUE;

            }else{
                $data['flash_message'] = FALSE;
            }

    }else{

      $data_['all_data'] = '';
      $content = $this->load->view('admin/users/add', $data_, true);
      $data_['content'] = $content;
      $data_['activemenu'] = "users";
      $this->load->view('admin/template', $data_);

    }
	}



   function update()
    {
        //product id
        $id = $this->uri->segment(4);
        $all_data = $this->user_model->get_admin_by_id($id);
        $data_['all_data'] = $all_data;
        $content = $this->load->view('admin/users/add', $data_, true);
        $data_['content'] = $content;
        $data_['activemenu'] = "users";
        $this->load->view('admin/template', $data_);
    }//update


    public function delete()
    {
        //product id
        $id = $this->uri->segment(4);
        $this->user_model->delete_user($id);
        redirect(base_url('admin/users'));
    }//edit




}
