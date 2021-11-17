<?php
include 'koneksi.php'
?>


<DOCTYPE html>
<html>
<head>
    <title>Data Web Hosting Gratis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
</html>
<script>
</script>
<body>
<div class="container">
    <div class="card">
       <div class="card-header bg-primary text-white">Data Hosting Gratis</div>
       <div class="card-body">
<?php
// menampilkan seluruh isi database
$query ="select * from data_hosting";
$hasil = mysqli_query($koneksi, $query);
 
//$data = mysqli_fetch_row($hasil);
//ambil dan tampilkan 5 baris tabel mahasiswa
// for($i=1;$i<=5;$i++)
// {
//  $data = mysqli_fetch_row($hasil);
//  echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5]";
//  echo "<br>";
// }
 
//ambil dan tampilkan seluruh tabel mahasiswa
// while($data = mysqli_fetch_row($hasil))
// {
// echo "$data[0] $data[1] $data[2] $data[3] $data[4] $data[5]";
// echo "<br>";
// }
 
while($data = mysqli_fetch_array($hasil))
{
   echo '<b><div class="form-group"><label for="nama">Nama: </b></label> '. $_data['nama'] .'</div';
   echo '<br><b><div class="form-group"><label for="email">Email: </b></label>' . $_data['email'] .'</div';
   echo '<br><b><div class="form-group"><label for="username">Username: </b></label>' . $_data['username'] .'</div';
   echo '<br><b><div class="form-group"><label for="subdomain">Subdomain: </b></label>' . $_data['subdomain'] .'<span class="input-text" id="basic-addon2">.faster-host.site</span></div';
   echo '<br><b><div class="form-group"><label for="package">Paket Hosting: </b></label>' . $_data['package'] .'</div';
   echo '<br><b><div class="form-group"><label for="password">Password: </b></label>' . $_data['password'] .'</div';
   echo '<br><b><div class="form-group"><label for="konfirmasi">Konfirmasi Password: </b></label>' . $_data['konfirmasi'] .'</div';

<br><b><div class="form-group"><label for="ip server">IP SERVER :149.28.145.170</b></label>
<br><b><div class="form-group"><label for="ip login">IP LOGIN :www.https://login.faster-host.site</b></label>
<br><b><div class="form-group"><label for="nama server1">NAMESERVER 1 :ns1.faster-host.site</b></label>    
<br><b><div class="form-group"><label for="nama server2">NAMESERVER 2 :ns2.faster-host.site</b></label>
<br><b><div class="form-group"><label for="pelanggaran">Suspended:0</b></label>
<br><b><div class="form-group"><label for="masa aktif">MASA AKTIF:1 tahun</b></label>
<br><button type="submit" class="btn btn-primary">LOGIN CPANEL</button>
<button type="submit"   a href="index.html"class="btn btn-primary">LOGIN WEBMAIL</button>   
<button type="submit"   a href="index.html"class="btn btn-primary">KEMBALI</button> 
}
?>