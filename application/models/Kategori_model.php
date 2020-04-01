<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/TokoBuku/api/'
        ]);
    }
    
    public function getAllKategori()
    {
        $response = $this->_client->request('GET','Kategori');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getKategoriByID($id)
    {
        $response = $this->_client->request('GET','Kategori',[
            'query' => [
                'kategori' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function tambahdatakategori()
    {
        $data=[
            "id_kategori" => $this->input->post('id_kategori',true), 
            "id_buku" => $this->input->post('id_buku',true),
            "judul_buku" => $this->input->post('judul_buku',true),
            "kategori" => $this->input->post('kategori',true)
        ];
        $this->db->insert('kategori', $data);
    }

    public function hapusdataKategori($id){
        $this->db->where('id_kategori', $id);
        $this->db->delete('kategori');
    }

    public function ubahdataKategori(){
        $data=[
            "id_kategori" => $this->input->post('id_kategori',true), 
            "id_buku" => $this->input->post('id_buku',true),
            "judul_buku" => $this->input->post('judul_buku',true),
            "kategori" => $this->input->post('kategori',true)
        ];
        $this->db->where('id_kategori',$this->input->post('id_kategori'));
        $this->db->update('kategori',$data);
    }

    public function cariDataKategori(){
        $keyword=$this->input->post('keyword');
        $this->db->like('id_kategori',$keyword);
        $this->db->or_like('id_buku',$keyword);
        $this->db->or_like('judul_buku',$keyword);
        $this->db->or_like('kategori',$keyword);
        return $this->db-> get('kategori')->result_array();
    }

    //rest api
    public function getKategori($id = null)
    {
        if($id == null){
            return $this->db->get('kategori')->result_array();
        } else{
            return $this->db->get_where('kategori', ['id_kategori'=> $id])->result_array();
        }
    }

    public function deleteKategori($id)
    {
        $this->db->delete('kategori', ['id_kategori' => $id]);
        return $this->db->affected_rows();
    }

    public function createKategori($data)
    {
        $this->db->insert('kategori', $data);
        return $this->db->affected_rows();
    }

    public function updateKategori($data, $id)
    {
        $this->db->update('kategori', $data, ['id_kategori' => $id]);
        return $this->db->affected_rows();
    }
}
/* End of file ModelName.php */


?>