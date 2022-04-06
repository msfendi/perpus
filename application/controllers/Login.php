<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->library(array('form_validation', 'session'));
    }


    public function index()
    {
        $cookie = get_cookie('tigaserangkai');
        // $this->load->view('layout/header');
        if ($this->session->userdata('nama_user') != "") {
            redirect('dashboard');
        } else if ($cookie != "") {
            $sesi = $this->auth_model->get_detail_by_cookie($cookie);
            $this->session->set_userdata($sesi);
            redirect('dashboard');
        }
        $this->load->view('auth/login');
        // $this->load->view('layout/footer');
    }

    public function auth()
    {
        $post = $this->input->post(null, true);
        if (isset($post['submit'])) {
            $query = $this->auth_model->login($post);
            if ($this->input->post('remember_me') != "") {
                $key = random_string('alnum', 64);
                set_cookie('tigaserangkai', $key, 3600 * 24 * 30);
                $this->auth_model->update_cookie($key, $post['email']);
            }
            if ($query->num_rows() > 0) {
                $row = $query->row_array();
                $this->session->set_userdata($row);
                echo "<script> alert('Anda Berhasil Login');
                window.location = '" . site_url('dashboard') . "';
                </script>";
            } else {
                echo "<script> alert('Login Tidak Berhasil, Pastikan Username/Password Sudah Benar');
                window.location = '" . site_url('login') . "';
                </script>";
            }
        }
    }

    public function logout()
    {
        delete_cookie('tigaserangkai');
        $this->session->sess_destroy();
        redirect('login');
    }
}
