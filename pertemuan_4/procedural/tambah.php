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
	</style>
</head>
<body>
	<div class="container">
		<form action="proses_tambah.php" method="POST" accept-charset="utf-8">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="name">	
			</div>
			<div class="form-group">
				<label>No Handphone</label>
				<input type="number" name="phone">	
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<textarea name="address"></textarea>	
			</div>

			<div class="form-group">
				<input type="submit" value="Simpan">	
			</div>
		</form>
	</div>
</body>
</html>