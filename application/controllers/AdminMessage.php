<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminMessage extends CI_Controller {

    public function __construct()
    {
         parent::__construct();
         $this->load->model('Message_model');
        
        //validasi level
        if($this->session->userdata('golongan')!="admin"){
            redirect('login','refresh');
        }
    }

    public function index()
    {
        $data['title']='IMI Store';
        $data['pesan']=$this->Message_model->getAllMessage();
        if($this->input->post('keyword')){
            $data['pesan']=$this->Message_model->cari();
        }
        $this->load->view('templates/header_admin',$data);
        $this->load->view('admin/message/index',$data);
        $this->load->view('templates/footer_admin');
    }

    public function hapus($id){
        $this->Message_model->hapus($id);
        $this->session->set_flashdata('flash-data','dihapus');
        redirect('AdminMessage','refresh');
    }

}

/* End of file AdminMessage.php */

?>