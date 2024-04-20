<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!---------------------------------------------------------------BOOTSTRAP----------------------------------------------------------->
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Data Nilai Mahasiswa</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
<!---------------------------------------------------------------BOOTSTRAP----------------------------------------------------------->

</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #605ca8">
      <a class="navbar-brand" href="#">DATA NILAI MAHASISWA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Form Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tambah.php">Input Data</a>
        </li>
      </ul>
      </div>
    </nav>




        <div class="page-wrapper p-t-45 p-b-50">
        <section class="page-section portfolio" id="input-data" style="background-image:url(bgg.jpg)">
          <div class="container"><br>
            <h2 class="page-section-heading text-center text-uppercase mt-5 mb-5" style="color:black; font-family: 'monospace;', cursive;">Data Nilai Mahasiswa</h2>
            <div class="mt-4 mb-2"> 
              <center>
        </div>
<div class="mb-3" >
        <form action="" method="get">
                 <form class="d-flex col-md-4 mt-4 mb-3" action="index.php" method="get">
                <input class="form-control me-2" type="text" autofocus placeholder="Cari Data Mahasiswa" autocomplete="off" name="cari"><br>
                <input class="btn btn-secondary" style="background-color: #929495" type="submit" value="Cari"></button>
  <a class="card-header text-center" text-white style="background-color: #605ca8 ;" href="tambah.php" role="button">Tambah Data</a>
</form>
            <?php 
            if(isset($_GET['cari'])){
                $cari = $_GET['cari'];
                 }
            ?>

<br><br><br>
                <div class="table-responsive">
                  <table class="table table-striped table-hover table-sm table-light">
                    <thead class="thead table-dark" style="background-color: #bd8cbf ;">
                      <tr class="text-center">
                        <th scope="col" rowspan="2">No</th>
                        <th scope="col" rowspan="2">Foto</th>
                        <th scope="col" rowspan="2">NIM</th>
                        <th scope="col" rowspan="2">Nama</th>
                        <th scope="col" colspan="3">Nilai</th>
                        <th scope="col" colspan="2">Nilai Akhir</th>
                        <th scope="col" rowspan="2">Aksi</th>
                      </tr>
                      <tr>
                        <th scope="col">Tugas</th>
                        <th scope="col">UTS</th>
                        <th scope="col">UAS</th>
                        <th scope="col">Angka</th>
                        <th scope="col">Huruf</th>
                      </tr>
                    </thead>

                    <?php
                    if(isset($_GET['cari'])){
                      $cari = $_GET['cari'];
                      $q_tampil_mhs = mysqli_query($conn, "SELECT * FROM tblnilai WHERE nama_mhs LIKE '%$cari%'
                        OR id LIKE '%$cari%'
                        OR nim LIKE '%$cari%'");
                    }
                    else{
                      $q_tampil_mhs = mysqli_query($conn, "SELECT * FROM tblnilai ORDER BY id ASC");
                    }
                      
                      $nomor=1;
                      while($r_tampil_mhs=mysqli_fetch_array($q_tampil_mhs)){
                      $n_tugas = $r_tampil_mhs['tugas'] * 0.25;
                      $n_uts = $r_tampil_mhs['uts'] * 0.25;
                      $n_uas = $r_tampil_mhs['uas'] * 0.50;

                      $rumus = $n_tugas + $n_uts + $n_uas;
                      $n_akhir = $rumus;
                      $n_huruf = "";
                       if ($n_akhir>=85 && $n_akhir<=100)
                            {
                            $n_akhir = $rumus;
                            $n_huruf = "A";
                            }
                            elseif ($n_akhir>=70 && $n_akhir<=84)
                            {
                            $n_akhir = $rumus;
                            $n_huruf = "B";
                            }
                            elseif ($n_akhir>=60 && $n_akhir<=69)
                            {
                            $n_akhir = $rumus;
                            $n_huruf = "C";
                            }
                            elseif ($n_akhir>=40 && $n_akhir<=59)
                            {
                            $n_akhir = $rumus;
                            $n_huruf = "D";
                            }
                            elseif ($n_akhir>=0 && $n_akhir <=39)
                            {
                            $n_akhir = $rumus;
                            $n_huruf = "E";
                            }
                            ?>



                      <tr>
                        <td><?php echo $nomor++; ?></td>
                        <td class="text-center"><img src="images/<?php echo $r_tampil_mhs['foto_mhs'];?>" width="100px" height ="150px"></td>
                        <td><?php echo $r_tampil_mhs['nim']; ?></td>
                        <td><?php echo $r_tampil_mhs['nama_mhs']; ?></td>
                        <td><?php echo $r_tampil_mhs['tugas']; ?></td>
                        <td><?php echo $r_tampil_mhs['uts']; ?></td>
                        <td><?php echo $r_tampil_mhs['uas']; ?></td>
                        <td><?php echo $n_akhir; ?></td>
                        <td><?php echo $n_huruf; ?></td>
                        <td class="text-center">
                        <a href="edit.php?id=<?php echo $r_tampil_mhs['id']; ?> " class="btn btn-warning" >Edit</a>
                            <a href="hapus.php?id=<?php echo $r_tampil_mhs['id'];?> " onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a></div>
                        </td>                        
                      </tr>
                      <?php } ?>
  </table>
  <br><br><br><br><br><br>
  <br><br>

</div>
</div>
</section>
<footer class="text-center text-lg-start fixed-bottom" style="background-color: #605ca8">
  <!-- Copyright -->
  <div class="text-center p-3" style="color:white;">
    Copyright@2021 Nadhila Bazhlina
  </div>
  <!-- Copyright -->
</footer>

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</body>
</html>