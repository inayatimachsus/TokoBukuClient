<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHome extends CI_Controller {

    public function index()
    {
        $data['title'] = 'IMI Store';
        $data['buku'] = $this->Buku_model->getAllBuku();

        if($this->input->post('keyword')){
            #code...
            $data['buku']=$this->Kategori_model->cariDataKategori();
        }

        $this->load->view('templates/header_admin', $data);
        $this->load->view('admin/home/dashboard',$data);
        $this->load->view('templates/footer_admin');

        //validasi level
        if($this->session->userdata('golongan')!="admin"){
            redirect('login','refresh');
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Produk';
        $data['detail'] = $this->Buku_model->getBukuByID($id);
        $this->load->view('templates/header_admin', $data);
        $this->load->view('admin/home/detail',$data);
        $this->load->view('templates/footer_admin');
    }

}

/* End of file AdminHome.php */

?>