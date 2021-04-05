<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta charset="viewport" content="width=device-width, initial-scale=1">
    <title>MenTal(k) - Dokter</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
    <style type="text/css">
        .d-flex {
            background: #aad3bd;
        }

        .drop1:hover {
            background-color: #6aadaa;
            color: white;
        }

        .drop2:hover {
            background-color: #6aadaa;
            color: white;
        }
        .drop4:hover {
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
                        <div class="d-flex p-2 bd-highlight justify-content-center" style="color: white;">PROFIL DOKTER
                            - MENTAL(K)</div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12 sidebar">
                                <br>
                                <img class="img-fluid" src="img/katon.jpg" alt="Responsive image" style="float: left;">
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                <div class="d-flex p-2 bd-highlight justify-content-center">JADWAL PRAKTIK</div>
                                <div class="d-flex p-2 bd-highlight" style="background-color: #def4f0">SENIN
                                    <br>10:00 - 12:00</div>
                                <div class="d-flex p-2 bd-highlight" style="background-color: #def4f0">SELASA
                                    <br>17:00 - 20:00</div>
                                <div class="d-flex p-2 bd-highlight" style="background-color: #def4f0">RABU
                                    <br>10:00 - 12:00</div>
                                <div class="d-flex p-2 bd-highlight" style="background-color: #def4f0">KAMIS
                                    <br>17:00 - 20:00</div>
                                <div class="d-flex p-2 bd-highlight" style="background-color: #def4f0">JUMAT
                                    <br>10:00 - 12:00</div>
                            </div>
                            <div class="col-md-8 col-sm-12 content">
                                <br>
                                <h4>DR. ADELINO YOO, SP.KJ, MM</h4>
                                <h5>Dokter Spesialis Kejiwaan</h5>
                                <br>
                                <p>
                                    Dr. Adelino adalah dokter spesialis Kedokteran Jiwa dan psikiater konsultan. Setelah
                                    menamatkan pendidikan dokter umum dari Fakultas Kedokteran Universitas Atmajaya
                                    tahun
                                    1989, beliau melanjutkan pendidikan spesialisasi sebagai psikiater di Fakultas
                                    Kedokteran Universitas Indonesia dan lulus tahun 1996. Beliau lalu melanjutkan
                                    program
                                    subspesialisasi psikiater konsultan dari Kolegium Psikiatri Indonesia.

                                    Beliau aktif dalam berbagai kongres psikiatri nasional dan internasional antara lain
                                    dalam acara tahunan The European College of Neuropsychopharmacology (ECNP) di Berlin
                                    (2014) dan Amsterdam (2015), dan Kongres Nasional Perhimpunan Dokter Spesialis
                                    kedokteran jiwa Indonesia joint meeting dengan ASEAN Federation for Psychiatry and
                                    Mental Health Congress (2016).
                                    <ul>
                                        <li>Kolegium Psikiatri Indonesia 20 Desember 2005</li>
                                        <li>Certificate of Attendance 27 th ECNP Congress 18-21 Oktober 2014, Berlin,
                                            Germany</li>
                                        <li>Certificate of Attendance 28 th ECNP Congress 29 Agustus -1 September 2015,
                                            Amsterdam ,
                                            The Netherlands</li>
                                        <li>Kongres Nasional VIII Perhimpunan Dokter Spesialis Kedokteran Jiwa Indonesia
                                            15 th ASEAN</li>
                                        <li>Federation for Psyciatry and Mental Health Congress 25-27 August 2016</li>
                                    </ul>

                                    <h5>Pendidikan</h5>

                                    Dr. Adelino adalah dokter spesialis Kedokteran Jiwa dan psikiater konsultan. Setelah
                                    menamatkan pendidikan dokter umum dari Fakultas Kedokteran Universitas Atmajaya
                                    tahun
                                    1989, beliau melanjutkan pendidikan spesialisasi sebagai psikiater di Fakultas
                                    Kedokteran Universitas Indonesia dan lulus tahun 1996. Beliau lalu melanjutkan
                                    program
                                    subspesialisasi psikiater konsultan dari Kolegium Psikiatri Indonesia.

                                    Beliau aktif dalam berbagai kongres psikiatri nasional dan internasional antara lain
                                    dalam acara tahunan The European College of Neuropsychopharmacology (ECNP) di Berlin
                                    (2014) dan Amsterdam (2015), dan Kongres Nasional Perhimpunan Dokter Spesialis
                                    kedokteran jiwa Indonesia joint meeting dengan ASEAN Federation for Psychiatry and
                                    Mental Health Congress (2016).

                                    <br><br>
                                    <h5>Pelatihan</h5>
                                    <ul>
                                        <li>Kolegium Psikiatri Indonesia 20 Desember 2005 </li>
                                        <li>Certificate of Attendance 27 th ECNP Congress 18-21 Oktober 2014, Berlin,
                                            Germany </li>
                                        <li>Certificate of Attendance 28 th ECNP Congress 29 agustus -1 September 2015,
                                            Amsterdam ,
                                            The Netherlands</li>
                                        <li>Kongres Nasional VIII Perhimpunan Dokter Spesialis kedokteran jiwa Indonesia
                                            15 th ASEAN
                                            federation for Psyciatry and Mental Health Congress 25-27 August 2016</li>
                                    </ul>

                                    Sumber: http://www.rscarolus.or.id/doctor/view?id=22
                                </p>
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