<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Kursus</h2>
            <form action="/update/<?= $jadwal['id']; ?>" method="post">
                <?= csrf_field(); ?>
  <div class="form-group row">
    <label for="nama_kursus" class="col-sm-2 col-form-label">Nama Kursus</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama_kursus" name="nama_kursus" autofocus>
    </div>
  </div>
  <div class="form-group row">
    <label for="ket_kursus" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="ket_kursus" name="ket_kursus">
    </div>
  </div>
  <div class="form-group row">
    <label for="lama_kursus" class="col-sm-2 col-form-label">Lama Kursus</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lama_kursus" name="lama_kursus">
    </div>
  </div>
  <div class="form-group row">
    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="gambar" name="gambar">
    </div>
  </div>
 
 
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Update Data</button>
    </div>
  </div>
</form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>