<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    <title>MenTal(k) - Ubah Kata Sandi</title>
    <style type="text/css">
        .btn {
            border-radius: 20px;
            background-color: #6aadaa;
            color: white;
            padding-left: 20px;
            padding-right: 20px;
            height: 33px;
            width: 90px;
        }
        .drop4:hover {
            background-color: #6aadaa;
            color: white;
        }

        .drop1:hover {
            background-color: #6aadaa;
            color: white;
        }

        .drop2:hover {
            background-color: #6aadaa;
            color: white;
        }

        .drop3:hover {
            background-color: #6aadaa;
            color: white;
        }
        .drop5:hover {
            background-color: #6aadaa;
            color: white;
        }
    </style>
</head>
<?php
session_start();
if($_SESSION['user']) {  
}
else {
    header("location:index.php");
}
$user = $_SESSION['user'];
?>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <a class="navbar-brand" href="#" style="font-size: 36px; padding-left: 100px;">MenTal(k)</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content">
                    <li class="nav-item">
                        <a class="nav-link" href="home-dokter.php">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog-login-dokter.php">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pasien.php">DATA PASIEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chatKonselingDokter.php">KONSELING</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Hi, <?php Print "$user"?>
                        </a>
                        <div class="dropdown-menu dropright" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item dropdown-toggle drop1" href="#" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengaturan Akun</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item drop3" href="changepassword.php">Ubah Kata Sandi</a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item drop5" href="index.php">Keluar</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align="center">Ubah Kata Sandi</h5>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 sidebar">
                                <form action="changepassword.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="password">Kata Sandi Lama</label>
                                            <input type="password_lama" class="form-control" name="password_lama"
                                                required="required" placeholder="Masukan Password Lama">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="password_baru">Kata Sandi Baru</label>
                                            <input type="password" class="form-control" name="password_baru"
                                                required="required" placeholder="Masukan Password Baru">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="konfirmasi_password">Konfirmasi Kata Sandi</label>
                                            <input type="password" class="form-control" name="konfirmasi_password"
                                                required="required" placeholder="Masukan Konfirmasi Password">
                                        </div>
                                        <div class="form-group col-md-10">
                                            <button type="submit" class="btn btn-outline-info" name="submit"
                                                value="Rubah">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-sm-12 content">
                                <img class="img-fluid" src="img/pass.png" alt="Responsive image"
                                    style="padding-left: 90px;">
                                <img class="img-fluid" src="img/e.png" alt="Responsive image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p style="padding-top: 10px;">
            Kelompok MentalMantul, Copyright &copy 2020.
        </p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
    mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
    mysql_select_db("dokter") or die("Cannot connect to database"); //Connect to database
    
    //proses ganti password
    if (isset($_POST['submit'])) {
    $username        = $_SESSION['user'];
    $password_lama    = $_POST['password_lama'];
    $password_baru    = $_POST['password_baru'];
    $konf_password    = $_POST['konfirmasi_password'];
    //cek old password
    //$query = "SELECT password FROM pasien WHERE password ='$password_lama'";
    $sql = mysql_query ("SELECT password FROM dokter WHERE password ='$password_lama'");
    $hasil = mysql_num_rows ($sql);
    if (! $hasil > 0) {
        ?>
            <script language="JavaScript">
            alert('Password lama tidak sesuai!, silahkan ulang kembali!');
            document.location='changepassword.php';
            </script>
        <?php
            unset($_SESSION['user']);
            session_destroy();
    }
    //validasi data data kosong
    else if (empty($_POST['password_baru']) || empty($_POST['konfirmasi_password']) || empty($_POST['password_lama'])) {
        ?>
            <script language="JavaScript">
            alert('Ganti Password Gagal! Data Tidak Boleh Kosong.');
            document.location='changepassword.php';
            </script>
        <?php   
    }
    //validasi input konfirm password
    else if (($_POST['password_baru']) != ($_POST['konfirmasi_password'])) {
            echo "<h3><font color=red><center>Ganti Password Gagal! Password dan Konfirm Password Harus Sama.</center></font></h3>"; 
        ?>
            <script language="JavaScript">
            alert('Ganti Password Gagal! Password dan Konfirmasi Password Harus Sama.');
            document.location='changepassword.php';
            </script>
        <?php   

    }
    else {
    //update data
    $query = "UPDATE dokter SET password='$password_baru' WHERE username='$username'";
    $sql = mysql_query ($query);
    //setelah berhasil update
    if ($sql) {
        ?>
            <script language="JavaScript">
            alert('Ganti password berhasil!');
            document.location='changepassword.php';
            </script>
        <?php   
    } else {
        ?>
            <script language="JavaScript">
            alert('Ganti Password Gagal!');
            document.location='changepassword.php';
            </script>
        <?php      
    }
    }
    }
?>