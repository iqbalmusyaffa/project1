<?php
include 'koneksi.php';
 
// menyimpan data kedalam variabel
$nama            = $_POST['nama'];
$email           = $_POST['email'];
$username        = $_POST['username'];
$subdomain       = $_POST['subdomain'];
$package      = $_POST['package'];
$password        = $_POST['password'];
$konfirmasi       = $_POST['konfirmasi'];
// query untuk insert data mahasiswa
$query="INSERT INTO data_hosting SET  nama='$nama',email='$email',username='$username',subdomain='$subdomain',package='$package',password='$password',konfirmasi='$konfirmasi'";
mysqli_query($koneksi, $query);
 
// echo " Input Data yang anda masukkan sukses berhasil";
// header("location:hasil.php");
 
echo "<script>alert('Data yang anda Input sukses');window.location='hasil.php'</script>";
?>
 