<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('user', $data);
    }
}
