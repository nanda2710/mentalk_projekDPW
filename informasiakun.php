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
    <title>MenTal(k) - Informasi Akun</title>
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
        .drop4:hover {
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
                        <a class="nav-link" href="home.php">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog-login.php">BLOG</a>
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
                                <a class="dropdown-item drop2" href="informasiakun.php">Ubah Informasi Akun</a>
                                <a class="dropdown-item drop3" href="changepassword-pasien.php">Ubah Kata Sandi</a>
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
                        <h5 class="card-title" align="center">INFORMASI AKUN</h5>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 sidebar">
                                <form action="informasiakun.php" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="username">Username</label>
                                            <input type="username" class="form-control" name="username"
                                                required="required" placeholder="Ubah Username">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="nama" class="form-control" name="nama" required="required"
                                                placeholder="Ubah Nama Lengkap">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="no_hp">No. Handphone</label>
                                            <input type="no_hp" class="form-control" name="no_hp" required="required"
                                                placeholder="Ubah Nomor Handphone">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" required="required"
                                                placeholder="Ubah Email">
                                            <button type="submit" class="btn btn-outline-info" name="submit"
                                                value="Rubah">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-sm-12 content">
                                <img class="img-fluid" src="img/informasi.png" alt="Responsive image"
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
    mysql_select_db("data_pasien") or die("Cannot connect to database"); //Connect to database
    
    
    //proses ganti informasi akun
    if (isset($_POST['submit'])) {
        session_start();
    $user             = $_SESSION['user'];
    $username         = $_POST['username'];
    $nama             = $_POST['nama'];
    $no_hp            = $_POST['no_hp'];
    $email            = $_POST['email'];  
    
    
    $sql = mysql_query ("SELECT * FROM pasien WHERE username='$user'");
    $hasil = mysql_num_rows ($sql);
    if (! $hasil > 0) {
        ?>
            <script language="JavaScript">
            alert('Data tidak sesuai!, silahkan ulang kembali!');
            alert($user);
            document.location='informasiakun.php';
            </script>
        <?php
    }
    //validasi data data kosong
    else if (empty($_POST['username']) || empty($_POST['nama']) || empty($_POST['no_hp']) || empty($_POST['email'])) {
        ?>
            <script language="JavaScript">
            alert('Data Tidak Boleh Kosong.');
            document.location='informasiakun.php';
            </script>
        <?php 
    }
    else {
    //update data
    $query = "UPDATE pasien SET username='$username', nama_lengkap='$nama', no_hp='$no_hp', email='$email' WHERE username='$user'";
    $sql = mysql_query ($query);
    //setelah berhasil update
    if ($sql) {
        ?>
            <script language="JavaScript">
            alert('Informasi Akun, Berhasil Diupdate!');
            document.location='informasiakun.php';
            </script>
        <?php   
    } else {
        echo "<h3><font color=red><center>Ganti Password Gagal!</center></font></h3>";  
         ?>
            <script language="JavaScript">
            alert('Informasi Akun Gagal Diupdate.');
            document.location='informasiakun.php';
            </script>
        <?php   
    }
    }
    }
?>