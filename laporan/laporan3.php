<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Judul Page-->
    <title>BATALYON III</title>

    <!-- Ikon font CSS-->
    <link href="../bootstrap/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../bootstrap/vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS/ Css Utama-->
    <link href="../bootstrap/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h1 class="title">Laporan Kegiatan Olahraga Harian Taruna Batalyon III</h1>
                </div>
                <div class="card-body">
                    <!-- Form Absensi -->
                    <form method="POST" name="absen-taruna">

                        <!-- Form Nama Lengkap -->
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nama" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Form Nama Lengkap -->

                        <!-- Form NIT -->
                        <div class="form-row">
                            <div class="name">NIT</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nit" required="">
                                    <input type="hidden" name="batalyon" value="BATALYON III">
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Form NIT -->

                        <!-- Option Kelas -->
                        <div class="form-row">
                            <div class="name">Kelas</div>
                            <div class="input-group">                              
                                <select class="select--group" name="kelas" required="">
                                    <option disabled="disabled" selected="selected">PILIH</option>
                                    <option name="" id="">NVIIA</option>
                                    <option name="" id="">NVIIB</option>
                                    <option name="" id="">TVIIA</option>
                                    <option name="" id="">TVIIB</option>
                                    <option name="" id="">KVIIA</option>
                                    <option name="" id="">KVIIB</option>
                                    <option name="" id="">NVIIIA</option>
                                    <option name="" id="">NVIIIB</option>
                                    <option name="" id="">NVIIIC</option>
                                    <option name="" id="">TVIIIA</option>
                                    <option name="" id="">TVIIIB</option>
                                    <option name="" id="">TVIIIC</option>
                                    <option name="" id="">KVIIIA</option>
                                    <option name="" id="">KVIIIB</option>
                                    <option name="" id="">KVIIIC</option>
                                    <option name="" id="">KVIIID</option>
                                </select>
                            </div>
                        </div>
                        <!-- Akhir Option Kelas -->

                        <!-- Form Link Video -->
                        <div class="form-row">
                            <div class="name">Link Video</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="link_video" required="">
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Form Link Video -->

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
<script src="proses.js"></script>

</html>
<!-- end document-->
