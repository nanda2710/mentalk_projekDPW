<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta charset="viewport" content="width=device-width, initial-scale=1">
    <title>MenTal(k) | Artikel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
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
                        <img class="img-fluid" src="img/P1.png" alt="Responsive image"
                            style="padding-right: 25px; display: block; margin: auto;" width="20%" height="20%">
                        <h4 class="card-title" style="text-align: left; color: #6aadaa;">Simak Langkah-Langkah
                            Bermitra dengan MenTal(k)!</h4>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;">Tertarik untuk
                            bergabung bersama MenTal(k)? Simak informasi berikut!</p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 20px;"><strong>Daftar
                                menjadi Mitra MenTal(k) dan nikmati berbagai keunggulannya!</strong></p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>1.
                                Maksimalkan Potensi Anda. </strong>Perluas potensi Anda ke jutaan pengguna MenTal(k)!
                        </p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>2.
                                Pembayaran Otomatis. </strong>Pembayaran yang diterima akan otomatis ditransfer ke
                            rekening bank yang telah didaftarkan untuk kamu.</p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>3. Akses
                                ke Pasien. </strong>Kamu juga bisa berkesempatan mendapatkan slot publikasi seperti
                            melalui sosial media, newsletter, hingga digital advertisement dari MenTal(k).</p>
                        <br>
                        <p class="card-text" style="text-align: left; color: black; font-size: 18px;"><strong>Sebelum
                                mendaftar, pastikan kamu telah mempersiapkan dokumen berikut:</strong></p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;">1. Kartu Identitas
                            (KTP/Paspor) Pemilik Usaha</p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;">2. Nomor Pokok
                            Wajib Pajak (NPWP) Pemilik Usaha</p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;">3. Informasi
                            Rekening Bank Pemilik Usaha</p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;">4. Fotokopi Surat
                            Tanda Registrasi (STR) yang diterbitkan dan dilegalisasi asli oleh Konsil Kedokteran
                            Indonesia (KKI) yang masih berlaku</p>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;">Setelah kamu
                            mengajukan pendaftaran, kami akan mengkonfirmasikan bahwa pendaftaran kamu telah diterima
                            melalui email yang telah kamu daftarkan. Apabila pendaftaran disetujui, kami juga akan
                            menginformasikannya melalui email.</p>

                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;">Jika kamu memiliki
                            pertanyaan lebih lanjut, kamu bisa menghubungi kami melalui 1500-171 atau
                            email ke mitra@mentalk.com.</p>
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