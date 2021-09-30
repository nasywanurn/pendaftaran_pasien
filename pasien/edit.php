<?php
    // class Pasien{
        
    //     public function index(){
    //         include '../koneksi.php';
    //         $pasien = mysqli_query($koneksi);

    //         return $pasien;
    //     }
    // }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Edit Data Pasien</title>
  </head>
  <body>

    <?php
        include '../models/database.php';
        $pasien = new Pasien();
        foreach ($pasien->edit($_GET['id']) as $data) {
            $id = $data['id'];
            $nama_pasien = $data['nama_pasien'];
            $tempat_lahir = $data['tempat_lahir'];
            $tanggal_lahir = $data['tanggal_lahir'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $golongan_darah = $data['golongan_darah'];
            $alamat = $data['alamat'];
            $pekerjaan = $data['pekerjaan'];
            $no_telepon = $data['no_telepon'];
            $unit_tujuan = $data['unit_tujuan'];
            $pembayaran = $data['pembayaran'];
        }
    ?>
    <fieldset>
        <legend>Edit Data Pasien</legend>
        <form action="proses.php" method="post">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama Pasien</th>
                    <td><input type="text" name="nama_pasien" value="<?php echo $nama_pasien; ?>" required></td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td><input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>" required></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="text" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" required></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="text" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>" required></td>
                </tr>
                <tr>
                    <th>Golongan Darah</th>
                    <td><input type="text" name="golongan_darah" value="<?php echo $golongan_darah; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat" value="<?php echo $alamat; ?>" required></td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <td><input type="text" name="pekerjaan" value="<?php echo $pekerjaan; ?>" required></td>
                </tr>
                <tr>
                    <th>No Telepon</th>
                    <td><input type="text" name="no_telepon" value="<?php echo $no_telepon; ?>" required></td>
                </tr>
                <tr>
                    <th>Unit Tujuan</th>
                    <td><input type="text" name="unit_tujuan" value="<?php echo $unit_tujuan; ?>" required></td>
                </tr>
                <tr>
                    <th>Pembayaran</th>
                    <td><input type="text" name="pembayaran" value="<?php echo $pembayaran; ?>" required></td>
                </tr>

                <tr>
                    <th><input type="submit" name="simpan" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>