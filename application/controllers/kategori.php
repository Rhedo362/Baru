<?php
class Kategori extends CI_Controller{
  public function kursi()
  {
    $data['kursi'] = $this->model_kategori->data_kursi()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('kursi',$data);
    $this->load->view('templates/footer');
  }
  public function lemari()
  {
    $data['lemari'] = $this->model_kategori->data_lemari()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('lemari',$data);
    $this->load->view('templates/footer');
  }
  public function meja()
  {
    $data['meja'] = $this->model_kategori->data_meja()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('meja',$data);
    $this->load->view('templates/footer');
  }
  public function kasur()
  {
    $data['kasur'] = $this->model_kategori->data_kasur()->result();
    $this->load->view('templates/header');
    $this->load->view('templates/sidebar');
    $this->load->view('kasur',$data);
    $this->load->view('templates/footer');
  }
}
