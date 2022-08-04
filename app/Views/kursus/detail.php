<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container detail">
    <div class="row">
        <div class="col">
            <h1>DETAIL KURSUS</h1>
            <div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="/img/<?= $jadwal['gambar']; ?>" alt="..." class="gambar">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $jadwal['nama_kursus']; ?></h5>
        <h4>Keterangan :</h4>
        <p class="card-text"><?= $jadwal['ket_kursus']; ?></p>
        <H4>Lama Kursus :</H4>
        <p class="card-text"><?= $jadwal['lama_kursus']; ?></p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

        
      </div>
    </div>
  </div>
</div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>