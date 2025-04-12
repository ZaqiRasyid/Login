<?php
session_start();
$user_id=$_SESSION['user_id'];
include 'koneksi.php';
if($_SESSION['status'] != 'login') {
  echo "<script>
  alert('Anda bukan pengembang!');
  location.href='index.php';
  </script>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale="1">
    <title>game browser online</title>
     <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">game browser online</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
        <a href="game_versions.php" class="btn btn-outline-primary m-1">Game Versions</a>
       <a href="logout.php" class="btn btn-outline-danger m-1">Logout</a>
      </div>      
    </div>
  </div>
</nav>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
  <p>&copy; game browser online </p>
</footer>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
