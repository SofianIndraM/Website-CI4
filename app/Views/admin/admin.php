<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php $i=1; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Pengaturan Jadwal Kursus</h1>
            <a href="/create" class="btn btn-primary my-3">Tambah Data Kursus</a>
            <?php if(session()->getFlashdata('pesan')): ?>
              <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
              </div>
            <?php endif; ?>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Jenis Kursus</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Lama Kursus</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($jadwal as $j) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td>
        <img src="img/<?= $j['gambar']; ?>" alt="" style="width: 70px;">
      </td>
      <td><?= $j['nama_kursus']; ?></td>
      <td><?= $j['ket_kursus']; ?></td>
      <td><?= $j['lama_kursus']; ?></td>
      <td>
        <a href="/admin/<?= $j['id']; ?>" class="btn btn-success">Detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>