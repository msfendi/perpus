<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
    }

    public function index()
    {
        if ($this->session->userdata('nama_user') == "") {
            redirect('login');
        }
        $this->load->view('layout/header');
        $this->load->view('dashboard');
        $this->load->view('layout/footer');
    }

    public function about()
    {
        echo "Ini about";
    }
}
