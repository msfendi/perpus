<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        if ($this->session->userdata('nama_user') == "") {
            redirect('login');
        }
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('about/about');
        $this->load->view('layout/footer');
    }
}
