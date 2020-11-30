<?php
class Admin_newsupdate_model extends CI_Model {

  function __construct()
  {
      date_default_timezone_set('Asia/Bangkok');
      $this->load->database();
  }


    public function get_newsupdate_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_news');
    		$this->db->where('ID', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_newsupdate()
    {
        $this->db->select('*');
        $this->db->from('tbl_news');
        $order_type = 'DESC';
        $this->db->order_by('ID', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }


    function store_newsupdate($data)
    {
        $insert = $this->db->insert('tbl_news', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;

	}


    function update_newsupdate($id, $data)
    {
    		$this->db->where('ID', $id);
    		$this->db->update('tbl_news', $data);
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


	function delete_newsupdate($id){
		$this->db->where('ID', $id);
		$this->db->delete('tbl_news');
	}

}
?>
