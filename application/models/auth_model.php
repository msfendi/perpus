<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $post['email']);
        $this->db->where('password', md5($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function update_cookie($cookie, $email)
    {
        $data = [
            'cookie' => $cookie,
        ];
        $this->db->where('email', $email);
        $this->db->update('user', $data);
    }

    public function get_detail_by_cookie($cookie)
    {
        $this->db->from('user');
        $this->db->where('cookie', $cookie);
        $query = $this->db->get()->row_array();
        return $query;
    }
}
