<?php
// koneksi database
require 'koneksi.php';
// menangkap data id yang di kirim dari url
$id = $_GET['id'];

// menghapus data dari database
$query="DELETE FROM tblnilai WHERE id='$id'";
$data=mysqli_query($conn,$query);
// cek apakah data berhasil dihapus atau tidak
if(mysqli_affected_rows($conn) > 0) {
 echo "<script language='javascript'>
 alert ('Data mahasiswa berhasil dihapus');
 document.location='index.php';
 </script>";
 }
 else
 {
 echo "<script language='javascript'>
 alert ('Data mahasiswa gagal dihapus');
 </script>";
 echo mysqli_error($conn);
 }
?>