<?php

class Flasher
{

    public static function header()
    {
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            $foto = $_SESSION['foto'];
            $fotoprofil = BASEURL . "/app/models/foto/$foto";
            $profil = BASEURL . "/profil";
            $materiku = BASEURL . "/materiku";
            $pengaturan = BASEURL . "/pengaturan";
            $logout = BASEURL . "/home/logout";
            $pendaftaran = BASEURL . "/home/pendaftaran";

            echo "<ul class='nav nav-pills navbar-nav p-2'>
				<li class='nav-item dropdown '>
                    <a class='nav-link dropdown-toggle' href='#' id='akun' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='color:black'>
                    <img class = 'mr-2' src='$fotoprofil' width = '30px' height = '30px'>$username
                    </a>
					<div class='dropdown-menu dropdown-menu-right mt-2' aria-labelledby='akun'>
                        <a class='dropdown-item' href='$profil'>Profil</a>
                        <a class='dropdown-item' href='$materiku'>Materi Saya</a>
                        <a class='dropdown-item' href='$pengaturan'>Pengaturan</a>
                        <a class='dropdown-item' href='$pendaftaran'>Pendaftaran Pemateri</a>
                        <div class='dropdown-divider'></div>
						<a class='dropdown-item' href='$logout'>Logout</a>
					</div>
				</li>
			</ul>";
        } else {
            echo "<a class='nav navbar-nav btn btn-outline-primary p-2' href='#' data-toggle='modal' data-target='#formLogin'>Login</a>";
        }
    }

    public static function setFlash($pesan, $aksi, $tipe)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
        ];
    }

    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">
                    <strong>' . $_SESSION['flash']['pesan'] . '!</strong> ' . $_SESSION['flash']['aksi'] . '
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }
}
