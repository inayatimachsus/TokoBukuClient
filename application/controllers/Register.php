<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
    }

    public function index()
    {
        $data['title'] = 'Register';
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('noktp', 'noktp', 'required');
        $this->form_validation->set_rules('notelp', 'notelp', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');

        if ($this->form_validation->run() == FALSE) {
            #code...
            $this->load->view('templates/header_form', $data);
            $this->load->view('register', $data);
            $this->load->view('templates/footer_form');
        } else {
            # code...
            $this->Register_model->daftar();
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Anda sudah terdaftar, Silahkan Login!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('Register/login');
        }
    }

    public function login()
    {
        $data['title'] = 'Login';
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'passrword', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('templates/header_form', $data);
            $this->load->view('login', $data);
            $this->load->view('templates/footer_form');
        } else {
            # code...
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $cek = $this->Register_model->cek_login($username, $password);

            if($cek == FALSE) {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-secondary alert-dismissible fade show" role="alert">
                        Username atau Password salah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('Register/login');
            } else {
                $this->session->set_userdata('username',$cek->username);
                $this->session->set_userdata('golongan',$cek->golongan);
                $this->session->set_userdata('nama',$cek->nama);

                switch ($cek->golongan) {
                    case 'admin': redirect('AdminHome');
                        break;
                    case 'customer': redirect('Home');
                        break;
                    default:
                        break;
                }
                redirect('Home');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Home');
    }
}

/* End of file Register.php */

?>