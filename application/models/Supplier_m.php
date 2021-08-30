<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier_m extends CI_Model {

    public function get($id = null) {
        $this->db->from('tbl_supplier');

        if ($id != null) {
            $this->db->where('supplier_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function add($post) {
        $params = [
            'nama' => $post['supplier_name'],
            'no_hp' => $post['phone'],
            'alamat' => $post['addr'],
            'deskripsi' => empty($post['deskripsi']) ? null : $post['deskripsi'],
        ];

        $this->db->insert('tbl_supplier', $params);
    }

    public function edit($post) {
        $params = [
            'nama' => $post['supplier_name'],
            'no_hp' => $post['phone'],
            'alamat' => $post['addr'],
            'deskripsi' => empty($post['deskripsi']) ? null : $post['deskripsi'],
            'updated' => date('Y-m-d H:i:s')
        ];
        
        $this->db->where('supplier_id', $post['id']);
        $this->db->update('tbl_supplier', $params);
    }

    public function del($id) {
        $this->db->where('supplier_id', $id);
        $this->db->delete('tbl_supplier');
    }

}