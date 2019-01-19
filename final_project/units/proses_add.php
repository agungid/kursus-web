<?php 

include '../koneksi.php';

$nama = crossite($_POST['nama']);
$ket = crossite($_POST['ket']);

$sql = "INSERT INTO unit (nama, ket) VALUES (?, ?)";
$stmt = mysqli_prepare($kon, $sql);
mysqli_stmt_bind_param($stmt, 'ss', $nama, $ket);
mysqli_stmt_execute($stmt);

if (!$stmt) {
	die("Statment Problem: ". mysqli_errno($kon));
}

header('location:../index.php?units');

?>