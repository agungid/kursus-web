<?php

include 'koneksi.php';

$username = crossite($_POST['username']);
$password = md5(crossite($_POST['password']));

$sql = "SELECT * FROM user WHERE username=? and password=?";
$stmt = mysqli_prepare($kon, $sql);
mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
mysqli_stmt_execute($stmt);

if (!$stmt) {
	die("Statment Problem: ". mysqli_errno($kon));
}

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) > 0) {
	$data = mysqli_fetch_array($result);
	session_start();

	$_SESSION['user_id'] = $data['id'];
	$_SESSION['unit_id'] = $data['unit_id'];
	header('location:home');
} else {
	echo "Username or password salah!! <br/><br/> Anda akan diarahkan secara otomatis. jika tidak bisa klik <a href='/login'>disini</a>";
	?>
	<script language=javascript>
		setTimeout("location.href='login'",1500);
	</script>
	<?php
}

?>