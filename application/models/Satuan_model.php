<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan_model extends CI_Model
{
    protected $_table = 'satuan';
    protected $primary = 'id';

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    
    public function save()
    {
        $data = array(
            'name' => htmlspecialchars($this->input->post('name'), true),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi'), true),
        );
        return $this->db->insert($this->_table, $data);
    }

    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }


    public function update($id)
    {
        $data = array(
            'name' => htmlspecialchars($this->input->post('name'), true),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi'), true),
        );
        return $this->db->update($this->_table, $data, array('id' => $id));
    }

    // Fungsi untuk menghapus data satuan
    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}
