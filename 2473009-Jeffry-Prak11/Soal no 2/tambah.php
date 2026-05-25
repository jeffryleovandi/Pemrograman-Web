<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>
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
        .btn-simpan {
            padding: 6px 16px;
            background: #5cb85c;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 13px;
            margin-right: 6px;
        }
        .btn-simpan:hover { background: #4cae4c; }
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
    <h2>Tambah Data Siswa</h2>
    <form action="proses_tambah.php" method="post">
        <label>Nama:</label>
        <input type="text" name="nama" required>

        <label>Kelas:</label>
        <input type="text" name="kelas" required>

        <button type="submit" class="btn-simpan">Simpan</button>
        <a href="index.php" class="btn-kembali">Kembali</a>
    </form>
</div>
</body>
</html>
