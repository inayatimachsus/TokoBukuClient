<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Message_model extends CI_Model {

    public function getAllMessage()
    {
        $query = $this->db->get('pesan');

        return $query->result_array();
    }

    public function getMessageByID($id){
        return $this->db->get_where('pesan',['id_pesan'=> $id])->row_array(); 
    }

    public function cari(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_pesan',$keyword);
        $this->db->or_like('sender',$keyword);
        $this->db->or_like('message',$keyword);
        return $this->db->get('pesan')->result_array();
    }

    public function hapus($id){
        $this->db->where('id_pesan', $id);
        $this->db->delete('pesan');
    }

}

/* End of file Message_model.php */

?>