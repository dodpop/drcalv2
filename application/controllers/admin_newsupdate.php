<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_newsupdate extends MY_AdminLogin_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_newsupdate_model');
        $this->load->model('admin_event_model');
    }

    function index()
    {
          $all_data = $this->admin_newsupdate_model->get_newsupdate();
          $data_['segment4'] = $this->uri->segment(4);
          // print_r($all_data);
         $data_['all_data'] = $all_data;
         $content = $this->load->view('admin/newsupdate/index', $data_, true);
         $data_['content'] = $content;
         $data_['activemenu'] = "newsupdate";
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
        // $this->ckeditor->config['height'] = '300px';
        //
        // //Add Ckfinder to Ckeditor
        // $this->ckfinder->SetupCKEditor($this->ckeditor,'/admin_assets/ckfinder/');


        //if save button was clicked, get the data sent via post
        if ($this->input->server('REQUEST_METHOD') === 'POST')
        {


          $last_id = $this->input->post('ID');
          $data_to_store = array(
              'Topic' => $this->input->post('Topic'),
              'Duration' => $this->input->post('Duration'),
              'Location' => $this->input->post('Location'),
              'Content' => $this->input->post('Content'),
              'Active' => $this->input->post('Active')              
          );
          if ($last_id > 0){
            $this->admin_newsupdate_model->update_newsupdate($last_id, $data_to_store);
          }else{
            $data_to_store = array_merge($data_to_store, array("dateupdate"=>date('Y-m-d H:i:s')));
            $last_id = $this->admin_newsupdate_model->store_newsupdate($data_to_store);
          }

                if($last_id){
                 
                    $count = count($_FILES['files']['name']);
                    if($count>0){
                         
                        $upload_dir = $_SERVER['DOCUMENT_ROOT'].'/public/news/'.$last_id;
                                if (!is_dir($upload_dir)) {
                                    $old = umask(0);
                                    mkdir($upload_dir, 0777, true);
                                    umask($old);
                                }
                        $upload_dir = $upload_dir.'/';
          
                         for($i=0;$i<$count;$i++){
                           if(!empty($_FILES['files']['name'][$i])){
                             $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                             $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                             $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                             $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                             $_FILES['file']['size'] = $_FILES['files']['size'][$i];
          
                             $config['upload_path'] = './public/news/'.$last_id;
                             $config['allowed_types'] = 'jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF';
                             $config['max_size']             = 0;
                             $config['max_width']            = 0;
                             $config['max_height']           = 0;
                             $new_name = date("Ymd_His_u");
                             $config['file_name'] = 'img_'.$last_id.'_'.$new_name;
                             $this->load->library('upload',$config);
                             $this->upload->initialize($config);
                             if($this->upload->do_upload('file')){
                                   // $fileData = $this->upload->data();
                                   // $data_to_store = array(
                                   //     'files' => "/userfiles/event/".$fileData['file_name'],
                                   //     'intID' => $last_id
                                   // );
                                //    echo $fileData['file_name'];
                                //    exit();
                                   // $this->Admin_event_model->store_event_images($data_to_store);
                             }else{
                               // Files Upload Not Success!!
                                    // $errors = $this->upload->display_errors();
                                    // echo $errors. ' = .'.$upload_dir;
                             }
                           }else{
                             // Files Upload Not Success!!
                                //   $errors = $this->upload->display_errors();
                                //  echo $errors. ' = .'.$upload_dir;
                           }
                         }
          
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
            $data_['test'] = '';
            $content = $this->load->view('admin/newsupdate/add', $data_, true);
            $data_['content'] = $content;
            $data_['activemenu'] = "newsupdate";
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
      // $this->ckeditor->config['height'] = '300px';
      //
      // //Add Ckfinder to Ckeditor
      // $this->ckfinder->SetupCKEditor($this->ckeditor,'/admin_assets/ckfinder/');


      //load the view
      $id = $this->uri->segment(4);
      $all_data = $this->admin_newsupdate_model->get_newsupdate_by_id($id);
      $data_['all_data'] = $all_data;
      
      $content = $this->load->view('admin/newsupdate/add', $data_, true);
      $data_['content'] = $content;
      $data_['activemenu'] = "newsupdate";
      $this->load->view('admin/template', $data_);


    }//update

    function deleteimage(){
        $path_to_file =   $this->input->get('path', TRUE);
        $urlback =   $this->input->get('url', TRUE);

        if(unlink($path_to_file)) {
             echo 'deleted successfully';
        }
        else {
             echo 'errors occured';
        }
		redirect($urlback);
    }

    function delete()
    {
        //product id
        $id = $this->uri->segment(4);
        $this->admin_newsupdate_model->delete_newsupdate($id);
        redirect(base_url('admin/newsupdate'));
    }//edit


    function deletenewsupdateimage(){
       $id = $this->uri->segment(4);
       $event_data = $this->admin_event_model->get_event_by_intImageID($id);
       $this->admin_event_model->delete_event_image($id);
       redirect(base_url('admin/newsupdate/update/'.$event_data[0]['intID'].'#galevent'));
   }

   function delete_product_image()
    {
        $path = $this->input->get('path',TRUE);
        $path_to_file =   urldecode($path);
        $urlback =   $this->input->get('url',TRUE);

        if(unlink($path_to_file)) {
             echo 'deleted successfully';
        }else {
             echo 'errors occured';
        }
        redirect($urlback);
    }


}
