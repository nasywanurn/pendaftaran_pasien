<?php 
    session_start();
    include '../koneksi.php';
    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $data = mysqli_query($koneksi,"SELECT * FROM login WHERE nama='$nama' and password='$password'");
        $cek = mysqli_num_rows($data);

        if($cek > 0){
            $_SESSION['nama'] = $nama;
            $_SESSION['email'] = $email;
            $_SESSION['status'] = "login";
            ?>
            <script>
            alert('Login Berhasil');
            </script>
        <?php	
        }else{
            ?>
            <script>
            // alert('Login gagal');
            alert('Email atau password yang anda masukan salah');
            window.location = '../login.php';
            </script>
            <?php
        }
    }
    

    // class Pasien{
        
    //     public function index(){
    //         include '../koneksi.php';
    //         $pasien = mysqli_query($koneksi,"SELECT * FROM pasien");

    //         return $pasien;
    //     }
    // }
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Data Pasien</title>
        <!-- <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/simple-sidebar.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Data Pasien</title>
    </head>
    <body style="background-color:#6ADEFA">
        <div class="d-flex" id="wrapper">
            <div class="bg-primary border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <h2>Data Pasien</h2>
                </div>
                <!-- <div class="list-group list-group-flush">
                    <a href="profil.php" class="list-group-item list-group-item-action bg-primary"><i class="fa fa-user"></i>
                    Profil</a>
                </div> -->
            </div>
            <div id="page-content-wrapper">
                <!-- <nav class="navbar navbar-expand-lg navbar-primary bg-primary border-bottom">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active"></li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"> Profil </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> -->
                            <a href="../login.php">Keluar</a>               
                            <!-- <div class="dropdown-divider"></div> -->
                        <!-- </div> -->
                        </li>
                    </ul>
                    </div>
                </nav>
                <div id="page-content-wrapper">
                    <div class="container-fluid"> 
                    <br>
                        <div class="row">
                            <div class="col-md-12">
                                <fieldset>
                                    <legend>Data Pasien</legend>
                                    <a href="../pasien/create.php">
                                        <button name="simpan" class="btn btn-primary">Tambah Data Pasien</button>
                                    </a>
                                    <!-- <a class="btn-btn-primary" href="../pasien/create.php" role="button" style="bg-color=blue">Tambah Data Pasien</a> -->
                                    <table border="1">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Golongan Darah</th>
                                            <th>Alamat</th>
                                            <th>Pekerjaan</th>
                                            <th>No Telepon</th>
                                            <th>Unit Tujuan</th>
                                            <th>Pembayaran</th>
                                            <th colspan="11">Aksi</th>
                                        </tr>
                                        <?php
                                            include '../models/database.php';
                                            $pasien = new Pasien();
                                            $no = 1;
                                            // var_dump($pasien->index());exit;
                                            foreach ($pasien->index() as $data) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nama_pasien']; ?></td>
                                            <td><?php echo $data['tempat_lahir']; ?></td>
                                            <td><?php echo $data['tanggal_lahir']; ?></td>
                                            <td><?php echo $data['jenis_kelamin']; ?></td>
                                            <td><?php echo $data['golongan_darah']; ?></td>
                                            <td><?php echo $data['alamat']; ?></td>
                                            <td><?php echo $data['pekerjaan']; ?></td>
                                            <td><?php echo $data['no_telepon']; ?></td>
                                            <td><?php echo $data['unit_tujuan']; ?></td>
                                            <td><?php echo $data['pembayaran']; ?></td>
                                            
                                            <td>
                                                <a href="../pasien/edit.php?id=<?php echo $data['id']; ?>">
                                                <button >Edit</button></a>
                                            </td>
                                            <td>
                                                <form action="/pasien/proses.php" method="post">
                                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                    <input type="hidden" name="aksi" value="delete">
                                                    <button class="btn btn-danger" type="reset" name="simpan" onclick="return confirm('Apakah Anda Yakin Mau menghapus data ini ?')">
                                                        Delete
                                                    </button>
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../assets/jquery/jquery.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>