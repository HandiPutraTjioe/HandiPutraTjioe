<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category_m extends CI_Model {

    public function get($id = null) {
        $this->db->from('tbl_category');

        if ($id != null) {
            $this->db->where('category_id', $id);
        }

        $query = $this->db->get();
        return $query;
    }

    public function add($post) {
        $params = [
            'nama' => $post['category_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['addr']
        ];

        $this->db->insert('tbl_category', $params);
    }

    public function edit($post) {
        $params = [
            'nama' => $post['category_name'],
            'gender' => $post['gender'],
            'phone' => $post['phone'],
            'address' => $post['addr'],
            'updated' => date('Y-m-d H:i:s')
        ];
        
        $this->db->where('category_id', $post['id']);
        $this->db->update('tbl_category', $params);
    }

    public function del($id) {
        $this->db->where('category_id', $id);
        $this->db->delete('tbl_category');
    }

}