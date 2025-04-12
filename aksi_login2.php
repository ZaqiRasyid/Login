<?php 
session_start();
require 'koneksi.php';
$user=$_POST['nama'];
$pass=md5($_POST['password']);
$sql=mysqli_query($koneksi, "select * from user where nama='$user' and password='$pass'");
$cek=mysqli_num_rows($sql);

	if ($cek>0)//jika ada
	{
		$data=mysqli_fetch_array($sql);
		if ($data['reason_at']=="admin")
		{
		
		$_SESSION['user_id']=$data['user_id'];
		$_SESSION['nama']=$data['nama'];
		$_SESSION['status']='login';
		echo "<script>
	alert('Berhasil login');
	location.href='admin.php';
	</script>";
		
		}
		else if ($data['reason_at']=="pengembang") 
		{
		
		$_SESSION['user_id']=$data['user_id'];
		$_SESSION['nama']=$data['nama'];
		$_SESSION['status']='login';
		echo "<script>
	alert('Berhasil login');
	location.href='pengembang.php';
	</script>";
		
		}
	else
	{
	echo "<script>
	alert('Username atau Password anda salah!');
	location.href='index.php';
	</script>";
	}
}
?>
