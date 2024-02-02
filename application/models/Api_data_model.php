<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Api_data_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
        error_reporting(0);
        ini_set('display_errors', 'off');
    }
    public function get_data()   //To Get Data
    {
        $this->db->select('*');
        $this->db->from('api_data');
        $this->db->order_by('id', 'asc');
        // $this->db->where('status', '1');
        $result = $this->db->get()->result_array();
        //  echo "<pre>";print_r ($result);die();
        return $result;
    }
    public function add_data($set_data)  //  Insert Data
    {
        $result = $this->db->insert('api_data', $set_data);
        return $result;
    }
    function post_update($id, $form_data) //  Update Data
    {
        $this->db->where("id", $id);
        $query = $this->db->update('api_data', $form_data);
        return $query;
    }
    function fetch_single_post($id)    
    {
        $this->db->where("id", $id);
        $query = $this->db->get('api_data');
        return $query;
    }
    public function delete_single_record($id)  //  Delete Data
    {
        $sql = "select * from `api_data`  WHERE `id` ='$id'";
        $query = $this->db->query($sql);
        $res = $query->row_array();
        if ($query->num_rows() == 1) {
            $this->db->where('id', $id);
            $result = $this->db->delete('api_data');
            if ($result) {
                unlink('uploads/' . $res['image']);
                return 1;
            } else {
                return 0;
            }
        }
    }
}
