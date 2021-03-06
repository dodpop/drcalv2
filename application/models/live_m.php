<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Live_m extends CI_Model
{
  public function __construct(){
    parent::__construct();
    date_default_timezone_set('Asia/Bangkok');
  }

  public function get_client(){
      $this->db->select('*');
      $this->db->from('tbl_client');
      // $this->db->where('intActive', '1');
      $this->db->order_by('client_id','DESC');
      $data = $this->db->get()->result_array();
      //echo $this->db->last_query();
      return $data;
  }
  public function get_services(){
    $this->db->select('*');
    $this->db->from('tbl_service');
     $this->db->where('Effective', '1');
      $this->db->order_by('service_name','ASC');
    $data = $this->db->get()->result_array();
    //echo $this->db->last_query();
    return $data;
  }
  public function get_news(){
    $this->db->select('*');
    $this->db->from('tbl_news');
     $this->db->where('Active', '1');
      $this->db->order_by('ID','DESC');
    $data = $this->db->get()->result_array();
    //echo $this->db->last_query();
    return $data;
  } 

  public function get_news_by_id($newsid){
    $this->db->select('*');
    $this->db->from('tbl_news');
    $this->db->where('ID', $newsid);
     $this->db->where('Active', '1');
      // $this->db->order_by('ID','ASC');
    $data = $this->db->get()->result_array();
    //echo $this->db->last_query();
    return $data;
  } 


  public function insert_contactus($arr=array()){
    $this->db->insert('tbl_contactus',$arr);
  }
 







}
