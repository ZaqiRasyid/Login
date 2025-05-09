<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Website Game Online</title>
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  </head>
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Website Game Online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">

      </div>
       
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body bg-light">
          <div class="text-center">
            <h5>Daftar Akun Baru</h5>
          </div>
          <form action="aksi_register.php" method="POST">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
            <div class="d-grid mt-2">
              <button class="btn btn-primary" type="submit" name="kirim">DAFTAR</button>
            </div>
          </form>
          <hr>
          <p>Sudah punya akun? <a href="index.php">Login disini!</a></p>
        </div>
      </div>
    </div>
  </div>
</div>              

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
  <p>&copy; game browser online </p>
</footer>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
