<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('live_m','lm');
	}

	public function index()
	{


				$data_['test'] =  "";
				$content = $this->load->view('contactus', $data_, true);
				$data_['activemenu'] =  "contact";
				$data_['content'] = $content;
				$this->load->view('template', $data_);

	}

	public function savecontact(){
        $this->load->library('form_validation');
        $name = (isset($_POST['your-name']))?$_POST['your-name']:'';
        $org = (isset($_POST['your-org']))?$_POST['your-org']:'';
        $email = (isset($_POST['your-email']))?$_POST['your-email']:'';
        $phone = (isset($_POST['your-phone']))?$_POST['your-phone']:'';
        $subject = (isset($_POST['your-subject']))?$_POST['your-subject']:'';
        $message= (isset($_POST['your-message']))?$_POST['your-message']:'';

        $data['name'] = $name;
        $data['org'] = $org;
        $data['email'] = $email;
        $data['phone'] = $phone;
        $data['subject'] = $subject;
        $data['msg'] = $msg;

        $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));

        $userIp=$this->input->ip_address();

        $secret = $this->config->item('google_secret');

        $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;

        $ch = curl_init();
				if ($ch !== false)
    		{
	        curl_setopt($ch, CURLOPT_URL, $url);
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	        $output = curl_exec($ch);
					if ($output === false)
	        {
	            // print_r('Curl error: ' . curl_error($ch));
	            // die;
	        }
				}

        curl_close($ch);

        $status= json_decode($output, true);
				// print_r($status);
				// exit();
        if ($status['success']) {

                  // print_r('Google Recaptcha Successful');
                  $this->form_validation->set_rules('your-email', 'Email', 'trim|required');
                  if( $this->form_validation->run() == false){
                    $this->session->set_flashdata('flashError', 'Wrong Email!!');
                    $this->session->set_flashdata('name', $name);
                    $this->session->set_flashdata('org', $org);
                    $this->session->set_flashdata('email', $email);
                    $this->session->set_flashdata('phone', $phone);
                    $this->session->set_flashdata('subject', $subject);
                    $this->session->set_flashdata('message', $message);
                    echo '<script>alert("Wrong Email");window.location = "'.base_url()."contactus".'";</script>';
                  }else{
                      // send email
                      $this->load->library('email');
                      $config['mailtype'] = 'html';
                      $this->email->initialize($config);
                      $this->email->from('noreply@doctorcalibration.com', 'Doctor Calibration Website');
                      $emailadmin = "apimsarnwat@gmail.com";

                      $this->email->to($emailadmin);
                      //$this->email->cc('another@another-example.com');
                      $this->email->bcc('apimsarnwat@gmail.com');

                      $this->email->subject('Contact us from Doctor Calibration Website.');
                      $contentemail = 'Contact us from Doctor Calibration Website.<br>';
                      $contentemail = $contentemail .'<br><br>From :'.$name;
                      $contentemail = $contentemail .'<br>Organization :'.$org;
                      $contentemail = $contentemail .'<br>Email :'.$email;
                      $contentemail = $contentemail .'<br>Phone :'.$phone;
                      $contentemail = $contentemail .'<br>Subject :'.$subject;
                      $contentemail = $contentemail .'<br>Message :'.$message;
                      $contentemail = $contentemail .'<br><br>Doctor Calibration Website';

                      $this->email->message($contentemail);

                        if ($this->email->send()){
                          $this->session->set_flashdata('flashError', 'Thank you for reaching out to me.');
                          $this->session->set_flashdata('name', '');
                          $this->session->set_flashdata('org', '');
                          $this->session->set_flashdata('email', '');
                          $this->session->set_flashdata('phone', '');
                          $this->session->set_flashdata('subject', '');
                          $this->session->set_flashdata('message', '');
                            echo '<script>alert("Thank you for reaching out to me.");window.location = "'.base_url()."contactus?send=true".'";</script>';

                        }else{
                            echo $this->email->print_debugger();
                        }



                  }



        }else{
            $this->session->set_flashdata('flashError', 'Google Recaptcha Unsuccessful!!');
            $this->session->set_flashdata('name', $name);
            $this->session->set_flashdata('org', $org);
            $this->session->set_flashdata('email', $email);
            $this->session->set_flashdata('phone', $phone);
            $this->session->set_flashdata('subject', $subject);
            $this->session->set_flashdata('message', $message);
            redirect(base_url('contactus'));
        }









	}




}
