<?php

require "koneksi.php";

$id = crossite($_POST['id']);
$name = crossite($_POST['name']);
$phone = crossite($_POST['phone']);
$address = crossite($_POST['address']);

$query = "UPDATE users SET name=?, phone=?, address=? WHERE id=?";

if ($stmt = mysqli_prepare($kon, $query)) {
	mysqli_stmt_bind_param($stmt, 'sisi', $name, $phone, $address, $id);

	if(!mysqli_stmt_execute($stmt)) {
		die(mysqli_stmt_error($stmt));
	}
}

mysqli_close($kon);

header('Location: index.php');
exit();

/*
* i = Integer
* d = Double
* s = String
* b = Blob
*/

?>