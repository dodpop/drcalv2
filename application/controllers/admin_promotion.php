<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_promotion extends MY_AdminLogin_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_promotion_model');
        // $this->load->model('admin_product_model');

    }

    function index()
    {
          $all_data = $this->admin_promotion_model->get_promotion();
          $data_['segment4'] = $this->uri->segment(4);
          // print_r($all_data);
         $data_['all_data'] = $all_data;
         $content = $this->load->view('admin/promotion/index', $data_, true);
         $data_['content'] = $content;
         $data_['activemenu'] = "promotion";
         $this->load->view('admin/template', $data_);
    }

    function add()
    {

        // $this->load->library('ckeditor');
        // $this->load->library('ckfinder');
        //
        // $this->ckeditor->basePath = base_url().'admin_assets/ckeditor/';
        //
        // $this->ckeditor->config['language'] = 'en';
        // $this->ckeditor->config['width'] = '100%';
        // $this->ckeditor->config['height'] = '100px';
        //
        // //Add Ckfinder to Ckeditor
        // $this->ckfinder->SetupCKEditor($this->ckeditor,'/admin_assets/ckfinder/');


        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {


          $data_to_store = array(
              'PromotionName' => $this->input->post('PromotionName'),
              'PromotionCode' => $this->input->post('PromotionCode'),
              'Description' => $this->input->post('Description'),
              'Effective' => $this->input->post('intbitEffective')
          );
          $last_id = $this->input->post('PromotionID');

          if ($last_id > 0){
            $this->admin_promotion_model->update_promotion($last_id, $data_to_store);
          }else{
            $last_id = $this->admin_promotion_model->store_promotion($data_to_store);
          }

                if($last_id){
                    $data['flash_message'] = TRUE;

                    $config['upload_path']          = './user_files/promotion/';
                    $config['allowed_types']        = 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';
                    $config['max_size']             = 0;
                    $config['max_width']            = 0;
                    $config['max_height']           = 0;
                    $new_name = date("Ymd_His_u");
                    $config['file_name'] = 'promotion_img_'.$new_name;
                    $this->load->library("upload",$config);
                   if ($this->upload->do_upload('strPic1')) {
                            // Files Upload Success
                            // echo "OK Good";
                            $thisfile = $this->upload->data('strPic1');
                            $data_to_store = array(
                                'Picture' => "/user_files/promotion/".$thisfile['file_name']
                            );
                            $this->admin_promotion_model->update_promotion($last_id, $data_to_store);
                    } else {
                            // Files Upload Not Success!!
                            $errors = $this->upload->display_errors();
                            // echo $errors;
                            // exit();
                            $strFile = "";
                    }



                }else{
                    $data['flash_message'] = FALSE;
                }

                if($last_id>0){
                    echo 'TRUE';
                }else{
                    echo 'FALSE';
                }

        }else{
            //load the view
            $data_['segment4'] = '';
            $content = $this->load->view('admin/promotion/add', $data_, true);
            $data_['content'] = $content;
            $data_['activemenu'] = "promotion";
            $this->load->view('admin/template', $data_);
        }
    }


    function update()
    {
        // $this->load->library('ckeditor');
        // $this->load->library('ckfinder');
        //
        // $this->ckeditor->basePath = base_url().'admin_assets/ckeditor/';
        //
        // $this->ckeditor->config['language'] = 'en';
        // $this->ckeditor->config['width'] = '100%';
        // $this->ckeditor->config['height'] = '100px';
        //
        // //Add Ckfinder to Ckeditor
        // $this->ckfinder->SetupCKEditor($this->ckeditor,'/admin_assets/ckfinder/');

        //load the view
        $id = $this->uri->segment(4);
        $all_data = $this->admin_promotion_model->get_promotion_by_id($id);
        $data_['all_data'] = $all_data;

		 //print_r($all_items);
        $content = $this->load->view('admin/promotion/add', $data_, true);
        $data_['content'] = $content;
        $data_['activemenu'] = "promotion";
        $this->load->view('admin/template', $data_);
    }



    function delete()
    {
        //product id
        $id = $this->uri->segment(4);
        $this->admin_promotion_model->delete_promotion($id);
        redirect(base_url('admin/promotion'));
    }


}
