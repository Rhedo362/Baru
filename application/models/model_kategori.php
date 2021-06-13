<?php
class model_kategori extends CI_Model
{
  public function data_meja(){
    return $this->db->get_where('tb_barang', array('kategori' =>'Meja'));
  }

  public function data_kursi(){
    return $this->db->get_where('tb_barang', array('kategori' =>'Kursi'));
  }

  public function data_lemari(){
    return $this->db->get_where('tb_barang', array('kategori' =>'Lemari'));
  }

  public function data_kasur(){
    return $this->db->get_where('tb_barang', array('kategori' =>'Kasur'));
  }
 
}