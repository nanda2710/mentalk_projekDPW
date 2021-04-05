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
    <title>MenTal(k) - Blog</title>
    <style type="text/css">
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
                        <img class="img-fluid" src="img/P1.png" alt="Responsive image"
                            style="float: left; padding-right: 25px;">
                        <h5 class="card-title" style="text-align: left; color: #6aadaa;">Simak Langkah-Langkah
                            Bermitra dengan MenTal(k)!</h5>
                        <p class="card-text" style="text-align: left; color: black; font-size: 18px;"><strong>Ingin
                                tahu cara menjadi mitra dari MenTal(k)?</strong></p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 14px;">Setiap dokter
                            spesialis kejiwaan yang sudah bekerja di pemerintah, BUMD, BUMN ataupun lembaga lainnya
                            dapat bergabung bersama MenTal(k). MenTal(k) terbuka untuk semua orang yang minat
                            bergabung dengan MenTal(k).</p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 14px;">Tertarik untuk
                            bergabung bersama MenTal(k)? untuk informasi lebih lanjut silakan hubungi
                            mitra@mentalk.co.id</p>
                        <a href="artikel1-1.php" class="btn btn-outline-info">Baca lebih lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="card-deck" style="padding-top: 20px;">
                    <div class="card">
                        <img class="img-fluid" src="img/a.png" alt="Responsive image" style="text-align: center;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #66aaaa;">Mental Health Awareness di Indonesia</h5>
                            <p class="card-text">Pada tahun 2016, Indonesia kembali menjadi sorotan dunia, namun dengan
                                alasan yang tidak baik. Organisasi Human Rights Watch menerbitkan laporan yang
                                meng-expose realita yang terjadi terhadap penyandang disabilitas psikososial di
                                Indonesia.</p>
                            <a href="artikel2-1.php" class="btn btn-outline-info">Baca lebih lanjut</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid" src="img/b.jpg" alt="Responsive image">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #66aaaa;">6 Cara Menjaga Kesehatan Mental</h5>
                            <p class="card-text"> Kesehatan mental sama pentingnya dengan kesehatan fisik. Mungkin kita
                                juga sering mendengar, bahwa kesehatan emosional sangat penting untuk kesejahteraan
                                seseorang, ya memang demikian.</p>
                            <a href="artikel3-1.php" class="btn btn-outline-info">Baca lebih lanjut</a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="img-fluid" src="img/c.png" alt="Responsive image">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #66aaaa;">Kapan Harus ke Dokter?</h5>
                            <p class="card-text">Kesehatan mental dipengaruhi oleh peristiwa dalam kehidupan yang
                                meninggalkan dampak yang besar pada kepribadian dan perilaku seseorang.
                                Peristiwa-peristiwa tersebut dapat berupa kekerasan dalam rumah tangga, pelecehan anak,
                                atau stres berat jangka panjang.</p>
                            <a href="artikel4-1.php" class="btn btn-outline-info">Baca lebih lanjut</a>
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