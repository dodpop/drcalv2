<?php
class Admin_services_model extends CI_Model {

    function __construct()
    {
        date_default_timezone_set('Asia/Bangkok');
        $this->load->database();
    }

    public function get_services_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_services');
    		$this->db->where('intProductNewID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_services()
    {
        $this->db->select('*');
        $this->db->from('tbl_services');
        $order_type = 'DESC';
        $this->db->order_by('intProductNewID', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }

    function store_services($data)
    {
        $insert = $this->db->insert('tbl_services', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
	 }

    function update_services($id, $data)
    {
    		$this->db->where('intProductNewID', $id);
    		$this->db->update('tbl_services', $data);
    		$report = array();
    		$report['error'] = $this->db->_error_number();
    		$report['message'] = $this->db->_error_message();
    		if($report !== 0){
    			return true;
    		}else{
    			return false;
    		}
	}

	function delete_services($id){
    		$this->db->where('intProductNewID', $id);
    		$this->db->delete('tbl_services');
	}


}
?>
