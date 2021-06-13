<?php
class dashboard_admin extends CI_Controller{
  public function __construct(){
    parent::__construct();
    if($this->session->userdata('role_id') != '1'){
      $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Anda Belum Login, Silahkan Login Terlebih Dahulu</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>');
      redirect('auth/login');
    }
  }
  public function index()
  {
    $data['total_user'] = $this->model_auth->total_data()->num_rows();
		$data['total_barang'] = $this->model_barang->total_data()->num_rows();
		$data['total_pesanan'] = $this->model_invoice->total_data()->num_rows();
    $data['barang'] = $this->model_barang->tampil_data()->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/dashboard', $data);
    $this->load->view('templates_admin/footer');
  }
}