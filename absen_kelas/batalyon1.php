<?php
     if (isset($_POST['upload'])) {
	 
	     $file_one_name =  $_FILES['ab_pagi']['name'];
		 $file_one_type =  $_FILES['ab_pagi']['type'];
         $file_one_size =  $_FILES['ab_pagi']['size'];
		 $file_one_tem_Loc =  $_FILES['ab_pagi']['tmp_name'];
		 $file_one_store = "foto/".$file_one_name;

	     $file_two_name =  $_FILES['ab_siang']['name'];
		 $file_two_type =  $_FILES['ab_siang']['type'];
         $file_two_size =  $_FILES['ab_siang']['size'];
		 $file_two_tem_Loc =  $_FILES['ab_siang']['tmp_name'];
		 $file_two_store = "foto/".$file_two_name;

	     $file_three_name =  $_FILES['ab_sore']['name'];
		 $file_three_type =  $_FILES['ab_sore']['type'];
         $file_three_size =  $_FILES['ab_sore']['size'];
		 $file_three_tem_Loc =  $_FILES['ab_sore']['tmp_name'];
		 $file_three_store = "foto/".$file_three_name;

	     $file_four_name =  $_FILES['ft_badan']['name'];
		 $file_four_type =  $_FILES['ft_badan']['type'];
         $file_four_size =  $_FILES['ft_badan']['size'];
		 $file_four_tem_Loc =  $_FILES['ft_badan']['tmp_name'];
		 $file_four_store = "foto/".$file_four_name;
	
		 if (move_uploaded_file($file_one_tem_Loc, $file_one_store) && 
                move_uploaded_file($file_four_tem_Loc, $file_four_store)
            ){
		     echo "File Berhasil DiUpload";
		 }	
   
     } 			
		 
?>	

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
                        <div class="form-row">
                            <div class="name">Kelas</div>
                            <div class="input-group">                              
                                <select class="select--group" name="kelas" required="">
                                    <option disabled="disabled" selected="selected">PILIH</option>
                                    <option value="NA">NA</option>
                                    <option value="NB">NB</option>
                                    <option value="NC">NC</option>
                                    <option value="ND">ND</option>
                                    <option value="NE">NE</option>
                                    <option value="NF">NF</option>
                                    <option value="NG">NG</option>
                                    <option value="NH">NH</option>
                                    <option value="TA">TA</option>
                                    <option value="TB">TB</option>
                                    <option value="TC">TC</option>
                                    <option value="TD">TD</option>
                                    <option value="TE">TE</option>
                                    <option value="TF">TF</option>
                                    <option value="TG">TG</option>
                                    <option value="KA">KA</option>
                                    <option value="KB">KB</option>
                                    <option value="KC">KC</option>
                                    <option value="KD">KD</option>
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
                        <input type="hidden" name="ab_pagi" value="<?= $file_one_name; ?>">
                        <input type="hidden" name="ab_siang" value="<?= $file_two_name; ?>">
                        <input type="hidden" name="ab_sore" value="<?= $file_three_name; ?>">
                        <input type="hidden" name="ft_badan" value="<?= $file_four_name; ?>">
                        <input type="hidden" name="batalyon" value="BATALYON I">
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
                            <button class="btn btn--radius-2 btn--blue" type="submit">Kirim</button>
                            </center>
                        </div>
                    </form>
                    <!-- AKHIR FORM ABSEN KELAS -->
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

    <script src="proses_kelas.js"></script>
</body>

</html>
<!-- end document-->

    <!-- <script type="text/javascript">
        const scriptURL = "https://script.google.com/macros/s/AKfycbyxqt5V6ERrK4Ayq2RkyMkWqndARAyeFr8s-ZsMIQBXEsuuOPB12M5qeVHpS9izqh2r/exec";
        const form = document.forms["absensi"];
        form.addEventListener("submit", (e) => {
        e.preventDefault();
        fetch(scriptURL, { method: "POST", body: new FormData(form) })
            .then((response) => alert("Berhasil Absen!"))
            .catch((error) => alert("Error!", error.message));
        }); 
    </script> -->