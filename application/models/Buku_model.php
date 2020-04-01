<?php

defined('BASEPATH') or exit('No direct script access allowed');
use GuzzleHttp\Client;

class Buku_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/TokoBuku/api/'
        ]);
    }
    
    public function getAllbuku()
    {
        $response = $this->_client->request('GET','Buku');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function getBukuByID($id)
    {
        $response = $this->_client->request('GET','Buku',[
            'query' => ['id_buku' => $id]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

    public function find($id)
    {
        $response = $this->_client->request('GET','Buku',[
            'query' => ['id_buku' => $id],'limit'
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }
}
/* End of file ModelName.php */
