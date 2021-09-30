<?php
session_start();
// include 'models/database.php';
// if (isset($_POST['simpan'])) {
//     $db = new Database();
//     $email = $_POST['email'];
//     $pass = md5($_POST['password']);
//     $result = mysqli_query(
//         $db->koneksi,
//         "SELECT * FROM users WHERE email='$email' and password='$pass'"
//     );
//     $row = mysqli_num_rows($result);
//     // var_dump($row);
//     if ($row > 0) {
//         $_SESSION['simpan'] = $pass;
//         echo "<script type='text/javascript'>
//         alert('Login Berhasil!')
//             window.location = 'admin/index.php'
//         </script>";
//         // ;
//     } else {
//        echo "<script type='text/javascript'>
//         alert('Email atau Password Anda Salah!')
//             window.location = 'login.php'
//         </script>";
//     }
// }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css"/>
    </head>
    <body>
        <section class="bg-danger">
            <div class="container" style="height: 700px; ">
                <div class="row">
                
                    <div class="col-md-4 col-md-offset-4">
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">Login</div>
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="../pendaftaran_pasien/pasien/index.php">

                                    <div class="form-group">
                                        <label for="username" class="col-md-4 control-label">Nama</label>
                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control" name="nama" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email" class="col-md-4 control-label">Email</label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" required autofocus>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="col-md-4 control-label">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" name="simpan" class="btn btn-primary" style="float:right">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    </body>
</html>