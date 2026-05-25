<?php
include 'koneksi.php';

$id    = $_POST['id'];
$nama  = $_POST['nama'];
$kelas = $_POST['kelas'];

$query = "UPDATE siswa SET nama='$nama', kelas='$kelas' WHERE id='$id'";

if ($conn->query($query)) {
    header("Location: index.php");
    exit();
} else {
    echo "Gagal mengupdate data: " . $conn->error;
}
?>
