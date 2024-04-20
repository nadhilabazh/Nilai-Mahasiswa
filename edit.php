<!DOCTYPE html>
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
    <div class="page-wrapper p-t-10 p-b-5">
      
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <style>
      section{
        min-height: 420px;
      }

      html{
scroll-behavior: smooth;
}
    </style>
<title>Data Nilai Mahasiswa</title>
</head>
    <body background="bgg.jpg">
    </div>
</div>
</nav>
<body>
<br><br>
    <div class="container">
    <div class="row center">    
    <div class="card mt-5 mb-5" style="width: 70rem;">
      <div class="card-header text-center" text-white style="background-color: #bd8cbf ;">
        <h2>Edit Data Mahasiswa</h2></div>

    <ul class="list-group list-group-flush">
    <form action="proses_edit.php" method="post">
    

<?php
require 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($conn,"select * from tblnilai where id='$id'");
while($d = mysqli_fetch_assoc($data)){
?>
<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
 <div class="container">
          <div class="col mt-3 mb-7">
<li class="list-group-item">
    <label for="nim"><h5> Nim </h5></label>
     <div class="col mt-2 mb-2">
     <div class="row text-center">
    <input class="form-control" type="text" name="nim" id="nim" value="<?php echo $d['nim']; ?>" required></div>
</li>

<li class="list-group-item">
    <label for="nama"> <h5>Nama_Mhs</h5> </label>
    <div class="col mt-2 mb-2">
    <div class="row text-center">
    <input class="form-control" type="text" name="nama_mhs" id="nama_mhs" value="<?php echo $d['nama_mhs']; ?>" required></div>
</li>

<li class="list-group-item">
    <label for="tugas"><h5> Tugas </h5></label></td>
    <div class="col mt-2 mb-2">
    <div class="row text-center">
    <input class="form-control" type="text" name="tugas" id="tugas" value="<?php echo $d['tugas']; ?>" required ></div>
</li>

<li class="list-group-item">
    <label for="uts"><h5> UTS </h5></label></td>
    <div class="col mt-2 mb-2">
    <div class="row text-center">
    <input class="form-control" type="text" name="uts" id="uts" value="<?php echo $d['uts']; ?>" required ></div>
</li>

<li class="list-group-item">
    <label for="uas"><h5> UAS</h5></label></td>
    <div class="col mt-2 mb-2">
    <div class="row text-center">
    <input class="form-control" type="text" name="uas" id="uas" value="<?php echo $d['uas']; ?>" required ></div>
</li>

<li class="list-group-item">
    <label for="nama"><h5> Foto </h5></label></td>
    <div class="col mt-2 mb-2">
    <div class="row text-center">
        <div class="col-md-8">
                                                        <div class="form-group has-icon-left">
                                                            <div class="position-relative">
                                                                <div class="col-md-6 mb-1">
                                                                    <fieldset>
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group mb-3">
                                                                                <label class="input-group-text" for="inputGroupFile01"><i class="bi bi-upload"></i></label>
                                                                                <input type="file" class="form-control" id="foto_mhs" name="foto_mhs" accept="images/*" required>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
</li>   

<div class="col text-right mt-2 mb-2">
    <button type="submit" name="submit" class="btn btn-danger">Edit Data</button>
    <a href="index.php" type="submit" name="submit" class="btn btn-dark">Kembali</a>
</div>
</form>
<?php
}
?>
</div>
</li>
</div>
</li>
</div>
</li>
</div>
</li>
</div>
</section>

      </div>
    </div>
  </div>
</footer>
</body>
</html>