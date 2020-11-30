<?php

class Admin_users_model extends CI_Model {

    /**
    * Validate the login's data with the database
    * @param string $user_name
    * @param string $password
    * @return void
    */

    function __construct()
    {
        date_default_timezone_set('Asia/Bangkok');

    }

    function validate($user_name, $password)
    {

            // $this->db1 = $this->load->database('dbwork', TRUE);
            $this->db->where('User', $user_name);
            $this->db->where('Password', $password);

            $this->db->where('Active', 1);
            $query = $this->db->get('tbl_admin');
            return $query->result_array();
           
    }

    /**
    * Serialize the session data stored in the database,
    * store it in a new array and return it to the controller
    * @return array
    */
    function get_db_session_data()
    {
            $query = $this->db->select('user_data')->get('ci_sessions');
            $user = array(); /* array to store the user data we fetch */
            foreach ($query->result() as $row)
            {
                $udata = unserialize($row->user_data);
                /* put data in array using username as key */
                $user['user_name'] = $udata['user_name'];
                $user['is_logged_in'] = $udata['is_logged_in'];
            }
            return $user;
    }

    /**
    * Store the new user's data into the database
    * @return boolean - check the insert
    */
    function create_member()
    {

            $this->db->where('user_name', $this->input->post('username'));
            $query = $this->db->get('membership');

    if($query->num_rows > 0){
            echo '<div class="alert alert-error"><a class="close" data-dismiss="alert">×</a><strong>';
                      echo "Username already taken";
                    echo '</strong></div>';
            }else{

                    $new_member_insert_data = array(
                            'first_name' => $this->input->post('first_name'),
                            'last_name' => $this->input->post('last_name'),
                            'email_addres' => $this->input->post('email_address'),
                            'user_name' => $this->input->post('username'),
                            'pass_word' => md5($this->input->post('password')),
                            'membership_groups' => $this->input->post('membership_groups')
                    );
                    $insert = $this->db->insert('membership', $new_member_insert_data);
                return $insert;
            }

    }//create_member

    function get_usertypes($search_string=null, $order=null, $order_type='Asc', $limit_start=null, $limit_end=null)
    {

                $this->db->select('*');
                $this->db->from('membership_groups');

                if($search_string){
                        $this->db->like('description', $search_string);
                }
                $this->db->group_by('id');

                if($order){
                        $this->db->order_by($order, $order_type);
                }else{
                    $this->db->order_by('id', $order_type);
                }

                if($limit_start && $limit_end){
                  $this->db->limit($limit_start, $limit_end);
                }

                if($limit_start != null){
                  $this->db->limit($limit_start, $limit_end);
                }

                $query = $this->db->get();

                return $query->result_array();
    }

    function count_users($manufacture_id=null, $search_string=null, $order=null)
    {
                $this->db->select('*');
                $this->db->from('membership');
                if($manufacture_id != null && $manufacture_id != 0){
                        $this->db->where('id', $manufacture_id);
                }
                if($search_string){
                        $this->db->like('first_name', $search_string);
                        $this->db->like('last_name', $search_string);
                        $this->db->like('email_addres', $search_string);
                }
                if($order){
                        $this->db->order_by($order, 'Asc');
                }else{
                    $this->db->order_by('id', 'Asc');
                }
                $query = $this->db->get();
                return $query->num_rows();
    }

    function get_user_by_id($id)
    {
                $this->db->select('*');
                $this->db->from('membership', 'membership_groups');
                $this->db->join('membership_groups', 'membership.membership_groups = membership_groups.id', 'left');
                $this->db->where('membership.id', $id);

                $query = $this->db->get();
                return $query->result_array();
    }

    function get_users($membership_groups_id=null, $search_string=null, $order=null, $order_type='Asc', $limit_start, $limit_end)
    {

                $this->db->select('*');
                $this->db->select('membership.id as membership_id');
                $this->db->from('membership', 'membership_groups');

                if($membership_groups_id != null && $membership_groups_id != 0){
                        $this->db->where('membership_groups', $membership_groups_id);
                }
                if($search_string){
                        $this->db->like('first_name', $search_string);
                        $this->db->or_like('last_name', $search_string);
                        $this->db->or_like('email_addres', $search_string);
                }

                $this->db->join('membership_groups', 'membership.membership_groups = membership_groups.id', 'left');

                $this->db->group_by('membership.id');

                if($order){
                        $this->db->order_by('membership.'.$order, $order_type);
                }else{
                    $this->db->order_by('membership.id', $order_type);
                }


                $this->db->limit($limit_start, $limit_end);
                //$this->db->limit('4', '4');


                $query = $this->db->get();
                //echo $this->db->last_query();
                return $query->result_array();
    }

    function update_users($id, $data)
    {
                $this->db->where('id', $id);
                $this->db->update('membership', $data);
                $report = array();
                $report['error'] = $this->db->_error_number();
                $report['message'] = $this->db->_error_message();
                if($report !== 0){
                        return true;
                }else{
                        return false;
                }
    }


    function delete_user($id)
    {
            $this->db->where('id', $id);
            $this->db->delete('membership');
    }


}
