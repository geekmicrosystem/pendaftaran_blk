<?php
session_start();

include 'koneksi.php';

$sql = 'SELECT siswa.*, kejuruan.nm_kejuruan AS kejuruan 
FROM siswa
JOIN kejuruan ON kejuruan.id = siswa.id_kejuruan';
$siswa = mysqli_query($conn, $sql);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- CSS Datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <style>
        img {
            height: 50px;
            width: 50px;
        }

        .footer {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .card1 {
            padding-right: 100px;
            padding-left: 100px;
        }

        th,
        td {
            white-space: nowrap;
        }

        div.dataTables_wrapper {
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#home"><img src="img/logo.png" alt=""> Sistem Pendaftaran Online BLK</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Pendaftar<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php">Data Pendaftar</a>
                    </li>
                    <li class="">
                        <a href="" class="btn btn-primary">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Jumbotron -->
    <section id="home">
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1 class="display-4">Data Calon Peserta Pelatihan</h1>
            </div>
        </div>
    </section>

    <!-- Data Pendaftar -->
    <section class="mb-5">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped" id="tbSiswa">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tempat</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>HP</th>
                            <th>Jenis Kelamin</th>
                            <th>Sekolah</th>
                            <th>Kejuruan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($siswa)) {
                        ?>
                            <tr>
                                <th><?= $no++; ?></th>
                                <th><?= $row['nm_lengkap']; ?></th>
                                <td><?= $row['tempat']; ?></td>
                                <td><?= $row['tgl_lahir']; ?></td>
                                <td><?= $row['alamat']; ?></td>
                                <td><?= $row['hp']; ?></td>
                                <td><?= $row['jk']; ?></td>
                                <td><?= $row['sekolah']; ?></td>
                                <td><?= $row['kejuruan']; ?></td>
                                <td>
                                    <a href="" class="btn btn-success">Ubah</i></a>
                                    <a href="hapus.php?id=<?=$row['id']?>" class="btn btn-danger">Hapus</i></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-center text-white">
        <small>
            Copyright &copy; 2022 Sistem Pendaftaran Online BLK
        </small>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tbSiswa').DataTable();
        });
    </script>
</body>

</html>