<!-- Memangggil File functions.php -->
<?php require '../functions.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Judul Page-->
    <title>BATALYON III</title>

    <!-- Ikon font CSS-->
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Main CSS/ Css Utama-->
    <link href="../assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h1 class="title">Laporan Kegiatan Olahraga Harian Taruna Batalyon III</h1>
                </div>
                <div class="card-body">
                    <!-- Upload File Dan Menampilkan Alert -->
                    <?php if( isset($_POST['upload']) ) : ?>
                        <?php $namaFile1 = $_FILES['video']['name']; ?>
                        <?php $respon = upload_file($_FILES, 'laporan'); ?>  
                        <div class="alert"><h4><?= $respon; ?></h4></div>
                    <?php endif; ?>
                    <!-- Form Upload Video -->
                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- Input Upload Video -->
                        <div class="form-row">
                            <div class="name">Video</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="video" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Input Upload Video -->
                        <center>
                            <button name="upload" class="btn btn--radius-2 btn--blue" type="submit">Upload</button>
                        </center>                        
                    </form>
                    <!-- Akhir Form Upload Video -->
                    <br>
                    <br>
                    <!-- Form Absensi -->
                    <form method="POST" name="laporan-or">
                        <!-- Input Nama Lengkap -->
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Input Nama Lengkap -->

                        <!-- Input NIT -->
                        <div class="form-row">
                            <div class="name">NIT</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nit" required="">
                                    <input type="hidden" name="batalyon" value="BATALYON III">
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Input NIT -->

                        <!-- Input Hidden -->
                        <input type="hidden" name="batalyon" value="BATALYON III">
                        <input type="hidden" name="video" value="<?= $namaFile1; ?>">
                        <!-- Akhir Input Hidden -->

                        <!-- Option Kelas -->
                        <?php $kelas = daftar_kelas('batalyon3'); ?>
                        <div class="form-row">
                            <div class="name">Kelas</div>
                            <div class="input-group">                              
                                <select class="select--group" name="kelas" required="">
                                    <option disabled="disabled" selected="selected">PILIH</option>
                                    <?php foreach($kelas as $kls) :?>
                                    <option value="<?= $kls ?>"><?= $kls ?></option>
                                    <?php endforeach;?>
                                </select>
                            </div>
                        </div>
                        <!-- Akhir Option Kelas -->

                        <!-- Button Kirim -->
                        <div>
                            <center>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Kirim</button>
                            </center>
                        </div>
                        <!-- Akhir Button Kirim -->
                    </form>
                    <!-- Akhir Form Absensi -->
                    <br>
                    <!-- Button Kembali Ke Menu -->
                    <div>
                        <center>
                        <a href="../index.php" class="btn btn--pill btn--red">KE HALAMAN UTAMA</a>
                        </center>
                    </div>
                    <!-- Akhir Button Kembali Ke Menu -->
                </div>
            </div>
        </div>
    </div>
</body>
<!-- JS Input Form Ke Spereadsheet -->
<script src="../assets/custom_js/proses_laporan.js"></script>

</html>
<!-- end document-->
