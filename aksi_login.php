<?php 
session_start();
require 'koneksi.php';
$user=$_POST['nama'];
$pass=md5($_POST['password']);
$sql=mysqli_query($koneksi, "select * from user where nama='$user' and password='$pass'");
$cek=mysqli_num_rows($sql);

	if ($cek>0)
	{
	$data=mysqli_fetch_array($sql);
		if ($data['reason_at']=="admin")
		{
		$_SESSION['nama']=$data['nama'];
		$_SESSION['user_id']=$data['user_id'];
		$_SESSION['status'] = 'login';
		echo "<script>
		alert('Login berhasil');
		location.href='admin.php';
		</script>";
		}
		else if ($data['reason_at']=="pengembang") 
	{
		$_SESSION['nama']=$data['nama'];
		$_SESSION['user_id']=$data['user_id'];
		$_SESSION['status'] = 'login';
		echo "<script>
		alert('Login berhasil');
		location.href='pengembang.php';
		</script>";
		}
		else if  ($data['reason_at']=="player") 
	{
		$_SESSION['nama']=$data['nama'];
		$_SESSION['user_id']=$data['user_id'];
		$_SESSION['status'] = 'login';
		echo "<script>
		alert('Login berhasil');
		location.href='user.php';
		</script>";
	}
	else
	{   echo "<script>
	alert('Username atau Password anda salah!');
	location.href='index.php';
	</script>";
	}
}
?>
