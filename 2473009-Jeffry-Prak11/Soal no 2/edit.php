<?php
include 'koneksi.php';

$id     = $_GET['id'];
$query  = "SELECT * FROM siswa WHERE id = '$id'";
$result = $conn->query($query);
$row    = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f0f0f0; padding: 30px; }
        .container {
            background: white;
            max-width: 400px;
            margin: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 25px;
        }
        h2 { text-align: center; margin-bottom: 20px; font-size: 18px; }
        label { display: block; font-size: 14px; margin-bottom: 4px; }
        input[type="text"] {
            width: 100%;
            padding: 6px 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
            margin-bottom: 15px;
        }
        .btn-update {
            padding: 6px 16px;
            background: #5cb85c;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 13px;
            margin-right: 6px;
        }
        .btn-update:hover { background: #4cae4c; }
        .btn-kembali {
            display: inline-block;
            padding: 6px 16px;
            background: #5bc0de;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 13px;
        }
        .btn-kembali:hover { background: #31b0d5; }
    </style>
</head>
<body>
<div class="container">
    <h2>Edit Data Siswa</h2>
    <form action="proses_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required>

        <label>Kelas:</label>
        <input type="text" name="kelas" value="<?php echo $row['kelas']; ?>" required>

        <button type="submit" class="btn-update">Update</button>
        <a href="index.php" class="btn-kembali">Kembali</a>
    </form>
</div>
</body>
</html>
