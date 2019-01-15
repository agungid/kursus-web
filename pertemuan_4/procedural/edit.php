<?php 
	if (isset($_GET['id']) && !empty($_GET['id'])) {
	 	$id = $_GET['id'];
	} else {
	 	header('location:index.php');
	}

	include 'koneksi.php';

	$sql = "SELECT * FROM users WHERE id=$id";
	$query = mysqli_query($kon, $sql);

	if(mysqli_num_rows($query) < 1) {
		exit(header('location:index.php'));
	}

	$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sample CRUD</title>
	<style type="text/css">
		.container {
			width: 30%;
		}
		.form-group label {
			display:block;
			padding-top: 7px;
		}

		input[type=text], input[type=number], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			resize: vertical;
		}

		input[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
			margin-top: 7px;
		}

		.form-group a {
			background-color: #e74c3c;
			color: white;
			padding: 11px 21px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			float: right;
			margin-top: 7px;
			text-decoration: none;
			margin-left: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>Edit Data</h3>
		<form action="proses_edit.php" method="POST" accept-charset="utf-8">
			<div class="form-group">
				<label>Nama</label>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
				<input type="text" name="name" value="<?php echo $data['name'] ?>">	
			</div>
			<div class="form-group">
				<label>No Handphone</label>
				<input type="number" name="phone" value="<?php echo $data['phone'] ?>">	
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="address">
					<?php echo $data['address'] ?>
				</textarea>	
			</div>

			<div class="form-group">
				<a href="index.php">Batal</a> 	
				<input type="submit" value="Simpan">	
			</div>
		</form>
	</div>
</body>
</html>