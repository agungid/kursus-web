<?php

require "koneksi.php";

$name = crossite($_POST['name']);
$phone = crossite($_POST['phone']);
$address = crossite($_POST['address']);

// Cross site scripting (see in file koneksi.php in function crosssite)
// SQL Ijection (prepared statment)

$query = "INSERT INTO users (name, phone, address) VALUES (?, ?, ?)";

if ($stmt = mysqli_prepare($kon, $query)) {
	mysqli_stmt_bind_param($stmt, 'sis', $name, $phone, $address);

	if(!mysqli_stmt_execute($stmt)) {
		die(mysqli_stmt_error($stmt));
	}
}

mysqli_close($kon);

header('Location: index.php');
exit();

?>