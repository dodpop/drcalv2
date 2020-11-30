<?php
class Admin_promotion_model extends CI_Model {

    function __construct()
    {
        date_default_timezone_set('Asia/Bangkok');
        $this->load->database();
    }

    public function get_promotion_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_promotionname');
    		$this->db->where('PromotionID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_promotion_items_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_productpromotion');
    		$this->db->where('PromotionID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_promotion()
    {
        $this->db->select('*');
        $this->db->from('tbl_promotionname');
        $order_type = 'DESC';
        $this->db->order_by('PromotionID', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }

    public function get_productpromotion_by_productpromotionid($id)
    {
      $this->db->select('*');
      $this->db->from('tbl_productpromotion');
      $this->db->where('ProductID', $id);
      $query = $this->db->get();
      //echo $this->db->last_query();
      return $query->result_array();
    }

    function store_promotion($data)
    {
        $insert = $this->db->insert('tbl_promotionname', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
	 }

   function store_productpromotion($data)
   {
       $insert = $this->db->insert('tbl_productpromotion', $data);
       $insert_id = $this->db->insert_id();
	   
       return  $insert_id;
  }

    function update_promotion($id, $data)
    {
    		$this->db->where('PromotionID', $id);
    		$this->db->update('tbl_promotionname', $data);
    		$report = array();
    		$report['error'] = $this->db->_error_number();
    		$report['message'] = $this->db->_error_message();
    		if($report !== 0){
    			return true;
    		}else{
    			return false;
    		}
	}

  function update_productpromotion($id, $data)
  {
      $this->db->where('ProductID', $id);
      $this->db->update('tbl_productpromotion', $data);
      $report = array();
      $report['error'] = $this->db->_error_number();
      $report['message'] = $this->db->_error_message();
      if($report !== 0){
        return true;
      }else{
        return false;
      }
}

	function delete_promotion($id){
		$this->db->where('PromotionID', $id);
		$this->db->delete('tbl_promotionname');
	}

  function delete_productpromotion($id){
		$this->db->where('ProductID', $id);
		$this->db->delete('tbl_productpromotion');
	}


}
?>
