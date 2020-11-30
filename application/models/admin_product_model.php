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
    		$this->db->from('tbl_productname');
    		$this->db->where('ProductID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_product_items_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_productname');
    		$this->db->where('ProductID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_product()
    {
        $this->db->select('*');
        $this->db->from('tbl_productname');
        $order_type = 'DESC';
        $this->db->order_by('ProductID', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }

    public function get_productproduct_by_productproductid($id)
    {
      $this->db->select('*');
      $this->db->from('tbl_productname');
      $this->db->where('ProductID', $id);
      $query = $this->db->get();
      //echo $this->db->last_query();
      return $query->result_array();
    }

    function store_product($data)
    {
        $insert = $this->db->insert('tbl_productname', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
	 }

   function store_productproduct($data)
   {
       $insert = $this->db->insert('tbl_productname', $data);
       $insert_id = $this->db->insert_id();

       return  $insert_id;
  }

    function update_product($id, $data)
    {
    		$this->db->where('ProductID', $id);
    		$this->db->update('tbl_productname', $data);
    		$report = array();
    		$report['error'] = $this->db->_error_number();
    		$report['message'] = $this->db->_error_message();
    		if($report !== 0){
    			return true;
    		}else{
    			return false;
    		}
	}

  function update_productproduct($id, $data)
  {
      $this->db->where('ProductID', $id);
      $this->db->update('tbl_productname', $data);
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
		$this->db->where('ProductID', $id);
		$this->db->delete('tbl_productname');
	}

  function delete_productproduct($id){
		$this->db->where('ProductID', $id);
		$this->db->delete('tbl_productname');
	}


}
?>
