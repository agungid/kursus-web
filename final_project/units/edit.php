<?php

$id = $_GET['id'];

$sql = "SELECT * FROM unit WHERE id=?";
$stmt = mysqli_prepare($kon, $sql);
mysqli_stmt_bind_param($stmt, 'i', $id);
mysqli_stmt_execute($stmt);
if (!$stmt) {
  die("Statment Problem: ". mysqli_errno($kon));
}

$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) < 1) {
  ?>
  <script>
    window.location.href = "index.php?units";
  </script>
  <?php
}

$data = mysqli_fetch_array($result);

?>

<div class="col-md-6 d-flex align-items-stretch grid-margin">
  <div class="row flex-grow">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Edit Unit</h4>
          <form method="POST" action="/units/proses_add.php">
            <div class="form-group">
              <label for="unit_name">Nama Unit</label>
              <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" id="unit_name" placeholder="Masukkan nama unit">
            </div>
            <div class="form-group">
              <label for="keterangan_unit">Keterangan</label>
              <textarea name="ket" class="form-control" id="keterangan_unit">
                <?php echo $data['ket'] ?>
              </textarea>
            </div>
            <button type="submit" class="btn btn-success mr-2">Simpan</button>
            <a href="index.php?units" class="btn btn-light">Batal</a>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>