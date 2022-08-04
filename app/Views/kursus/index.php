<?= $this->extend('layout/template'); ?> 

<?= $this->section('content'); ?>
    <section>
        <div class="container my-5 ajakan">
        <div class="row mx-auto">
            <div class="col narasi1 my-auto">
                <p class="judul">Get Your Dream Job</p>
                <h2>Masih Bingung Untuk Belajar<br>Dari Mana? Pelajari HandBook</h2>
                <p class="isi">Kami menyediakan HandBook sebagai panduan utama <br> untuk Anda mengenal berbagai profesi yang tersedia<br>di bidang design dan teknologi.</p>
                <a href="#" class="btn btn-primary">Daftar Sekarang</a>
            </div>
            <div class="col gambar ">
                <img src="/img/kursus.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
    </section>
    
    
     <section class="section-popular-content" id="popularContent">
            <div class="container detail">
                <div class="section-popular-travel row justify-content-center">
                    <?php foreach($jadwal as $j) : ?>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('img/<?= $j['gambar'] ?>');">
                            <div class="travel-country">KURSUS</div>
                            <div class="travel-location"><?= $j['nama_kursus']; ?></div>
                            <div class="travel-button mt-auto">
                                <a href="jadwal/<?= $j['id']; ?>" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                   <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?= $this->endSection(); ?>

   