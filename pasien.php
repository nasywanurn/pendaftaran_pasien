<?php
    class Pasien extends Database
    {
        // Menampilkan Semua Data
        public function index()
        {
            $dataPasien = mysqli_query($this->koneksi, "SELECT * FROM pasien");
            // var_dump($datadosen);
            return $dataPasien;
        }
        // Menambah Data
        public function create($nama_pasien, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $golongan_darah, $alamat, $pekerjaan, $no_telepon, $unit_tujuan, $pembayaran)
        {
            // echo 'nama: '.$nama_pasien.'<br>';
            // echo 'tempat lahir: '.$tempat_lahir.'<br>';
            // echo 'tanggal lahir: '.$tanggal_lahir.'<br>';
            // echo 'jk: '.$jenis_kelamin.'<br>';
            // echo 'goldar: '.$golongan_darah.'<br>';
            // echo 'alamat: '.$alamat.'<br>';
            // echo 'pekerjaan: '.$pekerjaan.'<br>';
            // echo 'no_telp: '.$no_telepon.'<br>'; 
            // echo 'unit: '.$unit_tujuan.'<br>';
            // echo 'pembayaran: '.$pembayaran.'<br>';exit;
            
            mysqli_query(
                $this->koneksi,
                "INSERT INTO pasien VALUES(null,'$nama_pasien', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$golongan_darah', '$alamat', '$pekerjaan', '$no_telepon', '$unit_tujuan', '$pembayaran')"
            );
        }
        // Menampilkan Data Berdasarkan ID
        public function show($id)
        {
            $dataPasien = mysqli_query(
                $this->koneksi,
                "SELECT * FROM pasien WHERE id='$id'"
            );
            return $dataPasien;
        }
        // Menampilkan data berdasarkan id
        public function edit($id)
        {
            $dataPasien = mysqli_query(
                $this->koneksi,
                "SELECT * FROM pasien WHERE id='$id'"
            );
            return $dataPasien;
        }
        // mengupdate data berdasarkan id
        public function update($id, $nama_pasien, $tempat_lahir, $tanggal_lahir, $jenis_kelamin, $golongan_darah, $alamat, $pekerjaan, $no_telepon, $unit_tujuan, $pembayaran)
        {
            // echo 'id: '.$id.'<br>';
            // echo 'nama: '.$nama_pasien.'<br>';
            // echo 'tempat lahir: '.$tempat_lahir.'<br>';
            // echo 'tanggal lahir: '.$tanggal_lahir.'<br>';
            // echo 'jk: '.$jenis_kelamin.'<br>';
            // echo 'goldar: '.$golongan_darah.'<br>';
            // echo 'alamat: '.$alamat.'<br>';
            // echo 'pekerjaan: '.$pekerjaan.'<br>';
            // echo 'no_telp: '.$no_telepon.'<br>'; 
            // echo 'unit: '.$unit_tujuan.'<br>';
            // echo 'pembayaran: '.$pembayaran.'<br>';exit;
            mysqli_query(
                $this->koneksi,
                "UPDATE pasien SET nama_pasien='$nama_pasien', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', golongan_darah='$golongan_darah', alamat='$alamat', pekerjaan='$pekerjaan', no_telepon='$no_telepon', unit_tujuan='$unit_tujuan', pembayaran='$pembayaran' WHERE id='$id'"
            );
        }

        // menghapus data berdasarkan id
        public function delete($id)
        {
            mysqli_query($this->koneksi, "DELETE FROM pasien WHERE id='$id'");
        }
    }
?>