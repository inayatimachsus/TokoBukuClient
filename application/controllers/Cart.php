<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function tambah_ke_keranjang($id)
    {
        $buku = $this->Buku_model->find($id);
        $data = array(
            'id'      => $buku['id_buku'],
            'qty'     => 1,
            'price'   => $buku['harga'],
            'name'    => $buku['judul_buku']
        );
        $this->cart->insert($data);
        redirect('Home');
    }

    public function detail_keranjang()
    {
        $data['title'] = 'IMI Store';
        $this->load->view('templates/header_customer', $data);
        $this->load->view('customer/cart/detail');
        $this->load->view('templates/footer_customer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('Home');
    }

    public function pembayaran()
    {
        if($this->session->userdata('golongan')!="customer"){
            redirect('Register/login','refresh');
        }
        
        $data['title'] = 'IMI Store';
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('notelp', 'notelp', 'required');
        $this->form_validation->set_rules('jasa_pengiriman', 'jasa_pengiriman', 'required');
        $this->form_validation->set_rules('bank', 'bank', 'required');

        if ($this->form_validation->run() == FALSE) {
            #code...
            $this->load->view('templates/header_customer', $data);
            $this->load->view('customer/cart/pembayaran', $data);
            $this->load->view('templates/footer_customer');
        } else {
            # code...
            $this->cart->destroy();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Pesanan Anda berhasil diproses. Lakukan Konfirmasi Pembayaran melalui WhattsApp!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('Cart/pembayaran');
        }
    }
}

/* End of file Cart.php */

?>