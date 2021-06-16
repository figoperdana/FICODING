<?php

class Materi_model
{
    private $db;

    function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $query = "SELECT * FROM materi";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getMateriByid($id)
    {
        $query = "SELECT b.id as id, b.id_user as id_user , u.nama as nama_user , u.email as email , u.nomor_telepon as nomor_telepon , u.alamat as alamat , u.foto as foto_user , u.cover as cover , u.created_at as created_at_user , u.updated_at as updated_at_user , b.id_kategori as id_kategori , k.kategori as kategori , b.nama as nama , b.deskripsi as deskripsi , b.created_at as created_at , b.foto1 as foto1
        FROM materi b JOIN kategori k on (b.id_kategori=k.id)
        JOIN users u on (b.id_user=u.id)
        WHERE b.id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getMateriUser($id)
    {
        $query = "SELECT b.id as id, b.id_user as id_user , u.nama as nama_user , u.email as email , u.nomor_telepon as nomor_telepon , u.alamat as alamat , u.foto as foto_user , u.cover as cover , u.created_at as created_at_user , u.updated_at as updated_at_user , b.id_kategori as id_kategori , k.kategori as kategori , b.nama as nama , b.deskripsi as deskripsi , b.created_at as created_at , b.foto1 as foto1
        FROM materi b JOIN kategori k on (b.id_kategori=k.id)
        JOIN users u on (b.id_user=u.id)
        WHERE b.id_user = :id_user";

        $this->db->query($query);
        $this->db->bind('id_user', $id);
        return $this->db->resultSet();
    }

    public function cari($data)
    {
        $keyword = $data['cari'];

        $query = "SELECT b.id as id, b.id_user as id_user , u.nama as nama_user , u.email as email , u.nomor_telepon as nomor_telepon , u.alamat as alamat , u.foto as foto_user , u.cover as cover , u.created_at as created_at_user , u.updated_at as updated_at_user , b.id_kategori as id_kategori , k.kategori as kategori , b.nama as nama , b.deskripsi as deskripsi , b.created_at as created_at , b.foto1 as foto1
        FROM materi b JOIN kategori k on (b.id_kategori=k.id)
        JOIN users u on (b.id_user=u.id)
        WHERE b.nama like :cari";

        $this->db->query($query);
        $this->db->bind('cari', "%$keyword%");
        return $this->db->resultSet();
    }

    public function cariMateriku($data)
    {
        $keyword = $data['cari'];

        $query = "SELECT b.id as id, b.id_user as id_user , u.nama as nama_user , u.email as email , u.nomor_telepon as nomor_telepon , u.alamat as alamat , u.foto as foto_user , u.cover as cover , u.created_at as created_at_user , u.updated_at as updated_at_user , b.id_kategori as id_kategori , k.kategori as kategori , b.nama as nama , b.deskripsi as deskripsi , b.created_at as created_at , b.foto1 as foto1
        FROM materi b JOIN kategori k on (b.id_kategori=k.id)
        JOIN users u on (b.id_user=u.id)
        WHERE b.nama like :cari AND b.id_user = :id_user ";

        $this->db->query($query);
        $this->db->bind('cari', "%$keyword%");
        $this->db->bind('id_user', $_SESSION['id']);
        return $this->db->resultSet();
    }

    public function getFrontEnd()
    {
        $query = "SELECT b.id as id, b.id_user as id_user , u.nama as nama_user , u.email as email , u.nomor_telepon as nomor_telepon , u.alamat as alamat , u.foto as foto_user, u.created_at as created_at_user , u.updated_at as updated_at_user , b.id_kategori as id_kategori , k.kategori as kategori , b.nama as nama, b.deskripsi as deskripsi , b.created_at as created_at , b.foto1 as foto1
        FROM materi b JOIN kategori k on (b.id_kategori=k.id)
        JOIN users u on (b.id_user=u.id)
        WHERE b.id_kategori = :id";

        $this->db->query($query);
        $this->db->bind('id', 1);
        return $this->db->resultSet();
    }

    public function getBackEnd()
    {
        $query = "SELECT b.id as id, b.id_user as id_user , u.nama as nama_user , u.email as email , u.nomor_telepon as nomor_telepon , u.alamat as alamat , u.foto as foto_user, u.created_at as created_at_user , u.updated_at as updated_at_user , b.id_kategori as id_kategori , k.kategori as kategori , b.nama as nama , b.deskripsi as deskripsi , b.created_at as created_at , b.foto1 as foto1
        FROM materi b JOIN kategori k on (b.id_kategori=k.id)
        JOIN users u on (b.id_user=u.id)
        WHERE b.id_kategori = :id";

        $this->db->query($query);
        $this->db->bind('id', 2);
        return $this->db->resultSet();
    }

    public function tambah($data, $file)
    {

        $fotolok1 = $file['foto1']['tmp_name'];
        $foto1   = $file['foto1']['name'];
        $foto1_baru = date('dmYHis') . $foto1;
        $direktori1   = './app/models/materi/' . $foto1_baru;

        $tanggal = date('Y-m-d');

        $query = "INSERT INTO materi 
        (id_user , nama, id_kategori, deskripsi, created_at, foto1) 
        VALUES 
        (:id_user , :nama , :id_kategori , :deskripsi , :created_at , :foto1)";

        $this->db->query($query);

        $this->db->bind('id_user', $_SESSION['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kategori', $data['kategori']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('created_at', $tanggal);

        if (!empty($fotolok1)) {
            move_uploaded_file($fotolok1, $direktori1);
            $this->db->bind('foto1', $foto1_baru);
        } else {
            $this->db->bind('foto1', "");
        }

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubah($id, $data)
    {
        $query = "UPDATE materi SET id_kategori = :id_kategori , nama = :nama , deskripsi = :deskripsi WHERE id = :id ";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('id_kategori', $data['kategori']);
        $this->db->bind('deskripsi', $data['deskripsi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM materi WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahFoto1($id, $file)
    {
        $data['materi'] = $this->getMateriByid($id);

        $lokasi_file = $file['foto1']['tmp_name'];
        $nama_file   = $file['foto1']['name'];
        $foto_baru = date('dmYHis') . $nama_file;
        $direktori_file   = './app/models/materi/' . $foto_baru;

        $query = "UPDATE materi SET foto1 = :foto WHERE id = :id";

        if (file_exists('./app/models/materi/' . $data['materi']['foto1'])) {
            if (unlink('./app/models/materi/' . $data['materi']['foto1'])) {
                if (move_uploaded_file($lokasi_file, $direktori_file)) {
                    $this->db->query($query);
                    $this->db->bind('foto', $foto_baru);
                    $this->db->bind('id', $id);
                    $this->db->execute();
                    return $this->db->rowCount();
                } else {
                    return null;
                }
            } else {
                return null;
            }
        } else {
            if (move_uploaded_file($lokasi_file, $direktori_file)) {
                $this->db->query($query);
                $this->db->bind('foto', $foto_baru);
                $this->db->bind('id', $id);
                $this->db->execute();
                return $this->db->rowCount();
            } else {
                return null;
            }
        }
    }


    public function hapusFoto1($id, $foto)
    {
        unlink('./app/models/materi/' . $foto);
        $query = " UPDATE `materi` SET `foto1` = '' WHERE `id`  = :id ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

}
