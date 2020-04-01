<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    //Halaman utama website
    public function index()
    {
        $data['title'] = 'IMI Store';
        $data['buku'] = $this->Buku_model->getAllBuku();

        if($this->input->post('keyword')){
            #code...
            $data['buku']=$this->Kategori_model->cariDataKategori();
        }

        $this->load->view('templates/header_customer', $data);
        $this->load->view('customer/home/index',$data);
        $this->load->view('templates/footer_customer');
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Produk';
        $data['detail'] = $this->Buku_model->getBukuByID($id);
        $this->load->view('templates/header_customer', $data);
        $this->load->view('customer/home/detail',$data);
        $this->load->view('templates/footer_customer');
    }
}

/* End of file Home.php */

?>