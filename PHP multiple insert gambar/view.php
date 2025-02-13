<style>
@media print{
  .navigas {
    display: none;
  }
}
.sosmed_inline img{
   display:inline;
   margin:2px;
   border-radius:4px;
   width:44px;
   opacity:1;
   cursor:pointer;
}
.sosmed_inline img:hover{
   opacity:0.8;
   transform:scale(1);
}
  </style>
<div class="d-flex flex-column flex-lg-row mt-5 mb-3">
    <!-- judul halaman -->
    
    <!-- breadcrumbs -->
    <div class="navigas">
    <div class="ms-5 ms-lg-0 pt-lg-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-dark text-decoration-none"><i class="fa-solid fa-house"></i></a></li>
                
                <li class="breadcrumb-item" aria-current="page"><a href="index.php" >Home</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="logout.php" >Logout</a></li>
            </ol>
        </nav>
    </div>
</div>
  </div>


<div class="col-12">
  <div class='tengah'>
  
        
  <table class="table">
    <thead>
      <tr>
        <th class="text-center"><img src="assets/img/logo.png"  alt="..." width="150"></th>
        <th>Laporan Inspeksi di Instalasi Pengolahan Air </th>   
      </tr>
    <br>
    <br>
    </thead>
 
  </table>
  </div>
</div>

<div class="col-8">
  <table class="table">
    <?php 
		include 'config/config.php';
        $id = $_GET['id'];
      
		
		$data = mysqli_query($mysqli ,"select * from tbl_siswa where id_siswa ='$id' ");
		while($d = mysqli_fetch_array($data)){
			?>
    <body>
    <tr class= "table-primary">
      <td>Lokasi Instalasi Pengolah Air</td>
      <td><?php echo $d['lokasi']; ?></td>
    </tr>
    <tr class= "table-info">
      <td>ID Laporan</td>
      <td><?php echo $d['id_siswa']; ?></td>   
    </tr>
    <tr class= "table-info">
      <td>Tanggal Inspeksi
      </td>
      <td><?php echo $d['tanggal_daftar']; ?></td>   
    </tr>
    <tr class= "table-info">
      <td>Jam Mulai Inspeksi</td>
      <td><?php echo $d['jam_mulai']; ?></td>  
    </tr>
    
    </body>
  </table>
</div>

<div class="col-8">
  <table class="table table-bordered">
  <thead>
  <tr>
      <td colspan="2" > Parameter yang dicek :
  </td>
      
    </tr>
    <tr class="table-primary">
      <td colspan="2" class="text-center"> 1. Residual Klorin
  </td>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="text-center" ><?php echo $d['resi1']; ?></th>
      <td class="text-center"><?php echo $d['resi2']; ?></td>
      
      
    </tr>
    <tr>
      <td class="text-center"><img src="images/<?php echo $d['foto_profil'] ?>" height="120" ></td>
      <!-- menyembunyikan tabel kalau data kolom di database kosong --><td class="text-center">
    <?php if($d['foto_profil2'] != "") { ?> <img src="images/<?php echo ($d['foto_profil2']); ?>" height="130"></td><?php } ?></td>
      
      
    </tr>
    
    <tr class="table-primary">
      <td colspan="3" class="text-center"> 2. Turbidity

  </td>
      
    </tr>
  
    <tr>
      <td class="text-center" ><?php echo $d['turbi1']; ?></th>
      <td class="text-center"><?php echo $d['turbi2']; ?></td>
      
      
    </tr>
    <tr>
      <td class="text-center"><img src="images2/<?php echo $d['foto_profil4'] ?>" height="120" >
      <img src="images2/<?php echo $d['foto_profil5'] ?>" height="120" ></td>
      <td class="text-center"><img src="images2/<?php echo $d['foto_profil6'] ?>" height="120">
    <img src="images2/<?php echo $d['foto_profil7'] ?>" height="120" ></td>
      
    </tr>
    <tr>
      <td class="text-center" ><?php echo $d['turbi3']; ?></th>
      <td class="text-center"><?php echo $d['turbi4']; ?></td>
    </tr>

    <tr>
      <td class="text-center"><img src="images2/<?php echo $d['foto_profil8'] ?>" height="120" >
      <img src="images2/<?php echo $d['foto_profil9'] ?>" height="120" ></td>
      <td class="text-center"><img src="images2/<?php echo $d['foto_profil10'] ?>" height="120" >
    <img src="images2/<?php echo $d['foto_profil11'] ?>" height="120" ></td>
      
    </tr>

    <tr>
      <td colspan="3" height="120"> Catatan Petugas : <?php echo $d['cat1']; ?></td>
      
    </tr>
    
    
    
  </tbody>
  </table>
</div>






<div class="col-9">
<table class="table table-bordered">
  <thead>
  <tr>
      <td colspan="4"> Jam selesai inspeksi : <?php echo $d['jam_akhir']; ?> WIB</td>
      
    </tr>
    
  </thead>
  
    
    <!--simpan dlu
    <tr>
      
        <td class="text-center">Tanda tangan</td>
        
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        
    </tr>
    --> 
    
  </tbody>
  <?php 
		}
		?>
</table>
</div>

  <!-- tombol share -->
  <div class="navigas">
  <p><b>Share Laporan :</b></p>
<p class="sosmed_inline">
<img src="assets/img/whatsapp.png" onclick="_whatapps();" alt="whatsapp">
</p>
  </div>

<script>
   var title = "Share Laporan IPA";
   var deskripsi= "<?php
$uri_path = $_SERVER['HTTP_HOST'];
$uri = $_SERVER['REQUEST_URI'];
echo $uri_path, $uri;
?>";
   var currentLocation = window.location;
   var top = (screen.height - 570) / 2;
   var left = (screen.width - 570) / 2;
   var params = "menubar=no,toolbar=no,status=no,width=570,height=570,top=" + top + ",left=" + left;
   function _whatapps(){
     var url="https://api.whatsapp.com/send?phone=&text=" + encodeURI(title +" "+deskripsi);
     window.open(url,'NewWindow',params);
   }
   </script>