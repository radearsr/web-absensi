<?php
if (isset($_POST["absen"])) {
  $gateway = $_POST["absen_kelas"];
  header("Location: absen_kelas/$gateway.php");
  
}elseif(isset($_POST["laporan"])){
  $gateway = $_POST["laporan_kelas"];
  header("Location: laporan/$gateway.php");

}else{
  header("Location:index.php");
}
?>