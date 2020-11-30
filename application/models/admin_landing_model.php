<?php
class Admin_landing_model extends CI_Model {

  function __construct()
  {
      date_default_timezone_set('Asia/Bangkok');
      $this->load->database();
  }


    public function get_landing_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_landing');
    		$this->db->where('id', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_landing()
    {
        $this->db->select('*');
        $this->db->from('tbl_landing');
        $order_type = 'DESC';
        $this->db->order_by('id', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }


    function store_landing($data)
    {
        $insert = $this->db->insert('tbl_landing', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;

	}


    function update_landing($id, $data)
    {
    		$this->db->where('id', $id);
    		$this->db->update('tbl_landing', $data);
    		$report = array();
    		$report['error'] = $this->db->_error_number();
    		$report['message'] = $this->db->_error_message();
    		if($report !== 0){
    			return true;
    		}else{
    			return false;
    		}
	}


	function delete_landing($id){
		$this->db->where('id', $id);
		$this->db->delete('tbl_landing');
	}

}
?>
