<!doctype html>
<html>

<head>
    <script type="text/javascript" src="chartjs/Chart.js"></script>
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
    <title>MenTal(k) - Data Pasien</title>
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
    <?php 
    include 'koneksi.php';
    ?>
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
    <div class="container" align="center">
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title" align="center">DATA PASIEN</h5>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 sidebar">
                                <div align="center">
                                    <div style="width: 800px;margin: 0px auto;" align="center">
                                        <canvas id="myChart"></canvas>
                                    </div>

                                    <br/>
                                    <br/>

                                    <table border="1" width="450" cellpadding="3" cellspacing="3" align="center">
                                        <thead>
                                            <tr>
                                                <th align="center">No.</th>
                                                <th align="center">Username</th>
                                                <th align="center">Nama Pasien</th>
                                                <th align="center">Jenis Kelamin</th>
                                                <th align="center">Umur(tahun)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $no = 1;
                                            $data = mysqli_query($koneksi,"select * from pasien");
                                            while($d=mysqli_fetch_array($data)){
                                                ?>
                                                <tr>
                                                    <td><?php echo $no++; ?></td>
                                                    <td><?php echo $d['username']; ?></td>
                                                    <td><?php echo $d['nama_lengkap']; ?></td>
                                                    <td><?php echo $d['jenis_kelamin']; ?></td>
                                                    <td><?php echo $d['umur']; ?></td>
                                                </tr>
                                                <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div> 
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
   <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["anak-anak", "remaja", "dewasa", "manula"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_anak_anak = mysqli_query($koneksi,"select * from pasien where umur > 6 and umur < 15");
                    echo mysqli_num_rows($jumlah_anak_anak);
                    ?>, 
                    <?php 
                    $jumlah_remaja = mysqli_query($koneksi,"select * from pasien where umur > 14 and umur < 22");
                    echo mysqli_num_rows($jumlah_remaja);
                    ?>, 
                    <?php 
                    $jumlah_dewasa = mysqli_query($koneksi,"select * from pasien where umur > 21 and umur < 40");
                    echo mysqli_num_rows($jumlah_dewasa);
                    ?>, 
                    <?php 
                    $jumlah_manula = mysqli_query($koneksi,"select * from pasien where umur > 40");
                    echo mysqli_num_rows($jumlah_manula);
                    ?>
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
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

