<?php
class Admin_articles_model extends CI_Model {

    function __construct()
    {
        date_default_timezone_set('Asia/Bangkok');
        $this->load->database();
    }

    public function get_articles_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_productnew');
    		$this->db->where('intProductNewID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_articles()
    {
        $this->db->select('*');
        $this->db->from('tbl_productnew');
        $order_type = 'DESC';
        $this->db->order_by('intProductNewID', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }

    function store_articles($data)
    {
        $insert = $this->db->insert('tbl_productnew', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
	 }

    function update_articles($id, $data)
    {
    		$this->db->where('intProductNewID', $id);
    		$this->db->update('tbl_productnew', $data);
    		$report = array();
    		$report['error'] = $this->db->_error_number();
    		$report['message'] = $this->db->_error_message();
    		if($report !== 0){
    			return true;
    		}else{
    			return false;
    		}
	}

	function delete_articles($id){
    		$this->db->where('intProductNewID', $id);
    		$this->db->delete('tbl_productnew');
	}


}
?>
