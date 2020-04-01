<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminReward extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('Reward_model');
        
        //validasi level
        if($this->session->userdata('golongan')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='IMI Store';
        $data['reward']=$this->Reward_model->getAllReward();
        if($this->input->post('keyword')){
            $data['reward']=$this->Reward_model->cari();
        }
        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/reward/index',$data);
        $this->load->view('templates/footer_admin');
    }

    public function tambah()
    {
        $data['title']='Tambah Reward';
        
        $this->form_validation->set_rules('code_reward', 'code_reward', 'required');
        $this->form_validation->set_rules('nama_reward', 'nama_reward', 'required');
        $this->form_validation->set_rules('diskon', 'diskon', 'required');
        $this->form_validation->set_rules('total_min', 'total_min', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');
        
        $data['reward'] = $this->Reward_model->getAllReward();
        if($this->form_validation->run() == FALSE){
            # code...
            $this->load->view('templates/header_admin',$data);
            $this->load->view('admin/reward/tambah',$data);
            $this->load->view('templates/footer_admin');
        }else{
            # code...
            $this->Reward_model->tambah();
            $this->session->set_flashdata('flash-data','ditambahkan');
            redirect('AdminReward','refresh');
        }
    }

    public function hapus($id){
        $this->Reward_model->hapus($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('AdminReward','refresh');
    }

    public function edit($id)
    {
        $data['title']='Edit Reward';
        $data['reward']=$this->Reward_model->getRewardByID($id);

        $this->form_validation->set_rules('code_reward', 'code_reward', 'required');
        $this->form_validation->set_rules('nama_reward', 'nama_reward', 'required');
        $this->form_validation->set_rules('diskon', 'diskon', 'required');
        $this->form_validation->set_rules('total_min', 'total_min', 'required');
        $this->form_validation->set_rules('jumlah', 'jumlah', 'required');

        if($this->form_validation->run() == FALSE){
            $this->load->view('templates/header_admin',$data);
            $this->load->view('admin/reward/edit',$data);
            $this->load->view('templates/footer_admin');
        }else{
            $this->Reward_model->ubah();
            $this->session->set_flashdata('flash-data','diedit');
            redirect('AdminReward','refresh');
        }
    }

}

/* End of file AdminReward.php */

?>