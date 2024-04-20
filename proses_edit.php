<?php
 // koneksi database
require 'koneksi.php';
 // menangkap data yang di kirim dari form
 // cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])) {
// ambil data dari tiap elemen dalam form
$id = $_POST["id"];
$nim = htmlspecialchars($_POST["nim"]);
$nama_mhs = htmlspecialchars($_POST["nama_mhs"]);
$tugas = htmlspecialchars($_POST["tugas"]);
$uts = htmlspecialchars($_POST["uts"]);
$uas = htmlspecialchars($_POST["uas"]);
$foto_mhs = $_POST["foto_mhs"];
 // query update data
$query="UPDATE tblnilai SET
nim='$nim', nama_mhs='$nama_mhs', tugas='$tugas', uts='$uts', uas='$uas', foto_mhs='$foto_mhs' where id='$id'";
mysqli_query($conn, $query);
 // cek apakah data berhasil diedit atau tidak
if(mysqli_affected_rows($conn) > 0) {
 echo "<script language='javascript'>
 alert ('Data mahasiswa berhasil diedit');
 document.location='index.php';
 </script>";
 }
 Else {
 echo "<script language='javascript'>
 alert ('Data mahasiswa gagal diedit');
 </script>";
 echo mysqli_error($conn);
 } }
?>