<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi_model extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('koleksi');
        if ($id != null) {
            $this->db->where('id_buku', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function insert($data)
    {
        $this->db->insert('koleksi', $data);
    }

    public function update($id, $data)
    {
        $this->db->where('id_buku', $id);
        $this->db->update('koleksi', $data);
    }

    public function update_gambar($id, $a)
    {
        $data = [
            'cover' => $a,
        ];
        $this->db->where('id_buku', $id);
        $this->db->update('koleksi', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_buku', $id);
        $this->db->delete('koleksi');
    }
}
