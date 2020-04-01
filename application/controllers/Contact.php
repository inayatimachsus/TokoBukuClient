<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
    }

    public function index()
    {
        $data['title'] = 'IMI Store';
        $this->load->view('templates/header_customer', $data);
        $this->load->view('customer/contact',$data);
        $this->load->view('templates/footer_customer');
    }

    public function sendmessage()
    {
        $data['title'] = 'IMI Store';
        $this->form_validation->set_rules('sender', 'sender', 'required');
        $this->form_validation->set_rules('message', 'message', 'required');

        if ($this->form_validation->run() == FALSE) {
            #code...
            $this->load->view('templates/header_customer', $data);
            $this->load->view('customer/contact', $data);
            $this->load->view('templates/footer_customer', $data);
        } else {
            # code...
            $this->Contact_model->send();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Anda sudah terdaftar, Silahkan Login!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('Contact/index');
        }
    }

}

/* End of file Contact.php */

?>