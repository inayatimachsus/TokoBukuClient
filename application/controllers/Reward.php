<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reward extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Reward_model');
    }
    
    public function index()
    {
        $data['title'] = 'IMI Store';
        $data['reward'] = $this->Reward_model->getAllReward();
        $this->load->view('templates/header_customer', $data);
        $this->load->view('customer/reward',$data);
        $this->load->view('templates/footer_customer');

        //validasi level
        if($this->session->userdata('golongan')!="customer"){
            redirect('Register/login','refresh');
        }
    }
}

/* End of file Reward.php */

?>