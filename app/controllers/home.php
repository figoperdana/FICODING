<?php
class home extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $this->view('templates/header', $data);
            $this->view('home/index');
            $this->view('templates/footer');
        }
    }

    public function login()
    {
        $data['user'] = $this->model('User_model')->login($_POST);
        if (isset($data['user']['id'])) {
            $_SESSION['id'] = $data['user']['id'];
            if ($this->model('User_model')->updatedAt($data['user']['id']) > 0) {
                header('Location: ' . BASEURL);
            } else {
                Flasher::setFlash('Gagal', 'Login', 'danger');
                header('Location: ' . BASEURL . '/home');
                exit;
            }
        } else {
            Flasher::setFlash('Gagal', 'Login', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        }
    }

    public function pendaftaran()
    {
        $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
        $this->view('templates/header', $data);
        $this->view('home/pendaftaran');
        $this->view('templates/footer');
    }

    public function logout()
    {
        session_destroy();
        header('Location: ' . BASEURL);
        exit;
    }

    public function daftar()
    {
        if ($_POST['password'] == $_POST['cpassword']) {
            if ($this->model('User_model')->daftar($_POST, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Daftar', 'success');
                header('Location: ' . BASEURL);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Daftar', 'danger');
                header('Location: ' . BASEURL);
                exit;
            }
        } else {
            Flasher::setFlash('Gagal', 'Daftar', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function lupa()
    {
        if ($this->model('User_model')->lupa($_POST['emaill']) > 0) {
            Flasher::setFlash('Berhasil', 'Silahkan Cek Email', 'success');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Anda Bukan User', 'danger');
            header('Location: ' . BASEURL);
            exit;
        }
    }
}
