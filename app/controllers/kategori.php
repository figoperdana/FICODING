<?php

class kategori extends Controller
{

    public function cari()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['modul_materi'] = $this->model('Materi_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['modul_materi'] = $this->model('Materi_model')->cari($_POST);
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function FrontEnd()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['modul_materi'] = $this->model('Materi_model')->getFrontEnd();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['modul_materi'] = $this->model('Materi_model')->getFrontEnd();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }

    public function BackEnd()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $data['modul_materi'] = $this->model('Materi_model')->getBackEnd();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['modul_materi'] = $this->model('Materi_model')->getBackEnd();
            $this->view('templates/header', $data);
            $this->view('kategori/index', $data);
            $this->view('templates/footer');
        }
    }
}
