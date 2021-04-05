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
    <title>MenTal(k) - Sign Up</title>
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
                        <h5 class="card-title" align="center">SIGN UP</h5>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 sidebar">
                                <form action="signup.php" method="POST" onSubmit="validasi()">
                                    <div class="form-row">
                                        <div class="form-group col-md-8">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="nama" class="form-control" name="nama" required="required"
                                                placeholder="Masukkan Nama Lengkap" id="nama">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="tgl_lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="jenis_">Jenis Kelamin</label>
                                            <br><label><input type="radio" name="jenis_kelamin" value="laki-laki"
                                                    style="padding-right: 50px;"> Laki-laki</label>
                                            <label><input type="radio" name="jenis_kelamin" value="perempuan">
                                                Perempuan</label>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="no_hp">No. Handphone</label>
                                            <input type="no_hp" class="form-control" name="no_hp" required="required"
                                                placeholder="Masukkan Nomor Handphone">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="username">Username</label>
                                            <input type="username" class="form-control" name="username"
                                                required="required" placeholder="Masukkan Username" id="username">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password"
                                                required="required" placeholder="Password" id="password">
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" required="required"
                                                placeholder="Masukkan Email" id="email">
                                            <button type="submit" class="btn btn-outline-info">Sign Up</button>
                                        </div>
                                        <div class="form-group col-md-10">
                                            <a href="login.php" style="color: black">Sudah punya akun?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 col-sm-12 content">
                                <img class="img-fluid" src="img/sign.png" alt="Responsive image"
                                    style="padding-left: 140px;">
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
<script type="text/javascript">
    function validasi() {
        var nama = document.getElementById("nama").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var username = document.getElementById("username").value;
        if (nama != "" && email != "" && password != "" && username != "") {
            return true;
        } else {
            alert('Anda harus mengisi data dengan lengkap !');
        }
    }
</script>

</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$nama = mysql_real_escape_string($_POST['nama']);
	$tgl_lahir = mysql_real_escape_string($_POST['tgl_lahir']);
	$jenis_kelamin = mysql_real_escape_string($_POST['jenis_kelamin']);
	$no_hp = mysql_real_escape_string($_POST['no_hp']);
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$mail = mysql_real_escape_string($_POST['email']);
	$lahir = new DateTime($_POST['tgl_lahir']);
	$today = new DateTime();
	$umur = $today->diff($lahir);
	$umur = $umur->y;
    $bool = true;

	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
	mysql_select_db("data_pasien") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from pasien"); //Query the users table
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
		}
	}

	if($bool) // checks if bool is true
	{
		mysql_query("INSERT INTO pasien (nama_lengkap, username, email, password, tanggal_lahir, umur, jenis_kelamin, no_hp) VALUES ('$nama','$username','$mail','$password','$tgl_lahir','$umur', '$jenis_kelamin','$no_hp')"); //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		Print '<script>window.location.assign("signup.php");</script>'; // redirects to register.php
	}

}
?>