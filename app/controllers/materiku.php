<?php

class materiku extends Controller
{
    public function index()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['materiku'] = $this->model('Materi_model')->getMateriUser($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $_SESSION['foto'] = $data['user']['foto'];
            $this->view('templates/header', $data);
            $this->view('materiku/index', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function cari()
    {
        if (isset($_SESSION['id'])) {
            if (empty($_POST['cari'])) {
                $this->index();
            } else {
                $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
                $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
                $_SESSION['username'] = $data['user']['username'];
                $_SESSION['foto'] = $data['user']['foto'];
                $data['materiku'] = $this->model('Materi_model')->cariMateriku($_POST);
                $this->view('templates/header', $data);
                $this->view('materiku/cari', $data);
                $this->view('templates/footer');
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function detail($id)
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['materiku'] = $this->model('Materi_model')->getMateriByid($id);
            $_SESSION['username'] = $data['user']['username'];
            $this->view('templates/header', $data);
            $this->view('materiku/detail', $data);
            $this->view('templates/footer');
        } else {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['materiku'] = $this->model('Materi_model')->getMateriByid($id);
            $this->view('templates/header', $data);
            $this->view('materiku/detail', $data);
            $this->view('templates/footer');
        }
    }

    public function tambah()
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $_SESSION['username'] = $data['user']['username'];
            $this->view('templates/header', $data);
            $this->view('materiku/tambah', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubah($id)
    {
        if (isset($_SESSION['id'])) {
            $data['judul'] = 'Belajar Pemrograman Website | Ficoding';
            $data['user'] = $this->model('User_model')->getUserByid($_SESSION['id']);
            $data['materiku'] = $this->model('Materi_model')->getMateriByid($id);
            $_SESSION['username'] = $data['user']['username'];
            $this->view('templates/header', $data);
            $this->view('materiku/ubah', $data);
            $this->view('templates/footer');
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function hapus($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Materi_model')->hapus($id) > 0) {
                Flasher::setFlash('Berhasil', 'materiku telah dihapus', 'success');
                header('Location: ' . BASEURL . '/materiku');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Materiku tidak terhapus', 'danger');
                header('Location: ' . BASEURL . '/materiku');
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahMateriku($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Materi_model')->ubah($id, $_POST) > 0) {
                Flasher::setFlash('Berhasil', 'Materiku telah diubah', 'success');
                header('Location: ' . BASEURL . '/materiku/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Materiku tidak berubah', 'danger');
                header('Location: ' . BASEURL . '/materiku/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function hapusFoto1($id, $foto)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Materi_model')->hapusFoto1($id, $foto) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah dihapus', 'success');
                header('Location: ' . BASEURL . '/materiku/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak terhapus', 'danger');
                header('Location: ' . BASEURL . '/materiku/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function ubahFoto1($id)
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Materi_model')->ubahFoto1($id, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Foto telah diubah', 'success');
                header('Location: ' . BASEURL . '/materiku/ubah/' . $id);
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Foto tidak berubah', 'danger');
                header('Location: ' . BASEURL . '/materiku/ubah/' . $id);
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }

    public function tambahMateriku()
    {
        if (isset($_SESSION['id'])) {
            if ($this->model('Materi_model')->tambah($_POST, $_FILES) > 0) {
                Flasher::setFlash('Berhasil', 'Materi telah ditambahkan', 'success');
                header('Location: ' . BASEURL . '/materiku');
                exit;
            } else {
                Flasher::setFlash('Gagal', 'Materi tidak bertambah', 'danger');
                header('Location: ' . BASEURL . '/materiku');
                exit;
            }
        } else {
            header('Location: ' . BASEURL);
            exit;
        }
    }
}
