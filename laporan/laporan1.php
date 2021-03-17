<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>BATALYON I</title>

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
                    <h1 class="title">Laporan Kegiatan Olahraga Harian Taruna Batalyon I</h1>
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
                                    <input type="hidden" name="batalyon" value="BATALYON I">
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
                                    <option name="NA">NA</option>
                                    <option name="NB">NB</option>
                                    <option name="NC">NC</option>
                                    <option name="ND">ND</option>
                                    <option name="NE">NE</option>
                                    <option name="NF">NF</option>
                                    <option name="NG">NG</option>
                                    <option name="NH">NH</option>
                                    <option name="TA">TA</option>
                                    <option name="TB">TB</option>
                                    <option name="TC">TC</option>
                                    <option name="TD">TD</option>
                                    <option name="TE">TE</option>
                                    <option name="TF">TF</option>
                                    <option name="TG">TG</option>
                                    <option name="KA">KA</option>
                                    <option name="KB">KB</option>
                                    <option name="KC">KC</option>
                                    <option name="KD">KD</option>
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
                            <button name="submit" class="btn btn--radius-2 btn--blue" type="submit">Kirim</button>
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