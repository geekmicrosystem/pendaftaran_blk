<?php
session_start();

include 'koneksi.php';

$sql = 'SELECT * FROM kejuruan';
$kejuruan = mysqli_query($conn, $sql);

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
                        <a class="nav-link" href="index.php">Pendaftaran <span class="sr-only">(current)</span></a>
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
                <h1 class="display-4">Pendaftaran Calon Peserta Pelatihan</h1>
            </div>
        </div>
    </section>

    <!-- Pendaftaran Peserta BLK -->
    <section id="pendaftar">

        <div class="col-md-8 col-md-12 card1">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong>Input Pendaftaran</strong>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap....">
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="">Tempat</label>
                                <input type="text" name="tempat" class="form-control" placeholder="Masukan Tempat Tinggal....">
                            </div>
                            <div class="col-md-6">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Tinggal....">
                        </div>
                        <div class="form-group">
                            <label for="">No HP</label>
                            <input type="text" name="hp" class="form-control" placeholder="Masukan No HP.....">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Jenis Kelamin</strong></label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" value="L" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jk" value="P">
                                <label class="form-check-label" for="exampleRadios2">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Asal Sekolah</label>
                            <input type="text" name="sekolah" class="form-control" placeholder="Masukan Asal Sekolah....">
                        </div>
                        <div class="form-group">
                            <label for="">Kejuruan</label>
                            <select name="kejuruan" id="" class="form-control">
                                <?php
                                while ($row = mysqli_fetch_assoc($kejuruan)) {
                                ?>
                                    <option value="<?= $row['id']; ?>"><?= $row['nm_kejuruan']; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
                    </form>
                </div>
            </div>

        </div>
        </div>

    </section>

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

<?php

if (isset($_POST['submit'])) {
    $date = date('Y-m-d H:i:s');
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];
    $jenis_kelamin = $_POST['jk'];
    $sekolah = $_POST['sekolah'];
    $kejuruan = $_POST['kejuruan'];

    $insert = mysqli_query($conn, "INSERT INTO siswa VALUES (NULL, '$date', '$nama', '$tempat', '$tanggal_lahir', '$alamat', '$hp', '$jenis_kelamin', '$sekolah', '$kejuruan')");
    if ($insert) {
        echo "
        $result = mysqli_query($conn, 'SELECT siswa.*, kejuruan.nm_kejuruan AS kejuruan  FROM siswa JOIN kejuruan ON kejuruan.id = siswa.id_kejuruan');
$row = mysqli_fetch_row($result);
        $row=mysql_fetch_row($result);

        <section class='mb-5'>
        <div class='container'>
            <div class='table-responsive'>
                <table class='table table-striped' id='tbSiswa'>
                    <thead>
                        <tr>
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
                        <tr>
                            <th><?= $row[2]; ?></th>
                            <td><?= $row[3]; ?></td>
                            <td><?= $row[4]; ?></td>
                            <td><?= $row[5]; ?></td>
                            <td><?= $row[6]; ?></td>
                            <td><?= $row[7]; ?></td>
                            <td><?= $row[8]; ?></td>
                            <td><?= $row[9]; ?></td>
                            <td>
                                <a href='' class='btn btn-success'>Ubah</i></a>
                                <a href='' class='btn btn-danger'>Hapus</i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>";
    } else {
        echo 'Data tidak bisa disimpan';
    }
}
?>