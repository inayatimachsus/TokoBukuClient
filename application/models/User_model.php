<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getAllUser()
    {
        $query = $this->db->get('user');

        return $query->result_array();
    }

    public function getUserByID($id){
        return $this->db->get_where('user',['id_user'=> $id])->row_array(); 
    }

    public function cari(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_user',$keyword);
        $this->db->or_like('username',$keyword);
        $this->db->or_like('password',$keyword);
        $this->db->or_like('nama',$keyword);
        $this->db->or_like('alamat',$keyword);
        $this->db->or_like('email',$keyword);
        $this->db->or_like('notelp',$keyword);
        $this->db->or_like('gender',$keyword);
        $this->db->or_like('golongan',$keyword);
        return $this->db->get('user')->result_array();
    }

    public function tambah(){
        $data=[
            "id_user" => $this->input->post('id_user',true),
            "username" => $this->input->post('username',true),
            "password" => $this->input->post('password',true),
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "email" => $this->input->post('email',true),
            "notelp" => $this->input->post('notelp',true),
            "gender" => $this->input->post('gender',true),
            "golongan" => $this->input->post('golongan',true)
        ];
        $this->db->insert('user', $data);
    }

    public function hapus($id){
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }

    public function ubah(){
        $data=[
            "id_user" => $this->input->post('id_user',true),
            "username" => $this->input->post('username',true),
            "password" => $this->input->post('password',true),
            "nama" => $this->input->post('nama',true),
            "alamat" => $this->input->post('alamat',true),
            "email" => $this->input->post('email',true),
            "notelp" => $this->input->post('notelp',true),
            "gender" => $this->input->post('gender',true),
            "golongan" => $this->input->post('golongan',true)
        ];
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

    
}

/* End of file User_model.php */

?>