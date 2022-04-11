<?php 
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id = '$id'";
mysqli_query($conn, $sql);
?>

<script>
    alert('Hapus berhasil!');
    window.location.href="view.php"
</script>