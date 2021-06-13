<?php
class model_barang extends CI_model{
  public function tampil_data(){
    return $this->db->get('tb_barang');
  }

  public function tambah_barang($data, $table){
    $this->db->insert($table,$data);
  }

  public function edit_barang($where,$table){
    return $this->db->get_where($table,$where);
  }

  public function update_data($where, $data, $table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  public function hapus_data($where, $table){
    $this->db->where($where);
    $this->db->delete($table);
  }
  public function total_data(){
    $hasil=$this->db->query("SELECT * FROM tb_barang");
              return $hasil;
    }

  public function find($id)
  {
    $result = $this->db->where('id_barang', $id)
                       ->limit(1)
                       ->get('tb_barang');
    if($result->num_rows()>0){
      return $result->row();
    }else{
      return array();
    }
  }

  public function detail_brg($id_barang)
  {
    $result = $this->db->where('id_barang', $id_barang)->get('tb_barang');
    if($result->num_rows()>0){
      return $result->result();
    }else{
      return false;
    }
  }

  public function tampil_data_3()
  {
    $result = $this->db->get('tb_barang');
    if($result->num_rows()>0){
      return $result->result();
    }else{
      return false;
    }
  }
  public function _construct(){
    $this->load->database();
  }
  public function ambil(){
    $query = $this->db->get('tb_barang');
    return $query->result();
  }
}
