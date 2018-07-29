<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dtb extends CI_Model { 

	  var $table = "tb_lintas";  
      var $select_column = array("urut", "lintas", "prodi", "nama_lintas");  
      var $order_column = array("urut", "lintas", "prodi", "nama_lintas");  
	  
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
	function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("first_name", $_POST["search"]["value"]);  
                $this->db->or_like("last_name", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table);  
           return $this->db->count_all_results();  
      }  
      function insert_crud($data)  
      {  
           $this->db->insert('users', $data);  
      }  
      function fetch_single_user($user_id)  
      {  
           $this->db->where("id", $user_id);  
           $query=$this->db->get('users');  
           return $query->result();  
      }  
      function update_crud($user_id, $data)  
      {  
           $this->db->where("id", $user_id);  
           $this->db->update("users", $data);  
      }  
      function delete_single_user($user_id)  
      {  
           $this->db->where("id", $user_id);  
           $this->db->delete("users");  
           //DELETE FROM users WHERE id = '$user_id'  
      }  
 
}
