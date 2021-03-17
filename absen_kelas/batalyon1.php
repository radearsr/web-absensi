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
                    <h1 class="title">Absen Kelas Taruna Batalyon I</h1>
                </div>
                <div class="card-body">
                    <form method="POST">

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
                                    <option name="" id="">KA</option>
                                    <option name="" id="">KB</option>
                                    <option name="" id="">KC</option>
                                    <option name="" id="">KD</option>
                                </select>
                                    
                               
                            </div>
                        </div>
                        <!-- Akhir Option Kelas -->

                        <!-- Foto Absen -->
                        <div class="form-row">
                            <div class="name">Foto Absen Pagi</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="ab_pagi">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Foto Absen Siang</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="ab_siang">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Foto Absen Sore</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="ab_sore">
                                </div>
                            </div>
                        </div>
                        <!-- Akhir Foto Absen -->   

                        <!-- Form Berat Badan -->
                        <div class="form-row">
                            <div class="name">Berat Badan(KG)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="berat">
                                </div>
                            </div>
                        </div>
                        <!-- Form Berat Badan -->

                        <!-- Foto Full Badan -->
                        <div class="form-row">
                            <div class="name">Foto Full Badan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="ab_sore">
                                </div>
                            </div>
                        </div>
                        <!-- Foto Full Badan -->

                        <!-- Keterangan Absen -->   
                        <div class="form-row">
                            <div class="name">Keterangan</div>
                            <div class="input-group">                                
                                <select class="select--group" id="selectKet" onclick="KeteranganAbsen()" name="kelas" required="">
                                    <option disabled="disabled" selected="selected">PILIH</option>
                                    <option value="Tepat">Absen Tepat Waktu</option>
                                    <option value="Telat">Telat Absen</option>
                                    <option value="Tidak">Tidak Absen</option>
                                    <option value="lainnya">Lainnya</option>                                   
                                </select>                                    
                            </div>
                        </div>
                        <!--Akhir Keterangan Absen -->

                        <!-- Form Ket-->
                        <div style="display: none;" id="lain" class="form-row">
                            <div class="name">Lainnya:</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="deskripsi">
                                </div>
                            </div>
                        </div>
                        <!--Akhir Form Ket -->

                        <script type="text/javascript">
                            function KeteranganAbsen() {
                                var x = document.getElementById('selectKet').value; 
                                if (x == "lainnya") {
                                    document.getElementById('lain').style.display="block";
                                    
                                } else{
                                    document.getElementById('lain').style.display="none";
                                }
                            }
                        </script>

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

</html>
<!-- end document-->