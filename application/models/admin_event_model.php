<?php
class Admin_event_model extends CI_Model {

    function __construct()
    {
        date_default_timezone_set('Asia/Bangkok');
        $this->load->database();
    }

    public function get_event_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_activity');
    		$this->db->where('ActivityID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_event_images_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_activity_images');
    		$this->db->where('intActivityID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_event()
    {
        $this->db->select('*');
        $this->db->from('tbl_activity');
        $order_type = 'DESC';
        $this->db->order_by('ActivityID', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }


    function store_event($data)
    {
        $insert = $this->db->insert('tbl_activity', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
	 }

   function store_event_images($data)
   {
       $insert = $this->db->insert('tbl_activity_images', $data);
       $insert_id = $this->db->insert_id();
       return  $insert_id;
  }

    function update_event($id, $data)
    {
    		$this->db->where('ActivityID', $id);
    		$this->db->update('tbl_activity', $data);
    		$report = array();
    		$report['error'] = $this->db->_error_number();
    		$report['message'] = $this->db->_error_message();
    		if($report !== 0){
    			return true;
    		}else{
    			return false;
    		}
	}

	function delete_event($id){
		$this->db->where('ActivityID', $id);
		$this->db->delete('tbl_activity');
	}

  public function get_event_by_intImageID($id)
  {
      $this->db->select('*');
      $this->db->from('tbl_activity_images');
      $this->db->where('intImageID', $id);
      $query = $this->db->get();
      return $query->result_array();
  }

	function delete_event_image($id){
    $this->db->where('intImageID', $id);
    $this->db->delete('tbl_activity_images');
    }


}
?>
