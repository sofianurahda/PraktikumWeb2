<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Satuan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'Data Satuan',
            'satuan' => $this->Satuan_model->getAll(),
            'content' => 'satuan/index'
        );
        $this->load->view('template/main', $data);
    }

    public function add()
    {
        $data = array(
            'title' => 'Tambah Data Satuan',
            'content' => 'satuan/add_form'
        );
        $this->load->view('template/main', $data);
    }

    public function save()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->add();
        } else {
            $this->Satuan_model->save();
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata("success", "Data Satuan Berhasil Disimpan");
            }
            redirect('satuan');
        }
    }

    public function getedit($id)
    {
        $data = array(
            'title' => 'Update Data Satuan',
            'satuan' => $this->Satuan_model->getById($id),
            'content' => 'satuan/edit_form'
        );
        $this->load->view('template/main', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->getedit($id);
        } else {
            $this->Satuan_model->update($id);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata("success", "Data Satuan Berhasil Diupdate");
            }
            redirect('satuan');
        }
    }

    public function delete($id)
    {
        $this->Satuan_model->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata("success", "Data Satuan Berhasil Dihapus");
        }
        redirect('satuan');
    }
}
