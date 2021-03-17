<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>BATALYON II</title>

    <!-- Icons font CSS-->
    <link href="../bootstrap/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../bootstrap/vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../bootstrap/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h1 class="title">Laporan Kegiatan Olahraga Harian Taruna Batalyon II</h1>
                </div>
                <div class="card-body">
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
                                    <input type="hidden" name="batalyon" value="BATALYON II">
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
                                    <option name="" id="">NA</option>
                                    <option name="" id="">NB</option>
                                    <option name="" id="">NC</option>
                                    <option name="" id="">ND</option>
                                    <option name="" id="">NE</option>
                                    <option name="" id="">NF</option>
                                    <option name="" id="">NG</option>
                                    <option name="" id="">NH</option>
                                    <option name="" id="">TA</option>
                                    <option name="" id="">TB</option>
                                    <option name="" id="">TC</option>
                                    <option name="" id="">TD</option>
                                    <option name="" id="">TE</option>
                                    <option name="" id="">TF</option>
                                    <option name="" id="">TG</option>
                                    <option name="" id="">TH</option>
                                    <option name="" id="">KA</option>
                                    <option name="" id="">KB</option>
                                    <option name="" id="">KC</option>
                                    <option name="" id="">KD</option>
                                    <option name="" id="">KE</option>
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

                        <div>
                            <center>
                            <button class="btn btn--radius-2 btn--blue" type="submit">Kirim</button>
                            </center>
                        </div>
                    </form>
                    <br>
                    <div>
                        <center>
                        <a href="../index.php" class="btn btn--pill btn--red">KE HALAMAN UTAMA</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- JS Input Form Ke Spereadsheet -->
<script src="proses.js"></script>

</html>
<!-- end document-->
