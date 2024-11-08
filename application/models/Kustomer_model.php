<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kustomer_model extends CI_Model
{
    protected $_table = 'kustomer';
    protected $primary = 'id';

    public function getAll()
    {
        $sql = "SELECT id, nik, name, telpon, alamat FROM {$this->_table}";
        return $this->db->query($sql)->result();
    }

    public function save()
    {
        $data = array(
            'nik' => htmlspecialchars($this->input->post('nik'), true),
            'name' => htmlspecialchars($this->input->post('name'), true),
            'telpon' => htmlspecialchars($this->input->post('telpon'), true),
            'alamat' => htmlspecialchars($this->input->post('alamat'), true),
        );
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
}
