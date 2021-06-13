<?php
class user extends CI_Controller{
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

    $this->load->model('model_user');
  }
  public function index(){
      $data['user'] = $this->model_user->ambil();
      $this->load->view('templates_admin/header');
      $this->load->view('templates_admin/sidebar');
      $this->load->view('admin/user', $data);
  }
}