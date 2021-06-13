<?php
class Model_user extends CI_model{
    public function ambil(){
        $query = $this->db->get('tb_user');
        return $query->result();
      }
}