<!DOCTYPE html>  
<html>  
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Main Menu</title>

    <!-- Main CSS-->
    <link href="bootstrap/css/main.css" rel="stylesheet" media="all">
    <script src="bootstrap/jquery.min.js"></script>  
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />  
    <script src="bootstrap/bootstrap.min.js"></script>  
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h1 class="title">Sistem Absensi Taruna</h1>
                </div>
                <div class="card-body">
                    <div>
                        <center>
                        <a type="button" name="view" data-toggle="modal" data-target="#absen" class="btn btn-orange btn-lg btn-block">ABSEN KELAS</a>
                        </center>
                    </div>
                    <br>
                    <br>
                    <div>
                        <center>
                          <a type="button" name="view" data-toggle="modal" data-target="#laporan" class="btn btn-banana btn-lg btn-block">LAPORAN OLAHRAGA</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
</html>  



<!--Tampilan Pop Up untuk Laporan Olahraga -->
<div id="laporan" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
    <!-- Bagian Header Pop Up -->
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Laporan Kegiatan Olahraga Harian</h4>
   </div>

   <!-- Bagian Body Pop up -->
   <div class="modal-body">
      <form action="fungsi.php" method="post">
        <div class="form-group">
          <label for="pilihdt">Silahkan Pilih Dan Klik Lanjutkan</label>
            <select name="laporan_kelas" class="form-control" id="pilihdt">
            <option disabled="disabled" selected="selected">PILIH</option>
              <option value="laporan1">BATALYON I</option>
              <option value="laporan2">BATALYON II</option>
              <option value="laporan3">BATALYON III</option>
            </select>
        </div>
        <br>
        <div class="form-group">
          <center>
            <input type="submit" class="btn btn-primary" name="laporan" value="LANJUT">
          </center>        
        </div>
      </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
   </div>
  </div>
 </div>
</div>

<!--Tampilan Pop Up untuk Absen Kelas -->
<div id="absen" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
    <!-- Bagian Header Pop Up -->
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Absensi Kelas</h4>
   </div>

   <!-- Bagian Body Pop up -->
   <div class="modal-body">
     <form action="fungsi.php" method="post">
       <div class="form-group">
       <label for="pilih">Silahkan Pilih Dan Klik Lanjutkan</label>
          <select name="absen_kelas" class="form-control" id="pilih">
          <option disabled="disabled" selected="selected">PILIH</option>
            <option value="batalyon1">BATALYON I</option>
            <option value="batalyon2">BATALYON II</option>
            <option value="batalyon3">BATALYON III</option>
          </select>
       </div>
       <br>
       <div class="form-group">
         <center>
            <input type="submit" class="btn btn-success" name="absen" value="LANJUT">
         </center>        
       </div>
      </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
   </div>
  </div>
 </div>
</div>