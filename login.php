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
    <title>MenTal(k) - Login</title>
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
    <div class="container">
        <div class="row">
            <div class="col-lg">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" align="center">MASUK SEBAGAI PASIEN</h5>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 sidebar">
                                <form action="checklogin.php" method="post">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="username" class="form-control" name="username" required="required"
                                            placeholder="Masukkan Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" required="required"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                                    </div>
                                    <button type="submit" class="btn btn-outline-info">Login</button>
                                    <br><br><a href="signup.php" style="color: black">Belum punya akun?</a>
                                </form>
                            </div>
                            <div class="col-md-6 col-sm-12 content">
                                <img class="img-fluid" src="img/LOGIN.png" alt="Responsive image"
                                    style="padding-left: 100px;">
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