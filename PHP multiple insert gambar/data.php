<?php
	require_once 'config/config.php';
// mengambil data barang dengan kode paling besar
// membuat "id_siswa"
    // sql statement untuk menampilkan 5 digit terakhir dari "id_siswa" pada tabel "tbl_siswa"
    $query = $mysqli->query("SELECT RIGHT(id_siswa,5) as nomor FROM tbl_siswa ORDER BY id_siswa DESC LIMIT 1")
                            or die('Ada kesalahan pada query tampil data : ' . $mysqli->error);
    // ambil jumlah baris data hasil query
    $rows = $query->num_rows;

    // cek hasil query
    // jika "id_siswa" sudah ada
    if ($rows <> 0) {
        // ambil data hasil query
        $data = $query->fetch_assoc();
        // nomor urut "id_siswa" yang terakhir + 1
        $nomor_urut = $data['nomor'] + 1;
    }
    // jika "id_siswa" belum ada
    else {
        // nomor urut "id_siswa" = 1
        $nomor_urut = 1;
    }

    // menambahkan karakter "ID-" diawal dan karakter "0" disebelah kiri nomor urut
    $id_siswa = "ID-" . str_pad($nomor_urut, 5, "0", STR_PAD_LEFT);

		?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi IPA">
    <meta name="author" content="Aris Prasetyo">

    <!-- Title -->
    <title>Multiple image form insert</title>

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />
    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" integrity="sha512-MQXduO8IQnJVq1qmySpN87QQkiR1bZHtorbJBD0tzy7/0U9+YIC93QWHeGTEoojMVHWWNkoCp8V6OzVSYrX0oQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    </head>

<body class="d-flex flex-column h-100">
    <!-- Preloader -->
    <div style="display: none;" class="preloader">
        <div class="loading">
            <img src="assets/img/spinner-loading.gif" alt="Loading" width="200">
        </div>
    </div>

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top bg-primary shadow">
            <div class="container-fluid px-lg-5">
                <span class="navbar-brand text-white">
                    <i class="fa-solid fa-plus me-2"></i>
                    Form input PDAM Tawangsari </span>
                </span>
            </div>
            
        </nav>
    </header>
    

    <main class="flex-shrink-0">
        <div class="container-fluid pt-5 px-lg-5">
<!-- form -->
<form method="post" action="tambah_tws.php" enctype="multipart/form-data">

        <!-- simpan tabel untuk menampilkan data dari database -->
        
            
        <br>
        <div class="mb-3 col-xl-6 pe-xl-3">
        <label class="form-label">ID Laporan</label>
        <input type="text" name="id_siswa" required="required" value="<?php echo $id_siswa ?>" class="form-control" readonly>
        </div>

        <div class="mb-3 col-xl-6 pe-xl-3">
        <label class="form-label">Lokasi IPA</label>
        <input type="text" name="lokasi" required="required" value="PDAM Jakarta" class="form-control" readonly> <br>
        </div>
    
        <div class="mb-3 col-xl-6 pe-xl-3">
        <label class="form-label">1. Tanggal Inspeksi</label>
        <input type="date" id="tanggal_daftar" name="tanggal_daftar" class="form-control" autocomplete="off" required>
        </div>
    
        <div class="mb-3 col-xl-6 pe-xl-3">
        <label class="form-label">2. Jam Mulai Inspeksi</label>
                                <select id="jam_mulai" name="jam_mulai" class="form-select" autocomplete="off" required>
                                    <option selected disabled value="">-- Pilih --</option>
                                    <option value="08.00">08.00</option>
                                    <option value="09.00">09.00</option>
                                    <option value="10.00">10.00</option>
                                    <option value="11.00">11.00</option>
                                    <option value="12.00">12.00</option>
                                    <option value="13.00">13.00</option>
                                    <option value="14.00">14.00</option>
                                    <option value="15.00">15.00</option>
                                    <option value="16.00">16.00</option>
                                    <option value="17.00">17.00</option>
                                </select>
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label"><b>Parameter yang dicek :</b> <br>3. Residual Klorin 1<br></label>
        <input type="text" id="resi1" name="resi1" class="form-control" autocomplete="off" placeholder="..Tempat.. =...ppm">
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">4. Foto Residual Klorin 1</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk" name="gambar_produk" class="form-control" autocomplete="off">                             
        </div>

        <hr><br>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">5. Residual Klorin 2<br></label>
        <input type="text" id="resi2" name="resi2" class="form-control" autocomplete="off" placeholder="..Tempat.. =...ppm">
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">6. Foto Residual Klorin 2</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk2" name="gambar_produk2" class="form-control" autocomplete="off">                             
        </div>

        <hr><br>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">7. Turbidity 1<br></label>
        <input type="text" id="turbi1" name="turbi1" class="form-control" autocomplete="off" placeholder="..Tempat.. =...ntu">
        </div>

         
        <div class="mb-3 pe-xl-3">
        <label class="form-label">8. Foto Angka Turbidity 1</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk4" name="gambar_produk4" class="form-control" autocomplete="off" required>                              
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">9. Foto Lokasi Turbidity 1</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk5" name="gambar_produk5" class="form-control" autocomplete="off" required>                              
        </div>

        <hr><br>


        <div class="mb-3 pe-xl-3">
        <label class="form-label">10. Turbidity 2<br></label>
        <input type="text" id="turbi2" name="turbi2" class="form-control" autocomplete="off" placeholder="..Tempat.. =...ntu">
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">11. Foto Angka Turbidity 2</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk6" name="gambar_produk6" class="form-control" autocomplete="off" required>                              
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">12. Foto Lokasi Turbidity 2</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk7" name="gambar_produk7" class="form-control" autocomplete="off" required>                              
        </div>

        
        <hr><br>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">13. Turbidity 3<br></label>
        <input type="text" id="turbi3" name="turbi3" class="form-control" autocomplete="off" placeholder="..Tempat.. =...ntu">
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">14. Foto Angka Turbidity 3</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk8" name="gambar_produk8" class="form-control" autocomplete="off" required>                              
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">15. Foto Lokasi Turbidity 3</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk9" name="gambar_produk9" class="form-control" autocomplete="off" required>                              
        </div>

        
        <hr><br>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">16. Turbidity 4<br></label>
        <input type="text" id="turbi4" name="turbi4" class="form-control" autocomplete="off" placeholder="..Tempat.. =...ntu">
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">17. Foto Angka Turbidity 4</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk10" name="gambar_produk10" class="form-control" autocomplete="off" required>                              
        </div>

        <div class="mb-3 pe-xl-3">
        <label class="form-label">18. Foto Lokasi Turbidity 4</label>
        <input type="file" accept=".jpg, .jpeg, .png" id="gambar_produk11" name="gambar_produk11" class="form-control" autocomplete="off" required>                              
        </div>

        
        <hr><br>
         
        

        <div class="mb-3 pe-xl-3">
        <label class="form-label">19. Catatan Petugas </label>
        <textarea id="cat1" name="cat1" rows="2" class="form-control" autocomplete="off" ></textarea>
        </div>

        <div class="mb-3 pe-xl-3">
                                <label class="form-label">20. Jam selesai Inspeksi</label>
                                <select id="jam_akhir" name="jam_akhir" class="form-select" autocomplete="off" required>
                                    <option selected disabled value="">-- Pilih --</option>                                   
                                    <option value="09.00">09.00</option>
                                    <option value="10.00">10.00</option>
                                    <option value="11.00">11.00</option>
                                    <option value="12.00">12.00</option>
                                    <option value="13.00">13.00</option>
                                    <option value="14.00">14.00</option>
                                    <option value="15.00">15.00</option>
                                    <option value="16.00">16.00</option>
                                    <option value="17.00">17.00</option>
                                    <option value="18.00">18.00</option>
                                    <option value="19.00">19.00</option>
                                    <option value="20.00">20.00</option>
                                    <option value="21.00">21.00</option>
                                </select>
                                
        </div>

        

                            
        <input type="submit" name="upload" value="Submit" class="btn btn-dark">
        <a class="btn btn-dark" href="index.php" role="button">Kembali ke home</a>
        
</form>        



</div>
</main>

  <!-- Footer -->
  <footer class="footer mt-auto bg-white shadow py-4">
        <div class="container-fluid px-lg-5">
            <!-- copyright -->
            <div class="copyright text-center mb-2 mb-md-0">
                &copy; 2024 - <a href="https://kymmoshiglobalindonesia.com/" target="_blank" class="text-brand text-decoration-none">arsiteckweb</a>. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/datatables/dataTables.bootstrap5.min.js"></script>
    <!-- Flatpickr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js" integrity="sha512-K/oyQtMXpxI4+K0W7H25UopjM8pzq0yrVdFdG21Fh5dBe91I40pDd9A4lzNlHPHBIP2cwZuoxaUSX0GJSObvGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/l10n/id.min.js" integrity="sha512-XCJP/fJxX6uFAvyH4yZfgsbzmiBiS7hPiVEGw8C+372GAiMgLlPVy00o585G/kD+Shh2YWXr34Ui0lee7+x0ZA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap Notify -->
    <script type="text/javascript" src="assets/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
    <!-- Bootbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/6.0.0/bootbox.min.js" integrity="sha512-oVbWSv2O4y1UzvExJMHaHcaib4wsBMS5tEP3/YkMP6GmkwRJAa79Jwsv+Y/w7w2Vb/98/Xhvck10LyJweB8Jsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Custom Scripts -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/form-validation.js"></script>
</body>

</html>