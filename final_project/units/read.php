<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Daftar Unit</h4>
        <a class="btn btn-success" href="index.php?add_unit">Tambah Unit
          <i class="mdi mdi-plus"></i>
        </a>
        
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Unit</th>
                <th>Keterangan</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php

                $sql = "SELECT * FROM unit";
                $stmt = mysqli_prepare($kon, $sql);
                mysqli_stmt_execute($stmt);

                if (!$stmt) {
                  die("Statment Problem: ". mysqli_errno($kon));
                }

                $result = mysqli_stmt_get_result($stmt);
                $no = 1;
                while ($data = mysqli_fetch_array($result)) {
                  echo "<tr>
                        <td>$no</td>
                        <td>$data[nama]</td>
                        <td>$data[ket]</td>
                        <td>
                          <a href='index.php?edit_unit&id=$data[id]' class='btn btn-xs btn-warning'>Edit</a>
                          <a href='#' class='btn btn-xs btn-danger'>Hapus</a>
                        </td>
                      </tr>";
                      $no++;
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>  
</div>