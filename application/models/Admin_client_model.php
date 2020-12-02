<?php
class Admin_client_model extends CI_Model {

    function __construct()
    {
        date_default_timezone_set('Asia/Bangkok');
        $this->load->database();
    }

    public function get_client_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_client');
    		$this->db->where('client_id', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_client_items_by_id($id)
    {
    		$this->db->select('*');
    		$this->db->from('tbl_client');
    		$this->db->where('client_id', $id);
    		$query = $this->db->get();
    		return $query->result_array();
    }

    public function get_client()
    {
        $this->db->select('*');
        $this->db->from('tbl_client');
        $order_type = 'DESC';
        $this->db->order_by('client_id', $order_type);
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result_array();
    }

    public function get_clientclient_by_clientclient_id($id)
    {
      $this->db->select('*');
      $this->db->from('tbl_client');
      $this->db->where('client_id', $id);
      $query = $this->db->get();
      //echo $this->db->last_query();
      return $query->result_array();
    }

    function store_client($data)
    {
        $insert = $this->db->insert('tbl_client', $data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
	 }

   function store_clientclient($data)
   {
       $insert = $this->db->insert('tbl_client', $data);
       $insert_id = $this->db->insert_id();

       return  $insert_id;
  }

    function update_client($id, $data)
    {
    		$this->db->where('client_id', $id);
    		$this->db->update('tbl_client', $data);
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

  function update_clientclient($id, $data)
  {
      $this->db->where('client_id', $id);
      $this->db->update('tbl_client', $data);
      $report = array();
      $report['error'] = $this->db->_error_number();
      $report['message'] = $this->db->_error_message();
      if($report !== 0){
        return true;
      }else{
        return false;
      }
}

	function delete_client($id){
		$this->db->where('client_id', $id);
		$this->db->delete('tbl_client');
	}

  function delete_clientclient($id){
		$this->db->where('client_id', $id);
		$this->db->delete('tbl_client');
	}


}
?>
