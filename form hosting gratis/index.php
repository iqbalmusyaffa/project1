<DOCTYPE html>
<html>
<head>
    <title>Web Hosting Gratis</title>
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
       <div class="card-header bg-primary text-white">Formulir Hosting Gratis</div>
       <div class="card-body">
           <form action="simpan.php" method="POST">
            <input type="hidden" value="<?php echo $_POST['id'];?>" name="id_hosting"> 
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" input name="nama" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" input name="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" input name="username" class="form-control" id="username">
                </div>
                <label for="subdomain">Sub Domain</label>
                <div class="input-group mb-3">
                    <input type="text" input name="subdomain" class="form-control" placeholder="subdomain" aria-label="subdomain" aria-describedby="basic-addon1">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">.faster-host.site</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="paket">Package Hosting Gratis</label>
                    <select class="form-control"select name="package" id="paket">
                        <option>Package 250mb</option>
                        <option>Package 500mb</option>
                        <option>Package 1 GB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" input name="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="konfirmasi">Konfirmasi Password</label>
                    <input type="password" input name="konfirmasi" class="form-control" id="password">
                </div>
                <button type="submit" onclick= "return confirm('Yakin Data Anda Sudah Benar');" class="btn btn-primary">Daftar</button>
          </form>
        </div>
   </div>
</div>
</body>
</html>