<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta charset="viewport" content="width=device-width, initial-scale=1">
    <title>MenTal(k) - Blog</title>
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
                        <h4 class="card-title" style="text-align: left; color: #6aadaa;">Kapan Harus ke Dokter?
                        </h4>
                        <img class="img-fluid" src="img/c.png" alt="Responsive image"
                            style="padding-right: 25px; display: block; margin: auto;" width="20%" height="20%">
                        <p class="card-text"
                            style="text-align: left; color: black; font-size: 16px; padding-top: 20px;">
                            <strong>Pengertian Kesehatan Mental</strong>
                            <br>Kesehatan mental dipengaruhi oleh peristiwa dalam kehidupan yang meninggalkan dampak
                            yang besar
                            pada kepribadian dan perilaku seseorang. Peristiwa-peristiwa tersebut dapat berupa kekerasan
                            dalam rumah tangga, pelecehan anak, atau stres berat jangka panjang. Jika kesehatan mental
                            terganggu, maka akan timbul gangguan mental atau penyakit mental. Gangguan mental dapat
                            mengubah
                            cara seseorang dalam menangani stres, berhubungan dengan orang lain, membuat pilihan, dan
                            dapat
                            memicu hasrat untuk menyakiti diri sendiri.
                            <br><br>Beberapa jenis gangguan mental yang umum ditemukan, antara lain depresi, gangguan
                            bipolar,
                            kecemasan, gangguan stres pasca trauma (PTSD), gangguan obsesif kompulsif (OCD), dan
                            psikosis.
                            Beberapa penyakit mental hanya terjadi pada jenis pengidap tertentu, seperti postpartum
                            depression hanya menyerang ibu setelah melahirkan.</p>

                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>Gejala
                                Kesehatan Mental</strong>

                            <br>Gangguan mental atau penyakit mental dapat diawali dengan beberapa gejala berikut ini,
                            antara lain:</p>
                        <ul>
                            <li>Berteriak atau berkelahi dengan keluarga dan teman-teman.</li>
                            <li>Delusi, paranoia, atau halusinasi.</li>
                            <li>Kehilangan kemampuan untuk berkonsentrasi.</li>
                            <li>Ketakutan, kekhawatiran, atau perasaan bersalah yang selalu menghantui.</li>
                            <li>Ketidakmampuan untuk mengatasi stres atau masalah sehari-hari.</li>
                            <li>Marah berlebihan dan rentan melakukan kekerasan.</li>
                            <li>Memiliki pengalaman dan kenangan buruk yang tidak dapat dilupakan.</li>
                            <li>Memiliki pikiran untuk menyakiti diri sendiri atau orang lain.</li>
                            <li>Menarik diri dari orang-orang dan kegiatan sehari-hari.</li>
                            <li>Mendengar suara atau mempercayai sesuatu yang tidak benar.</li>
                            <li>Mengalami nyeri yang tidak dapat dijelaskan.</li>
                            <li>Mengalami perubahan suasana hati drastis yang menyebabkan masalah dalam hubungan dengan
                                orang lain.</li>
                            <li>Merasa bingung, pelupa, marah, tersinggung, cemas, kesal, khawatir, dan takut yang tidak
                                biasa.</li>
                            <li>Merasa sedih, tidak berarti, tidak berdaya, putus asa, atau tanpa harapan.</li>
                            <li>Merokok, minum alkohol lebih dari biasanya, atau bahkan menggunakan narkoba.</li>
                            <li>Perubahan drastis dalam kebiasaan makan, seperti makan terlalu banyak atau terlalu
                                sedikit.</li>
                            <li>Perubahan gairah seks.</li>
                            <li>Rasa lelah yang signifikan, energi menurun, atau mengalami masalah tidur.</li>
                            <li>Tidak dapat melakukan aktivitas sehari-hari seperti merawat anak atau pergi ke sekolah
                                atau tempat kerja.</li>
                            <li>Tidak mampu memahami situasi dan orang-orang.</li>
                        </ul>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>Penyebab
                                Kesehatan Mental</strong>
                            <br>Beberapa penyebab umum dari gangguan mental, antara lain:</p>

                        <ul>
                            <li>Cedera kepala.</li>
                            <li>Faktor genetik atau terdapat riwayat pengidap gangguan mental dalam keluarga.</li>
                            <li>Kekerasan dalam rumah tangga atau pelecehan lainnya.</li>
                            <li>Kekerasan pada anak atau riwayat kekerasan pada masa kanak-kanak.</li>
                            <li>Memiliki kelainan senyawa kimia otak atau gangguan pada otak.</li>
                            <li>Mengalami diskriminasi dan stigma.</li>
                            <li>Mengalami kehilangan atau kematian seseorang yang sangat dekat.</li>
                            <li>Mengalami kerugian sosial, seperti masalah kemiskinan atau utang.</li>
                            <li>Merawat anggota keluarga atau teman yang sakit kronis.</li>
                            <li>Pengangguran, kehilangan pekerjaan, atau tunawisma.</li>
                            <li>Pengaruh zat racun, alkohol, atau obat-obatan yang dapat merusak otak.</li>
                            <li>Stres berat yang dialami dalam waktu yang lama.</li>
                            <li>Terisolasi secara sosial atau merasa kesepian.</li>
                            <li>Tinggal di lingkungan perumahan yang buruk.</li>
                            <li>Trauma signifikan, seperti pertempuran militer, kecelakaan serius, atau kejahatan dan
                                yang pernah dialami.</li>
                        </ul>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>Faktor
                                Risiko Kesehatan Mental</strong>
                            <br>Beberapa faktor risiko gangguan mental, antara lain:</p>
                        <ul>
                            <li>Perempuan memiliki risiko tinggi mengidap depresi dan kecemasan, sedangkan laki-laki
                                memiliki risiko mengidap ketergantungan zat dan antisosial.</li>
                            <li>Perempuan setelah melahirkan.</li>
                            <li>Memiliki masalah di masa kanak-kanak atau masalah gaya hidup.</li>
                            <li>Memiliki profesi yang memicu stres, seperti dokter dan pengusaha.</li>
                            <li>Memiliki riwayat anggota keluarga atau keluarga dengan penyakit mental.</li>
                            <li>Memiliki riwayat kelahiran dengan kelainan pada otak.</li>
                            <li>Memiliki riwayat penyakit mental sebelumnya.</li>
                            <li>Mengalami kegagalan dalam hidup, seperti sekolah atau kehidupan kerja.</li>
                            <li>Menyalahgunakan alkohol atau obat-obatan terlarang.</li>
                        </ul>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>Diagnosis
                                Kesehatan Mental</strong>
                            <br>Dokter ahli jiwa atau psikiater akan mendiagnosis suatu gangguan mental dengan diawali
                            suatu
                            wawancara medis dan wawancara psikiatri lengkap mengenai riwayat perjalanan gejala pada
                            pengidap
                            serta riwayat penyakit pada keluarga pengidap. Kemudian, dilanjutkan dengan pemeriksaan
                            fisik
                            yang menyeluruh untuk mengeliminasi kemungkinan adanya penyakit lain.
                            <br><br>Jika diperlukan, dokter akan meminta untuk dilakukan pemeriksaan penunjang, seperti
                            pemeriksaan
                            fungsi tiroid, skrining alkohol dan obat-obatan, serta CT scan untuk mengetahui adanya
                            kelainan
                            pada otak pengidap. Jika kemungkinan adanya penyakit lain sudah dieliminasi, dokter akan
                            memberikan obat dan rencana terapi untuk membantu mengelola emosi pengidap.</p>

                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>Pencegahan
                                Kesehatan Mental</strong>
                            <br>Beberapa upaya yang dapat dilakukan untuk mencegah gangguan mental, antara lain:</p>
                        <ul>
                            <li>Melakukan aktivitas fisik dan tetap aktif secara fisik.</li>
                            <li>Membantu orang lain dengan tulus.</li>
                            <li>Memelihara pikiran yang positif.</li>
                            <li>Memiliki kemampuan untuk mengatasi masalah.</li>
                            <li>Mencari bantuan profesional jika diperlukan.</li>
                            <li>Menjaga hubungan baik dengan orang lain.</li>
                            <li>Menjaga kecukupan tidur dan istirahat.</li>
                        </ul>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>Pengobatan
                                Kesehatan Mental
                            </strong>
                            <br>Beberapa pilihan pengobatan yang akan dilakukan dokter dalam menangani gangguan mental,
                            antara
                            lain:</p>
                        <ul>
                            <li>Psikoterapi. Psikoterapi merupakan terapi bicara yang memberikan media yang aman untuk
                                pengidap
                                dalam mengungkapkan perasaan dan meminta saran. Psikiater akan memberikan bantuan dengan
                                membimbing pengidap dalam mengontrol perasaan. Psikoterapi beserta perawatan dengan
                                menggunakan
                                obat-obatan merupakan cara yang paling efektif untuk mengobati penyakit mental. Beberapa
                                contoh
                                psikoterapi, antara lain cognitive behavioral therapy, exposure therapy, dialectical
                                behavior
                                therapy, dan sebagainya.</li>
                            <li>Obat-obatan. Pemberian obat-obatan dalam mengobati penyakit mental umumnya bertujuan
                                untuk
                                mengubah senyawa kimia otak di otak. Obat-obatan tersebut dapat berupa golongan
                                selective
                                serotonin reuptake inhibitor (SSRI), serotonin-norepinephrine reuptake inhibitor
                                (SNRIs), dan
                                antidepresan trisiklik. Obat-obatan ini umumnya dikombinasikan dengan psikoterapi untuk
                                hasil
                                pengobatan yang lebih efektif.</li>
                            <li>Rawat inap. Rawat inap diperlukan jika pengidap membutuhkan pemantauan ketat terhadap
                                gejala-gejala penyakit yang dialaminya atau terdapat kegawatdaruratan di bidang
                                psikiatri,
                                misalnya percobaan bunuh diri.</li>
                            <li>Support group. Support group umumnya beranggotakan pengidap penyakit mental yang sejenis
                                atau
                                yang sudah dapat mengendalikan emosinya dengan baik. Mereka berkumpul untuk berbagi
                                pengalaman
                                dan membimbing satu sama lain menuju pemulihan.</li>
                            <li>Stimulasi otak. Stimulasi otak dapat berupa terapi elektrokonvulsif, stimulasi magnetik
                                transkranial, pengobatan eksperimental yang disebut stimulasi otak dalam, dan stimulasi
                                saraf
                                vagus.</li>
                            <li>Pengobatan terhadap penyalahgunaan zat. Pengobatan ini dilakukan pada pengidap penyakit
                                mental
                                yang disebabkan oleh ketergantungan akibat penyalahgunaan zat terlarang.</li>
                            <li>Membuat rencana bagi diri sendiri, misalnya dengan mengatur gaya hidup dan kebiasaan
                                sehari-hari, untuk melawan penyakit mental. Rencana ini bertujuan untuk memantau
                                kesehatan,
                                membantu proses pemulihan, dan mengenali pemicu atau tanda-tanda peringatan penyakit.
                            </li>
                        </ul>
                        <p class="card-text" style="text-align: left; color: black; font-size: 16px;"><strong>Kapan
                                Harus ke Dokter?</strong>
                            <br>Jika diri sendiri atau kerabat menunjukkan gejala-gejala yang telah disebutkan di atas
                            secara
                            terus-menerus dan tidak membaik, sebaiknya segera memeriksakan diri ke dokter spesialis jiwa

                            <br>
                            <p class="card-text" style="text-align: left; color: black; font-size: 16px;">Sumber :
                                https://www.halodoc.com/kesehatan/kesehatan-mental
                            </p>
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