<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminUser extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('User_model');
        
        //validasi level
        if($this->session->userdata('golongan')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='IMI Store';
        $data['user']=$this->User_model->getAllUser();
        if($this->input->post('keyword')){
            $data['user']=$this->User_model->cari();
        }
        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/user/index',$data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah()
    {
        $data['title']='Tambah User';
        
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('notelp', 'notelp', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('golongan', 'golongan', 'required');
        
        $data['user'] = $this->User_model->getAllUser();
        if($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('templates/header_admin',$data);
            $this->load->view('admin/user/tambah',$data);
            $this->load->view('templates/footer_admin');
        }else{
            # code...
            $this->User_model->tambah();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('AdminUser','refresh');
        }
    }

    public function hapus($id){
        $this->User_model->hapus($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('AdminUser','refresh');
    }

    public function edit($id)
    {
        $data['title']='Edit User';
        $data['user']=$this->User_model->getUserByID($id);

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('notelp', 'notelp', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('golongan', 'golongan', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header_admin',$data);
            $this->load->view('admin/user/edit',$data);
            $this->load->view('templates/footer_admin');
        }else{
            $this->User_model->ubah();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('AdminUser','refresh');
        }
    }

}

/* End of file AdminUser.php */

?>