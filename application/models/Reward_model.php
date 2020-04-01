<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reward_model extends CI_Model {

    public function getAllReward()
    {
        $query = $this->db->get('reward');

        return $query->result_array();
    }

    public function getRewardByID($id){
        return $this->db->get_where('reward',['code_reward'=> $id])->row_array(); 
    }

    public function cari(){
        $keyword=$this->input->post('keyword');
        $this->db->like('code_reward',$keyword);
        $this->db->or_like('nama_reward',$keyword);
        $this->db->or_like('diskon',$keyword);
        $this->db->or_like('total_min',$keyword);
        $this->db->or_like('jumlah',$keyword);
        return $this->db->get('reward')->result_array();
    }

    public function tambah(){
        $data=[
            "code_reward" => $this->input->post('code_reward',true),
            "nama_reward" => $this->input->post('nama_reward',true),
            "diskon" => $this->input->post('diskon',true),
            "total_min" => $this->input->post('total_min',true),
            "jumlah" => $this->input->post('jumlah',true)
        ];
        $this->db->insert('reward', $data);
    }

    public function hapus($id){
        $this->db->where('code_reward', $id);
        $this->db->delete('reward');
    }

    public function ubah(){
        $data=[
            "code_reward" => $this->input->post('code_reward',true),
            "nama_reward" => $this->input->post('nama_reward',true),
            "diskon" => $this->input->post('diskon',true),
            "total_min" => $this->input->post('total_min',true),
            "jumlah" => $this->input->post('jumlah',true)
        ];
        $this->db->where('code_reward', $this->input->post('code_reward'));
        $this->db->update('reward', $data);
    }

    
}

/* End of file Reward_model.php */

?>