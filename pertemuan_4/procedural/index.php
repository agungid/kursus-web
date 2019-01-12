<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sample CRUD</title>
	<style type="text/css" media="screen">
		table, tr, th, td {
			border: 1px solid blue;
		}

		table tr th, table tr td {
			padding: 5px;
		}

		table caption {
			font-size: 17px;
			font-weight: bold;
			padding-bottom: 5px;
		}

		table caption a {
			text-decoration: none;
			color: blue;
		}

		table caption a:hover {
			color: #efa7ff;
		}
	</style>
</head>
<body>
	<div class="container">
		<table>
			<caption>Daftar User | <a href="tambah.php">Tambah Data</a></caption>
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Phone</th>
					<th>Address</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM users";
				$query = mysqli_query($kon, $sql);
				if(mysqli_num_rows($query) > 0) {
					$no = 1;
					while ($data = mysqli_fetch_assoc($query)) {
						echo "<tr>
							<td>$no</td>
							<td>$data[name]</td>
							<td>$data[phone]</td>
							<td>$data[address]</td>
						</tr>";

						$no++;
					}
				} else {
					echo "<tr>
							<td colspan=\"4\">Data tidak ditemukan</td>
						</tr>";
				}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>


