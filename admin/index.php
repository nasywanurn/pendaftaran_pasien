<?php
session_start();
if (!$_SESSION['simpan']) {
    echo "<script type='text/javascript'>
        alert('Maaf anda harus login terlebih dahulu!');
            window.location = '/../pendaftaran_pasien/login.php'
        </script>";
} else {
    include('../models/database.php');
    $user = new Database();
    $user = mysqli_query(
        $user->koneksi,
        "SELECT * FROM users WHERE password='$_SESSION[simpan]'"
    );
    // var_dump($_SESSION['login']);
    $user = mysqli_fetch_array($user); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <nav>
        <a href="">Menu 1</a> |
        <a href="">Menu 2</a> |
        <a href="../logout.php">Logout</a>
    </nav>    
    </center>
    <center>Hello <?php echo $data['nama']; ?></center>
    Masukan kreasi sendiri
</body>
</html>
<?php } ?>