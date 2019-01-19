<?php 
session_start(); 

if (!empty($_SESSION['user_id'])) {

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistem Informasi Akademik</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="assets/vendors/css/vendor.bundle.addons.css">
	<!-- endinject -->
	<!-- plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- endinject -->
	<link rel="shortcut icon" href="assets/images/favicon.png" />
</head>
<body>
	<div class="container-scroller">
		<?php
		include 'navbar.php';
		?>

		<div class="container-fluid page-body-wrapper">
		<?php
		include 'sidebar.php';
		?>
			<div class="main-panel">
			  <div class="content-wrapper">
			    <?php
			        if (isset($_GET['home'])) {
			          include "dashboard.php";
			        } else if(isset($_GET['barang'])) {
			          include "table.php";
			        } else if(isset($_GET['users'])) {
			          include "user/read.php";
			        } else if(isset($_GET['units'])) {
			          include "units/read.php";
			        } else if (isset($_GET['add_unit'])) {
			        	include "units/add.php";
			        } else if (isset($_GET['edit_unit'])) {
			        	include "units/edit.php";
			        }
			    ?>
			  </div>
			  
			  <?php include 'footer.php' ?>
			</div>
		</div>
	</div>

	<!-- plugins:js -->
	<script src="assets/vendors/js/vendor.bundle.base.js"></script>
	<script src="assets/vendors/js/vendor.bundle.addons.js"></script>
	<!-- endinject -->
	<!-- Plugin js for this page-->
	<!-- End plugin js for this page-->
	<!-- inject:js -->
	<script src="assets/js/off-canvas.js"></script>
	<script src="assets/js/misc.js"></script>
	<!-- endinject -->
	<!-- Custom js for this page-->
	<script src="assets/js/dashboard.js"></script>
	<!-- End custom js for this page-->
</body>
</html>

<?php

} else {
	header('location:login');
}
?>