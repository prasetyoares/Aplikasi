<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi IPA">
    <meta name="author" content="Aris Prasetyo">

    <!-- Title -->
    <title>Arsiteckweb</title>

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
    
    <!-- jQuery Core -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<div class="d-flex flex-column flex-lg-row mt-5 mb-3">
   
    <!-- breadcrumbs -->
    
</div>

<div class="d-grid gap-2 d-md-block bg-white rounded-4 shadow-sm p-4 mb-3">
    <!-- button entri data -->
    
 
    <a href="data.php"><button class="btn btn-primary rounded-pill py-2 px-4"><i class="fa-solid fa-pencil me-2"></i>Entri Laporan
    </button></a>
    <a href="cari.php"><button class="btn btn-primary rounded-pill py-2 px-4"><i class="fa-solid fa-search me-2"></i>Cari data
    </button></a>
    <a href="logout.php"><button class="btn btn-primary rounded-pill py-2 px-4"><i class="fa-solid fa-sign-out me-2"></i>Logout
    </button></a>
</div>

<div class="d-grid gap-2 d-md-block bg-white rounded-4 shadow-sm p-4 mb-5">
    <div class="table-responsive">
        <!-- simpan tabel untuk menampilkan data dari database -->
        <table class="table table-bordered table-striped table-hover" style="width:100%">
        <span class="text-danger">Refresh Halaman untuk mendapatkan data terbaru</span>
            <thead class="table-light">
                <th class="text-center">No.</th>
                <th class="text-center">ID Laporan</th>
                <th class="text-center">Nama PDAM</th>
                <th class="text-center">Tanggal Inspeksi</th>
                
                <th class="text-center"></th>
                <th class="text-center">Aksi</th>
            </thead>
            <?php 
		include 'config/config.php';
		$no = 1;
		$data = mysqli_query($mysqli,"select * from tbl_siswa ");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['id_siswa']; ?></td>
				<td><?php echo $d['lokasi']; ?></td>
				<td><?php echo $d['tanggal_daftar']; ?></td>
                
            <br>
                </td>
				<td>
                
					 
					
                        <a href="view.php?id=<?php echo $d['id_siswa']; ?>"><button class="btn btn-primary btn-sm"><i class="fa-solid fa-search me-2"></i>LIHAT</button></a>
                    
                    </td>
                    <td>
                    <div class="d-grid gap-1 d-md-block">
					 <a href="cetak2.php?id=<?php echo $d['id_siswa']; ?>"><button class="btn btn-primary  btn-sm"><i class="fa-solid fa-print me-2"></i>CETAK</button></a>
                     <a href="cetak.php?id=<?php echo $d['id_siswa']; ?>"><button class="btn btn-primary  btn-sm"><i class="fa-solid fa-print me-2"></i>CETAK (+generator)</button></a>
                   
                    <a href="hapus.php?id=<?php echo $d['id_siswa']; ?>" onclick="return confirm('Yakin Hapus?')"><button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash me-2"></i>HAPUS</button></a>
                    </div>
				</td>
			</tr>
			<?php 
		}
		?>
        </table>
        
    </div>
</div>

<footer class="footer mt-auto bg-white shadow py-4">
        <div class="container-fluid px-lg-5">
            <!-- copyright -->
            <div class="copyright text-center mb-2 mb-md-0">
                &copy; 2025 - <a href="https://100persenworking.blogspot.com/" target="_blank" class="text-brand text-decoration-none">Arsiteckweb</a>. All rights reserved.
            </div>
        </div>
    </footer>