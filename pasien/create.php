<?php
    class Pasien{
        
        public function index(){
            include '../koneksi.php';
            $pasien = mysqli_query($koneksi);

            return $pasien;
        }
    }
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Create Data Pasien</title>
    </head>
    <body>
        <section>
                <div class="container" style="height: 700px; ">
                    <div class="row">  
                        <div class="col-md-4 col-md-offset-4">          
                            <div class="panel panel-default">
                                <fieldset>
                                    <legend>Tambah Data Pasien</legend>
                                    <form action="proses.php" method="post">
                                        <input type="hidden" name="aksi" value="create">
                                        <input type="hidden" name="id">
                                        <table>
                                            <tr>
                                                <th>Nama Pasien</th>
                                                <td><input type="text" name="nama_pasien" required></td>
                                            </tr>
                                            <tr>
                                                <th>Tempat Lahir</th>
                                                <td><input type="text" name="tempat_lahir" required></td>
                                            </tr>
                                            <tr>
                                                <th>Tanggal Lahir</th>
                                                <td><input type="date" name="tanggal_lahir" required></td>
                                            </tr>
                                            <tr>
                                                <th>Jenis Kelamin</th>
                                                <td><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki  
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Golongan Darah</th>
                                                <td><input type="text" name="golongan_darah" required></td>
                                            </tr>
                                            <tr>
                                                <th>Alamat</th>
                                                <td><input type="text" name="alamat" required></td>
                                            </tr>
                                            <tr>
                                                <th>Pekerjaan</th>
                                                <td><input type="text" name="pekerjaan" required></td>
                                            </tr>
                                            <tr>
                                                <th>No Telepon</th>
                                                <td><input type="text" name="no_telepon" required></td>
                                            </tr>
                                            <tr>
                                                <th>Unit Tujuan</th>
                                                <td><input type="text" name="unit_tujuan" required></td>
                                            </tr>
                                            <tr>
                                                <th>Pembayaran</th>
                                                <td>
                                                    <select name="pembayaran" id="">
                                                        <option value="Asuransi/jaminan kesehatan">Asuransi/jaminan kesehatan</option>
                                                        <option value="Umum/Mandiri">Umum/Mandiri</option>
                                                    </select>    
                                            </tr>

                                            <tr>
                                                <th></th>
                                                <td><input type="submit" name="simpan" value="Simpan"></td>
                                            </tr>
                                        </table>
                                    </form>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>