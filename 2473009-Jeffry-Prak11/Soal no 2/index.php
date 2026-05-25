<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: Arial, sans-serif; background: #f0f0f0; padding: 30px; }
        .container {
            background: white;
            max-width: 600px;
            margin: auto;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 20px;
        }
        h2 { text-align: center; margin-bottom: 15px; font-size: 20px; }
        .btn-tambah {
            display: inline-block;
            padding: 6px 14px;
            background: #5cb85c;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 13px;
            margin-bottom: 12px;
        }
        .btn-tambah:hover { background: #4cae4c; }
        table { width: 100%; border-collapse: collapse; font-size: 14px; }
        thead tr { border-bottom: 2px solid #ddd; }
        th { text-align: left; padding: 8px 10px; font-weight: bold; }
        td { padding: 8px 10px; border-bottom: 1px solid #eee; }
        .btn-edit {
            padding: 4px 10px;
            background: #5bc0de;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 12px;
            margin-right: 4px;
        }
        .btn-edit:hover { background: #31b0d5; }
        .btn-hapus {
            padding: 4px 10px;
            background: #d9534f;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 12px;
        }
        .btn-hapus:hover { background: #c9302c; }
    </style>
</head>
<body>
<div class="container">
    <h2>Data Siswa</h2>
    <a href="tambah.php" class="btn-tambah">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $query  = "SELECT * FROM siswa";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id']    . "</td>";
                echo "<td>" . $row['nama']  . "</td>";
                echo "<td>" . $row['kelas'] . "</td>";
                echo "<td>
                        <a href='edit.php?id=" . $row['id'] . "' class='btn-edit'>Edit</a>
                        <a href='hapus.php?id=" . $row['id'] . "' class='btn-hapus'
                           onclick='return confirm(\"Yakin hapus data ini?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4' style='text-align:center;'>Belum ada data.</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
