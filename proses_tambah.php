<?php
// koneksi database
require 'koneksi.php';
// menangkap data yang di kirim dari form
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
// ambil data dari tiap elemen dalam form
$nim = htmlspecialchars($_POST["nim"]);
$nama_mhs = htmlspecialchars($_POST["nama_mhs"]);
$tugas = htmlspecialchars($_POST["tugas"]);
$uts = htmlspecialchars($_POST["uts"]);
$uas = htmlspecialchars($_POST["uas"]);
$foto_mhs = $_POST["foto_mhs"];
 // query insert data
$query="INSERT INTO tblnilai VALUES
('', '$nim', '$nama_mhs', '$tugas', '$uts', '$uas', '$foto_mhs')";
mysqli_query($conn, $query);
// cek apakah data berhasil ditambahkan atau tidak
if(mysqli_affected_rows($conn) > 0) {
 echo "<script language='javascript'>
 alert ('Data mahasiswa berhasil ditambahkan');
 document.location='index.php';
 </script>";
 }
 else
 {
 echo "<script language='javascript'>
 alert ('Data mahasiswa gagal ditambahkan');
 </script>";
 echo mysqli_error($conn);
 }
}
?>