<?php

// Function Redirect Link Ke Form 
function redirect($opsi){
  if (isset($opsi["absen"])) {
    $gateway = $opsi["absen_kelas"];
    return "Location: absen_kelas/$gateway.php";
    
  }elseif(isset($opsi["laporan"])){
    $gateway = $opsi["laporan_kelas"];
    return "Location: laporan/$gateway.php";

  }else{
    return "Location:index.php";
  }
}

// Function Daftar Nama Kelas
function daftar_kelas($kelas){
  // Membuat List Untuk Kelas Batalyon I
  $batalyon1 = [
    "NA", "NB", "NC", "ND", "NE",
    "NF", "NG", "NH", "TA", "TB",
    "TC", "TD", "TE", "TF", "TG",
    "KA", "KB", "KC", "KD"
  ];

  // Membuat List Untuk Kelas Batalyon II
  $batalyon2 = [
    "NA", "NB", "NC", "ND", "NE",
    "NF", "NG", "NH", "TA", "TB", 
    "TC", "TD", "TE", "TF", "TG",
    "TH", "KA", "KB", "KC", "KD","KE"
  ];

  // Membuat List Untuk Kelas Batalyon III
  $batalyon3 = [
    "NVIIA", "NVIIB", "TVIIA", "TVIIB",
    "KVIIA", "KVIIB", "NVIIIA", "NVIIIB",
    "NVIIIC", "TVIIIA", "TVIIIB", "TVIIIC",
    "KVIIIA", "KVIIIB", "KVIIIC", "KVIIID"
  ];

// Variabel Untuk Menampung Hasil Looping list 
  $batalyons = [];

  if ( $kelas == 'batalyon1' ) {
    for ($i=0; $i < count($batalyon1); $i++) { 
      $batalyons [] = $batalyon1[$i];
    }
    return $batalyons;
  }
  elseif ( $kelas == 'batalyon2' ) {
    for ($i=0; $i < count($batalyon2); $i++) { 
      $batalyons [] = $batalyon2[$i];
    }
    return $batalyons;
  }
  elseif ( $kelas == 'batalyon3' ) {
    for ($i=0; $i < count($batalyon3); $i++) { 
      $batalyons [] = $batalyon3[$i];
    }
    return $batalyons;
  }
  else {
    return "Daftar Kelas Tidak Ditemukan";
  }  
}

// Function Upload Gambar 
function upload_file($data_file, $absensi){

  if ( $absensi === "kelas" ) {
    //Mendapatkan Hasil Input File Pertama 
    $file_one_name      =  $data_file['ab_pagi']['name'];
    $file_one_type      =  $data_file['ab_pagi']['type'];
    $file_one_size      =  $data_file['ab_pagi']['size'];
    $file_one_tem_Loc   =  $data_file['ab_pagi']['tmp_name'];
    $file_one_store     = "../all_files/foto/".$file_one_name;
    $debug_one          = $data_file['ab_pagi']['error'];
  
    //Mendapatkan Hasil Input File Kedua
    $file_two_name      =  $data_file['ab_siang']['name'];
    $file_two_type      =  $data_file['ab_siang']['type'];
    $file_two_size      =  $data_file['ab_siang']['size'];
    $file_two_tem_Loc   =  $data_file['ab_siang']['tmp_name'];
    $file_two_store     = "../all_files/foto/".$file_two_name;
    $debug_two          = $data_file['ab_siang']['error'];
  
    // Mendapatkan Hasil Input File Ketiga
    $file_three_name    =  $data_file['ab_sore']['name'];
    $file_three_type    =  $data_file['ab_sore']['type'];
    $file_three_size    =  $data_file['ab_sore']['size'];
    $file_three_tem_Loc =  $data_file['ab_sore']['tmp_name'];
    $file_three_store   = "../all_files/foto/".$file_three_name;
    $debug_three        = $data_file['ab_sore']['error'];
  
    // Mendapatkan Hasil Input File Keempat
    $file_four_name     =  $data_file['ft_badan']['name'];
    $file_four_type     =  $data_file['ft_badan']['type'];
    $file_four_size     =  $data_file['ft_badan']['size'];
    $file_four_tem_Loc  =  $data_file['ft_badan']['tmp_name'];
    $file_four_store    = "../all_files/foto/".$file_four_name;
    $debug_four         = $data_file['ft_badan']['error'];

    // Membuat Array Untuk Menampung Semua Data Hasil Input File
    $files = [
      [
        "lokasiFile" => $file_one_store,
        "error"      => $debug_one,
        "tmpFile"    => $file_one_tem_Loc 
      ],
      [
      "lokasiFile" => $file_two_store,
      "error"      => $debug_two,
      "tmpFile"    => $file_two_tem_Loc
      ],
      [
      "lokasiFile" => $file_three_store,
      "error"      => $debug_three,
      "tmpFile"    => $file_three_tem_Loc
      ],
      [
      "lokasiFile" => $file_four_store,
      "error"      => $debug_four,
      "tmpFile"    => $file_four_tem_Loc
      ]
    ];

    // Looping Array Untuk Mengupload File
    $message = ""; 
    $count = 0;
    foreach( $files as $file ){
      if ( $file['error'] === 0) {
          move_uploaded_file($file['tmpFile'], $file['lokasiFile']);
          $message = "Berhasil Mengupload";
          $count += 1;
      }
    }
    return $message." ".$count." "."File";
  }elseif( $absensi === "laporan" ){
    // Mendapatkan Hasil Input File Kelima
    $file_five_name    =  $data_file['video']['name'];
    $file_five_type    =  $data_file['video']['type'];
    $file_five_size    =  $data_file['video']['size'];
    $file_five_tem_Loc =  $data_file['video']['tmp_name'];
    $file_five_store   = "../all_files/video/".$file_five_name;
    $debug_five        = $data_file['video']['error'];

    // Membuat Array Untuk Menampung Semua Data Hasil Input File
    $files = [
      [
        "lokasiFile" => $file_five_store,
        "error"      => $debug_five,
        "tmpFile"    => $file_five_tem_Loc
      ]
    ];
    // Looping Array Untuk Mengupload File
    $message = ""; 
    $count = 0;
      foreach( $files as $file ){
        if ( $file['error'] === 0) {
            move_uploaded_file($file['tmpFile'], $file['lokasiFile']);
            $message = "Berhasil Mengupload";
            $count += 1;
        }
      }
    return $message." ".$count." "."File";  
  }
 
}

?>
