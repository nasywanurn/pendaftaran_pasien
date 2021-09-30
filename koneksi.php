<?php 
$koneksi = mysqli_connect("localhost","root","","pendaftaran_pasien");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>