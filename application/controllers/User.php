<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library(array('form_validation', 'session'));
        if ($this->session->userdata('nama_user') == "") {
            redirect('login');
        }
    }

    public function index()
    {
        $data['nama'] = 'budi';
        $data['alamat'] = ['kartasura', 'solo', 'boyolali', 'wonogiri'];
        $data['email'] = 'budi@waluyo.com';
        $data['umur'] = '19';
        $this->load->view('layout/header');
        $this->load->view('user/user', $data);
        $this->load->view('layout/footer');
    }

    public function daftar_user()
    {
        $data['row'] = $this->user_model->get();
        $this->load->view('layout/header');
        $this->load->view('user/table', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $this->load->view('layout/header');
        $this->load->view('user/tambah');
        $this->load->view('layout/footer');
    }

    public function insert()
    {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $umur = $this->input->post('umur');
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $img_profile = $_FILES['image']['name'];

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048000;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('image');

        $data = array(
            'nama_user' => $nama,
            'alamat' => $alamat,
            'tgl_lahir' => $tgl_lahir,
            'umur' => $umur,
            'email' => $email,
            'password' => $password,
            'image' => $img_profile,
        );
        $this->user_model->insert($data);
        redirect('user/index');
    }

    public function edit($id)
    {
        $data = $this->user_model->get($id);
        if ($data->num_rows() > 0) {
            $user['row'] = $data->row();
        } else {
            echo "<script> alert('Data tidak ditemukan.'); ";
            redirect('user/index');
        }
        $this->load->view('layout/header');
        $this->load->view('user/edit', $user);
        $this->load->view('layout/footer');
    }
}
