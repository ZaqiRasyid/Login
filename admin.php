<?php
session_start();
$user_id=$_SESSION['user_id'];
include 'koneksi.php';
if($_SESSION['status'] != 'login') {
  echo "<script>
  alert('Anda bukan admin!');
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
       <a href="admin.php" class="btn btn-outline-primary m-1">Admin</a>
       <a href="logout.php" class="btn btn-outline-danger m-1">Logout</a>
      </div>      
    </div>
  </div>
</nav>


<div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card mt-2">
          <div class="card-header">Tambah Admin</div>
          <div class="card-body">
            <form action="proses_admin.php" method="POST">
              <label class="form-label">Nama Admin</label>
              <input type="text" name="nama" class="form-control" required>
              <label class="form-label">Password</label>
              <input type="text"name="password" class="form-control" required>
              <select class="form-control" name="reason_at">
                <option value="admin">Admin</option>
                </select>
              <button class="btn btn-primary mt-2" type="submit" name="tambah">Tambah Data</button>
            </form>
          </div>
        </div>
      </div>
      
      <div class="col-md-8">
        <div class="card mt-2">
          <div class="card-header">Data Admin</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Password</th>
                  <th>Last Login</th>
                  <th>Create At</th>
                  <th>Delete At</th>
                  <th>Reason At</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $user_id =$_SESSION['user_id'];
                $sql = mysqli_query($koneksi,"SELECT * FROM user");
                while($data = mysqli_fetch_array($sql)){
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $data['nama'] ?></td>
                  <td><?php echo $data['password'] ?></td>
                  <td><?php echo $data['last_login'] ?></td>
                  <td><?php echo $data['create_at'] ?></td>
                  <td><?php echo $data['delete_at'] ?></td>
                  <td><?php echo $data['reason_at'] ?></td>
                  <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?php echo $data['user_id'] ?>">
                      Edit
                    </button>
<div class="modal fade" id="edit<?php echo $data['user_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="update_admin.php" method="POST"> 
          <input type="hidden" name="user_id" value="<?php echo $data['user_id'] ?>">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" required>
        <label class="form-label">Password</label>
        <textarea class="form-control" name="password" required><?php echo $data['password'] ?></textarea>
      </div>
      <div class="modal-footer">
        <button type="submit" name="edit" class="btn btn-primary">Edit Data</button>
        </form>
      </div>
    </div>
  </div>
  
</div>  
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['user_id'] ?>">
                      Hapus
                    </button>
<div class="modal fade" id="hapus<?php echo $data['user_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="delete_admin.php" method="POST"> 
          <input type="hidden" name="user_id" value="<?php echo $data['user_id'] ?>">Apakah anda yakin akan menghapus data <strong><?php echo $data['nama'] ?> </strong> ?
        
      </div>
      <div class="modal-footer">
        <button type="submit" name="hapus" class="btn btn-primary">Hapus Data</button>
        </form>
        </div>
    </div>
  </div>
  
</div>  

</td>
</tr>
<?php } ?>
</tbody>
</table>
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
