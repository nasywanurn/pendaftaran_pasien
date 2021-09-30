<?php

    include '../models/database.php';
    //include ('koneksi.php');
     
    $pasien = new Pasien();

    if (isset($_POST['simpan'])) {
        $aksi = $_POST['aksi'];
        $id = @$_POST['id'];
        $nama_pasien = $_POST['nama_pasien'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $golongan_darah = $_POST['golongan_darah'];
        $alamat = $_POST['alamat'];
        $pekerjaan = $_POST['pekerjaan'];
        $no_telepon = $_POST['no_telepon'];
        $unit_tujuan = $_POST['unit_tujuan'];
        $pembayaran = $_POST['pembayaran'];

        // print_r($_POST);exit;
        // $sql = "INSERT INTO pasien
        // (nama_pasien, tempat_lahir, tanggal_lahir, umur, jenis_kelamin, golongan_darah, alamat, pekerjaan, no_telepon, poli_tujuan, pembayaran)
        // VALUES ('$nama_pasien', '$tempat_lahir', '$tanggal_lahir', '$umur', '$jenis_kelamin', '$golongan_darah', '$alamat', '$pekerjan', '$no_telepon', '$poli_tujuan', '$pembayaran')";
        // $query = mysqli_query($db, $sql);

        if ($aksi == "create") {
            //var_dump($_POST);exit;
            $pasien->create($nama_pasien, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $golongan_darah, $alamat, $pekerjaan, $no_telepon, $unit_tujuan, $pembayaran);
        //     $sql = "INSERT INTO pasien
        // (nama_pasien, tempat_lahir, tanggal_lahir, umur, jenis_kelamin, golongan_darah, alamat, pekerjaan, no_telepon, poli_tujuan, pembayaran)
        // VALUES ('$nama_pasien', '$tempat_lahir', '$tanggal_lahir', '$umur', '$jenis_kelamin', '$golongan_darah', '$alamat', '$pekerjan', '$no_telepon', '$poli_tujuan', '$pembayaran')";
        // $query = mysqli_query($db, $sql);
            header("location:index.php");
        } elseif ($aksi == "update") {
            // var_dump($_POST);exit;
            $pasien->update($id, $nama_pasien, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $golongan_darah, $alamat, $pekerjaan, $no_telepon, $unit_tujuan, $pembayaran);
            header("location:index.php");
        } elseif ($aksi == "delete") {
            $pasien->delete($id);
            header("location:index.php");
        }

    }

?>