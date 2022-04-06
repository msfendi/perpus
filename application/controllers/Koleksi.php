<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Koleksi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('koleksi_model');
        $this->load->library(array('form_validation', 'session'));
        $this->load->library(array('session'));
        if ($this->session->userdata('nama_user') == "") {
            redirect('login');
        }
    }
    public function index()
    {
        $data['row'] = $this->koleksi_model->get();
        $this->load->view('layout/header');
        $this->load->view('koleksi/koleksi', $data);
        $this->load->view('layout/footer');
    }

    public function daftar_buku()
    {
        $data['row'] = $this->koleksi_model->get();
        $this->load->view('layout/header');
        $this->load->view('koleksi/table', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $this->load->view('layout/header');
        $this->load->view('koleksi/tambah');
        $this->load->view('layout/footer');
    }

    public function insert()
    {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
        $penulis = $this->input->post('penulis');
        $pengarang = $this->input->post('pengarang');
        $thn_terbit = $this->input->post('thn_terbit');
        $cover = $_FILES['cover']['name'];

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = 2048000;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'kategori' => $kategori,
            'penulis' => $penulis,
            'pengarang' => $pengarang,
            'cover' => $cover,
            'tahun_terbit' => $thn_terbit,
        );
        $this->koleksi_model->insert($data);
        redirect('koleksi/index');
    }

    public function edit($id)
    {
        $data = $this->koleksi_model->get($id);
        if ($data->num_rows() > 0) {
            $buku['row'] = $data->row();
        } else {
            echo "<script> alert('Data tidak ditemukan.'); ";
            redirect('koleksi/index');
        }
        $this->load->view('layout/header');
        $this->load->view('koleksi/edit', $buku);
        $this->load->view('layout/footer');
    }

    public function update()
    {
        $id = $this->input->post('id_buku');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $kategori = $this->input->post('kategori');
        $penulis = $this->input->post('penulis');
        $pengarang = $this->input->post('pengarang');
        $thn_terbit = $this->input->post('thn_terbit');
        $cover = $_FILES['cover']['name'];

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048000;
        $config['overwrite'] = TRUE;

        // file tidak bisa berubah nama
        $temp = explode(".", $_FILES["cover"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["cover"]["name"], "upload/" . $newfilename);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload('cover')) {
            $this->koleksi_model->update_gambar($id, $newfilename);
        }


        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'kategori' => $kategori,
            'penulis' => $penulis,
            'pengarang' => $pengarang,
            'tahun_terbit' => $thn_terbit,
        );
        $this->koleksi_model->update($id, $data);
        // redirect('koleksi/index');
    }

    public function delete($id)
    {
        $this->koleksi_model->delete($id);
        redirect('koleksi/index');
    }
}
