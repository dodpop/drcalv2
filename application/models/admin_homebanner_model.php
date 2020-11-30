<?php
class Admin_homebanner_model extends CI_Model {

  function __construct()
  {
      date_default_timezone_set('Asia/Bangkok');
      $this->load->database();
  }


    public function get_homebanner_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_home_header');
    		$this->db->where('HeadID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_homebanner()
    {
        $this->db->select('*');
        $this->db->from('tbl_home_header');
        $order_type = 'DESC';
        $this->db->order_by('HeadID', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }


    function store_homebanner($data)
    {
        $insert = $this->db->insert('tbl_home_header', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;

	}


    function update_homebanner($id, $data)
    {
    		$this->db->where('HeadID', $id);
    		$this->db->update('tbl_home_header', $data);
    		$report = array();
    		$report['error'] = $this->db->_error_number();
    		$report['message'] = $this->db->_error_message();
    		if($report !== 0){
    			return true;
    		}else{
    			return false;
    		}
	}


	function delete_homebanner($id){
		$this->db->where('HeadID', $id);
		$this->db->delete('tbl_home_header');
	}

}
?>
