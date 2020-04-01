<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {

    public function getAllCustomer(){
        $query=$this->db->get('pesan');
        return $query->result_array();
    }

    public function send(){
        $data=[
            "sender" => $this->input->post('sender',true),
            "message" => $this->input->post('message',true)
        ];

        $this->db->insert('pesan', $data);
    }

}

/* End of file Contact_model.php */

?>