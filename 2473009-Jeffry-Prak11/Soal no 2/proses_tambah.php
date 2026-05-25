<?php
include 'koneksi.php';

$nama  = $_POST['nama'];
$kelas = $_POST['kelas'];

$query = "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')";

if ($conn->query($query)) {
    header("Location: index.php");
    exit();
} else {
    echo "Gagal menambah data: " . $conn->error;
}
?>
