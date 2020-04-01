<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

    public function getAllCustomer(){
        $query=$this->db->get('user');
        return $query->result_array();
    }

    public function daftar(){
        $data=[
            "username" => $this->input->post('username',true),
            "password" => $this->input->post('password',true),
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "noktp" => $this->input->post('noktp',true),
            "notelp" => $this->input->post('notelp',true),
            "gender" => $this->input->post('gender',true),
            "golongan" => "customer"
        ];

        $this->db->insert('user', $data);
    }

    public function cek_login($username, $password)
    {
        $username = set_value('username');
        $password = set_value('password');

        $result = $this->db
        ->where('username',$username)
        ->where('password',$password)
        ->limit(1)
        ->get('user');

        if($result->num_rows() > 0) {
            return $result->row();
        } else {
            return FALSE;
        }
    }

    public function hapusdataAkun($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function getAkunByID($id){
        return $this->db->get_where('user',['id_user'=>$id])->row_array();
    }

    public function ubahdataAkun(){
        $data=[
            "id_user" => $this->input->post('id_user',true),
            "username" => $this->input->post('username',true),
            "password" => $this->input->post('password',true),
            "level" => $this->input->post('level',true)
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

}

/* End of file Register_model.php */

?>