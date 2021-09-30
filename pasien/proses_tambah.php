<?php
    include("koneksi.php");
    if(isset($_POST['simpan'])){
        $nama_folder = $_POST['nama_folder'];
        $sql = "INSERT INTO pasien
        (nama_pasien)
        VALUES ('$nama_pasien')";
        $query = mysqli_query($db, $sql);
        if( $query ){
            header('Location: index.php');
        } else {    
            header('Location: index.php');
        }
    }
    else {
        die("akses dilarang...");
    }
?>
