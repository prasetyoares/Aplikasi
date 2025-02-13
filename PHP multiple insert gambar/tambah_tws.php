<?php

    require_once "config/config.php";

    // membuat variabel untuk menampung data dari form
  $id_siswa = $_POST['id_siswa'];
  $lokasi = $_POST['lokasi'];
  $tanggal_daftar = $_POST['tanggal_daftar'];
  $jam_mulai = $_POST['jam_mulai'];
  $resi1 = $_POST['resi1'];
  $resi2 = $_POST['resi2'];
  $turbi1 = $_POST['turbi1'];
  $turbi2 = $_POST['turbi2'];
  $turbi3 = $_POST['turbi3'];
  $turbi4 = $_POST['turbi4'];
  $cat1 = $_POST['cat1'];
  $jam_akhir = $_POST['jam_akhir'];
 


  $gambar_produk = $_FILES['gambar_produk']['name'];
  $gambar_produk2 = $_FILES['gambar_produk2']['name'];
  
  $gambar_produk4 = $_FILES['gambar_produk4']['name'];
  $gambar_produk5 = $_FILES['gambar_produk5']['name'];
  $gambar_produk6 = $_FILES['gambar_produk6']['name'];
  $gambar_produk7 = $_FILES['gambar_produk7']['name'];
  $gambar_produk8 = $_FILES['gambar_produk8']['name'];
  $gambar_produk9 = $_FILES['gambar_produk9']['name'];
  $gambar_produk10 = $_FILES['gambar_produk10']['name'];
  $gambar_produk11 = $_FILES['gambar_produk11']['name'];

  //gambar 1 jika ada
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($gambar_produk != "") {
    $ekstensi_diperbolehkan = array('png','jpg','jpeg', 'gif'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_produk); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_produk']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_produk; //menggabungkan angka acak dengan nama file sebenarnya

    //gambar 2 jika ada
    
    $x2 = explode('.', $gambar_produk2); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi2 = strtolower(end($x2));
    $file_tmp2 = $_FILES['gambar_produk2']['tmp_name'];   
    $angka_acak2     = rand(1,999);
    $nama_gambar_baru2 = $angka_acak2.'-'.$gambar_produk2; //menggabungkan angka acak dengan nama file sebenarnya

    //gambar 4 jika ada
    
    $x4 = explode('.', $gambar_produk4); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi4 = strtolower(end($x4));
    $file_tmp4 = $_FILES['gambar_produk4']['tmp_name'];   
    $angka_acak4     = rand(1,999);
    $nama_gambar_baru4 = $angka_acak4.'-'.$gambar_produk4; //menggabungkan angka acak dengan nama file sebenarnya

    //gambar 5 jika ada
    
    $x5 = explode('.', $gambar_produk5); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi5 = strtolower(end($x5));
    $file_tmp5 = $_FILES['gambar_produk5']['tmp_name'];   
    $angka_acak5     = rand(1,999);
    $nama_gambar_baru5 = $angka_acak5.'-'.$gambar_produk5; //menggabungkan angka acak dengan nama file sebenarnya

    //gambar 6 jika ada
    
    $x6 = explode('.', $gambar_produk6); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi6 = strtolower(end($x6));
    $file_tmp6 = $_FILES['gambar_produk6']['tmp_name'];   
    $angka_acak6     = rand(1,999);
    $nama_gambar_baru6 = $angka_acak6.'-'.$gambar_produk6; //menggabungkan angka acak dengan nama file sebenarnya

    //gambar 7 jika ada
    
    $x7 = explode('.', $gambar_produk7); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi7 = strtolower(end($x7));
    $file_tmp7 = $_FILES['gambar_produk7']['tmp_name'];   
    $angka_acak7     = rand(1,999);
    $nama_gambar_baru7 = $angka_acak7.'-'.$gambar_produk7; //menggabungkan angka acak dengan nama file sebenarnya

    //gambar 8 jika ada
    
    $x8 = explode('.', $gambar_produk8); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi8 = strtolower(end($x8));
    $file_tmp8 = $_FILES['gambar_produk8']['tmp_name'];   
    $angka_acak8     = rand(1,999);
    $nama_gambar_baru8 = $angka_acak8.'-'.$gambar_produk8; //menggabungkan angka acak dengan nama file sebenarnya

    //gambar 9 jika ada
    
    $x9 = explode('.', $gambar_produk9); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi9 = strtolower(end($x9));
    $file_tmp9 = $_FILES['gambar_produk9']['tmp_name'];   
    $angka_acak9     = rand(1,999);
    $nama_gambar_baru9 = $angka_acak9.'-'.$gambar_produk9; //menggabungkan angka acak dengan nama file sebenarnya

    //gambar 10 jika ada
    
    $x10 = explode('.', $gambar_produk10); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi10 = strtolower(end($x10));
    $file_tmp10 = $_FILES['gambar_produk10']['tmp_name'];   
    $angka_acak10     = rand(1,999);
    $nama_gambar_baru10 = $angka_acak10.'-'.$gambar_produk10; //menggabungkan angka acak dengan nama file sebenarnya

    //gambar 11 jika ada
    
    $x11 = explode('.', $gambar_produk11); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi11 = strtolower(end($x11));
    $file_tmp11 = $_FILES['gambar_produk11']['tmp_name'];   
    $angka_acak11     = rand(1,999);
    $nama_gambar_baru11 = $angka_acak11.'-'.$gambar_produk11; //menggabungkan angka acak dengan nama file sebenarnya



    if(in_array($ekstensi, $ekstensi_diperbolehkan, $ekstensi2) === true)  {
                  move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru);  //memindah file gambar ke folder gambar1
                  move_uploaded_file($file_tmp2, 'images/'.$nama_gambar_baru2);  //memindah file gambar ke folder gambar2
                  move_uploaded_file($file_tmp4, 'images2/'.$nama_gambar_baru4); //memindah file gambar ke folder gambar4
                  move_uploaded_file($file_tmp5, 'images2/'.$nama_gambar_baru5);  //memindah file gambar ke folder gambar5
                  move_uploaded_file($file_tmp6, 'images2/'.$nama_gambar_baru6);  //memindah file gambar ke folder gambar6
                  move_uploaded_file($file_tmp7, 'images2/'.$nama_gambar_baru7);  //memindah file gambar ke folder gambar7
                  move_uploaded_file($file_tmp8, 'images2/'.$nama_gambar_baru8);  //memindah file gambar ke folder gambar8
                  move_uploaded_file($file_tmp9, 'images2/'.$nama_gambar_baru9);  //memindah file gambar ke folder gambar9
                  move_uploaded_file($file_tmp10, 'images2/'.$nama_gambar_baru10);  //memindah file gambar ke folder gambar10
                  move_uploaded_file($file_tmp11, 'images2/'.$nama_gambar_baru11);  //memindah file gambar ke folder gambar11
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
$query  = ("INSERT INTO tbl_siswa (id_siswa, tanggal_daftar, lokasi, jam_mulai, resi1, foto_profil, resi2, foto_profil2, turbi1, foto_profil4, foto_profil5, turbi2, foto_profil6, foto_profil7, turbi3, foto_profil8, foto_profil9, turbi4, foto_profil10, foto_profil11, cat1, jam_akhir)
VALUES('$id_siswa', '$tanggal_daftar', '$lokasi', '$jam_mulai', '$resi1', '$nama_gambar_baru', '$resi2', '$nama_gambar_baru2', '$turbi1', '$nama_gambar_baru4', '$nama_gambar_baru5', '$turbi2', '$nama_gambar_baru6', '$nama_gambar_baru7', '$turbi3', '$nama_gambar_baru8','$nama_gambar_baru9', '$turbi4', '$nama_gambar_baru10','$nama_gambar_baru11','$cat1', '$jam_akhir' )")
                    or die('Ada kesalahan pada query insert yang pertama : ' . $mysqli->error);
                    $result = mysqli_query($mysqli, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                             " - ".mysqli_error($mysqli));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diinput.');window.location='index.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
              }
    } else {

   //gambar 2 jika ada
    
   $x2 = explode('.', $gambar_produk2); //memisahkan nama file dengan ekstensi yang diupload
   $ekstensi2 = strtolower(end($x2));
   $file_tmp2 = $_FILES['gambar_produk2']['tmp_name'];   
   $angka_acak2     = rand(1,999);
   $nama_gambar_baru2 = $angka_acak2.'-'.$gambar_produk2; //menggabungkan angka acak dengan nama file sebenarnya

   //gambar 4 jika ada
   
   $x4 = explode('.', $gambar_produk4); //memisahkan nama file dengan ekstensi yang diupload
   $ekstensi4 = strtolower(end($x4));
   $file_tmp4 = $_FILES['gambar_produk4']['tmp_name'];   
   $angka_acak4     = rand(1,999);
   $nama_gambar_baru4 = $angka_acak4.'-'.$gambar_produk4; //menggabungkan angka acak dengan nama file sebenarnya

   //gambar 5 jika ada
   
   $x5 = explode('.', $gambar_produk5); //memisahkan nama file dengan ekstensi yang diupload
   $ekstensi5 = strtolower(end($x5));
   $file_tmp5 = $_FILES['gambar_produk5']['tmp_name'];   
   $angka_acak5     = rand(1,999);
   $nama_gambar_baru5 = $angka_acak5.'-'.$gambar_produk5; //menggabungkan angka acak dengan nama file sebenarnya

   //gambar 6 jika ada
   
   $x6 = explode('.', $gambar_produk6); //memisahkan nama file dengan ekstensi yang diupload
   $ekstensi6 = strtolower(end($x6));
   $file_tmp6 = $_FILES['gambar_produk6']['tmp_name'];   
   $angka_acak6     = rand(1,999);
   $nama_gambar_baru6 = $angka_acak6.'-'.$gambar_produk6; //menggabungkan angka acak dengan nama file sebenarnya

   //gambar 7 jika ada
   
   $x7 = explode('.', $gambar_produk7); //memisahkan nama file dengan ekstensi yang diupload
   $ekstensi7 = strtolower(end($x7));
   $file_tmp7 = $_FILES['gambar_produk7']['tmp_name'];   
   $angka_acak7     = rand(1,999);
   $nama_gambar_baru7 = $angka_acak7.'-'.$gambar_produk7; //menggabungkan angka acak dengan nama file sebenarnya

   //gambar 8 jika ada
   
   $x8 = explode('.', $gambar_produk8); //memisahkan nama file dengan ekstensi yang diupload
   $ekstensi8 = strtolower(end($x8));
   $file_tmp8 = $_FILES['gambar_produk8']['tmp_name'];   
   $angka_acak8     = rand(1,999);
   $nama_gambar_baru8 = $angka_acak8.'-'.$gambar_produk8; //menggabungkan angka acak dengan nama file sebenarnya

   //gambar 9 jika ada
   
   $x9 = explode('.', $gambar_produk9); //memisahkan nama file dengan ekstensi yang diupload
   $ekstensi9 = strtolower(end($x9));
   $file_tmp9 = $_FILES['gambar_produk9']['tmp_name'];   
   $angka_acak9     = rand(1,999);
   $nama_gambar_baru9 = $angka_acak9.'-'.$gambar_produk9; //menggabungkan angka acak dengan nama file sebenarnya

   //gambar 10 jika ada
   
   $x10 = explode('.', $gambar_produk10); //memisahkan nama file dengan ekstensi yang diupload
   $ekstensi10 = strtolower(end($x10));
   $file_tmp10 = $_FILES['gambar_produk10']['tmp_name'];   
   $angka_acak10     = rand(1,999);
   $nama_gambar_baru10 = $angka_acak10.'-'.$gambar_produk10; //menggabungkan angka acak dengan nama file sebenarnya

   //gambar 11 jika ada
   
   $x11 = explode('.', $gambar_produk11); //memisahkan nama file dengan ekstensi yang diupload
   $ekstensi11 = strtolower(end($x11));
   $file_tmp11 = $_FILES['gambar_produk11']['tmp_name'];   
   $angka_acak11     = rand(1,999);
   $nama_gambar_baru11 = $angka_acak11.'-'.$gambar_produk11; //menggabungkan angka acak dengan nama file sebenarnya

                  move_uploaded_file($file_tmp, 'images/'.$nama_gambar_baru);  //memindah file gambar ke folder gambar1
                  move_uploaded_file($file_tmp2, 'images/'.$nama_gambar_baru2);  //memindah file gambar ke folder gambar2
                  move_uploaded_file($file_tmp4, 'images2/'.$nama_gambar_baru4); //memindah file gambar ke folder gambar4
                  move_uploaded_file($file_tmp5, 'images2/'.$nama_gambar_baru5);  //memindah file gambar ke folder gambar5
                  move_uploaded_file($file_tmp6, 'images2/'.$nama_gambar_baru6);  //memindah file gambar ke folder gambar6
                  move_uploaded_file($file_tmp7, 'images2/'.$nama_gambar_baru7);  //memindah file gambar ke folder gambar7
                  move_uploaded_file($file_tmp8, 'images2/'.$nama_gambar_baru8);  //memindah file gambar ke folder gambar8
                  move_uploaded_file($file_tmp9, 'images2/'.$nama_gambar_baru9);  //memindah file gambar ke folder gambar9
                  move_uploaded_file($file_tmp10, 'images2/'.$nama_gambar_baru10);  //memindah file gambar ke folder gambar10
                  move_uploaded_file($file_tmp11, 'images2/'.$nama_gambar_baru11);  //memindah file gambar ke folder gambar11

      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = ("INSERT INTO tbl_siswa
       (id_siswa, tanggal_daftar, lokasi, jam_mulai, resi1, foto_profil, resi2, foto_profil2, turbi1, foto_profil4, foto_profil5, turbi2, foto_profil6, foto_profil7, turbi3, foto_profil8, foto_profil9, turbi4, foto_profil10, foto_profil11, cat1, jam_akhir)
VALUES('$id_siswa', '$tanggal_daftar', '$lokasi', '$jam_mulai', '$resi1', '$nama_gambar_baru', '$resi2', '$nama_gambar_baru2', '$turbi1', '$nama_gambar_baru4', '$nama_gambar_baru5', '$turbi2', '$nama_gambar_baru6', '$nama_gambar_baru7', '$turbi3', '$nama_gambar_baru8','$nama_gambar_baru9', '$turbi4', '$nama_gambar_baru10','$nama_gambar_baru11','$cat1', '$jam_akhir')")
                    or die('Ada kesalahan pada query insert yang pertama : ' . $mysqli->error);
                    $result = mysqli_query($mysqli, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($mysqli).
                             " - ".mysqli_error($mysqli));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diinput.');window.location='index.php';</script>";
      }
    }