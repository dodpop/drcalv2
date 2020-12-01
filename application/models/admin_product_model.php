<?php
class Admin_product_model extends CI_Model {

    function __construct()
    {
        date_default_timezone_set('Asia/Bangkok');
        $this->load->database();
    }

    public function get_product_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_service');
    		$this->db->where('service_id', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_product_items_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_service');
    		$this->db->where('service_id', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_service');
        $order_type = 'DESC';
        $this->db->order_by('service_id', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }

    public function get_productproduct_by_productservice_id($id)
    {
      $this->db->select('*');
      $this->db->from('tbl_service');
      $this->db->where('service_id', $id);
      $query = $this->db->get();
      //echo $this->db->last_query();
      return $query->result_array();
    }

    function store_product($data)
    {
        $insert = $this->db->insert('tbl_service', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
	 }

   function store_productproduct($data)
   {
       $insert = $this->db->insert('tbl_service', $data);
       $insert_id = $this->db->insert_id();

       return  $insert_id;
  }

    function update_product($id, $data)
    {
    		$this->db->where('service_id', $id);
    		$this->db->update('tbl_service', $data);
    		$report = array();
    		$report=$this->db->error();    
	        if($report['code']==0)
	        {           
	       		//all good
	            return true;
	        }else
	        {        
	            echo      $report['message'];
	            return false;
	        }
	}

  function update_productproduct($id, $data)
  {
      $this->db->where('service_id', $id);
      $this->db->update('tbl_service', $data);
      $report = array();
      $report['error'] = $this->db->_error_number();
      $report['message'] = $this->db->_error_message();
      if($report !== 0){
        return true;
      }else{
        return false;
      }
}

	function delete_product($id){
		$this->db->where('service_id', $id);
		$this->db->delete('tbl_service');
	}

  function delete_productproduct($id){
		$this->db->where('service_id', $id);
		$this->db->delete('tbl_service');
	}


}
?>
