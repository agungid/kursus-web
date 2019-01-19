<div class="col-md-6 d-flex align-items-stretch grid-margin">
  <div class="row flex-grow">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tambah Unit</h4>
          <p class="card-description">
            Menambahkan unit baru
          </p>
          <form method="POST" action="/units/proses_add.php">
            <div class="form-group">
              <label for="unit_name">Nama Unit</label>
              <input type="text" name="nama" class="form-control" id="unit_name" placeholder="Masukkan nama unit">
            </div>
            <div class="form-group">
              <label for="keterangan_unit">Keterangan</label>
              <textarea name="ket" class="form-control" id="keterangan_unit"></textarea>
            </div>
            <button type="submit" class="btn btn-success mr-2">Simpan</button>
            <a href="/unit" class="btn btn-light">Batal</a>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>