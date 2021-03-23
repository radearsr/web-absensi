<!-- Memanggil File functions.php -->
<?php require '../functions.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>BATALYON II</title>

    <!-- Icons font CSS-->
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h1 class="title"> Absen Kelas Taruna Batalyon II</h1>
                </div>
                <div class="card-body">
                    <?php if( isset($_POST['upload']) ) : ?>
                        <?php $namaFile1 = $_FILES['ab_pagi']['name'] ?>
                        <?php $namaFile2 = $_FILES['ab_siang']['name'] ?>
                        <?php $namaFile3 = $_FILES['ab_sore']['name'] ?>
                        <?php $namaFile4 = $_FILES['ft_badan']['name'] ?>
                        <?php $respon = upload_file($_FILES, 'kelas'); ?>  
                        <div class="alert"><h4><?= $respon; ?></h4></div>
                    <?php endif; ?>
                    <!-- FORM UPLOAD FOTO -->
                    <form method="POST" enctype="multipart/form-data">
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
                        
                        <!-- Foto Full Badan -->
                        <div class="form-row">
                            <div class="name">Foto Full Badan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="file" name="ft_badan">
                                </div>
                            </div>
                        </div>
                        <!-- Foto Full Badan --> 
                        <div>
                            <center>
                            <button name="upload" class="btn btn--radius-2 btn--blue" type="submit">Upload</button>
                            </center>
                        </div>
                    </form>
                    <!-- AKHIR FORM UPLOAD FOTO -->
                    <br>
                    <br> 
                    <!-- FORM ABSEN KELAS -->
                    <form method="POST" name="absensi">
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
                        <?php $kelas = daftar_kelas('batalyon2'); ?>
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

                        <!-- Form Hidden -->
                        <input type="hidden" name="ab_pagi" value="<?= $namaFile1; ?>">
                        <input type="hidden" name="ab_siang" value="<?= $namaFile2; ?>">
                        <input type="hidden" name="ab_sore" value="<?= $namaFile3; ?>">
                        <input type="hidden" name="ft_badan" value="<?= $namaFile4; ?>">
                        <input type="hidden" name="batalyon" value="BATALYON II">
                        <!-- Form Hidden-->

                        <!-- Keterangan Absen -->   
                        <div class="form-row">
                            <div class="name">Keterangan</div>
                            <div class="input-group">                                
                                <select class="select--group" id="selectKet" onclick="KeteranganAbsen()" name="keterangan" required="">
                                    <option disabled="disabled" selected="selected">PILIH</option>
                                    <option value="Absen Tepat Waktu">Absen Tepat Waktu</option>
                                    <option value="Telat Absen">Telat Absen</option>
                                    <option value="Tidak Absen">Tidak Absen</option>
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
                            <button name="submit" class="btn btn--radius-2 btn--blue" type="submit">Kirim</button>
                            </center>
                        </div>
                    </form>
                    <!-- AKHIR FORM ABSEN KELAS-->
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
    <script src="../assets/custom_js/proses_kelas.js"></script>
</body>

</html>
<!-- end document-->