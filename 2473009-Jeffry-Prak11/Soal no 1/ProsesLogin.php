<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password == "admin") {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Berhasil</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        h2 { font-size: 24px; margin-bottom: 10px; }
        h1 { font-size: 40px; margin-bottom: 15px; }
        a { color: #3498db; text-decoration: underline; font-size: 20px; }
    </style>
</head>
<body>
    <h2>Login berhasil!</h2>
    <h1>Selamat datang, <b><?php echo $username; ?></b>.</h1>
    <a href="HalamanLogin.html">kembali ke halaman login</a>
</body>
</html>
<?php
} else {
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Gagal</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 30px; }
        h2 { font-size: 22px; color: red; margin-bottom: 10px; }
        a { color: #3498db; text-decoration: underline; font-size: 18px; }
    </style>
</head>
<body>
    <h2>Username : <?php echo $username; ?> Tidak Terdaftar!</h2>
    <a href="index.html">kembali ke halaman login</a>
</body>
</html>
<?php
}
?>