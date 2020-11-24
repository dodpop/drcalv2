<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_404 extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
      $data_['data'] = '';
      $content = $this->load->view('404', $data_, true);
      $data_['content'] = $content;
      $data_['activemenu'] =  "";
      $this->load->view('template', $data_);     
    }



}
