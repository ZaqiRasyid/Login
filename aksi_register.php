<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$password = md5($_POST['password']);
$last_login = date('Y-m-d');
$create_at = date('Y-m-d');
$delete_at = date('Y-m-d');

$sql = mysqli_query($koneksi,"INSERT INTO user VALUES ('','$nama','$password','$last_login','$create_at','$create_at','')");

if ($sql) {
	echo "<script>
	alert('Pendaftaran akun berhasil');
	location.href='index.php';
	</script>";
}
?>	
