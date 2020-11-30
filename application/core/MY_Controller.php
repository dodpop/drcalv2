<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_AdminLogin_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('is_loggedin_admin') && uri_string() != "admin/login"  && uri_string() != "admin/login/validate_credentials"  && uri_string() != "admin/logout" ){
            redirect(base_url('admin/login'));
        }
    }



}
