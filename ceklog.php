<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['kelas'] = $row['kelas'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['password'] = $row['password'];
		header("Location: home.php");
	} else {
		header("location:login.php?pesan=salah");
	}
}

?>