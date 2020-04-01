<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $data['title'] = 'IMI Store';
        $this->load->view('templates/header_customer', $data);
        $this->load->view('customer/about',$data);
        $this->load->view('templates/footer_customer');
    }

}

/* End of file About.php */

?>