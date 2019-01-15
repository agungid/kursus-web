<?php

include 'koneksi.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
 	$id = $_GET['id'];
} else {
 	header('location:index.php');
}

$query = "DELETE FROM users WHERE id=?";

if ($stmt = mysqli_prepare($kon, $query)) {
	mysqli_stmt_bind_param($stmt, 'i', $id);

	if(!mysqli_stmt_execute($stmt)) {
		die(mysqli_stmt_error($stmt));
	}
}

mysqli_close($kon);

header('Location: index.php');
exit();