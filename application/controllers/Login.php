<?php
defined('BASEPATH') Or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session'); // Ensure session library is loaded
        $this->load->database(); // Ensure database is loaded
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('login/index'); // Reload login page if validation fails
        } else {
            $this->dologin(); // Proceed with login if validation passes
        }
    }

    public function dologin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        // Fetch user by email from database
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            // Verify the password
            if (password_verify($password, $user['password'])) {
                // Set session data
                $data = [
                    'id'       => $user['id'],
                    'email'    => $user['email'],
                    'username' => $user['username'],
                    'role'     => $user['role']
                ];
                $this->session->set_userdata($data);

                // Update the last login
                $this->_updateLastLogin($user['id']);

                // Redirect based on user role
                switch ($user['role']) {
                    case 'PEMILIK':
                        redirect('menu');
                        break;
                    case 'ADMIN':
                        redirect('user');
                        break;
                    case 'KASIR':
                        redirect('kasir');
                        break;
                    default:
                        redirect('login');
                }
            } else {
                // Wrong password
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><b>Error:</b> Incorrect password.</div>');
                redirect('/');
            }
        } else {
            // User not registered
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><b>Error:</b> User not registered.</div>');
            redirect('login');
        }
    }

    private function _updateLastLogin($userid)
    {
        $this->db->set('last_login', 'NOW()', false);
        $this->db->where('id', $userid);
        $this->db->update('user');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function block()
    {
        $data = [
            'user'  => $this->session->userdata('username'),
            'title' => 'Access Denied!'
        ];
        $this->load->view('login/error404', $data);
    }
}
