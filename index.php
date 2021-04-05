 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width">
     <meta charset="viewport" content="width=device-width, initial-scale=1">
     <title>Project DPW | WELCOME</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link href="https://fonts.googleapis.com/css2?family=Reem+Kufi&display=swap" rel="stylesheet">
     <style type="text/css">
         .drop2:hover {
             background-color: #6aadaa;
             color: white;
         }

         .drop3:hover {
             background-color: #6aadaa;
             color: white;
         }
     </style>
 </head>

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
                         <a class="nav-link" href="index.php">BERANDA</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="blog.php">BLOG</a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                             aria-haspopup="true" aria-expanded="false">
                             MASUK
                         </a>
                         <div class="dropdown-menu dropright" aria-labelledby="navbarDropdown">
                             <a class="dropdown-item drop2" href="login.php">Masuk Sebagai Pasien</a>
                             <a class="dropdown-item drop3" href="login-dokter.php">Masuk Sebagai Dokter</a>
                         </div>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="signup.php">DAFTAR</a>
                     </li>
                 </ul>
             </div>
         </nav>
     </header>
     <section id="showcase">
         <div class="container">
             <h1>Mental(k)</h1>
             <p>
                 Website interaktif yang membantu mengatasi masalah kesehatan mental, yang di dalamnya terdapat fitur
                 khusus berupa chat konseling dengan dokter dan grafik statistika yang menunjukan jumlah pasien setiap
                 bulan yang dikelompokkan berdasarkan usia.
             </p>
         </div>
     </section>

     <section id="newsletter">
         <div class="container">
             
             <form class="form-inline">
                 
             </form>
         </div>
     </section>
     <div class="container">
         <!--CARD-->
         <div class="row justify-content-center">
             <div class="col-lg-6">
                 <div class="row" style="padding-bottom: 10px; padding-top: 10px;">
                     <div class="col-lg">
                         <div class="card card4">
                             <img class="img-fluid" src="img/cht.png" alt="Responsive image"
                                 style="text-align: center;">
                             <div class="card-body">
                                 <h5 class="card-title">PASIEN</h5>
                                 <p class="card-text">Layanan Pasien untuk :
                                     <a href="login.php" style="color: black;">
                                         <li>Membuat Jadwal Konsultasi</li>
                                     </a>
                                     <a href="login.php" style="color: black;">
                                         <li>Konsultasi Online</li>
                                     </a>
                                     
                                     <br>Salam MenTal(k), semoga sehat selalu!
                                     
                                 </p>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg">
                         <div class="card card5">
                             <img class="img-fluid" src="img/dokternew.png" alt="Responsive image">
                             <div class="card-body">
                                 <h5 class="card-title"><a href="dokter.php" style="color: black;">DOKTER</a></h5>
                                 <p class="card-text">Informasi profil tenaga ahli profesional yang siap membantu
                                     mengatasi
                                     masalah kejiwaan Anda.</p><br>
                                     <p>Salam MenTal(k), semoga sehat selalu!</p>
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